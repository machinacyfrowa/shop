<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sklep</title>
  </head>
  <body>
    <?php
    require_once('class/Catalog.class.php');
    $c = new Catalog();
    $c->addCategory("Category 1");
    $c->addCategory("Category 2");
    $p1 = new Product(1, "Produkt 1", 44.80, "product1.png", 0.2);
    $p2 = new Product(2, "Produkt 2", 12.40, "product2.png", 0.3);
    $p3 = new Product(3, "Produkt 3", 5.60, "product3.png", 0.23);
    $p4 = new Product(4, "Produkt 4", 11.20, "product4.png", 0.5);
    $c->addProduct($p1);
    $c->addProduct($p2);
    $c->addProduct($p3);
    $c->addProduct($p4);
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <?php $c->showCategoryList(); ?>
        </div>
        <div class="col-10">
          <div class="row">
            <?php $c->showProducts(); ?>
          </div>
        </div>
      </div>
    </div><!--/container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>