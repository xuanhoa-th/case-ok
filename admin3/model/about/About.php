<?php
namespace Model;

class About
{
    public $id;
    public $name;
    public $image;
    public $content;
    public $status;


    public function __construct($name, $image, $content,$status)
    {
        $this->name = $name;
        $this->image = $image;
        $this->content = $content;
        $this->status = $status;
    }
}