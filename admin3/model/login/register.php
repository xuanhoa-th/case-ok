<?php


namespace Model;


class register
{
    public $name;
    public $address;
    public $phone;
    public $email;
    public $password;

    public function __construct($name,$phone,$address,$email,$password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

}