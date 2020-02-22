<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Admin extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('crud_model');
        $this->isLoggedIn();   
    }
    
     public function index()
    {
        $this->isLoggedIn();
    }

    public function categories($param1='',$category_id='')
    {   

        if($param1 == 'add')
        {
            $data['msg'] = "hello";
            $this->global['pageTitle'] = 'Categories';
            $this->loadViews("category_add", $this->global, $data, NULL);
        }
        else if($param1 == 'edit')
        {
            $data['category_id'] = $category_id;
            $this->global['pageTitle'] = 'Categories';
            $this->loadViews("category_edit", $this->global, $data, NULL);
        }
        else
        {
            $data['categories'] = $this->crud_model->get_category()->result_array();
        $this->global['pageTitle'] = 'Categories';
        $this->loadViews("categories", $this->global, $data, NULL);
        }

       
        
    }



    public function categories_form($param1='',$category_id='')
    {   

        if($param1 == 'add')
        {
            $this->crud_model->add_category();
            redirect(site_url('admin/categories'), 'refresh');
           
        }
        else if($param1 == 'edit')
        {
            $this->crud_model->update_category($category_id);
            redirect(site_url('admin/categories/edit/'.$category_id), 'refresh');
           
        }

      
    }

    public function courses($param1='',$course_id='')
    {   

        if($param1 == 'add')
        {
            $data['msg'] = "hello";
            $this->global['pageTitle'] = 'Courses';
            $this->loadViews("course_add", $this->global, $data, NULL);
        }
        else if($param1 == 'edit')
        {
            $data['course_id'] = $course_id;
            $this->global['pageTitle'] = 'Courses';
            $this->loadViews("course_edit", $this->global, $data, NULL);
        }
        else
        {
            $data['courses'] = $this->crud_model->get_course()->result_array();
            $this->global['pageTitle'] = 'Courses';
            $this->loadViews("courses", $this->global, $data, NULL);
        }

    }

    public function home()
    {
        
            $this->global['pageTitle'] = 'Home Page';
            $this->loadViews("home", $this->global, NULL, NULL);
    }

    // public function course_page()
    // {
    //     $this->global['pageTitle'] = 'Course Page';
    //     $this->loadViews("course_page", $this->global, NULL, NULL);
    // }

    public function common_items()
    {
        
            $this->global['pageTitle'] = 'Page';
            $this->loadViews("common_items", $this->global, NULL, NULL);
    }

    public function add_testimonial()
    {
        $this->crud_model->add_testimonial();
        redirect(site_url('admin/common_items'), 'refresh');
    }

    public function add_rps()
    {
        $this->crud_model->add_rps();
        redirect(site_url('admin/common_items'), 'refresh');
    }

    public function edit_home()
    {
        $this->crud_model->page_seo(1);
        redirect(site_url('admin/home'), 'refresh');

    }
    public function edit_home_banner()
    {
        $this->crud_model->edit_home_banner();
        redirect(site_url('admin/home'), 'refresh');
    }

    public function edit_modal()
    {
        $type = $this->input->post("type");
        $data['id'] = $this->input->post("id");
        $data['course_id'] = $this->input->post("course_id");
        $data['heading'] = $this->input->post('heading');

       
        $this->load->view($type,$data);
    }

    public function courses_form($param1='',$course_id='')
    {   

        if($param1 == 'add')
        {
            $rcourse_id = $this->crud_model->add_course();
            redirect(site_url('admin/courses/edit/'.$rcourse_id), 'refresh');
           
        }
        else if($param1 == 'update')
        {
            $this->crud_model->update_course($course_id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        }
        else if($param1 == 'add_section')
        {
            $this->crud_model->add_section($course_id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }

      
    }

    public function course_seo($course_id)
    {
        $this->crud_model->course_seo($course_id);
        redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');

    }

    public function section_form($param1='',$section_id='')
    {   

        if($param1 == 'update')
        {
            
            $rcourse_id = $this->crud_model->update_section($section_id);
            redirect(site_url('admin/courses/edit/'.$rcourse_id), 'refresh');
           
        }
    }

    public function widget_form($type='',$id='',$course_id)
    {   

        if($type == 'text')
        {
            $this->crud_model->update_widget_text($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'question')
        {
            $this->crud_model->update_widget_question($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'feature')
        {
            $this->crud_model->update_widget_feature($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'image')
        {
            $this->crud_model->update_widget_image($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'review')
        {
            $this->crud_model->update_widget_review($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'list')
        {
            $this->crud_model->update_widget_list($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($type == 'list_item')
        {
            $this->crud_model->update_widget_list_item($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
    }

    public function delete_widget($param1='',$id='',$course_id='')
    {   

        if($param1 == 'text')
        {
            $this->crud_model->delete_widget_text($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        }
        else if($param1 == 'question')
        {
            $this->crud_model->delete_widget_question($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        } 
        else if($param1 == 'question_single')
        {
            $this->crud_model->delete_widget_question_single($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        } 
        else if($param1 == 'feature')
        {
            $this->crud_model->delete_widget_feature($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        }
        else if($param1 == 'image')
        {
            $this->crud_model->delete_widget_image($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        } 
        else if($param1 == 'review')
        {
            $this->crud_model->delete_widget_review($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        }
        else if($param1 == 'list')
        {
            $this->crud_model->delete_widget_list($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        } 
        else if($param1 == 'list_item')
        {
            $this->crud_model->delete_widget_list_item($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
           
        } 
    }



     public function delete($param1='',$id='')
    {   

        if($param1 == 'category')
        {
            $this->crud_model->delete_category($id);
            redirect(site_url('admin/categories'), 'refresh');
           
        }
        else if($param1 == 'course')
        {
            $this->crud_model->delete_course($id);
            redirect(site_url('admin/courses'), 'refresh');
           
        }
        else if($param1 == 'edit')
        {
            $this->crud_model->update_category($category_id);
            redirect(site_url('admin/categories/edit/'.$category_id), 'refresh');
        }
        else if($param1 == 'section')
        {
            $course_id = $this->crud_model->delete_section($id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
        else if($param1 == 'testimonial')
        {
           $this->crud_model->delete_testimonial($id);
            redirect(site_url('admin/common_items'), 'refresh');   
        }

        else if($param1 == 'rps')
        {
           $this->crud_model->delete_rps($id);
            redirect(site_url('admin/common_items'), 'refresh');   
        }
        else if($param1 == 'common_feature')
        {
           $this->crud_model->delete_key_feature($id);
            redirect(site_url('admin/common_items'), 'refresh');   
        }

    }

     


    public function get_all_media_ajax()
    {

        //$handle = opendir(dirname(realpath(__FILE__)).'../assets/frontend/images/');
        $handle = opendir('assets/frontend/images/');
        while($file = readdir($handle))
        {
          if($file !== '.' && $file !== '..')
          {
            $filepath = base_url('assets/frontend/images/').$file;
            $data = getimagesize($filepath);
            $width = $data[0];
            $height = $data[1];
            echo '<div class="media-thumbnail" data-name="'.$file.'" data-height="'.$height.'" data-width="'.$width.'" style="background-image: url('.base_url().'assets/frontend/images/'.$file.');"></div>';
          }
        }

    }

    public function add_course_category_ajax()
    {
       $result =  $this->crud_model->add_course_category();
       echo json_encode($result);
    }

    public function remove_course_category_ajax()
    {
       $result =  $this->crud_model->remove_course_category();
       echo json_encode($result);
    }

    public function add_related_course_ajax()
    {
       $result =  $this->crud_model->add_related_course();
       echo json_encode($result);
    }

    public function remove_related_course_ajax()
    {
       $result =  $this->crud_model->remove_related_course();
       echo json_encode($result);
    }

    public function add_widget_ajax()
    {   
        $data['section_id'] = $this->input->post('id');
        $data['course_id'] = $this->input->post('course_id');
        $data['type'] = $this->input->post('type');
        $this->load->view('widgets_form',$data);
    
    }

    public function widgets_form($param1='',$course_id='',$section_id='',$type='')
    {
        if($param1=='add')
        {
            $this->crud_model->add_widget($type,$section_id,$course_id);
            redirect(site_url('admin/courses/edit/'.$course_id), 'refresh');
        }
    }


    public function set_section_cookie()
    {
        $section = $this->input->post('section');
     $this->session->set_userdata('last_section',$section);
     echo $section;
    }

    public function get_section_cookie()
    {
     $section = $this->session->userdata('last_section');
     echo $section;
    }


    public function ajax_sort_section() {
    $section_json = $this->input->post('itemJSON');
    $this->crud_model->sort_section($section_json);
  }

  public function ajax_sort_widget() {
    $section_json = $this->input->post('itemJSON');
    $this->crud_model->sort_widget($section_json);
  }


  public function upload_new_img()
  {
    $this->crud_model->upload_new_img();
  }

  public function add_key_feature()
  {
    $this->crud_model->add_key_feature();
     redirect(site_url('admin/common_items'), 'refresh'); 
  }

  public function import_features_ajax()
  {
   $course_id = $this->input->post('course_id');
   $section_id = $this->input->post('id'); 
   $this->crud_model->import_key_features($course_id,$section_id);

  }

//end class
}