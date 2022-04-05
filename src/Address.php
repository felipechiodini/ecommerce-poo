<?php

class Address {
    private $user;
    private $cep;
    private $street;
    private $number;
    private $district;
    private $city;
    private $state;
    private $country;
    private $complement;
    private $receiver;
    private $allowWithdrawal;
    private $main;

    public function __construct($cep) {
        $this->getDataCep($cep);
    }

    public function getDataCep($cep) {
        require_once "Curl.php";

        $response = Curl::request("GET", "https://viacep.com.br/ws/{$cep}/json/");

        $this->cep = $response->data->cep;
        $this->street = $response->data->logradouro;
        $this->district = $response->data->bairro;
        $this->city = $response->data->localidade;
        $this->state = $response->data->uf;
    }

    public function setUser(User $user) {
        $this->user = $user;
    }

    public function save() {

    }

    public function delete() {

    }

}
?>