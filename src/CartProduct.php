<?php

class CartProduct {
    private $product;
    private $size;
    private $quantity;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function totalValue() {
        return $this->product->__get("price") * $this->quantity;    
    }

}
?>