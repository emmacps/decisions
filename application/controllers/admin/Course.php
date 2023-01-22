<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Courses';
        $data['unis'] = $this->common_model->get_all_uni();
        $data['main_content'] = $this->load->view('admin/course/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new course by admin
    public function add(){   
        if ($_POST) {

            $data = array(
                'uni_cus' => $_POST['uni_cus'],
                'title' => $_POST['title'],
                'subject' => serialize($this->input->post('subject')),
            );

             $data = $this->security->xss_clean($data);

            if ($data) {
                $submit_uni = $this->common_model->insert($data, 'courses');
            
                $this->session->set_flashdata('msg', 'Course added Successfully');
                redirect(base_url('admin/course/all_course_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                redirect(base_url('admin/course'));
            }
            
            
            

        }
    }

    public function all_course_list()
    {
        $data['page_title'] = 'All Courses';
        $data['courses'] = $this->common_model->get_all_courses();
         $data['unis'] = $this->common_model->get_all_uni();
        $data['main_content'] = $this->load->view('admin/course/courses', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update courses info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
                'uni_cus' => $_POST['uni_cus'],
                'title' => $_POST['title'],
                'subject' => serialize($this->input->post('subject')),
            );
            $data = $this->security->xss_clean($data);

            $powers = $this->input->post('role_action');
            if (!empty($powers)) {
                $this->common_model->delete_course_role($id, 'course_role');
                foreach ($powers as $value) {
                   $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    ); 
                   $role_data = $this->security->xss_clean($role_data);
                   $this->common_model->insert($role_data, 'user_role');
                }
            }

            $this->common_model->edit_option($data, $id, 'courses');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/course/all_course_list'));

        }
        
        //$data['courses'] = $this->common_model->get_all_courses();
        $data['course'] = $this->common_model->get_single_course_info($id);
        $data['unis'] = $this->common_model->get_all_uni();
        $data['main_content'] = $this->load->view('admin/course/edit_course', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

   

    //-- delete course
    public function delete($id)
    {
        $this->common_model->delete($id,'courses'); 
        $this->session->set_flashdata('msg', 'course deleted Successfully');
        redirect(base_url('admin/course/all_course_list'));
    }




}