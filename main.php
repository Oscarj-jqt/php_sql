<?php

/*
require_once("Product.php");
require_once("Shop.php");*/

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

// main

$shop = new Shop();
$shop->displayProducts();


$user->getCart()->display();
?>