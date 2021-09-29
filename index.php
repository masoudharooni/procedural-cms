<?php
include 'bootstrap/init.php';

$menus = getMenus(1);

$products = getProducts(1, null);
$news = getNews(1, null);

include 'views/tpl-index.php';
