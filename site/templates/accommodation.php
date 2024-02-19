<?php 
snippet('layouts/layout', slots: true);

    slot('header');
    snippet('menus/menu');
    snippet('menus/menu-acc');
    snippet('menus/menu-breadcrumb');
    endslot();

    slot('main');    
    snippet('accommodation');
    endslot();

endsnippet();
