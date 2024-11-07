<?php

// Définit de l'espace de nom de la classe en 1er
namespace Oj\Classicmodels\Entity;

class ProductLine 
{
    // propriété publique de la classe définissant ligne de produit
    public string $productLine;

    
    public function __construct(string $name)
    {
        // initialisation de productLine avec $name
        $this->productLine = $name;
    }

    // La méthode toString renvoie en string l'objet productLine ici
    public function __toString(): string
    {
        // Retourne une représentation de la classe, ici on utilise la propriété $productLine
        return $this->productLine;
    }
    public function f(int $y): int
    {
        return $x;
    }

    public function getProductLines(): array
    {
        return $this->getProductLines;
    }

}





?>

