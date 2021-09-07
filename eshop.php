<?php

class EShop {
    public $name;
    public $address;
    protected $users = [];
    protected $products = [];    

    public function __construct(string $name, string $address){
        $this->name = $name;
        $this->address = $address;   
    }

    public function getUsers() {
        return $this->users;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getCart() {
        return $this->cart;
    }

    public function addPorduct(Product $productaName) {
        $this->products[] = $productaName;
    }

    public function addUsers(User $user) {
        $this->users[] = $user;
    }
}