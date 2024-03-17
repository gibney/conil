<?php snippet('layout-map', slots: true) ?>


<?php snippet('menus/menu') ?>
<?php snippet('menus/menu-acc') ?>
<?php snippet('menus/menu-breadcrumb') ?>


<?php snippet('layouts/2-cols', slots: true) ?>

<?php slot('one') ?>
<?= image() ?>
<?php endslot() ?>

<?php slot('two') ?>
<div id="map"></div>
<?php endslot() ?>

<?php slot('three') ?>
<a href="<?= $page->link() ?>" target="_blank">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $page->title() ?></h5>
</a>
<p class="mb-1 text-base font-normal text-orange-700">

    <?php if ($page->star()->isNotEmpty()) : ?>
        <?= $page->star() ?> Star Hotel<br>
    <?php endif ?>

    <?php if ($page->rating()->isNotEmpty()) : ?>
        <?= $page->rating() ?> Rating on Booking.com<br>
    <?php endif ?>

</p>
<p class="mb-2 text-base font-normal text-gray-500">

    <?php if ($page->beach()->isNotEmpty()) : ?>
        <?= $page->beach() ?> to the beach.<br>
    <?php endif ?>

    <?php if ($page->centre()->isNotEmpty()) : ?>
        <?= $page->centre() ?> into Conil old town.<br>
    <?php endif ?>

    <?php if ($page->rooms()->isNotEmpty()) : ?>
        <?= $page->rooms() ?> rooms.<br>
    <?php endif ?>

</p>

<p class="mb-1 text-base font-normal text-gray-700">
    <?= $page->intro() ?>
</p>
<?php endslot() ?>

<?php slot('four') ?>
<p class="mb-1 text-base font-normal text-gray-700">
    <?= $page->description() ?>
</p>
<a href="<?= $page->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300" target="_blank">
    Check Availability
    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
    </svg>
</a>
<?php endslot() ?>

<?php endsnippet() ?>
<?php endsnippet() ?>