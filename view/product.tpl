    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          
        </div>
        <div class="col-10">
          <div class="row">
            <div class="col-3 text-center">
              <a href="index.php?view=product&productId={$product.id}">
                <h1>{$product.name}</h1>
              </a>
              <img src="{$product.image}" class="img-fluid">
              <h3>{$product.price}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <footer class="col-12">
          Stopka
        </footer>
      </div>
    </div><!--/container-->