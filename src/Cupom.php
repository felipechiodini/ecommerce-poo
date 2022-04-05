<?php

class Cupom {
    private $code;
    private $discount = 50;
    private $type = "percent";

    public function __construct($code) {
        if ($this->checkExists($code)) {
            $this->__set("code", $code);
        }
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function save() {

    }

    public function checkExists($code) {
        if ($code == "FLP265") {
            return true;
        }

        return false;
    }

    public function calculateDiscount($value) {
        if ($this->type == "percent") return $value * ($this->discount / 100);
        else if ($this->type == "unit") return $value - $this->discount;
    }

}
?>