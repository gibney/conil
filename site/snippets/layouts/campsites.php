<!-- 1-2-4 coloumn grid wrapper. Removed 3 col and small card size 15_2_24 -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <?php foreach($page->children()->listed()->shuffle() as $campsite): ?>
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <a href="<?= $campsite->link() ?>" target="_blank">
            <?= $campsite->image() ?>
        </a>
        <div class="p-5">
            <a href="<?= $campsite->link() ?>" target="_blank">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $campsite->title() ?></h5>
            </a>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <p class="mb-1 font-normal text-black">
                <span class="text-orange-700"><?= $campsite->beach() ?></span> to the beach.<br>
                <span class="text-orange-700"><?= $campsite->centre() ?></span> into Conil old town.<br>
            </p>
            <p class="mb-2 font-normal text-gray-500">
            Pitches For Tents: <span class="text-orange-700"><?= $campsite->tents() ?></span><br>
            Bungalows: <span class="text-orange-700"><?= $campsite->bungalows() ?></span><br>
            Pitches for Campervans: <span class="text-orange-700"><?= $campsite->campervans() ?></span><br>
            Pool: <span class="text-orange-700"><?= $campsite->pool() ?></span><br>
            Restaurant: <span class="text-orange-700"><?= $campsite->restaurant() ?></span><br>
            Shop: <span class="text-orange-700"><?= $campsite->shop() ?></span><br>
            </p>
            <p class="mb-1 font-normal text-gray-700">
                <?= $campsite->intro() ?>
            </p>
            <a href="<?= $campsite->link() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-600 rounded-lg target="_blank">
                Check Availability
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    <?php endforeach ?>
</div> 
