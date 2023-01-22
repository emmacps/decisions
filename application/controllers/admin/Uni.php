<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uni extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Universities';
        $data['main_content'] = $this->load->view('admin/uni/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new uni by admin
    public function add()
    {   
        if ($_POST) {

            $data = array(
                'rank' => $_POST['rank'],
                'institution' => $_POST['institution'],
                'location' => $_POST['location'],
                'access' => $_POST['access'],
            );

            $data = $this->security->xss_clean($data);

            if ($data) {
                $submit_uni = $this->common_model->insert($data, 'uni');
            
                $this->session->set_flashdata('msg', 'Uni added Successfully');
                redirect(base_url('admin/uni/all_uni_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                redirect(base_url('admin/uni'));
            }
            
            
            

        }
    }

    public function all_uni_list()
    {
        $data['page_title'] = 'Universities';
        $data['unis'] = $this->common_model->get_all_uni();
        $data['main_content'] = $this->load->view('admin/uni/uni', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
                'rank' => $_POST['rank'],
                'institution' => $_POST['institution'],
                'location' => $_POST['location'],
                'access' => $_POST['access'],
                //'role' => $_POST['role']
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

            $this->common_model->edit_option($data, $id, 'uni');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/uni/all_uni_list'));

        }

        $data['page_title'] = 'Edit University';
        $data['uni'] = $this->common_model->get_single_uni_info($id);
        $data['main_content'] = $this->load->view('admin/uni/edit_uni', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

    
    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'uni'); 
        $this->session->set_flashdata('msg', 'Uni deleted Successfully');
        redirect(base_url('admin/uni/all_uni_list'));
    }


}