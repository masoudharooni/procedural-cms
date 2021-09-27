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

// delete menu
if ($_POST['action'] == 'deleteMenu') {
    echo deleteMenu($_POST['menuId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// toggle status menu
if ($_POST['action'] == 'toggleStatusMenu') {
    echo toggleStausMenu($_POST['menuId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// edit menu
if ($_POST['action'] == 'editMenu') {
    echo json_encode(getMenuById($_POST['menuId']));
}
if ($_POST['action'] == 'editMenuData') {
    $expload = explode('&', $_POST['data']);
    $data = (object)[
        'menuName' => explode('=', $expload[0])[1],
        'menuLink' => explode('=', $expload[1])[1],
        'menuParentId' => explode('=', $expload[2])[1],
        'menuSort' => explode('=', $expload[3])[1],
        'menuStatus' => explode('=', $expload[4])[1],
    ];
    echo updateMenu($_POST['id'], $data) ?? false;
}
