<!-- history menu -->
<nav class="menu text-center text-gray-500 py-4">
    <?php foreach ($site->find('history')->children()->listed() as $item) : ?>
        <ul class="list-none bg-gray-100">
            <a <?= attr([
                    'href'         => $item->url(),
                    'aria-current' => $item->isOpen() ? 'page' : null,
                    'class'        => $item->isopen() ? 'active' : null
                ]) ?>>
                <li class="py-4 m-1"><?= $item->menu()  ?></li>
            </a>
        </ul>
    <?php endforeach ?>
</nav>
<!-- / history menu -->