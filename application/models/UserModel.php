<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function validateUser($email)
    {
        return $this->db->get_where('user', array('email' => $email));
    }
}
