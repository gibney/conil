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
            <div class="relative">
                <?= $hotels->image() ?> 
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <?= $hotel->title() ?></h1>
            </div>
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
            <div class="relative">
                <?= $apartments->image() ?> 
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <?= $apartment->title() ?></h1>
            </div>
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
            <div class="relative">
                <?= $houses->image() ?> 
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <?= $house->title() ?></h1>
            </div>
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
            <div class="relative">
                <?= $campsites->image() ?> 
                <h1 class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <?= $campsite->title() ?></h1>
            </div>
        </a>
    </div>
</div>