<?php
include '../bootstrap/init.php';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    die("REQUEST ISN'T AJAX");
}
// request is ajax

// admin login
if ($_POST['action'] == 'login') {
    $expload = explode('&', $_POST['data']);
    $data = (object)[
        'email' => explode('=', $expload[0])[1],
        'password' => explode('=', $expload[1])[1]
    ];
    if (!admin_login($data->email, $data->password)) {
        echo false;
    } else {
        echo true;
    }
}

