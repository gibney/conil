<div class="mb-4 size-full">
    <?= $slots->image()?>
</div>
<!-- 12 col grid-->
<div class="grid grid-cols-1 sm:grid-cols-6 lg:grid-cols-12 gap-4">
    
    <!-- small screens - content first -->
    <div class="col-span-1 sm:col-span-2 lg:col-span-3 lg:order-first p-2 bg-gray-100 border-gray-200 rounded-lg shadow">
        <aside>
            <h2 class="text-2xl text-slate-700 text-center">History Articles</h2>
            <hr class="h-px m-3 bg-slate-300 border-0">
            <?= $slots->menu()?> 
        </aside>
    </div>

    <!-- large screens - content middle -->
    <div class="col-span-1 order-first sm:col-span-4 lg:col-span-6 p-2 bg-gray-100 border-gray-200 rounded-lg shadow">
        <?= $slot ?>
    </div>

    <!-- tags and ads -->
    <div class="col-span-1 sm:col-span-2 lg:col-span-3 p-2 bg-gray-100 border-gray-200 rounded-lg shadow">
        tags n stuff
    </div>

</div>