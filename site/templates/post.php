<?php snippet('layouts/layout', slots: true) ?>

    <?php snippet('post', slots: true) ?>
        <?php slot('menu')/* lists the articles in the menu slot in history snippet*/ ?>
            <aside >
                <nav>
                    <?php foreach($page->siblings()->listed() as $sibling): ?>
                        <h3 class="text-2xl"><?= $sibling->title()->html() ?></h3>
                        <?= $sibling->lead()->excerpt(100) ?>
                        <a class="text-italic text-blue-500" href="<?= $sibling->url() ?>">Read more…</a>
                        <hr class="h-px m-3 bg-gray-200 border-0">
                    <?php endforeach ?>
                </nav>
                    </aside>
        <?php endslot()?>
        <?php slot() ?>
            
            <article class="text-wrap">
                
                <?php if ($page->heading()->isNotEmpty()) : ?>
                    <h1 class="my-4 text-4xl font-bold"><?= $page->heading()->html() ?>
                        <?php if ($page->subheading()->isNotEmpty()) : ?>
                            <small class="ms-2 font-semibold text-gray-500"><?= $page->subheading() ?></small>
                        <?php endif ?>
                    </h1>
                <?php endif ?>
                
                <?php if ($page->lead()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-slate-500 text-2xl font-light indent-8">
                            <?= $page->lead() ?>
                        </p>
                    </div>
                <?php endif ?>

                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-slate-600 text-xl font-light indent-8">
                            <?= $page->text() ?>
                        </p>
                    </div>
                <?php endif ?>

                <hr class="h-px my-8 bg-gray-400 border-0 max-w-80">
                
                <?php if ($page->author()->isNotEmpty()) : ?>
                    <p class="">Author: <span class="text-slate-600"><?= $page->uuid() ?></span><br>
                    </p>
                <?php endif ?>
                
                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div class="text-sky-500 hover:text-blue-600 italic" >
                        <a href="<?= url('history') ?>"><?= $page->back() ?></a>
                    </div>
                <?php endif ?>

            </article>

        <?php endslot(); ?>
    <?php endsnippet(); ?>
    
<?php endsnippet(); ?>