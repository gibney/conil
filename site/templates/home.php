<?php snippet('layouts/layout', slots: true) ?>

<?php snippet('home', slots: true) ?>

<?php slot() ?>
  <div class=" object-cover">
    <div>
    <?= $page->image() ?>
    </div>
  </div>

<?php foreach ($site->children()->listed()->shuffle() as $item) : ?>
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <div class="p-5">
            <a href="<?= $item->link() ?>" target="_blank">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> <?= $item->title() ?></h5>
                <?= $item->image() ?>
            </a>
            <p class="mb-1 text-base font-normal text-gray-700">
                <?= $item->intro() ?>
                <?= $item->text() ?>
            </p>

        </div>
    </div>
<?php endforeach ?>
<?php endslot() ?>
<?php endsnippet(); ?>
<?php endsnippet(); ?>