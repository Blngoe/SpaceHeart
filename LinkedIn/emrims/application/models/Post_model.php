<?php
    class Post_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            
            if($slug=== FALSE){
                $this->db->order_by('posts.id', 'DESC');
                //this is to join the CATEGORY NAME IN
                $this->db->join('categories','categories.id = posts.category_id');
                $query = $this->db->get('posts');
                
                return $query->result_array();
            }
            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();

        }
        //this is to add post on database
        public function create_post($post_image){
            $slug = url_title($this->input->post('title'));
            $data  = array(
                'category_id' => $this->input->post('category_id'),
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body_text' => $this->input->post('body_text'),
                'user_id' => $this->session->userdata('user_id'),
                'post_image' => $post_image
            );
            return $this->db->insert('posts',$data);
        }
        //cont from Post, to delete selected ID from DB
        public function delete_post($id){
            
            $image_file_name = $this->db->select('post_image')->get_where('posts',
                    array('id'=> $id))->row()->post_image;
            $cwd = getcwd();
            $image_file_path = $cwd."\\assets\\images\\image_post";
            chdir($image_file_path);
            unlink($image_file_name);
            chdir($cwd);

                    
            $this->db->where('id', $id);
            $this->db->delete('posts');
            return true;

        }
        //this is to update post
        public function update_post(){

            //$this->post_model->update_post();
            //echo $this->input->post('id');die();
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body_text' => $this->input->post('body_text'),
                'category_id' => $this->input->post('category_id')
            );
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('posts', $data);
        }
            //This is to get the NAME in Table CATEGORIES
        public function get_categories(){
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }

        public function get_posts_by_category($category_id  ){
            $this->db->order_by('posts.id', 'DESC');
            $this->db->join('categories','categories.id = posts.category_id');
                $query = $this->db->get_where('posts', array('category_id'=>$category_id));
                
            return $query->result_array();

        }
    }