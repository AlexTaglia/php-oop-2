<?php

class Product {
    public $price;
    public $category;
}

class TechProduct extends Product{
    
    public function __construct()
    {
        $this->category = 'Tech Product';
    }
}

class HomeProduct extends Product{

    public function __construct()
    {
        $this->category = 'Home Product';
    }
}