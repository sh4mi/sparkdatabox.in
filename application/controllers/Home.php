<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->library('session');
         
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
    
    }

    public function index() {
        $page_data['page_name'] = "home";
        $page_data['page_title'] = 'home';
       
        $this->load->view('frontend/index', $page_data);
    }

    public function course()
    {
         $page_data['page_name'] = "course";
        $page_data['page_title'] = 'home';
       
        $this->load->view('frontend/index', $page_data);
    }

}
?>