<?php snippet('layouts/top')?>
<body  class="container mx-auto px-4 bg-white">   
    <?php snippet('layouts/ads')?>
    <!--header-->
    <header class="header">
        <?= $slots->header() ?>
    </header>  
    <main class="main">
        <h1 class="my-4 text-5xl font-extrabold"><?= $page->title() ?>
        <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small></h1>
        <?= $slots->main() ?>
    </main>

    <?php snippet('layouts/bottom') ?>