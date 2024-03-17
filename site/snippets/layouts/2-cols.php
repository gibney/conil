<?= $slots->title() ?? $page->title() ?>
<div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">
    <div class="bg-white border border-gray-200 rounded-sm shadow">
        <?= $slots->one() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow">
        <?= $slots->two() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->three() ?>
    </div>
    <div class="bg-white border border-gray-200 rounded-sm shadow p-2">
        <?= $slots->four() ?>
    </div>
</div>