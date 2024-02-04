<?php snippet('layouts/layout', slots: true) ?>

<?php slot('header') ?>
    <?php snippet('menus/menu-acc') ?>
    <?php snippet('menus/menu-breadcrumb') ?>
<?php endslot()?>

<?php slot('main') ?>    
    <?php snippet('2-col-list') ?>
<?php endslot()?>
<?php endsnippet()?>