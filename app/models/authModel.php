<?php

class AuthModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function comfirmEmail($email)
    {
        $this->db->query('SELECT userId FROM users WHERE user_email = :email');
        $this->db->bind(':email' , $email);
        return $this->db->register();
    }

    public function confirmUsernameModel($user)
    {
        $this->db->query('SELECT userId FROM users WHERE username = :user');
        $this->db->bind(':user' , $user);
        return $this->db->register();
    }

    public function addUserModel($data)
    {
        $this->db->query('INSERT INTO users (privilege , username , user_email , password) VALUES (:privi , :user , :email , :pass)');
        $this->db->bind(':privi' , USERPRIVI);
        $this->db->bind(':email' , $data['email']);
        $this->db->bind(':user' , $data['user']);
        $this->db->bind(':pass' , $data['password']);
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($id)
    {
        $this->db->query('SELECT password FROM users WHERE userId = :user');
        $this->db->bind(':user' , $id);
        return $this->db->register();
    }

    public function getLoginData($id) 
    {
        $this->db->query('SELECT * FROM users WHERE userId = :id');
        $this->db->bind(':id' , $id);
        return $this->db->register();
    }
}
