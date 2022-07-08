<?php

class Post extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('postModel');
    }

    public function index()
    {
    }

    public function showPosts()
    {
        
    }

    public function addPost()
    {
        if (isset($_SESSION['user_data_credentials']['userId'])) {
            if (isset($_POST['public_post'])) {
                if (isset($_FILES['upload_photos'])) {
                    if ($_FILES['upload_photos']['error'] != '5') {
                        if ($_FILES['upload_photos']['type'] == "image/png" || $_FILES['upload_photos']['type'] == "image/jpg" || $_FILES['upload_photos']['type'] == "image/jpeg") {


                            $name = date('dmY') . random_int(0, 10000);
                            $_FILES['upload_photos']['name'] = $name;
                            $imgName =  $_FILES['upload_photos']['name'];
                            $type = explode('/', $_FILES['upload_photos']['type']);
                            $move = 'C:/xampp/htdocs/redsocial/public/img/uploads/posts/' . $imgName . '.' . $type[1];
                            $file = $_FILES['upload_photos']['tmp_name'];

                            if (move_uploaded_file($file, $move)) {
                                $data = [
                                    'user' => $_SESSION['user_data_credentials']['userId'],
                                    'text' => trim($_POST['public_post']),
                                    'type' => 1,
                                    'path' => '/redsocial/public/img/uploads/posts/' . $imgName . '.' . $type[1]
                                ];

                                if($this->postModel->addPost($data)) {
                                    echo 'true';
                                } else {
                                    echo 'false';
                                }
                            } else {
                                
                            }
                        } else {
                            echo "The image format isn't allow";
                        }
                    } else {
                        echo "The image can't be read";
                    }
                } else {
                    $data = [
                        'user' => $_SESSION['user_data_credentials']['userId'],
                        'text' => trim($_POST['public_post']),
                        'type' => 1,
                        'path' => null
                    ];

                    if($this->postModel->addPost($data)) {
                        echo 'true';
                    } else {
                        echo 'false';
                    }
                }
            }
        }
    }

    public function getFriends()
    {
       
    }

    public function getLastPost()
    {   
      
        
    }

    public function deletePost()
    {
    }
}
