<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about
{
    public $school_name = "";
    public $slogan = "";
    public $address = "";
    public $vision = "";
    public $mission = "";
    public $achievements = "";
    public $about = "";
    public $phone1 = "";
    public $phone2 = "";
}
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("logged_in") && $this->session->userdata("level") != "1") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $p["active"] = "home";
        $p["title"] = "Admin Dashboard";
        $p["products"] = $this->db->get("products")->result();
        $p["services"] = $this->db->get("services")->result();
        $this->load->view('admin/index', $p);
    }
    public function about()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->update_about();
        }
        $p['active'] = "about";
        $p['sub_active'] = "about";
        $p['title'] = "About";
        $abt = $this->db->get("about",1)->row();
        if ($abt !== null) {
            $p["about"] = $abt;
        }else {
            $p['about'] = new about;
        }
        $this->load->view("admin/about", $p);
    }
    private function update_about()
    {
        $abt = $this->db->get("about", 1)->row();
        $data = array(
            "school_name" => trim($this->input->post('school_name')),
            "slogan" => trim($this->input->post('slogan')),
            "address" => trim($this->input->post('address')),
            "vision" => trim($this->input->post('vision')),
            "mission" => trim($this->input->post('mission')),
            "achievements" => trim($this->input->post('achievements')),
            "about" => trim($this->input->post('about')),
            "phone1" => trim($this->input->post('phone1')),
            "phone2" => trim($this->input->post('phone2'))
        );
        if ($abt !== null) {
            $this->db->where("id", $abt->id);
            $this->db->set($data);
            if ($this->db->update("about")) {
                $this->session->set_flashdata('success_msg', 'About us successfully updated.');
                redirect("admin/about");
            } else {
                $this->session->set_flashdata('error_msg', "Error Updating About us");
                redirect("admin/about");
            };
        } else {
            if ($this->db->insert("about", $data)) {
                $this->session->set_flashdata('success_msg', 'About us successfully added.');
                redirect("admin/about");
            } else {
                $this->session->set_flashdata('error_msg', "Error adding About us");
                redirect("admin/about");
            };
        }
    }
    public function services()
    {
        $p["active"] = "services";
        $p["sub_active"] = "all";
        $p["title"] = "All Services";
        $p["services"] = $this->db->get("services")->result();
        $this->load->view('admin/services', $p);
    }
    public function products()
    {
        $p["active"] = "products";
        $p["sub_active"] = "all";
        $p["title"] = "All Products";
        $p["products"] = $this->db->get("products")->result();
        $this->load->view('admin/products', $p);
    }
    public function add_product()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->add_product_fn();
        }
        $p["active"] = "products";
        $p["sub_active"] = "add";
        $p["title"] = "Add Product";
        $this->load->view('admin/add_product', $p);
    }
    private function add_product_fn()
    {
        $data['name'] = trim($this->input->post('name'));
        $data['details'] = trim($this->input->post('details'));
        if ($this->db->insert("products", $data)) {
            $this->session->set_flashdata('success_msg', "Product added successfully");
            return redirect("admin/products");
        } else {
            $this->session->set_flashdata('error_msg', "Product not added contact admin if error persists");
            return redirect("admin/add_product");
        }
    }
    public function edit_product($id)
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->edit_product_fn($id);
        }
        $this->db->where("id", $id);
        $news = $p["news"] = $this->db->get("news", 1)->row();
        if ($news == null) {
            $this->session->set_flashdata('error_msg', "News not found");
            return redirect("admin/news");
        }
        $p["active"] = "news";
        $p["title"] = "Edit News";
        $this->load->view('admin/edit-news', $p);
    }
    private function edit_product_fn($id)
    {
        $data = array();
        $data['title'] = trim($this->input->post('title'));
        $data['details'] = trim($this->input->post('details'));
        $this->db->where("id", $id);
        $this->db->set($data);
        if ($this->db->update("news", $data)) {
            $this->session->set_flashdata('success_msg', "News updated successfully");
            return redirect("admin/news");
        } else {
            $this->session->set_flashdata('error_msg', "News not updated contact admin if error persists");
            return redirect("admin/edit_news");
        }
    }
    public function remove_news($id)
    {
        $this->db->where("id", $id);
        $news = $this->db->get("news", 1)->row();
        if ($news == null) {
            $this->session->set_flashdata('error_msg', "News not found");
            return redirect("admin/news");
        } else {
            $this->db->where("id", $id);
            $this->db->delete("news");
            $this->session->set_flashdata('success_msg', "News deleted successfully");
            return redirect("admin/news");
        }
    }
    public function gallery()
    {
        $p["active"] = "gallery";
        $p["title"] = "Gallery";
        $p["gallery"] = $this->db->get("gallery")->result();
        $p["gallery_tags"] = $this->db->get("gallery_tags")->result();
        $this->load->view('admin/gallery', $p);
    }
    public function gallery_tag()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $data = array();
            $id = trim($this->input->post('id'));
            $data['tag_class'] = trim($this->input->post('tag_class'));
            $data['tag_name'] = $tn = trim($this->input->post('tag_name'));
            $action = trim($this->input->post('action'));
            // var_dump($action);exit;
            if ($action == "edit") {
                $this->db->where("id", $id);
                $this->db->set($data);
                if ($this->db->update("gallery_tags")) {
                    $this->session->set_flashdata('success_msg', 'Event tag successfully updated.');
                    redirect("admin/gallery");
                } else {
                    $this->session->set_flashdata('error_msg', "Error Updating Event Tag");
                    redirect("admin/gallery");
                };
            } else {
                $data['tag_class'] = preg_replace("/[^\w-]/", "-", strtolower($tn));
                if ($this->db->insert("gallery_tags", $data)) {
                    $this->session->set_flashdata('success_msg', 'Event tag successfully added.');
                    redirect("admin/gallery");
                } else {
                    $this->session->set_flashdata('error_msg', "Error adding Event Tag");
                    redirect("admin/gallery");
                };
            }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function add_img()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->new_img();
        }
        $p["active"] = "gallery";
        $p["title"] = "Add Gallery Image";
        $this->load->view('admin/add-img', $p);
    }
    public function edit_img($id)
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->update_img($id);
        }
        $this->db->where("id", $id);
        $img = $p["img"] = $this->db->get("gallery", 1)->row();
        if ($img == null) {
            $this->session->set_flashdata('error_msg', "Image not found");
            return redirect("admin/gallery");
        }
        // var_dump($img->tags);
        // exit;
        $p["active"] = "gallery";
        $p["title"] = "Edit Gallery Image";
        $this->load->view('admin/edit-img', $p);
    }
    public function remove_img($id)
    {
        $this->db->where("id", $id);
        $img = $this->db->get("gallery", 1)->row();
        if ($img == null) {
            $this->session->set_flashdata('error_msg', "Image not found");
            return redirect("admin/gallery");
        } else {
            $this->db->where("id", $id);
            $this->db->delete("gallery");
            $this->session->set_flashdata('success_msg', "Image deleted successfully");
            return redirect("admin/gallery");
        }
    }
    public function remove_tag($id)
    {
        $this->db->where("id", $id);
        $tag = $this->db->get("gallery_tags", 1)->row();
        if ($tag == null) {
            $this->session->set_flashdata('error_msg', "Tag not found");
            return redirect("admin/gallery");
        } else {
            $this->db->where("id", $id);
            $this->db->delete("gallery_tags");
            $this->session->set_flashdata('success_msg', "Tag deleted successfully");
            return redirect("admin/gallery");
        }
    }
    private function new_img()
    {
        $upload_data = array();
        $data['tags'] = implode(",", $this->input->post('tags'));
        // var_dump($data['tags']);
        // exit;
        if (isset($_FILES) && $_FILES['image']['name'] != '') :
            $imagePrefix = time();
            $imagename = $imagePrefix . $_FILES['image']['name'];
            $path = './sitefiles/gallery/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['file_name'] = $imagename;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect("admin/add_img");
            } else {
                $upload_data = $this->upload->data();
            }
        endif;
        $data['image'] = $upload_data['file_name'];
        if ($this->db->insert("gallery", $data)) {
            $this->session->set_flashdata('success_msg', 'Image successfully added.');
            redirect("admin/gallery");
        } else {
            $this->session->set_flashdata('error_msg', "Error Saving Image");
            redirect("admin/add_img");
        };
    }
    private function update_img($id)
    {
        $upload_data = array();
        $data['tags'] = implode(",", $this->input->post('tags'));
        // var_dump($data['tags']);
        // exit;
        if (isset($_FILES) && $_FILES['image']['name'] != '') :
            $imagePrefix = time();
            $imagename = $imagePrefix . $_FILES['image']['name'];
            $path = './sitefiles/gallery/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['file_name'] = $imagename;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect("admin/edit_img");
            } else {
                $upload_data = $this->upload->data();
            }
        endif;
        if (count($upload_data) > 0) :
            $data['image'] = ($upload_data['file_name']);
        endif;
        $this->db->where("id", $id);
        $this->db->set($data);
        if ($this->db->update("gallery")) {
            $this->session->set_flashdata('success_msg', 'Image successfully updated.');
            redirect("admin/gallery");
        } else {
            $this->session->set_flashdata('error_msg', "Error updating image");
            redirect("admin/edit_img");
        };
    }
    public function slides()
    {
        $p["active"] = "slides";
        $p["title"] = "Homepage Slides";
        $p["slides"] = $this->db->get("slides")->result();
        $this->load->view('admin/slides', $p);
    }
    public function add_slide()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->new_slide();
        }
        $p["active"] = "slides";
        $p["title"] = "Add Slide";
        $this->load->view('admin/add-slide', $p);
    }
    public function edit_slide($id)
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->update_slide($id);
        }
        $this->db->where("id", $id);
        $slide = $p["slide"] = $this->db->get("slides", 1)->row();
        if ($slide == null) {
            $this->session->set_flashdata('error_msg', "slide not found");
            return redirect("admin/slides");
        }
        $p["active"] = "slides";
        $p["title"] = "Edit Slide";
        $this->load->view('admin/edit-slide', $p);
    }
    public function remove_slide($id)
    {
        $this->db->where("id", $id);
        $slide = $this->db->get("slides", 1)->row();
        if ($slide == null) {
            $this->session->set_flashdata('error_msg', "Slide not found");
            return redirect("admin/slides");
        } else {
            $this->db->where("id", $id);
            $this->db->delete("slides");
            $this->session->set_flashdata('success_msg', "Slide deleted successfully");
            return redirect("admin/slides");
        }
    }
    private function new_slide()
    {
        $upload_data = array();
        if (isset($_FILES) && $_FILES['image']['name'] != '') :
            $imagePrefix = time();
            $imagename = $imagePrefix . $_FILES['image']['name'];
            $path = './sitefiles/slides/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_width'] = 1024;
            $config['max_height'] = 1024;
            $config['file_name'] = $imagename;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect("admin/add_slide");
            } else {
                $upload_data = $this->upload->data();
            }
        endif;
        $data['headline'] = trim($this->input->post('headline'));
        $data['body'] = trim($this->input->post('body'));
        $data['image'] = $upload_data['file_name'];
        if ($this->db->insert("slides", $data)) {
            $this->session->set_flashdata('success_msg', 'Slide successfully added.');
            redirect("admin/slides");
        } else {
            $this->session->set_flashdata('error_msg', "Error Saving Slide");
            redirect("admin/add_slide");
        };
    }
    private function update_slide($id)
    {
        $upload_data = array();
        if (isset($_FILES) && $_FILES['image']['name'] != '') :
            $imagePrefix = time();
            $imagename = $imagePrefix . $_FILES['image']['name'];
            $path = './sitefiles/slides/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_width'] = 1024;
            $config['max_height'] = 1024;
            $config['file_name'] = $imagename;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect("admin/edit_slide");
            } else {
                $upload_data = $this->upload->data();
            }
        endif;
        $data['headline'] = trim($this->input->post('headline'));
        $data['body'] = trim($this->input->post('body'));
        if (count($upload_data) > 0) :
            $data['image'] = ($upload_data['file_name']);
        endif;
        $this->db->where("id", $id);
        $this->db->set($data);
        if ($this->db->update("slides")) {
            $this->session->set_flashdata('success_msg', 'Slide successfully updated.');
            redirect("admin/slides");
        } else {
            $this->session->set_flashdata('error_msg', "Error updating slide");
            redirect("admin/edit_slide");
        };
    }
}
