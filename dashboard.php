<?php
include 'bootstrap/init.php';
if (isset($_GET['logout']) and in_array($_GET['logout'], [1])) {
    adminLogout();
}
if (!isset($_SESSION['admin_login'])) {
    header('location:adm-auth.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addMenuBtn'])) {
        if (addMenu($_POST)) {
            header("Location:dashboard.php?p=add-menu&add-menu=1");
        } else {
            header("Location:dashboard.php?p=add-menu&add-menu=0");
        }
    }
}




include ROOT_PATH . 'views/tpl-dashboard.php';
