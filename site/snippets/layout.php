<?php snippet('layouts/top')?>
<body  class="container mx-auto px-4 bg-orange-100">  
    <?php snippet('layouts/ads')?>
    <!-- TODO header - Insert the menus required in the templates/file -->
    <header class="header">
        <?= $slots->header() ?>
    </header>  
    <main class="main">
        <?= $slots->main() ?>
    </main>
<?php snippet('layouts/bottom') ?>