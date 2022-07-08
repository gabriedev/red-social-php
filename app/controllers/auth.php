<?php

class Auth extends Controller
{
    public function __construct()
    {
        $this->adminAuth = $this->model('authModel');
    }

    public function index()
    {
        if($this->autenticate()) {
            $this->view('pages/home');
        } else {
            $this->view('pages/auth');
        }
    }

    public function comfirmEmail()
    {
        $email = trim($_POST['email']);
       
        $confirmEmail = $this->adminAuth->comfirmEmail($email);

        echo $confirmEmail['userId'];
    }

    public function confirmUsername()
    {
        $username = trim($_POST['user']);
        $confirmUser = $this->adminAuth->confirmUsernameModel($username);
        echo $confirmUser;
    }

    public function confirmPassword() 
    {
        $data = [
            'passwordHash' => password_hash(trim($_POST['password']) , PASSWORD_DEFAULT),
            'passwordConfirm' => trim($_POST['passwordConfirm'])
        ];

        if(password_verify($data['passwordConfirm'] , $data['passwordHash'])) {
            echo true;
        } else {
            echo false;
        }
    }

    public function addUser() 
    {
        $data = [
            'email'     => trim($_POST['email']),
            'user'      => trim($_POST['user']),
            'password'  => password_hash(trim($_POST['password']) , PASSWORD_DEFAULT)
        ];

        $response = $this->adminAuth->addUserModel($data);

        echo $response;
    }

    public function login()
    {
        $data = [
            'username' => trim($_POST['user']),
            'password' => trim($_POST['password'])
        ];

        $dataUser = $this->adminAuth->confirmUsernameModel($data['username']);

        if(!is_null($dataUser['userId'])) {
            $password = $this->adminAuth->confirmPassword($dataUser['userId']);
            if(password_verify($data['password'] , $password['password'])) {
                $dataUserLogin = $this->adminAuth->getLoginData($dataUser['userId']);
                $_SESSION['user_data_credentials'] = $dataUserLogin;
                echo json_encode(['Todo los datos fueron validados, redirigiendo' , 'true']);
            } else {
                echo json_encode(['El usuario y/o la contraseña no coinciden' , 'false']);
            }
        } else {
            echo json_encode(['El usuario y/o la contraseña no coinciden' , 'false']);
        }
    }
}