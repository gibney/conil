<nav class="menu text-center text-gray-500 py-4">
        <?php foreach($site->find('history')->children()->listed() as $item): ?>
        <ul class="list-none">
            <a href="<?= $item->url() ?>">
                <li class="py-4 m-1 bg-gray-100"><?= $item->menu()  ?></li>
            </a>
        </ul>
        <?php endforeach ?> 
</nav>