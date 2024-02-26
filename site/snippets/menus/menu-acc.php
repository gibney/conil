<nav class="menu text-center text-white py-4 bg-orange-500">
        <?php foreach($site->find('accommodation')->children()->listed() as $item): ?>
        <span class="p-2 mr-8"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></span>
        <?php endforeach ?> 
</nav>

