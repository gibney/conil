<!-- Use template to add microformat to data on site -->
<p class="h-card">
    <img class="u-photo" src="https://example.org/photo.png" alt="" />
    <a class="p-name u-url" href="https://example.org">Joe Bloggs</a>
    <a class="u-email" href="mailto:jbloggs@example.com">jbloggs@example.com</a>,
    <span class="p-street-address">17 Austerstræti</span>
    <span class="p-locality">Reykjavík</span>
    <span class="p-country-name">Iceland</span>
</p>


<?php if ($lang = $slots->lang()) : ?>
    <?= $lang ?>
<?php else : ?>
    en
<?php endif ?>

from accommodation.php
<?php slot('header');
snippet('menus/menu');
snippet('menus/menu-acc');
snippet('menus/menu-breadcrumb');
endslot() ?>

<?php slot('header') ?>
<?php snippet('menus/menu') ?>
<?php snippet('menus/menu-acc') ?>
<?php snippet('menus/menu-breadcrumb') ?>
<?php endslot() ?>

<?php
/* 
    The layouts/layout template is used for most pages.
    header slot: calls the menu's to include on the page.
    main slot: calls the layouts/template to be used in the body.
*/
snippet('layout', slots: true);
slot('header');
snippet('menus/menu');
snippet('menus/menu-acc');
snippet('menus/menu-breadcrumb');
endslot(); ?>


<?php snippet('layouts/4-cols') ?>
<?php slot() ?>