<?php snippet('layouts/layout', slots: true); ?>

    <?php slot('header');
    snippet('menus/menu');
    snippet('menus/menu-acc');
    snippet('menus/menu-breadcrumb');
    endslot(); ?>

    <?php slot('main'); ?>    
        <?php snippet('layouts/apartments'); ?>
    <?php endslot(); ?>
    
<?php endsnippet(); ?>
