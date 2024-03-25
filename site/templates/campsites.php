<?php snippet('layouts/layout-acc', slots: true)  /* layout-acc slot */ ?>

    <?php snippet('layouts/4-cols', slots: true) ?>

        <?php slot() ?>
            <?php foreach ($page->children()->listed()->shuffle() as $campsite) : ?>
                <div class="bg-white border border-gray-200 rounded-lg shadow">
                    <a href="<?= $campsite->link() ?>" target="_blank">
                        <?= $campsite->image() ?>
                    </a>
                    <div class="p-5">
                        <a href="<?= $campsite->link() ?>" target="_blank">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> <?= $campsite->title() ?></h5>
                        </a>
                        <hr class="h-px my-2 bg-gray-200 border-0">
                        <p class="mb-1 text-base font-normal text-black">
                            <span class="text-orange-700"><?= $campsite->beach() ?></span> to the beach.<br>
                            <span class="text-orange-700"><?= $campsite->centre() ?></span> into Conil old town.<br>
                        </p>
                        <p class="mb-2 text-base font-normal text-gray-500">

                            <?php if ($campsite->tents()->isNotEmpty()) : ?>
                                Pitches For Tents: <span class="text-orange-700"><?= $campsite->tents() ?></span><br>
                            <?php endif ?>

                            <?php if ($campsite->bungalows()->isNotEmpty()) : ?>
                                Bungalows: <span class="text-orange-700"><?= $campsite->bungalows() ?></span><br>
                            <?php endif ?>

                            <?php if ($campsite->campervans()->isNotEmpty()) : ?>
                                Pitches for Campervans: <span class="text-orange-700"><?= $campsite->campervans() ?></span><br>
                            <?php endif ?>

                            <?php if ($campsite->pool()->isNotEmpty()) : ?>
                                Pool: <span class="text-orange-700"><?= $campsite->pool() ?></span><br>
                            <?php endif ?>

                            <?php if ($campsite->restaurant()->isNotEmpty()) : ?>
                                Restaurant: <span class="text-orange-700"><?= $campsite->restaurant() ?></span><br>
                            <?php endif ?>

                            <?php if ($campsite->shop()->isNotEmpty()) : ?>
                                Shop: <span class="text-orange-700"><?= $campsite->shop() ?></span><br>
                            <?php endif ?>

                        </p>
                        <p class="mb-1 text-base font-normal text-gray-700">
                            <?= $campsite->intro() ?>
                        </p>
                        <a href="<?= $campsite->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg target=" _blank">
                            Check Availability
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endslot(); ?>
    <?php endsnippet(); ?>
<?php endsnippet(); ?>