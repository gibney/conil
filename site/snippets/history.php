<div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-4 ">

    <div class="sm:col-span-1 md:col-span-2 lg:col-span-3">
        <?php snippet('menus/menu-history') ?>
    </div>

    <?= $slot ?>

    <div class="sm:col-span-1 md:col-span-2 lg:col-span-3">
        tags here
        <hr class="h-px my-8 bg-gray-400 border-0">

    </div>
</div>