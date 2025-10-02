<?php
class DbProductProvider implements IProduct {
    public function getProducts(): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT id, name, price FROM products");
        $products = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $products[] = new Product($row['id'], $row['name'], $row['price']);
        }
        return $products;
    }

    public function getProductById(int $id): Product {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT id, name, price FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($row) {
            return new Product($row['id'], $row['name'], $row['price']);
        }
        throw new Exception("Product not found");
    }
}