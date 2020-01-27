
<?php
    require_once('view/head.php');
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-2"> <!-- sidebar -->
          <?php require_once('view/sidebar.php'); ?>
        </div>
        <div class="col-10"><!-- main -->
          <div class="row">
            <?php $c->showProducts(); ?>
          </div>
        </div>
      </div>
    </div><!--/container-->

<?php
require_once('view/foot.php');
?>