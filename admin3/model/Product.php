<?php


namespace Model;


class Product
{
    public $product_id;
    public $name;
    public $image;
    public $price;
    public $status;
    public $category_id;


    public function __construct($name, $image, $price,$status,$category_id)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->status = $status;
        $this->category_id = $category_id;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }



}