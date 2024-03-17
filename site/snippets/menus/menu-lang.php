<!-- lang menu -->
<nav class="languages">
    <div class="flex flex-row-reverse">
        <?php foreach ($kirby->languages() as $language) : ?>
            <div <?php e($kirby->language() == $language, ' class="active"') ?>>
                <a href="<?php echo $language->url() ?>" class="pl-4" hreflang="<?php echo $language->code() ?>">
                    <?php echo html($language->code()) ?>
                </a>
            </div>
        <?php endforeach ?>
        <div>
</nav>
<!-- / lang menu -->