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
                global $smarty;
                $smarty->assign('categoryList', $c->getCategoryList());
                $smarty->assign('productList', $c->getProductList());
                $smarty->display('catalog.tpl');
            break;
            case 'product':
                global $c;
                //utwórz pomocniczo katalog
                $c = new Catalog();
                global $smarty;
                $smarty->assign('categoryList', $c->getCategoryList());
                $smarty->assign('product', $c->getProduct($this->productId));
                $smarty->display('product.tpl');
            break;
        }
    }
}

?>