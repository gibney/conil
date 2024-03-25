<?php snippet('layouts/layout', slots: true) ?>

    <?php snippet('history', slots: true) ?>

        <?php slot() ?>
            <div class="sm:col-span-1 md:col-span-4 lg:col-span-6 ">

                <?= $page->blocks()->toBlocks() ?>
                <div>
                    <h1 class="my-4 text-4xl font-bold"><?= $page->heading() ?>
                        <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small>
                    </h1>
                </div>

                <?php if ($page->lead()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-lg indent-8">
                            <?= $page->lead() ?>
                        </p>
                    </div>
                <?php endif ?>

                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif">
                            <?= $page->text() ?>
                        </p>
                    </div>
                <?php endif ?>
                <hr class="text-center h-px my-8 bg-gray-400 border-0 max-w-80">
                <hr class="h-px my-8 bg-gray-400 border-0 max-w-80">

                <?php if ($page->author()->isNotEmpty()) : ?>
                    <p class="">Author: <span class="text-gray-700"><?= $page->author() ?></span><br>
                    </p>
                <?php endif ?>

                <hr class="h-px my-8 bg-gray-400 border-0 max-w-80">

                <?php if ($page->date()->isNotEmpty()) : ?>
                    <p class="">Published: <span class="text-gray-700"><?= $page->date() ?></span><br>
                    </p>
                <?php endif ?>

            </div>
        <?php endslot(); ?>

    <?php endsnippet(); ?>
    
<?php endsnippet(); ?>