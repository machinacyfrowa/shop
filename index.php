<?php
  include('view/head.php');
  require_once('class/Catalog.class.php');
  $c = new Catalog();

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
      <div class="row">
        <footer class="col-12">
          Stopka
        </footer>
      </div>
    </div><!--/container-->

<?php include('view/foot.php'); ?>