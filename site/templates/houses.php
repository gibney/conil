<?php snippet('layouts/layout-acc', slots: true)  /* layout-acc slot */ ?>

    <?php snippet('layouts/4-cols', slots: true) ?>
        
        <?php slot() ?>
            <?php foreach ($page->children()->listed()->shuffle() as $house) : ?>
                <div class="bg-gray-100 border border-gray-200 rounded-lg shadow">
                    <a href="<?= $house->link() ?>" target="_blank">
                        <?= $house->image() ?>
                    </a>
                    <div class="p-5">
                        <a href="<?= $house->link() ?>" target="_blank">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> <?= $house->title() ?></h5>
                        </a>

                        <hr class="h-px my-2 bg-gray-200 border-0">

                        <p class="mb-1 text-base font-normal text-orange-700">

                            <?php if ($house->rating()->isNotEmpty()) : ?>
                                <?= $house->rating() ?> Rating on Booking.com<br>
                            <?php endif ?>

                        </p>
                        <p class="mb-2 text-base font-normal text-gray-500">

                            <?php if ($house->beach()->isNotEmpty()) : ?>
                                <?= $house->beach() ?> to the beach.<br>
                            <?php endif ?>

                            <?php if ($house->centre()->isNotEmpty()) : ?>
                                <?= $house->centre() ?> into Conil old town.<br>
                            <?php endif ?>

                            <?php if ($house->bedrooms()->isNotEmpty()) : ?>
                                <?= $house->bedrooms() ?> bedrooms.<br>
                            <?php endif ?>

                        </p>
                        <p class="mb-4 text-base font-normal text-gray-700">
                            <?= $house->intro() ?>
                        </p>
                        <a href="<?= $house->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300" target="_blank">
                            Check Availability
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endslot() ?>

    <?php endsnippet() ?>
<?php endsnippet() ?>