<?php
class Product {
    private $id;
    private $name;
    private $price;
    private $imageUrl;
    private $discount;

    public function __construct($i, $n, $p, $u, $d) {
        $this->id = $i;
        $this->name = $n;
        $this->price = $p;
        $this->imageUrl = $u;
        $this->discount = $d;
    }

    public function showProduct() {
        $buffer = '<div class="col-3 text-center">';
        $buffer .= '<h1>' . $this->name . '</h1>';
        $buffer .= '<img src="' . $this->imageUrl . '" class="img-fluid">';
        if($this->discount != 0) {
            $newPrice = $this->price * ( 1 - $this->discount );
            $buffer .= '<h3 style="color: red;">' . $newPrice . '</h3>';
        } else {
            $buffer .= '<h3>' . $this->price . '</h3>';
        }
        $buffer .= '</div>';
        echo $buffer;
    }
}
?>