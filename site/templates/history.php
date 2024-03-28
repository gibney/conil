<?php snippet('layouts/layout', slots: true) /* uses standard layout*/?>

    <?php snippet('history', slots: true)  /* puts history snippet into layout*/?>

        <?php slot('image')/* uses an image slot in history snippet*/ ?>
            <?= $page->image() ?>
        <?php endslot()?>

        <?php slot('menu')/* lists the articles in the menu slot in history snippet*/ ?>
            <section >
                <nav>
                    <?php foreach($page->children()->listed()->flip() as $post): ?>
                        <a href="<?= $post->url() ?>">
                            <h3 class="text-2xl text-sky-800 "><?= $post->title() ?></h3>
                            <?= $post->intro()->kirbytext() ?>
                        </a>
                        <hr class="h-px m-3 bg-slate-300 border-0">
                    <?php endforeach ?>
                </nav>
            </section>
        <?php endslot()?>
        
        <?php slot() /* content for default slot in history snippet*/?>
            
            <article>
                
                <?php if ($page->heading()->isNotEmpty()) : ?>
                    <h1 class="my-4 text-4xl font-bold text-slate-800"><?= $page->heading()->html() ?>
                        <?php if ($page->subheading()->isNotEmpty()) : ?>
                            <small class="ms-2 font-semibold text-slate-500"><?= $page->subheading() ?></small>
                        <?php endif ?>
                    </h1>
                <?php endif ?>
                
                <?php if ($page->lead()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-slate-500 text-xl font-light indent-8">
                            <?= $page->lead() ?>
                        </p>
                    </div>
                <?php endif ?>
                    
                
                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div>
                        <p class="leading-relaxed font-serif text-slate-800 text-lg font-light indent-8">
                            <?= $page->text() ?>
                        </p>
                    </div>
                <?php endif ?>
            
            </article>
        
            <?php endslot(); ?>
    
        <?php endsnippet(); ?>
    
<?php endsnippet(); ?>