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

        if (!$this->session->userdata('country')) {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if(isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
           
            $ip =explode(',',$ipaddress);
            
            $country = $this->crud_model->get_country($ip[0]);
            
            if($country->num_rows() > 0 )
            {   
               $country_detail = $country->row_array();
               $user_country =  $country_detail['country'];
               $this->session->set_userdata('country',$user_country);
               $this->session->set_userdata('ip',$ip[0]);
            }
            else
            {
                $url  = "http://api.ipstack.com/".$ip[0]."?access_key=d4ef1080560d4fa8a77edec53cc64e3a";
                $json       = file_get_contents($url);
                $details    = json_decode($json);
                
                $this->crud_model->update_country($ip[0],$details->country_code);
                $this->session->set_userdata('country',$details->country_code);
                $this->session->set_userdata('ip',$ip[0]);
            }
            
        }
        
    
    }

    public function index() {
        $page_data['page_name'] = "home";
        $page_data['page_title'] = 'home';
       
        $this->load->view('frontend/index', $page_data);
    }

    public function hide_inquiry_popup_forever()
    {   
        $ip=$this->session->userdata('ip');
        $this->crud_model->hide_inquiry_popup_forever($ip);
    }

     public function make_course_cookie()
    {   
        $this->session->set_userdata('course_popup_cookie','1');
    }

    public function course_page()
    {
        $page_data['page_name'] = "course";
        $page_data['page_title'] = 'home';
       
        $this->load->view('frontend/index', $page_data);
    }

    public function course($slug='')
    {   
        $page_data['course'] = $this->crud_model->get_course_by_slug($slug)->row_array();
        $page_data['page_name'] = "course_page";
        $page_data['page_title'] = 'home';
       
        $this->load->view('frontend/index', $page_data);
    }

    public function get_tab_content()
    {
        $category_id = $this->input->post('category_id');
        $page_data['category_id'] = $category_id;
        $this->load->view('frontend/get_tab_content', $page_data);
    }

    public function contact_popup()
    {
        $this->crud_model->contact_popup();
    }

}
?>