<?php

class AuthVerified
{
    public function getAuth() 
    {
        if(isset($_SESSION['user_data_credentials'])) {
            return true;
        } else {
            return false;
        }
    }
}