<article>
    <div class="grid col-3">
        
        <div class="main">
        <?= $slots->heading() ?>
        <?= $slots->subheading() ?>
        <?= $slots->lead() ?>
        <?= $slots->text() ?>
        </div>

        <div class="sidebar">
        <?php snippet('menus/menu-history'); ?>
        </div>

        <div>
            footer
        </div>
    </div>
</article>