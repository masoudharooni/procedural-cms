<?php

include 'bootstrap/init.php';

$menus = getMenus(1);

$products = getProducts(1, null);
$news = getNews(1, null);

// get call info 
$callInfo = getCallInfo();

$aboutUsVerified = getAboutUs(1, null);

$widgets = getWidgets(1, null);

// get settings
$settings = getSettings();


$certificate = getCertificate();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['contactBtn'])) {
        if (addContact($_POST)) {
            header('location:http://localhost/procedural-cms/process/formHandler.php?contactUs=1');
        } else {
            header('location:http://localhost/procedural-cms/process/formHandler.php?contactUs=0');
        }
    }
}

// get footer data
$footerAbout = getFooterData('about');
$footerWork = getFooterData('work');
$footerSolution = getFooterData('solution');


include 'views/tpl-index.php';
