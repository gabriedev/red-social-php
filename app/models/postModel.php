<?php 

class PostModel 
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function addPost($data) 
    {
        $this->db->query('INSERT INTO posts (user_post , status , post_image , post_content) VALUE (:user_post , :status , :post_image , :post_content)');
        $this->db->bind(':user_post' , $data['user']);
        $this->db->bind(':status' , $data['type']);
        $this->db->bind(':post_image' , $data['path']);
        $this->db->bind(':post_content' , $data['text']);
        var_dump("ddd");
        if($this->db->execute()) {
            return true;
        } else {
            return false;
            
        }
    }
}