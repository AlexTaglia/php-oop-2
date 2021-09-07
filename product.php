<?php

class Product {
    public $price;
    public $category;
    public $name;
    public $description;
}

class TechProduct extends Product{
    
    public function __construct(string $name, string $description, int $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = 'Tech Product';
    }
}

class HomeProduct extends Product{

    public function __construct(string $name, string $description, int $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = 'Home Product';
    }
}