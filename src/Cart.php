<?php
include_once "CartProduct.php";

class Cart {
    private $cartProducts = [];
    private $user;
    private $cupom;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function setUser(User $user) {
        $this->user = $user;
    }

    public function getNumberOfItens() {
        return count($this->cartProducts);
    }

    public function addProduct(Product $product) {
        $this->cartProducts[] = new CartProduct($product);
    }

    public function removeProduct(Product $product) {

    }

    public function setQuantityItem(Product $product, $quantity) {
        foreach ($this->cartProducts as $cartProduct) {
            if ($cartProduct->__get("product")->__get("id") == $product->id) {
                $this->cartProducts[0]->__set("quantity", $quantity);
                break;
            }
        }
    }

    public function getSubTotal() {
        $price = 0;

        foreach ($this->cartProducts as $cartProduct) {
            $price += $cartProduct->totalValue();
        }

        return $price;
    }

    public function getShippingValue() {
        return 10;
    }

    public function getTotalValue() {
        if ($this->cupom) return $this->cupom->calculateDiscount($this->getSubTotal()) + $this->getShippingValue();

        return $this->getSubTotal() + $this->getShippingValue();
    }

    public function shippingAddress(Address $address) {

    }

    public function addCupom(Cupom $cupom) {
        $this->__set("cupom", $cupom);
    }

}
?>