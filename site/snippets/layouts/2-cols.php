
<h1 class="my-4 text-5xl font-extrabold"><?= $page->title() ?>
    <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small>
</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->one() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->two() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->three() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->four() ?>
    </div>
</div>