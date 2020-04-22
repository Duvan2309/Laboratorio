<?php

include_once "person_model.php";

class user_model extends person_model
{
    private $username;
    private $password;

    public function __construct($id, $name, $identification, $email, $phone, $username, $password)
    {
        parent::__construct($id, $name, $identification, $email, $phone);
        $this->username = $username;
        $this->password = $password;
    }
}


?>