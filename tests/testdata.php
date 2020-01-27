<?php
$c = new Catalog();
    $cat1 = new Category("Category 1");
    $cat2 = new Category("Category 2");
    $c->addCategory($cat1);
    $c->addCategory($cat2);
    $p1 = new Product(1, "Produkt 1", 44.80, "product1.png", 0.2);
    $p2 = new Product(2, "Produkt 2", 12.40, "product2.png", 0.3);
    $p3 = new Product(3, "Produkt 3", 5.60, "product3.png", 0.23);
    $p4 = new Product(4, "Produkt 4", 11.20, "product4.png", 0.5);
    $c->addProduct($p1);
    $c->addProduct($p2);
    $c->addProduct($p3);
    $c->addProduct($p4);
?>