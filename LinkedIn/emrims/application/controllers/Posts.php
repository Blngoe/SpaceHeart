<?php
	class Posts extends CI_Controller{
		public function index($offset = 0){
			//pagination configuration
			$config['base_url'] = base_url().'posts/index';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 3; 
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-links');
			//initialize pagination
			$this->pagination->initialize($config);

            $data['title'] = 'Latest Post';
            
            $data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'],$offset);
			// print_r($data['posts']);
			

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);
			$post_id = $data['post']['id'];
			$data['comments'] = $this->comments_model->get_comments($post_id);
			 
			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['title'];
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');

		}
		//this is to create view on adding posts on database
		public function create(){
			//check if log in
			if(!$this->session->userdata('log_in')){
				redirect('users/login');

			}
			$data['title'] = 'Create Post';
			//this is to import CATEGORIES from Post_model controler
			$data['categories'] = $this->post_model->get_categories();
			//this is error promt
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body_text', 'Body', 'required');

			if($this->form_validation->run()=== FALSE){
				
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			}
			else{
				//upload image config
				$config['upload_path'] = '.\assets\images\image_post';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_with'] = '2000';
				$config['max_height'] = '2000';
				
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'no_image.jpg';
					
				}else{
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];

				}

				$this->post_model->create_post($post_image);

				$this->session->set_flashdata('post_created', 'Post Created');
				redirect('posts');

			}
		}
		//This is for delete function, cont on model
		public function delete($id){
			//check if log in
			if(!$this->session->userdata('log_in')){
				redirect('users/login');

			}
			$this->post_model->delete_post($id);
			//echo $id;
			$this->session->set_flashdata('post_deleted', 'Post Deleted');
			redirect('posts');
		}
		//This is for EDIT function, see (view-post-edit.php)
		public function edit($slug){
			//check if log in
			if(!$this->session->userdata('log_in')){
				redirect('users/login');

			}
			$data['post'] = $this->post_model->get_posts($slug);

			//check if user is the same with editing
			if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']){
				redirect('posts');

			}

			 //this is to import CATEGORIES from Post_model controler
			$data['categories'] = $this->post_model->get_categories();
			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'EDIT POST';
			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');

		}
		public function update(){
			//check if log in
			if(!$this->session->userdata('log_in')){
				redirect('users/login');

			}
			//echo 'SUBMIT';
			$this->post_model->update_post();
			$this->session->set_flashdata('post_updated', 'Updated');
			redirect('posts');
		}

	}