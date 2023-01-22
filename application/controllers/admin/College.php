<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class College extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'colleges of Education';
        $data['main_content'] = $this->load->view('admin/college/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new uni by admin
    public function add()
    {   
        if ($_POST) {

            $data = array(
                'name' => $_POST['name'],
                'location' => $_POST['location'],
                'cus' => serialize($this->input->post('cus')),
            );

            $data = $this->security->xss_clean($data);

            if ($data) {
                $submit_college = $this->common_model->insert($data, 'college');
            
                $this->session->set_flashdata('msg', 'college added Successfully');
                redirect(base_url('admin/college/all_college_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                redirect(base_url('admin/college'));
            }
            
            
            

        }
    }

    public function all_college_list()
    {
        $data['page_title'] = 'College of Education';
        $data['colleges'] = $this->common_model->get_all_college();
        $data['main_content'] = $this->load->view('admin/college/college', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
               'name' => $_POST['name'],
                'location' => $_POST['location'],
                'cus' => serialize($this->input->post('cus')),
            );
            $data = $this->security->xss_clean($data);

            $powers = $this->input->post('role_action');
            if (!empty($powers)) {
                $this->common_model->delete_user_role($id, 'user_role');
                foreach ($powers as $value) {
                   $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    ); 
                   $role_data = $this->security->xss_clean($role_data);
                   $this->common_model->insert($role_data, 'user_role');
                }
            }

            $this->common_model->edit_option($data, $id, 'college');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/college/all_college_list'));

        }

        $data['page_title'] = 'Edit College';
        $data['college'] = $this->common_model->get_single_college_info($id);
        $data['main_content'] = $this->load->view('admin/college/edit_college', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

    
    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'college'); 
        $this->session->set_flashdata('msg', 'college deleted Successfully');
        redirect(base_url('admin/college/all_college_list'));
    }


}