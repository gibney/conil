<?php snippet('layouts/bath', slots: true) ?>

<?php snippet('menus/menu-acc') ?>

<?php snippet('bath', slots: true) ?>

<?php slot('title') ?>
To be fair
<?php endslot() ?>

<?php slot('sidebar') ?>
<figure>
    <p class="figure mb-3">
        <?= $page->image() ?>
    </p>
    <figcaption>Author: Squirrely Dan</figcaption>
</figure>
<?php endslot() ?>

<?php slot('text') ?>
<?= $page->text() ?> <?= $page->intro() ?>
hard coded
<?php endslot() ?>

<?php endsnippet() ?>

<?php endsnippet() ?>