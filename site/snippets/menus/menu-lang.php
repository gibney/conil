<!-- lang menu -->
<nav class="languages">
    <div class="flex flex-row-reverse">
        <?php foreach ($kirby->languages() as $language) : ?>
            <div <?php e($kirby->language() == $language, ' class="active"') ?>>
                <a href="<?= $page->url($language->code()) ?>" class="pl-4" hreflang="<?php echo $language->code() ?>">
                    <?= html($language->code()) ?>
                </a>
            </div>
        <?php endforeach ?>
        <div>
</nav>
<!-- / lang menu -->