<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $role;
    public $status;
}

