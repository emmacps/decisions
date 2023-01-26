<?php

    class Guidance_model extends CI_Model{
      public function __construct(){
        $this->load->database();
      }

      // get users from db
      public function get_guide(){
          $this->db->select('*');
     
          $this->db->where('rank >= "'. $this->input->get('aggregrade'). '" and "'.'"<="'. $this->input->get('date_to').'"');
      $query = $this->db->get('mails');
      return $query->result_array();
      }

    

      

    
      
    

  


    }