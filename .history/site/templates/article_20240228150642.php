<?php

snippet('layouts/layout', slots: true);

slot('header');
snippet('menus/menu');
snippet('menus/menu-breadcrumb');
endslot();

slot('main');
snippet('article');
endslot();

endsnippet();
