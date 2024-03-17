<!-- breadcrumb menu -->
<nav class="flex py-2  text-gray-400" aria-label="breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <?php foreach ($site->breadcrumb() as $crumb) : ?>
            <li class="inline-flex items-center" <?php e($crumb->isActive(), ' aria-current="location"') ?>>
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-100 dark:text-gray-400 dark:hover:text-white" href="<?= $crumb->url() ?>">
                    <?= $crumb->title()->html() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>
<!-- / breadcrumb menu -->