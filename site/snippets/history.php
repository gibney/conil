<!-- 12 col grid-->
<div class="grid grid-cols-1 sm:grid-cols-6 lg:grid-cols-12 gap-4">
    <!-- small screens - content first -->
<div class="col-span-1 sm:col-span-2 lg:col-span-3 lg:order-first p-2 bg-red-300">
    <h2 class="h2">History Articles</h2>
    <?= $slots->menu()?> </div>
    <!-- large screens - content middle -->
<div class="col-span-1 order-first sm:col-span-4 lg:col-span-6 p-2 bg-purple-300"><?= $slot ?></div>
<!-- tags and ads -->
<div class="col-span-1 sm:col-span-2 lg:col-span-3 p-2 bg-pink-300"></div>
</div>