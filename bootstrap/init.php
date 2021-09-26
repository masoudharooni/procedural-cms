<?php
session_start();
include 'constants.php';
include ROOT_PATH . 'bootstrap/config.php';
include ROOT_PATH . 'libs/helpers.php';

$conn = new mysqli($config->host, $config->username, $config->password, $config->db);
if ($conn->connect_errno) {
    die("Connection isn't true , ERROR is : " . $conn->connect_error);
}
// connection is true
include ROOT_PATH . 'libs/lib-auth.php';
