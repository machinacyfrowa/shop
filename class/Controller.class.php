<?php
class Controller {
    private $view;
    private $category;
    private $product;
    public function __construct()
    {
        if(isset($_REQUEST['view']))
            $this->view = $_REQUEST['view'];
        else
            $this->view = "catalog"; //domyślny widok
        if(isset($_REQUEST['category']))
            $this->category = $_REQUEST['category'];
        else 
            $this->category = null;
        if(isset($_REQUEST['product']))
            $this->product = $_REQUEST['product'];
        else 
            $this->product = null;
        $this->view();
    }
    public function view() 
    {
        switch($this->view) 
        {
            case 'catalog':
                echo "Wyswietlam katalog";
                if($this->category != null)
                    echo "Wyświetlam kategorie o id="+$this->category;
            break;
            case 'product':
                if($this->product != null)
                    echo "Wyświetlam produkt o id="+$this->product;
                else echo "Błąd - brak id produktu";
            break;
        }
    }
}
?>

<!-- przykładowe wywołania 
<a href="index.php?view=catalog&category=1">
<a href="index.php?view=product&product=1">
<a href="index.php?view=cart">
<a href="index.php?view=profile">

-->