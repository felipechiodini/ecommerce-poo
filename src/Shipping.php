<?php

class Shipping {
    private $address;

    public function __construct(Address $address) {
        $this->address = $address;
    }

    public function getShippingValue() {
        return 10;
    }

}
?>