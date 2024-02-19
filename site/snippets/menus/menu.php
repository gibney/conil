<nav class="menu  p-8  bg-orange-600 text-white ">
        <a class="logo" href="<?= $site->url() ?>"><span class="text-left font-bold text-5xl"><?= $site->title() ?></span></a>
        <div class="text-right">
        <?php foreach($site->children()->listed() as $item): ?>
        <span class="p-2 mr-8"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></span>
        <?php endforeach ?> 
        </div>
</nav>