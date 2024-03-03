<?php 
/* 
    The layouts/layout template is used for most pages.
    header slot: calls the menu's to include on the page.
    main slot: calls the layouts/template to be used in the body.
*/
snippet('layout', slots: true);
    slot('header');
        snippet('menus/menu');
        snippet('menus/menu-acc');
        snippet('menus/menu-breadcrumb');
    endslot();
    slot('main');
        snippet('apartments');
    endslot();
endsnippet();