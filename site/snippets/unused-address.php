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


<?php slot('one') ?>
<ul>
    <?php foreach ($page->images() as $image)
    <li>
        <a href="<?= $image->url() ?>">
        <?= $image->resize(700, 500) ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>
<?php endslot() ?>

<?php slot('two') ?>
two
<?php endslot() ?>

<?php slot('three') ?>
three
<?php endslot() ?>

<?php slot('four') ?>
four
<?php endslot() ?>

<?php endslot() ?>

</main>



<?php slot('header') ?>

<?php endslot()
/** not working */
?>

<?php $mylocation = $page->myGeoLocation()->toLocation() ?>

Name: <?= $mylocation->name() ?>
Latitude: <?= $mylocation->lat() ?>
Longitude: <?= $mylocation->lng() ?>

<?php snippet('map', ['lng' => '<?= $page->lng()?>', 'lat' => '<?= $page->lat()?>']) ?>


<?php slot('header') /* main slot in layout template */ ?>

<?php endslot() /* closes header slot in layout template */ ?>

ad code below

<aside class=" bg-gray-100 m-2 p-2  border-solid border-2 border-gray-200">
<!--page shuffle-->
<?php
/*
        This returns the first random ad. 
        TODO ads template edited container, but still not right. 
        Built quickly as a placeholder
    */
$featured = page('ads')->children()->shuffle()->first();
?>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div class="max-h-64">
        <?= $featured->image()->resize(400, 300) ?>
    </div>
    <div>
        <h1 class="text-blue-800 my-4 text-5xl font-bold"><?= $featured->title() ?></h1>
        <h2><?= $featured->subtitle() ?></h2>
        <p><?= $featured->intro() ?></p>
        <a href="<?= $featured->link() ?>" class="inline-flex items-center m-3 px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg " target="_blank">
            Visit Website
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
<foote