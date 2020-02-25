<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Crud_model extends CI_Model
{
	 function __construct()
    {
        parent::__construct();
        /*cache control*/
       $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
       $this->output->set_header('Pragma: no-cache');
    }

    public function get_category($category_id = '')
    {
    	if($category_id !='')
    	{
    	  $this->db->where('id', $category_id);
    	}
        $this->db->order_by('id','asc');
    	return $this->db->get('categories');
    }

    public function get_top_category($category_id = '')
    {
        if($category_id !='')
        {
          $this->db->where('id', $category_id);
        }
        $this->db->where('top_category',1);
        $this->db->limit(7);
        return $this->db->get('categories');
    }
    public function get_non_top_category($category_id = '')
    {
        if($category_id !='')
        {
          $this->db->where('id', $category_id);
        }
        $this->db->where('top_category',0);
        $this->db->limit(8);
        return $this->db->get('categories');
    }

    public function add_category()
    {
    	$data['name'] = $this->input->post('categoryname');
    	$data['slug'] = slugify($this->input->post('categoryname'));
    	if($this->input->post('form-filename') !='')
    	{
    		$data['icon'] = $this->input->post('form-filename');
    	}
    	
    	
    	$this->db->insert('categories', $data);
    }

     public function add_rps()
    {
        $data['username'] = $this->input->post('username');
        $data['designation'] = $this->input->post('designation');

        if($this->input->post('form-filename') !='')
        {
            $data['thumbnail'] = $this->input->post('form-filename');
        }
        
        
        $this->db->insert('rps', $data);
    }

     public function update_common_rps($id='')
    {
        $data['username'] = $this->input->post('username');
        $data['designation'] = $this->input->post('designation');

        if($this->input->post('form-filename') !='')
        {
            $data['thumbnail'] = $this->input->post('form-filename');
        }
        
        $this->db->where('id',$id);
        $this->db->update('rps', $data);
    }

    public function get_rps($id='')
    {
        if($id !='')
        {
            $this->db->where('id',$id);
        }
       return $this->db->get("rps");
    }

    public function delete_rps($id='')
    {
        $this->db->where('id',$id);
      $this->db->delete("rps");
    }

    public function add_testimonial()
    {
        $video_url = $this->input->post('video_url');
        $video_url = str_replace('watch?v=', 'embed/', $video_url);
        $data['url'] = $video_url;
        if($this->input->post('form-filename') !='')
        {
            $data['thumbnail'] = $this->input->post('form-filename');
        }
        
        
        $this->db->insert('video_testimonials', $data);
    }

    public function get_testimonials()
    {
       return $this->db->get("video_testimonials");
    }

    public function delete_testimonial($id='')
    {
        $this->db->where('id',$id);
      $this->db->delete("video_testimonials");
    }


     public function update_category($category_id)
    {
    	$data['name'] = $this->input->post('categoryname');
    	$data['slug'] = slugify($this->input->post('slug'));
    	$data['icon'] = $this->input->post('form-filename');
        if((int) $this->input->post('top_category') == 1)
        {
            $data['top_category'] = 1;
        }
        else
        {
            $data['top_category'] =0;
        }
        
    	$this->db->where('id', $category_id);
        $this->db->update('categories', $data);
    }

    public function delete_category($id='')
    {
    	$this->db->where('id', $id);
        $this->db->delete('categories');
    }

     public function get_course($course_id = '')
    {
        if($course_id !='')
        {
          $this->db->where('id', $course_id);
        }
        $this->db->order_by('id','des');
        return $this->db->get('courses');
    }

    public function get_course_by_slug($slug = '')
    {
        if($slug !='')
        {
          $this->db->where('slug', $slug);
        }
        return $this->db->get('courses');
    }

    public function get_courses_by_category($category_id)
    {
        $this->db->select('course_id');
        $course_lists_by_category = $this->db->get_where('course_categories', array('category_id' => $category_id));
        if($course_lists_by_category->num_rows() > 0)
        {
         $course_lists_by_category = $course_lists_by_category->result_array();
        $course_ids = array();
        foreach ($course_lists_by_category as $row) {
            if (!in_array($row['course_id'], $course_ids)) {
                array_push($course_ids, $row['course_id']);
            }
        }
        $this->db->where_in('id', $course_ids);
        return $this->db->get('courses');    
        }
        else
        {
            return 0;
        }
        
    }

    public function add_course()
    {
        $data['title'] = $this->input->post('title');
        $data['slug'] = slugify($this->input->post('title'));
        $data['description'] = $this->input->post('description');
        if($this->input->post('form-filename') !='')
        {
            $data['thumbnail'] = $this->input->post('form-filename');
        }
        
        $this->db->insert('courses', $data);
        $course_id =  $this->db->insert_id();
        return $course_id;
    }

     public function update_course($course_id='')
    {
        $data['title'] = $this->input->post('title');
        $data['slug'] = slugify($this->input->post('slug'));
        $data['description'] = $this->input->post('description');
        if($this->input->post('form-filename') !='')
        {
            $data['thumbnail'] = $this->input->post('form-filename');
        }

        $data['status'] = $this->input->post('status');
        $data['columnheading1'] = $this->input->post('column_heading1');
        $data['columnheading2'] = $this->input->post('column_heading2');
        $data['columnheading3'] = $this->input->post('column_heading3');
        $data['columnheading4'] = $this->input->post('column_heading4');
        $data['columntext1'] = $this->input->post('column_text1');
        $data['columntext2'] = $this->input->post('column_text2');
        $data['columntext3'] = $this->input->post('column_text3');
        $data['columntext4'] = $this->input->post('column_text4');
        $video_url = $this->input->post('demo_url');
        $video_url = str_replace('watch?v=', 'embed/', $video_url);
        $data['demo_video_url'] = $video_url;

        if ($_FILES['form-filename-syllabus']['name'] != "") {

            $fileName           = $_FILES['form-filename-syllabus']['name'];
            $tmp                = explode('.', $fileName);
            $fileExtension      = end($tmp);
            if($fileExtension != 'pdf')
            {
               $this->session->set_flashdata('error','invalid_attachment only pdf allowed');
               redirect(base_url().'admin/courses/edit/'.$course_id,'refresh');
            }
            $uploadable_file    =  md5(uniqid(rand(), true)).'.'.$fileExtension;
            
            $data['syllabus'] = $uploadable_file;
            move_uploaded_file($_FILES['form-filename-syllabus']['tmp_name'], 'uploads/'.$uploadable_file);
        }
        

        $this->db->where('id', $course_id);
        $this->db->update('courses', $data);
    }

    public function course_seo($course_id)
    {
        //check if already exist 
        $course_seo = $this->crud_model->get_course_seo($course_id);
        if($course_seo->num_rows() > 0)
        {
            //exists
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['keywords'] = $this->input->post('keywords');
            $this->db->where('course_id',$course_id);
            $this->db->update('course_seo',$data);

        }
        else
        {
            //insert
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['keywords'] = $this->input->post('keywords');
            $data['course_id'] = $course_id;
            $this->db->insert('course_seo',$data);
        }

    }

    public function get_course_seo($course_id)
    {
        $this->db->where('course_id',$course_id);
        return $this->db->get('course_seo');
    }

    public function page_seo($page_id)
    {
        //check if already exist 
        $course_seo = $this->crud_model->get_course_seo($page_id);
        if($course_seo->num_rows() > 0)
        {
            //exists
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['keywords'] = $this->input->post('keywords');
            $this->db->where('page_id',$page_id);
            $this->db->update('pages_seo',$data);

        }
        else
        {
            //insert
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['keywords'] = $this->input->post('keywords');
            $data['page_id'] = $page_id;
            $this->db->insert('pages_seo',$data);
        }

    }

    public function get_page_seo($page_id)
    {
        $this->db->where('page_id',$page_id);
        return $this->db->get('pages_seo');
    }

    public function get_home_page()
    {
        
        return $this->db->get('home_page');
    }

    public function edit_home_banner()
    {
        $data['title'] = $this->input->post('title');
        $data['sub_title'] = $this->input->post('sub_title');
        $data['widget_text1'] = $this->input->post('widget_text1');
        $data['widget_text2'] = $this->input->post('widget_text2');
        $data['widget_text3'] = $this->input->post('widget_text3');
        $data['widget_icon1'] = $this->input->post('form-filename-widget-1');
        $data['widget_icon2'] = $this->input->post('form-filename-widget-2');
        $data['widget_icon3'] = $this->input->post('form-filename-widget-3');
        $data['snipet_title1'] = $this->input->post('snipet_title1');
        $data['snipet_title2'] = $this->input->post('snipet_title2');
        $data['snipet_title3'] = $this->input->post('snipet_title3');
        $data['snipet_title4']= $this->input->post('snipet_title4');
        $data['snipet_text1'] = $this->input->post('snipet_text1');
        $data['snipet_text2'] = $this->input->post('snipet_text2');
        $data['snipet_text3'] = $this->input->post('snipet_text3');
        $data['snipet_text4'] = $this->input->post('snipet_text4');
        $this->db->where('id',1);
        $this->db->update("home_page",$data);
        
    }

    public function add_course_category()
    {
        $course_id = $this->input->post('course_id');
        $category_id = $this->input->post('category_id');

        $this->db->where(array('course_id' =>$course_id ,'category_id'=>$category_id ));
        $check_rows = $this->db->get('course_categories')->num_rows();
        if($check_rows > 0)
        {
            //already exists
            $result['msg'] = false;
        }
        else
        {
            $data['category_id'] = $category_id;
            $data['course_id'] = $course_id;
            $this->db->insert('course_categories',$data);
            $result['id'] =  $this->db->insert_id();
            $result['msg'] = true;
        }
        return $result;
    }
    public function remove_course_category()
    {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('course_categories'); 
        $result['msg'] = true;
        return $result;
    }
public function delete_course($id='')
    {
        $this->db->where('id',$id);
        $this->db->delete('courses'); 
        $result['msg'] = true;
        return $result;
    }
    public function get_course_categories($course_id)
    {
        $this->db->where('course_id',$course_id);
        return $this->db->get("course_categories");
    }

     public function add_related_course()
    {
        $course_id = $this->input->post('course_id');
        $related_course_id = $this->input->post('related_course_id');

        $this->db->where(array('course_id' =>$course_id ,'related_course_id'=>$related_course_id ));
        $check_rows = $this->db->get('related_courses')->num_rows();
        if($check_rows > 0)
        {
            //already exists
            $result['msg'] = false;
        }
        else
        {
            $data['related_course_id'] = $related_course_id;
            $data['course_id'] = $course_id;
            $this->db->insert('related_courses',$data);
            $result['id'] =  $this->db->insert_id();
            $result['msg'] = true;
        }
        return $result;
    }
    public function remove_related_course()
    {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('related_courses'); 
        $result['msg'] = true;
        return $result;
    }

    public function get_related_courses($course_id)
    {
        $this->db->where('course_id',$course_id);
        return $this->db->get("related_courses");
    }

    public function add_section($course_id)
    {
       
        $this->db->where('course_id',$course_id);
        $existing_sections = $this->db->get('course_sections');
        if ($existing_sections->num_rows() < 8)
        {
             $data['sidebar_title'] = $this->input->post('sidebar_title');
        $data['heading'] = $this->input->post('heading');
        if($this->input->post('form-filename') !='')
        {
            $data['icon'] = $this->input->post('form-filename');
        }
        $data['course_id'] = $course_id;
        $this->db->insert('course_sections', $data);
        }

       
        
    }

    public function update_section($section_id)
    {
        $data['sidebar_title'] = $this->input->post('sidebar_title');
        $data['heading'] = $this->input->post('heading');
        if($this->input->post('form-filename') !='')
        {
            $data['icon'] = $this->input->post('form-filename');
        }
        //$data['course_id'] = $course_id;
        $this->db->where('id',$section_id);
        $this->db->update('course_sections', $data);
        $try = $this->crud_model->get_section('',$section_id)->row_array();
        $course_id = $try['course_id'];
        return $course_id;

    }

    public function get_section($course_id='',$section_id='')
    {
        if($course_id !='')
        {
            $this->db->where('course_id',$course_id);
            $this->db->order_by("ordering", "asc");
        }
        if($section_id !='')
        {
            $this->db->where('id',$section_id);
        }
        return $this->db->get('course_sections');
        

    }

    public function delete_section($section_id)
    {
        $try = $this->crud_model->get_section('',$section_id)->row_array();
        $course_id = $try['course_id'];
        $this->db->where('id',$section_id);
        $this->db->delete('course_sections');
        
        return $course_id;
    }


    public function add_widget($type,$section_id,$course_id)
    {   
        $widget['section_id'] = $section_id;
        $widget['course_id'] = $course_id;
        $widget['type'] = $type;
        $this->db->insert('section_widgets',$widget);
        $data['widget_id'] =  $this->db->insert_id();
        
        if($type == 'text')
        {
            $data['heading'] = $this->input->post('heading');
            $data['body'] = $this->input->post('body');
            $this->db->insert('widget_text',$data);
        }
        else if($type == 'question')
        {
            foreach ($this->input->post('question', TRUE) as $key => $value) {
                $data['question'] = $value;
                $data['answer'] = $this->input->post('answer', TRUE)[$key];
                $this->db->insert('widget_question',$data);
            }
        }
        else if($type == 'list')
        {
            $data['heading'] = $this->input->post('heading');
            $this->db->insert('widget_list',$data);
            $list_item['widget_list_id'] =  $this->db->insert_id();
            foreach ($this->input->post('listitems', TRUE) as $key => $value) {
                $list_item['item'] = $value;
                $this->db->insert('widget_list_items',$list_item);
            }
        }
        else if($type == 'feature')
        {
           $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }

            $this->db->insert('widget_feature',$data);
        }
        else if($type == 'image')
        {
           $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }

            $this->db->insert('widget_image',$data);
        }
        else if($type == 'review')
        {
            $data['heading'] = $this->input->post('heading');
            $data['body'] = $this->input->post('body');
            $data['url'] = $this->input->post('url');
            $this->db->insert('widget_review',$data);
        }


    }

    public function add_key_feature()
    {
         $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }

            $this->db->insert('key_feature',$data);
    }

    public function add_common_certificate()
    {
         $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }

            $this->db->insert('certificate',$data);
    }
    public function get_common_certificate($id='')
    {   
        if($id != '')
        {
            $this->db->where('id',$id);
        }
        return $this->db->get('certificate');
    }

    public function get_key_feature($id='')
    {   
        if($id != '')
        {
            $this->db->where('id',$id);
        }
        return $this->db->get('key_feature');
    }

    public function delete_key_feature($id='')
    {   
        $this->db->where('id',$id);
        $this->db->delete('key_feature');
    }

    public function delete_common_certificate($id='')
    {   
        $this->db->where('id',$id);
        $this->db->delete('certificate');
    }


    public function import_key_features($course_id,$section_id)
    {
       $key_features = $this->crud_model->get_key_feature()->result_array();
        foreach ($key_features as $kf) 
        {
          $data['course_id'] = $course_id;
          $data['section_id'] = $section_id;
          $data['type'] = 'feature';
          $this->db->insert('section_widgets',$data);
          $feature['widget_id'] =  $this->db->insert_id();
          $feature['heading'] = $kf['heading'];
          $feature['body'] = $kf['body'];
          $feature['icon'] = $kf['icon'];
          $this->db->insert('widget_feature',$feature);
          
        }
    }

     public function import_certificate($course_id,$section_id)
    {
       $key_features = $this->crud_model->get_common_certificate()->result_array();
        foreach ($key_features as $kf) 
        {
          $data['course_id'] = $course_id;
          $data['section_id'] = $section_id;
          $data['type'] = 'image';
          $this->db->insert('section_widgets',$data);
          $feature['widget_id'] =  $this->db->insert_id();
          $feature['heading'] = $kf['heading'];
          $feature['body'] = $kf['body'];
          $feature['icon'] = $kf['icon'];
          $this->db->insert('widget_image',$feature);
          
        }
    }

    public function get_section_widgets($section_id)
    {
        $this->db->where('section_id',$section_id);
        $this->db->order_by("ordering", "asc");
       return  $this->db->get('section_widgets');
    }

    public function get_widget($type,$widget_id,$id="")
    {   
        if($id !='')
        {
            $this->db->where('id',$id);
        }else
        {
            $this->db->where('widget_id',$widget_id);
        }
        
        if($type == 'text')
        {
            return $this->db->get('widget_text');
        }
        else if($type == 'question')
        {
            return $this->db->get('widget_question');
        }
        else if($type == 'list')
        {
            return $this->db->get('widget_list');
        }
        else if($type == 'feature')
        {
            return $this->db->get('widget_feature');
        }
        else if($type == 'image')
        {
            return $this->db->get('widget_image');
        }
         else if($type == 'review')
        {
            return $this->db->get('widget_review');
        }
    }

    public function get_all_features($course_id="")
    {   
        $this->db->where('course_id',$course_id);
        $this->db->where('type','feature');
        $features = $this->db->get('section_widgets');

        if($features->num_rows() > 0)
        {
         $features = $features->result_array();
        $section_widgets_ids = array();
        foreach ($features as $row) {
            if (!in_array($row['id'], $section_widgets_ids)) {
                array_push($section_widgets_ids, $row['id']);
            }
        }
        $this->db->where_in('widget_id', $section_widgets_ids);
        return $this->db->get('widget_feature');    
        }
        else
        {
            return 0;
        }

    }

    public function get_list_items($widget_list_id)
    {
        $this->db->where('widget_list_id',$widget_list_id);
        return $this->db->get('widget_list_items');
    }
    public function get_list_item($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('widget_list_items');
    }

     public function update_widget_text($id)
    {
        $data['heading'] = $this->input->post('heading');
        $data['body'] = $this->input->post('body');
        $this->db->where('id',$id);
        $this->db->update('widget_text', $data);
    }

     public function update_widget_question($id)
    {
        $data['question'] = $this->input->post('question');
        $data['answer'] = $this->input->post('answer');
        $this->db->where('id',$id);
        $this->db->update('widget_question', $data);
    }

     public function update_widget_feature($id)
    {
        $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }
        $this->db->where('id',$id);
        $this->db->update('widget_feature', $data);
    }

    public function update_common_feature($id)
    {
        $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }
        $this->db->where('id',$id);
        $this->db->update('key_feature', $data);
    }

    public function update_common_certificate($id)
    {
        $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }
        $this->db->where('id',$id);
        $this->db->update('certificate', $data);
    }

     public function update_widget_image($id)
    {
         $data['heading'] = $this->input->post('heading');
           $data['body'] = $this->input->post('body');
           if($this->input->post('form-filename') !='')
            {
                $data['icon'] = $this->input->post('form-filename');
            }
        $this->db->where('id',$id);
        $this->db->update('widget_image', $data);
    }
     public function update_widget_review($id)
    {
         $data['heading'] = $this->input->post('heading');
            $data['body'] = $this->input->post('body');
            $data['url'] = $this->input->post('url');
            
        $this->db->where('id',$id);
        $this->db->update('widget_review', $data);
    }
     public function get_list_widget_id($widget_id)
    {
        $this->db->where('widget_id',$widget_id);
        $widget_list = $this->db->get('widget_list')->row_array();
        return $widget_list['id'];
    }

     public function update_widget_list($id)
    {
        $data['heading'] = $this->input->post('heading');
            
        $this->db->where('id',$id);
        $this->db->update('widget_list', $data);

        $list_item['widget_list_id'] =  $id;
        
            foreach ($this->input->post('listitems', TRUE) as $key => $value) {
                $list_item['item'] = $value;
                $this->db->insert('widget_list_items',$list_item);
            }
    }
     public function update_widget_list_item($id)
    {
        $data['item'] = $this->input->post('item');
            
        $this->db->where('id',$id);
        $this->db->update('widget_list_items', $data);
    }
    



    public function delete_section_widget_by_id($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
    }
    public function delete_widget_text($id)
    {
        //delete section widget first
        $widget = $this->crud_model->get_widget('text','',$id)->row_array();
        $this->crud_model->delete_section_widget_by_id($widget['widget_id']);

        $this->db->where('id',$id);
        $this->db->delete('widget_text');
    }

    public function delete_widget_question($id)
    {
        //delete section widget first
       
        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
        $this->db->where('widget_id',$id);
        $this->db->delete('widget_question');
    }
    public function delete_widget_feature($id)
    {
        //delete section widget first
       
        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
        $this->db->where('widget_id',$id);
        $this->db->delete('widget_feature');
    }
    public function delete_widget_image($id)
    {
        //delete section widget first
       
        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
        $this->db->where('widget_id',$id);
        $this->db->delete('widget_image');
    }
    public function delete_widget_review($id)
    {
        //delete section widget first
       
        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
        $this->db->where('widget_id',$id);
        $this->db->delete('widget_review');
    }

   

    public function delete_widget_list($id)
    {
        //delete section widget first
        $widget_list_id = $this->crud_model->get_list_widget_id($id);
        $this->db->where('widget_list_id',$widget_list_id);
        $this->db->delete('widget_list_items');

        $this->db->where('id',$id);
        $this->db->delete('section_widgets');
        $this->db->where('widget_id',$id);
        $this->db->delete('widget_list');
        //delete list items also 
        

    }
    public function delete_widget_list_item($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('widget_list_items');
        
    }

    public function delete_widget_question_single($id)
    {
        
       $this->db->where('id',$id);
        $this->db->delete('widget_question');
    }
    
    public function sort_section($section_json) {
            $sections = json_decode($section_json);
            foreach ($sections as $key => $value) {
                $updater = array(
                    'ordering' => $key + 1
                );
                $this->db->where('id', $value);
                $this->db->update('course_sections', $updater);
            }
        }

    public function sort_widget($section_json) 
    {
            $sections = json_decode($section_json);
            foreach ($sections as $key => $value) {
                $updater = array(
                    'ordering' => $key + 1
                );
                $this->db->where('id', $value);
                $this->db->update('section_widgets', $updater);
            }
    }

    public function upload_new_img()
    {
        $allowed =  array('docx','txt','pdf','png' ,'jpg');

        if($_FILES['newimg']['name'] != '')
        {
            
                $fileName = $_FILES['newimg']['name'];
                $tmp                = explode('.', $fileName);
                $fileExtension      = end($tmp);
                $uploadable_file    =  md5(uniqid(rand(), true)).'.'.$fileExtension;
                $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                if(!in_array($ext,$allowed)) 
                {
                    
                   
                }

                move_uploaded_file($_FILES['newimg']['tmp_name'], 'assets/frontend/images/'.$uploadable_file);
        }
    }

     public function get_country($ip="")
    {
     $this->db->where('ip', $ip);
     return $this->db->get('visitors');
    }

    public function update_country($ip="",$country="")
    {
        $data['ip']= $ip;
        $data['country']=$country;
        $this->db->insert('visitors', $data);
    }

    public function show_popup($ip='')
    {   
        $this->db->where('ip',$ip);
        $visitors = $this->db->get('visitors');
        if($visitors->num_rows() > 0)
        {
            $visitors = $visitors->row_array();
            if($visitors['inquiry_popup'] == 0)
            {
             return true;    
            }
            else
            {
                return false;
            }
            
        }
        else
        {
            return true;
        }
    }

    public function hide_inquiry_popup_forever($ip='')
    {
        $this->db->where('ip',$ip);
        $data['inquiry_popup'] = 1;
        $this->db->update('visitors',$data);
    }

    public function contact_popup()
    {
            $data['remsg'] = 'Thanks for contacting us. our course advisor will contact you soon.';
            $email =  $this->input->post("email");
            $type = $this->input->post('type');
            $phone = $this->input->post('contact');
            $msg = $this->input->post('msg');
            if(isset($_POST['course']))
            {
              $course = $this->input->post('course');  
            }
            else
            {
                $course = '';
            }
            

            $email_sub = $type.": sparkdatabox.in";
            $email_msg = "From: sparkdatabox.in <br>Type: ".$type."<br>Email: ".$email."<br>"."Phone: ".$phone."<br>Message: ".$msg."<br>Course: ".$course;
            $email_to = "training@sparkdatabox.com";
            if($email !='')
                {
                    $this->send_smtp_mail($email_msg , $email_sub , $email_to);
                
                }
            $data['success'] = true;
        echo json_encode($data);
    }

    public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) 
    {
        
        require_once('application/libraries/mailer/vendor/autoload.php');
        

        if($from == NULL)
            $from = 'support@sparkdatabox.com';
            
        
        

         $htmlContent = $msg;

        
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true); 
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'secure.emailsrvr.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'support@sparkdatabox.com';                 // SMTP username
            $mail->Password = 'Html5css3';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
        
            //Recipients
            $mail->From = "support@sparkdatabox.com";
            $mail->setFrom('support@sparkdatabox.com', 'SparkDatabox Support');
            $mail->addAddress($to);               // Name is optional
            $mail->addReplyTo('support@sparkdatabox.com', 'contact support');
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $sub;
            $mail->Body    = $htmlContent;
            $mail->AltBody = 'SparkDatabox email.';
        
            $mail->send();
        
            
        } 
        catch (\PHPMailer\PHPMailer\Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }



    }


}