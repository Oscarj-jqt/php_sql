<?php
    $title = "Ce texte est importé";
    require_once __DIR__ . '/../templates/base.html.php';



    require_once __DIR__ . '/../vendor/autoload.php';
    use Oj\Classicmodels\Entity\ProductLine;
    use Oj\Classicmodels\DBAL\Connector;
// un autre use 

// Instance de la classe 
// $dbh = new Connector();
    $ppl1 = new ProductLine('Planes');
    $title = $ppl1->productLine;
    

?>
