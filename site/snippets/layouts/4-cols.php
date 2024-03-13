<!-- TODO 1-2-4 coloumn grid wrapper. Removed 3 col and small card size 15_2_24 -->
<h1 class="my-4 text-5xl font-extrabold"><?= $page->title() ?>
    <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small>
</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

    <?= $slot ?>

</div>