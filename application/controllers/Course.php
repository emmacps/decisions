<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// starting home page controller
class Course extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('login_model');
    }

    // loading index page
    public function index(){
        $data['title'] = 'Home Page';
        $this->load->view('frontend/courses', $data);
    }

    // loading institution
    // public function institution(){
    //     $data['title'] = 'Home Page';
    //     $this->load->view('frontend/institution', $data);
    // }



  }
