<?php

class Controller extends AuthVerified
{

    public function autenticate()
    {
        if(!$this->getAuth()) {
           return false;
        } else {
            return true;
        }
    }


    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function view($view , $params = [])
    {
        if(file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        }
    }
}