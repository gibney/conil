<?php snippet('layouts/layout', slots: true) ?>

    <?php snippet('post', slots: true) ?>
        <?php slot('menu')/* lists the articles in the menu slot in history snippet*/ ?>
            <section >
                <nav>
                    <?php foreach($page->siblings()->listed() as $sibling): ?>
                        <h3 class="text-2xl"><?= $sibling->title()->html() ?></h3>
                        <?= $sibling->lead()->excerpt(100) ?>
                        <a class="text-italic text-blue-500" href="<?= $sibling->url() ?>">Read more…</a>
                        <hr class="h-px m-3 bg-gray-200 border-0">
                    <?php endforeach ?>
                </nav>
            </section>
        <?php endslot()?>
        <?php slot() ?>
            
            <article class="text-wrap">
                
                
                <h1 class="text-2xl"><?= $page->title()->html() ?></h1>
                
                <?php if ($page->lead()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-slate-500 text-xl font-light indent-8">
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
                    <p class="">Author: <span class="text-slate-600"><?= $page->author() ?></span><br>
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