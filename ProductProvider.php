<?php

class ProductProvider implements IProduct {
    private array $products;

    public function __construct() {
        $this->products = [];
        $this->products[] = new Product(1, "Chaise", 30);
        $this->products[] = new Product(2, "Table", 150);
        $this->products[] = new Product(3, "Gourde", 15);
    }

    public function getProducts(): array {
        return $this->products;
    }
    public function getProductById(int $id): Product {
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        throw new Exception("Product not found");
    }
}