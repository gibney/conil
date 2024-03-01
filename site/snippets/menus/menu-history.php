<nav class="menu text-center text-gray-500 py-4 bg-gray-100">
        <?php foreach($site->find('history')->children()->listed() as $item): ?>
        <ul>
            <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        </ul>
        <?php endforeach ?> 
</nav>