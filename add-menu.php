<?php
include_once 'bootstrap/init.php';
// echo "<pre>";
// print_r(getMenus());
// die;
// echo "</pre>";
$menus = getMenus();

include_once 'views/tpl-add-menu.php';
