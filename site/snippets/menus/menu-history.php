<nav class="menu text-center text-white py-4 bg-orange-600">
        <?php foreach($site->find('history')->children()->listed() as $item): ?>
        <ul>
            <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        </ul>
        <?php endforeach ?> 
</nav>