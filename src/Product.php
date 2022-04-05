<?php

class Product {
    private $id;
    private $name;
    private $price;
    private $colors;
    private $sizes;
    private $description;
    private $stars;
    private $images;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function save() {

    }

}
?>