<?php

snippet('layouts/layout', slots: true);

slot('header');
snippet('menus/menu');
snippet('menus/menu-breadcrumb');
snippet('article');
endslot();

endsnippet();
