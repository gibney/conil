<?php   snippet('layouts/layout', slots: true); ?>

    <?php slot('header');
snippet('menus/menu');
endslot(); ?>

    <?php slot('main'); ?>
      <p class="my-2">
        <?= $page->intro() ?>
      </p>  
    <?php endslot(); ?>
    
<?php endsnippet(); ?>