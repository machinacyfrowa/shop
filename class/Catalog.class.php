<?php
require_once('Product.class.php');
require_once('Category.class.php');
class Catalog {
    private $products;
    private $categoryList;

    public function __construct() {
        $this->products = Array();
        $this->categoryList = Array();
    }

    public function addProduct(Product $p) {
        array_push($this->products, $p);
    }

    public function getProduct($id) {
        return $this->products[$id];
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
}
?>