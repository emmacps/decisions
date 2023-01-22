<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// starting home page controller
class College extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('login_model');
    }

    // loading index page
    public function index(){
        $data['title'] = 'Home Page';
        $data['colleges'] = $this->common_model->get_all_college();
        $this->load->view('frontend/college', $data);
    }

    // loading institution
    public function institution(){
        $data['title'] = 'Home Page';
        $this->load->view('frontend/institution', $data);
    }



  }
