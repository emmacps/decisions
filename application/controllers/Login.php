<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// starting home page controller
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('login_model');
    }

    // loading index page
    public function index(){
        $data['title'] = 'Home Page';
        $this->load->view('frontend/login', $data);
    }


    public function login_users(){
         $data['title'] = 'Home Page';
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
             $this->load->view('frontend/login', $data);
        } else {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        //login user
        $user = $this->login_model->login_users($email, $password);

        if($user) {
            //create session
            $user_data = array(
            'user_id' => $user->id,
            'email' => $user->email,
            'fullname' => $user->fullname,
            'shs' =>  $user->shs,
            'gender' => $user->gender,
            'logged_in' => true 
            );
            $this->session->set_userdata($user_data);
                redirect('home');   
            } else {
            $this->session->set_flashdata('error', 'Incorrect email or password');
            redirect('login');   
        }
    }

  }


   public function logout(){
            // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('email');

            // Set message
            $this->session->set_flashdata('user_loggedout', 'You are now logged out');

            redirect('login', 'refresh');
        }


}