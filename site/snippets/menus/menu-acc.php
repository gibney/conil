<?php /* 	If the current page is open = isOpen

<nav class="menu">
	<?php foreach ($site->children()->listed() as $demo) : ?>
		<a <?= attr([
				'href'         => $demo->url(),
    			'aria-current' => $demo->isOpen() ? 'page' : null,
				'class'        => $demo->isopen() ? 'active' : null
			]) ?>>
			<?= $demo->title() ?>
		</a>
	<?php endforeach ?>
</nav> */
?>
<nav class="menu text-center text-gray-500 py-4 bg-orange-200">
    <?php foreach ($site->find('accommodation')->children()->listed() as $item) : ?>
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
</nav>