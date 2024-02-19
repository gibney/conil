<!-- 2 column grid for the main accommodation types -->
<div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">  
    <div class="bg-gray-100">
        <?php
            /* 
            Create variables:
            hotels - gets a random image from the hotels
            hotel - gets the texts for the hotels section
            */
            $hotels = page('accommodation/hotels')->children()->shuffle()->first();
            $hotel = page('accommodation/hotels');
        ?>

        <a href="<?= $hotel->url() ?>">
            <?= $hotels->image()->resize(800, 600) ?>
            <h1><?= $hotel->title() ?></h1>
            <p><?= $hotel->intro() ?></p>
        </a>
    </div>
    <div class="bg-gray-100">
        <?php
            /* 
            Create variables:
            apartments - gets a random image from the apartments
            apartment - gets the texts for the apartments section
            */

            $apartments = page('accommodation/apartments')->children()->shuffle()->first();
            $apartment = page('accommodation/apartments');
        ?>
        <a href="<?= $apartment->url() ?>">
            <?= $apartments->image()->resize(800, 600) ?>
            <h1><?= $apartment->title() ?></h1>
            <p><?= $apartment->intro() ?></p>
        </a>
    </div>
    <div class="bg-gray-100">
            <?php
                /* 
                Create variables:
                houses - gets a random image from the houses
                house - gets the texts for the houses section
                */
                $houses = page('accommodation/houses')->children()->shuffle()->first();
                $house = page('accommodation/houses');
            ?>
            <a href="<?= $house->url() ?>">
                <?= $houses->image()->resize(800, 600) ?>
                <h1><?= $house->title() ?></h1>
                <p><?= $house->intro() ?></p>
            </a>
    </div>
    <div class="bg-gray-100">
            <?php
                /* 
                Create variables:
                campsites - gets a random image from the campsites
                campsite - gets the texts for the campsites section
                */
                $campsites = page('accommodation/campsites')->children()->shuffle()->first();
                $campsite = page('accommodation/campsites');
            ?>
            <a href="<?= $campsite->url() ?>">
                <?= $campsites->image()->resize(800, 600) ?>
                <h1><?= $campsite->title() ?></h1>
                <p><?= $campsite->intro() ?></p>
            </a>
    </div>
</div>
