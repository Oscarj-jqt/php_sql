<?php

// Interface pour la récupération des produits
// Les autres classes vont imlpémenter cette interface 
// avec DbProductProvider (récupère depuis la BDD)



interface IProduct {

    public function getProducts() : array;
    public function getProductById(int $id) : Product;
}