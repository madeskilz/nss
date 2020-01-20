<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        redirect("auth/login");
    }
    public function login()
    {
        if ($this->uri->uri_string() == 'auth/login')
            show_404();
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->auth();
        }
        if ($this->session->userdata("logged_in")) {
            redirect(base_url("admin"));
        }
        $p["title"] = "Login";
        $p["active"] = "login";
        $this->load->view('home/login', $p);
    }
    private function auth()
    {
        $email    = trim($this->input->post('login'));
        $password = md5(trim($this->input->post('password')));
        $validate = $this->user->validate($email, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $data['logged_in'] = TRUE;
            if ($data['active'] === '1') {
                $this->session->set_userdata($data);
                if ($data['level'] === '1') {
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('msg', 'Insufficient Permission');
                    redirect("logout");
                }
            } else {
                $this->session->set_flashdata('msg', 'Account Suspended');
                redirect("login");
            }
        } else {
            $this->session->set_flashdata('error_msg', 'Username or Password is Wrong');
            redirect('login');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
