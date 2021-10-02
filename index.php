<?php

use Illuminate\Support\Facades\Redirect;

include 'bootstrap/init.php';

$menus = getMenus(1);

$products = getProducts(1, null);
$news = getNews(1, null);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['contactBtn'])) {
        if (addContact($_POST)) {
            header('location:http://localhost/procedural-cms/process/formHandler.php?contactUs=1');
        } else {
            header('location:http://localhost/procedural-cms/process/formHandler.php?contactUs=0');
        }
    }
}

include 'views/tpl-index.php';
