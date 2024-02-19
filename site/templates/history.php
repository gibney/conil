<?php   snippet('layouts/layout', slots: true); ?>
<?php slot('header');
    snippet('menus/menu');
    snippet('menus/menu-breadcrumb');
    endslot(); ?>
<?php endsnippet(); ?>
<?php   snippet('article', slots: true); ?>
    
    <?php slot('heading');?>
        <?= $page->heading() ?>
    <?php endslot(); ?>

    <?php slot('subheading');?>
        <?= $page->subheading() ?>
    <?php endslot(); ?>

    <?php slot('lead');?>
        <?= $page->lead() ?>
    <?php endslot(); ?>
    
    <?php slot('main');?>
        <?= $page->text() ?>
    <?php endslot(); ?>

    <?php slot('image');?>
        <?= $page->image() ?>
    <?php endslot(); ?>

    <?php slot('sidebar');?>
        <?php snippet('menu/menu-history') ?>
    <?php endslot(); ?>
    
<?php endsnippet(); ?>