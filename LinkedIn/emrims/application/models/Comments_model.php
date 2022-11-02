<!-- //Every model you need to add it on AUTOLOAD in CONFIG FOLDER  $autoload['model']-->
<?php
    class Comments_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function create_comment($post_id){
            //this array will set data to be send(will set data to save)
            $data = array(
                'post_id' => $post_id,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'body' => $this->input->post('body')
            );
            //this will send    table_name|data array
            $this->db->insert('comments',$data);


        }
        public function get_comments($post_id){
            $query =$this->db->get_where('comments', array('post_id'=>$post_id));
            return $query->result_array();
        }
    }