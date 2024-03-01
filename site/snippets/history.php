<div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-4">

    <div class="sm:col-span-1 md:col-span-2 lg:col-span-3">
        <?php snippet('menus/menu-history')?>
    </div>

    <div class="sm:col-span-1 md:col-span-4 lg:col-span-7">
        <div>
            <h1 class="my-4 text-4xl font-bold"><?= $page->heading() ?>
            <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small></h1>
        </div>
        <div>
            <?= $page->lead() ?>
        </div>
        <div>
            <?= $page->text() ?>
        </div>
    </div>
    <div class="sm:col-span-1 md:col-span-0 lg:col-span-2">
    ad
    </div>
</div>