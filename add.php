<?php

spl_autoload_register(function ($class) 
{
	if( file_exists($class.'.php') == true ) 
		include $class.'.php';
});

session_start();

if ( isset($_SESSION['user']) == false ){
	$user = new User();
	$_SESSION['user'] = $user;
} else {
	$user = $_SESSION['user'] ;
}

$shop = new Shop();

$product = $shop->getProductById($_POST['productId']);
$user->addToCart($product, intval($_POST['quantity']));

header('Location: main.php');