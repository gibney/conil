<nav class="menu  p-8  bg-cyan-800 text-white ">
    <?php snippet('menus/menu-lang') ?>
    <a class="logo" href="<?= $site->url() ?>"><span class="text-left font-bold text-5xl"><?= $site->title() ?></span></a>
    <div class="text-right">
        <?php foreach ($site->children()->listed() as $item) : ?>
            <span class="p-2 mr-8">
                <a <?= attr([
                        'href'         => $item->url(),
                        'aria-current' => $item->isOpen() ? 'page' : null,
                        'class'        => $item->isopen() ? 'active' : null
                    ]) ?>>
                    <?= $item->title() ?>
                </a>
            </span>
        <?php endforeach ?>
    </div>
</nav>