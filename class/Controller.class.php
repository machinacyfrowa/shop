<?php
require_once('class/Catalog.class.php');
class Controller {
    private $view;
    private $productId;
    public function __construct()
    {
        if(isset($_REQUEST['view'])) 
            $this->view = $_REQUEST['view'];    
        if(isset($_REQUEST['productId'])) 
            $this->productId = $_REQUEST['productId'];    
    }
    public function view() 
    {
        switch($this->view) 
        {
            case 'catalog': 
                //utwórz globalną zmienną $c do której odnosimy się w catalog.php 
                global $c;
                $c = new Catalog();
                include('view/catalog.php');
            break;
            case 'product':
                global $c;
                //utwórz pomocniczo katalog
                $c = new Catalog();
                //przygotuj globalną zmienną na produkt
                global $p;
                //zaczytaj produkt do zmiennej
                $p = $c->getProduct($this->productId);
                include('view/product.php');
            break;
        }
    }
}

?>