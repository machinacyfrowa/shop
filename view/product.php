<?php

  include('head.php');
?>
   
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <?php $c->showCategoryList(); ?>
        </div>
        <div class="col-10">
          <div class="row">
            <?php 
            if($p != null)
              $p->showProduct(); 
            else
              echo "nie wybrano produktu";
            ?>
          </div>
        </div>
      </div>
      <div class="row">
        <footer class="col-12">
          Stopka
        </footer>
      </div>
    </div><!--/container-->

<?php include('foot.php'); ?>