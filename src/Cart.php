<?php
include_once "CartProduct.php";

class Cart {
    private $user;
    private $cartProducts = [];
    private $shipping;
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
        $this->cartProducts[] = new CartProduct($product, 1);
    }

    public function removeProduct(Product $product) {
        unset($this->cartProducts[$product->__get("id")]);
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
        $amount = 0;

        foreach ($this->cartProducts as $cartProduct) {
            $amount += $cartProduct->getTotalValue();
        }

        return $amount;
    }

    public function getTotalValue() {
        return $this->getSubTotal() + $this->shipping->getShippingValue();
    }

    public function setShipping(Address $address) {
        $this->shipping = new Shipping($address);
    }

    public function addCupom(Cupom $cupom) {
        $this->__set("cupom", $cupom);
    }

}
?>