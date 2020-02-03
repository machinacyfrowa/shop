<?php
require_once('Product.class.php');
require_once('Category.class.php');
class Catalog {
    private $products;
    private $categoryList;

    public function __construct() {
        $this->products = Array();
        $this->categoryList = Array();
        $this->loadTestData();
    }

    public function addProduct(Product $p) {
        array_push($this->products, $p);
    }

    public function addCategory(Category $c) {
        array_push($this->categoryList, $c);
    }
    public function showProducts() {
        foreach ($this->products as $product) {
            $product->showProduct();
        }
    }
    public function showCategoryList() {
        $buffer = "<ul>";
        foreach ($this->categoryList as $category) {
            $buffer .= "<li>" . $category->name . "</li>";
        }
        $buffer .= "</ul>";
        echo $buffer;
    }
    public function loadTestData() {
        $cat1 = new Category("Category 1");
        $cat2 = new Category("Category 2");
        $this->addCategory($cat1);
        $this->addCategory($cat2);
        $p1 = new Product(1, "Produkt 1", 44.80, "product1.png", 0.2);
        $p2 = new Product(2, "Produkt 2", 12.40, "product2.png", 0.3);
        $p3 = new Product(3, "Produkt 3", 5.60, "product3.png", 0.23);
        $p4 = new Product(4, "Produkt 4", 11.20, "product4.png", 0.5);
        $this->addProduct($p1);
        $this->addProduct($p2);
        $this->addProduct($p3);
        $this->addProduct($p4);
    }
}
?>