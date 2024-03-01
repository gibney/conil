<!-- 1-2-4 coloumn grid wrapper. Removed 3 col and small card size 15_2_24 -->
<h1 class="my-4 text-5xl font-extrabold"><?= $page->title() ?>
    <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small
</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <?php foreach($page->children()->listed()->shuffle() as $list): ?>
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <a href="<?= $list->link() ?>" target="_blank">
            <?= $list->image() ?>
        </a>
        <div class="p-5">
            <a href="<?= $list->link() ?>" target="_blank">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $list->title() ?></h5>
            </a>
            <p class="mb-1 text-base font-normal text-orange-700">
                <?= $list->star() ?> Star Hotel<br>
                <?= $list->rating() ?> Rating on Booking.com<br>    
            </p>
            <p class="mb-2 text-base font-normal text-gray-500">
            <?= $list->beach() ?> to the beach.<br>
            <?= $list->centre() ?> into Conil old town.<br>
            <?= $list->rooms() ?> rooms.<br>
            </p>
            <p class="mb-1 text-base font-normal text-gray-700">
                <?= $list->intro() ?>
            </p>
            <a href="<?= $list->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300" target="_blank">
                Check Availability
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    <?php endforeach ?>
</div> 
