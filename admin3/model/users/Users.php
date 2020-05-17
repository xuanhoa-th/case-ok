<?php
namespace Model;

class Users
{
    public $id;
    public $name;
    public $phone;
    public $address;
    public $email;
    public $password;
    public $status;

    public function __construct($name,$phone,$address,$email,$password,$status)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
    }

}