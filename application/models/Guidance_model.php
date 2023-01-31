<?php

    class Guidance_model extends CI_Model{
      public function __construct(){
        $this->load->database();
      }

      // get report from db
      public function get_guide(){
    
        $this->db->select('*');
        $this->db->like('title', $this->input->get('field'));
        $this->db->or_like('subject', serialize($this->input->get('subject')));

      $query = $this->db->get('courses');
      return $query->result_array();
      
      }

    

      

    
      
    

  


    }