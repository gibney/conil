<!doctype html>
<html class="test" lang="<?php echo $kirby->language()->code() ?>">

<head>
    <meta charset="utf-8">
    <title><?= $page->title() ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>
    <!-- TODO Move styling into styles.css-->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100%;
        }
    </style>
    <title><?= $page->title() ?></title>
    <?= css('assets/css/styles.css') ?>
    <?= $slots->head() ?>
</head>

<body>
    <div class="container mx-auto px-4 bg-orange-100">
        <!-- TODO header  Insert the menus required from the templates file -->
        <header class="header"><?= $slots->header() ?></header>
        <main class="main"><?= $slot ?></main>
        <!-- footer -->
        <footer class="footer"><?php if ($footer = $slots->footer()) : ?><?= $footer ?><?php else : ?>
            <hr class="h-px my-8 bg-gray-200 border-0"><a class="" href="/panel">POPP008</a>Conil Online &copy;
            <?= date('Y') ?><button class=" mb-6 rounded-lg p-3 bg-gray-100 p-4 text-gray-400"><a href="https://open.spotify.com/playlist/1c8Wrv5glEXPbcIlK2CiIx?si=33886eef959641d5/<?= $site->spotify() ?>">The CONIL.CO Playlist - Enjoy !</a></button><?php endif ?><?= js('assets/js/app.js') ?>
        </footer>
    </div><?= $slots->map() ?>
</body>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2libmV5IiwiYSI6ImNsdHFmbmo2dTA2OHkya252Y2dodm4xeHYifQ.L8LzyiMClH3XrgiK6wiSMQ';
    // Add a map
    const map = new mapboxgl.Map({
        container: 'map',
        center: [<?= $page->lng() ?>, <?= $page->lat() ?>],
        zoom: 15
    });

    // Create popp-up
    const popup = new mapboxgl.Popup({
        offset: 25
    }).setText(
        '<?= $page->title() ?>'
    );

    // Create a default Marker, coloured red.
    const marker2 = new mapboxgl.Marker({
            color: 'red',
            rotation: 45
        })
        .setLngLat([<?= $page->lng() ?>, <?= $page->lat() ?>])
        .setPopup(popup) // sets a popup on this marker
        .addTo(map);
</script>

</html>