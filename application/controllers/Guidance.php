<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// starting home page controller
class Guidance extends CI_Controller {

    public function __construct(){
        parent::__construct();
      //  $this->load->model('login_model');
    }

    // loading index page
    public function index(){
        $data['title'] = 'Home Page';
        $this->load->view('frontend/guidance', $data);
    }

    // loading institution
    // public function institution(){
    //     $data['title'] = 'Home Page';
    //     $this->load->view('frontend/institution', $data);
    // }

    public function search_guide(){

        $data['searchdata'] = $this->guidance_model->get_guide();

        $this->load->view('frontend/guide_report', $data);
    }



  }
