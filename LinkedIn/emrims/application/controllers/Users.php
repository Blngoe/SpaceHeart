<?php
        //register username and password
    class Users extends CI_Controller{
        public function register(){
            $data['title'] = "Sign up";

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('user_name', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'ConfirmPassword', 'required','matches[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');

            }else{
                //Encription password
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);
                //message
                $this->session->set_flashdata('user_registered', 'Registration Successful');

                redirect('posts');

            }

        }
        //log in
    
        public function login(){
            $data['title'] = "Login";

            // $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('user_name', 'Username', 'required');
            // $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            // $this->form_validation->set_rules('password2', 'ConfirmPassword', 'required','matches[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');

            }else{
                //Encription password
                // $enc_password = md5($this->input->post('password'));

                // $this->user_model->register($enc_password);-----------------------
                //message---------->>
                //get user_name
                $username = $this->input->post('user_name');
                //get password
                $password = md5($this->input->post('password'));

                //log in user
                $user_id = $this->user_model->login($username, $password);
                if($user_id){
                    //create sesiong
                    $user_data = array(
                        'user_id' => $user_id,
                        'user_name' => $username,
                        'log_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    // die('success');
                    $this->session->set_flashdata('user_loggedin', 'Login Successful');

                    redirect('posts');

                }else{
                    $this->session->set_flashdata('login_fail', 'Login Fail');

                    redirect('users/login');

                }
               
            }
        }

        //log out
        public function logout(){
          //  unset user data
          $this->session->unset_userdata('log_in');
          $this->session->unset_userdata('user_id');
          $this->session->unset_userdata('user_name');
          $this->session->set_flashdata('user_logged_out', 'Logged Out');

          redirect('users/login');
        }

        //check is exist
        public function check_username_exists($user_name){
            $this->form_validation->set_message('check_username_exists', 'Username already exist, Be unique');
        if($this->user_model->check_username_exists($user_name)){
            return true;

        }else{
            return false;

        }

        }
        function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'EMail already exist, Be unique');
        if($this->user_model->check_email_exists($email)){
            return true;

        }else{
            return false;

        }

        }
    }