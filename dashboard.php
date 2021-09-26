<?php
include 'bootstrap/init.php';
if (!isset($_SESSION['admin_login'])) {
    header('location:adm-auth.php');
}

include ROOT_PATH . 'views/tpl-dashboard.php';
