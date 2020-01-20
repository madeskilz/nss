<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $p['title'] = "Home";
        $p["active"] = "home";
        $this->load->view("home/index", $p);
    }

    public function about()
    {
        $p['title'] = "About Us";
        $p["active"] = "about";
        $this->load->view("home/about", $p);
    }

    public function support()
    {
        $p['title'] = "Support";
        $p["active"] = "support";
        $this->load->view("home/support", $p);
    }
}
