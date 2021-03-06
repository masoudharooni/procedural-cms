<?php
session_start();
include 'constants.php';
include ROOT_PATH . 'vendor/autoload.php';
include ROOT_PATH . 'libs/helpers.php';
include ROOT_PATH . 'bootstrap/config.php';

$conn = new mysqli($config->host, $config->username, $config->password, $config->db);
if ($conn->connect_errno) {
    die("Connection isn't true , ERROR is : " . $conn->connect_error);
}
// connection is true
include ROOT_PATH . 'libs/lib-auth.php';
include ROOT_PATH . 'libs/lib-menu.php';
include ROOT_PATH . 'libs/lib-product.php';
include ROOT_PATH . 'libs/lib-news.php';
include ROOT_PATH . 'libs/lib-contacts.php';
include ROOT_PATH . 'libs/lib-widget.php';
include ROOT_PATH . 'libs/lib-aboutUs.php';
include ROOT_PATH . 'libs/lib-certificate.php';
include ROOT_PATH . 'libs/lib-settings.php';
include ROOT_PATH . 'libs/lib-footer.php';
