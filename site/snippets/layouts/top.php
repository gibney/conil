<!doctype html>
<!-- TODO test this-->
<html class ="test" lang="<?php if ($lang = $slots->lang()): ?>
                <?= $lang ?>
            <?php else: ?>
                en
            <?php endif ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page->title() ?></title>
  <?= css('assets/css/styles.css') ?>
  <!-- TODO put in for build remove if not used-->
  <?= $slots->head() ?>
</head>