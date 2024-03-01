<footer class="footer">
        <?php if ($footer = $slots->footer()): ?>
            <?= $footer ?>
        <?php else: ?>
            <hr class="h-px my-8 bg-gray-200 border-0">
             <a class="" href="/panel">POPP008</a> 
             Conil Online &copy; <?= date('Y') ?>
             <button class=" mb-6 rounded-lg p-3 bg-gray-100 p-4 text-gray-400"> <a href="https://open.spotify.com/playlist/1c8Wrv5glEXPbcIlK2CiIx?si=33886eef959641d5/<?= $site->spotify() ?>">The CONIL.CO Playlist - Enjoy!</a></button>

            
        <?php endif ?>
    </footer>
    
    <?= js('assets/js/app.js') ?>

</body>
</html>