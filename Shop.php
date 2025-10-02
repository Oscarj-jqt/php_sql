<?php

class Shop 
{

	private IProduct $provider;
	public function __construct(IProduct $provider){
		$this->provider = $provider;
	
	}

	public function displayProducts(){
        foreach($this->provider->getProducts() as $product) {
            $product->display();
        }
    }

	public function getProductById(int $id): Product {
        return $this->provider->getProductById($id);
    }
}