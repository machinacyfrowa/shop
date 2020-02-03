<?php
require_once('class/Catalog.class.php');
class Controller {
    private $view;

    public function __construct()
    {
        if(isset($_REQUEST['view'])) 
            $this->view = $_REQUEST['view'];    
    }
    public function view() 
    {
        switch($this->view) 
        {
            case 'catalog':
                
                include('view/catalog.php');
            break;
            case 'product':
          
                include('view/product.php');
            break;
        }
    }
}

?>