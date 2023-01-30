<?php

    class Guidance_model extends CI_Model{
      public function __construct(){
        $this->load->database();
      }

      // get report from db
      public function get_guide(){
          // $this->db->select('*');
      
          // $this->db->join('uni', 'uni.id = courses.uni_id');

          // $this->db->where('title LIKE "'. $this->input->get('field'). '" OR "'.'"subject LIKE "' . serialize($this->input->get('subject')).'"');

$this->db->query("SELECT * FROM `courses` JOIN `uni` ON `uni`.`id` = `courses`.`uni_id` WHERE `title` LIKE ' " . $this->input->get('field') . "' AND `subject` LIKE ' " . serialize($this->input->get('subject')) . "' ");

      $query = $this->db->get('courses');
      return $query->result_array();
      }

    

      

    
      
    

  


    }