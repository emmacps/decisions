<?php 

// starting home page controller
class Signup extends CI_Controller {

    // loading index page
    public function index(){
       $data['title'] = 'Home Page';
        $this->load->view('frontend/signup', $data);
    }


    // register new user function
    public function newuser(){

        $data['title'] = 'Home Page';

        $this->form_validation->set_rules('fullname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('shs', 'Name of SHS', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('conpassword', 'Password Confirm', 'required|matches[password]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('frontend/signup', $data);
        }else{
            //encrypt password
            $enc_password = md5($this->input->post('password'));

            $returnInsert = $this->signup_model->signup_user($enc_password);
            
            // set message
            if($returnInsert){
            $this->session->set_flashdata('success', 'Account created, you can now login');
            redirect('signup', 'refresh');
            }else{
            $this->session->set_flashdata('error', 'An error occurred while processing your request.');
                redirect('signup', 'refresh');
            
            }
        }
    } 



}

  
