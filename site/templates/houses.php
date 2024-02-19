<?php snippet('layouts/layout', slots: true); ?>

    <?php slot('header');
    snippet('menus/menu');
    snippet('menus/menu-acc');
    snippet('menus/menu-breadcrumb');
    endslot(); ?>

    <?php slot('main'); ?>
      <p class="my-2">
        <?= $page->intro() ?>
      </p>  
        <?php snippet('layouts/houses'); ?>

    <?php endslot(); ?>
    
<?php endsnippet(); ?>