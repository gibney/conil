<?php snippet('layouts/layout-acc', slots: true)  /* layout-acc slot */ ?> 
    
    <?php snippet('layouts/2-cols', slots: true) ?>
    <?php slot('one') ?>
        <?php
        $hotels = page('accommodation/hotels')->children()->shuffle()->first();
        $hotel = page('accommodation/hotels');
        ?>
        <a href="<?= $hotel->url() ?>">
            <div class="relative">
                <?= $hotels->image() ?>
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <?= $hotel->title() ?></h1>
            </div>
        </a>
    <?php endslot() ?>

    <?php slot('two') ?>
        <?php
        $apartments = page('accommodation/apartments')->children()->shuffle()->first();
        $apartment = page('accommodation/apartments');
        ?>
        <a href="<?= $apartment->url() ?>">
            <div class="relative">
                <?= $apartments->image() ?>
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <?= $apartment->title() ?></h1>
            </div>
        </a>
    <?php endslot() ?>

    <?php slot('three') ?>
        <?php
        $houses = page('accommodation/houses')->children()->shuffle()->first();
        $house = page('accommodation/houses');
        ?>
        <a href="<?= $house->url() ?>">
            <div class="relative">
                <?= $houses->image() ?>
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <?= $house->title() ?></h1>
            </div>
        </a>
    <?php endslot() ?>

    <?php slot('four') ?>
        <?php
        $campsites = page('accommodation/campsites')->children()->shuffle()->first();
        $campsite = page('accommodation/campsites');
        ?>
        <a href="<?= $campsite->url() ?>">
            <div class="relative">
                <?= $campsites->image() ?>
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <?= $campsite->title() ?></h1>
            </div>
        </a>
    <?php endslot() ?>
          
    <?php endsnippet()  /* /2-col slot */ ?>

<?php endsnippet()  /* /layout-acc slot */ ?>