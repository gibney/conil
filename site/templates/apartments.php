<?php snippet('layout', slots: true) ?>

<?php snippet('menus/menu') ?>
<?php snippet('menus/menu-acc') ?>
<?php snippet('menus/menu-breadcrumb') ?>

<?php snippet('layouts/4-cols', slots: true) ?>

<?php slot() ?>
<?php foreach ($page->children()->listed()->shuffle() as $apartment) : ?>
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <a href="<?= $apartment->link() ?>" target="_blank">
            <?= $apartment->image() ?>
        </a>
        <div class="p-5">
            <a href="<?= $apartment->link() ?>" target="_blank">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $apartment->title() ?></h5>
            </a>

            <?php if ($apartment->rating()->isNotEmpty()) : ?>
                <p class="mb-1 text-base font-normal text-orange-700">
                    <?= $apartment->rating() ?> Rating on Booking.com<br>
                </p>
            <?php endif ?>

            <p class="mb-2 text-base font-normal text-gray-500">

                <?php if ($apartment->beach()->isNotEmpty()) : ?>
                    <?= $apartment->beach() ?> to the beach.<br>
                <?php endif ?>

                <?php if ($apartment->centre()->isNotEmpty()) : ?>
                    <?= $apartment->centre() ?> into Conil old town.<br>
                <?php endif ?>

                <?php if ($apartment->bedrooms()->isNotEmpty()) : ?>
                    <?= $apartment->bedrooms() ?> bedrooms.<br>
                <?php endif ?>

            </p>
            <p class="mb-1 text-base font-normal text-gray-700">
                <?= $apartment->intro() ?>
            </p>
            <a href="<?= $apartment->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300" target="_blank">
                Check Availability
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
<?php endforeach ?>
<?php endslot() ?>
<?php endsnippet(); ?>
<?php endsnippet(); ?>