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
{include file="foot.tpl"}   