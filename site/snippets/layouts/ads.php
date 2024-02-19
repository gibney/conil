
<!--TODO ads template edited container, but still not right-->
    <div class="md:container mx-auto">
        <div class="col-span-4">
            <aside class=" bg-gray-100 m-2 p-2  border-solid border-2 border-gray-200">
            <!--page shuffle-->
            <?php
                $featured = page('ads')->children()->shuffle()->first();
            // this will return the first random ad
            ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div  class="max-h-64">
                        <?= $featured->image()->resize(400, 300) ?>
                    </div>
                    <div>
                        <h1 class="text-blue-800 my-4 text-5xl font-bold"><?= $featured->title() ?></h1>
                        <h2><?= $featured->subtitle() ?></h2>
                        <p><?= $featured->intro() ?></p>
                        <a href="<?= $featured->link() ?>" class="inline-flex items-center m-3 px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg " target="_blank">
                            Visit Website
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <footer class="text-right"><small>Ads by conil.co</small></footer>
            </aside>
        </div>
        <div></div>
        <div></div>
    </div>
