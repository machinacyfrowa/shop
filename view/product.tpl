{include file="head.tpl"}   
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <ul>
            {foreach from=$categoryList item=category}
                <li>{$category.name}</li>
            {/foreach}
          </ul>
        </div>
        <div class="col-10">
          <div class="row">
            <div class="col-3 text-center">
              <a href="index.php?view=product&productId={$product.id}">
                <h1>{$product.name}</h1>
              </a>
              <img src="{$product.image}" class="img-fluid">
              {if isset($product.newPrice)}
              <h3 style="color: red;">{$product.newPrice}</h3>
              {else}
              <h3>{$product.price}</h3>
              {/if}
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
{include file="foot.tpl"}   