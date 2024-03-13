<!-- 2 column grid for the main accommodation types -->

<?= $slots->title() ?? $page->title() ?>
<div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">
    <div class="bg-gray-100">
        <?= $slots->one() ?>
    </div>
    <div class="bg-gray-100">
        <?= $slots->two() ?>
    </div>
    <div class="bg-gray-100">
        <?= $slots->three() ?>
    </div>
    <div class="bg-gray-100">
        <?= $slots->four() ?>
    </div>
</div>