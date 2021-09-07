<?php

class User {
    protected  $name;
    protected  $surname;
    protected  $email;
    protected  $password;
    protected  $discount = 0;
    protected  $creditCard = [
        "number" => "",
        "expireDate" => "",
    ];

    protected  $cart = [];
    protected  $cartTotal;

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
    
        if($this->discount === 0){
            foreach($this->cart as $item)
                $this->cartTotal += $item->price;
            return $this->cartTotal;
        } else {
            foreach($this->cart as $item)
                $this->cartTotal += $item->price;
            return $this->cartTotal - (($this->cartTotal /100)*$this->discount);
        }
    }
}

class PremiumUser extends User{
    protected $discount = 50;

}
