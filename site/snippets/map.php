<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2libmV5IiwiYSI6ImNsdHFmbmo2dTA2OHkya252Y2dodm4xeHYifQ.L8LzyiMClH3XrgiK6wiSMQ';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        center: [<?= 'lng' ?>, <?= 'lat' ?>], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });
</script>