<?php 

include_once "User.php";
include_once "Session.php";
include_once "Cart.php";
include_once "Product.php";
include_once "Cupom.php";
include_once "Address.php";

$session = new Session();

$user = new User();
$user->__set("email", "felipechiodinibona@hotmail.com");
$user->__set("password", "132567");


$adresses[] = new Address("89253390");
$adresses[] = new Address("89257550");
$adresses[] = new Address("40015970");

foreach ($adresses as $address) {
    $user->addAddress($address);
}

print_r($user->listAdresses());


$login = $session->login($user);

$cupom = new Cupom("FLP265");

$product = new Product();
$product->__set("id", "89452");
$product->__set("name", "Iphone");
$product->__set("price", 100);

$cart = new Cart();
$cart->setUser($user);
$cart->addProduct($product);
$cart->setQuantityItem($product, 3);
$cart->addCupom($cupom);

echo $cart->getTotalValue();


?>
