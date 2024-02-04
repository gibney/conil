<?php snippet('header') ?>
<main class="main">
    <article>
        <h1><?= $page->title() ?></h1>
        <div class="project_layout">
            
            <div class="project-info">
                <div class="intro">
                <?= $page->intro() ?>
                <br />
                </div>
                <div class="description">
                <?= $page->description() ?>
                </div>
            </div>

            <div class="project gallery">
                <ul>
                <?php  # Get the images from the apartment
                foreach($page->images() as $image): ?>
                    <li>
                    <a href="<?= $image->url() ?>">
                        <?= $image ?>
                    </a>
                    </li>
                <?php endforeach ?>
                </ul>  
            </div>
            <dl>
                
                <?php   # Check if contact info is available
                if (($page->contact()->isNotEmpty())):?>
                <dt>Contact: </dt>
                <dd><?= $page->contact() ?></dd>
                <?php endif ?>

                <?php   # Check if link is available
                if (($page->link()->isNotEmpty())):?>
                <dt>Check Availability: </dt>
                <dd> <a href="<?= $page->link() ?>">Check Now</a></dd>
                <?php endif ?>

                <?php   # Check if link is available
                if (($page->link()->isNotEmpty())):?>
                <dt>Prices: </dt>
                <dd> <a href="<?= $page->link() ?>">Check Prices</a></dd>
                <?php endif ?>

                <?php   # Check if max limit is set
                if (($page->number()->isNotEmpty())):?>
                <dt>Maximum Number of Guests: </dt>
                <dd><?= $page->number() ?></dd>
                <?php endif ?>
            </dl>

         </div>
    </article>

</main>
<?php snippet('footer') ?>