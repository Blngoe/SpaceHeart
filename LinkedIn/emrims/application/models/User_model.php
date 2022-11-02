<?php
    class User_model extends CI_Model{
        public function register($enc_password){
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'user_name' => $this->input->post('user_name'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode')
               
                
            );
            //insert data
            return $this->db->insert('users', $data);
        }
        //log in user, check the input username and password if exist
        public function login($username, $password){
            $this->db->where('user_name', $username);
            $this->db->where('password', $password);

            $result =$this->db->get('users');

            if($result->num_rows()==1){
                return $result->row(0)->id;

            }else{
                return false;
            }

            
        }
        //
        public function check_username_exists($user_name){
            $query = $this->db->get_where('users', array('user_name'=>$user_name));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }

        }
        public function check_email_exists($email){
            $query = $this->db->get_where('users', array('email'=>$email));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }

        }
    }