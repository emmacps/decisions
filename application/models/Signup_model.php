<?php

    class Signup_model extends CI_Model{
      public function __construct(){
        $this->load->database();
      }

      // get users from db
      public function get_users(){
        $this->db->order_by('id');
        $query = $this->db->get('users');
        return $query->result_array();
      }

      // create user to db
      public function signup_user($enc_password){ 
        $data = array(
          'fullname' => $this->input->post('fullname'),
          'email' => $this->input->post('email'),
          'shs' => $this->input->post('shs'),
          'gender'=> $this->input->post('gender'),
          'password' => $enc_password
          
        );
        return $this->db->insert('users', $data);
      }

      // get user group by ID
      public function get_user($id = FALSE){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
      }

      // get user old password by ID
      public function get_old_password($id = FALSE){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array()['password'];
      }
      
      // update category
      public function update_user($id){
          $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'depart' => $this->input->post('depart'),
            'usergroup'=> $this->input->post('usergroup'),
            'status'=> $this->input->post('status')
          );
          $this->db->where('id', $id);
          return $this->db->update('users', $data);
      }

      public function update_password($id, $newpassword){
          $data = array(
            'password' => $newpassword
          );
          $this->db->where('id', $id);
          return $this->db->update('users', $data);
      }


    }