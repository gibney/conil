<!doctype html>
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
  <!--TODO remove testing only-->
  <link rel="stylesheet" href="/assets/css/test.css">
  <?= $slots->head() ?>
</head>
<body  class="container mx-auto px-4 bg-white">
    <!--header-->
    <header class="header">
        <?php snippet('menus/menu')?>
        <?= $slots->header() ?>
    </header>  

    <main class="main">
        <h1 class="my-4 text-5xl font-extrabold"><?= $page->title() ?>
        <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small></h1>

    <?= $page->intro() ?>
    <?= $page->text() ?>
    <?= $slots->main() ?>
      
    </main>

    <footer class="footer">
        <?php if ($footer = $slots->footer()): ?>
            <?= $footer ?>
        <?php else: ?>
            <hr class="h-px my-8 bg-gray-200 border-0">
             <a href="/panel">POPP008</a> 
             Conil Online &copy; <?= date('Y') ?>
             <a href="https://twitter.com/<?= $site->twitter() ?>">Twitter</a>
        <?php endif ?>
    </footer>
    
    <?= js('assets/js/app.js') ?>

</body>
</html>