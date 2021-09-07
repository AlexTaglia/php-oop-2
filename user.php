<?php

class User {
    protected  $name;
    protected  $surname;
    protected  $email;
    protected  $password;
    protected  $creditCard = [
        "number" => "",
        "expireDate" => "",
    ];

    protected  $cart = [];
    protected  $cartTotal = 0;

    public function __construct(string $name, string $surname, string $email, string $password,float $creditCardNumber,string $expireDate ){
        $this->name = $name;
        $this->surname = $surname;   
        $this->email = $email;   
        $this->password = $password; 
        $this->creditCard['number'] = $creditCardNumber;
        $this->creditCard['expireDate'] = $expireDate;  
    }

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }

    public function addPorduct(Product $productaName) {
        $this->cart[] = $productaName;
    }
   
    public function totalToPay(){
        foreach($this->cart as $item)
            $this->cartTotal += $item->price;
        return $cartTotal;
    }
}

class PremiumUser extends User{
    protected $discount = 49;
}
