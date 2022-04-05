<?php

class User {
    private $name;
    private $lastName;
    private $gender;
    private $birthDay;
    private $cellphone;
    private $cpf;
    private $email;
    private $password;
    private $newsletter;
    private $adresses;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function save() {

    }

    public function payOrder(Order $order) {

    }

    public function getOrders() {
        
    }

    public function addAddress(Address $address) {
        $this->adresses[] = $address;
    }

    public function getAddress() {

    }

    public function getFavorites() {
        return new Product();
    }

    public function listAdresses() {
        return json_encode($this->adresses);
    }

}
?>