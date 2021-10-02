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


// delete product cat
if ($_POST['action'] == 'deleteProductCat') {
    echo deleteProductCat($_POST['productCatId']) ?? 'لطفا مجددا تلاش کنید!!!';
}


// toggle status products cat
if ($_POST['action'] == 'toggleStatusProductCat') {
    echo toggleStatusProductCat($_POST['productCatId']) ?? 'لطفا مجددا تلاش کنید!!!';
}


// edit menu
if ($_POST['action'] == 'editProductCat') {
    echo json_encode(getProductsCat(null, $_POST['productCatId'])[0]);
}

if ($_POST['action'] == 'editProductData') {
    $expload = explode('&', $_POST['data']);
    $data = (object)[
        'menuName' => explode('=', $expload[0])[1],
        'menuSort' => explode('=', $expload[1])[1],
        'menuStatus' => explode('=', $expload[2])[1]
    ];
    echo updateProductCat($_POST['id'], $data) ?? false;
}


// delete products
if ($_POST['action'] == 'deletePro') {
    echo deleteProduct($_POST['proId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// toggle status products
if ($_POST['action'] == 'toggleStatusPro') {
    echo toggleStatusProduct($_POST['proId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// edit product
if ($_POST['action'] == 'editPro') {
    echo json_encode(getProducts(null, $_POST['proId'])[0]);
}

// delete product cat
if ($_POST['action'] == 'deleteNewsCat') {
    echo deleteNewsCat($_POST['newsCatId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// toggle status products
if ($_POST['action'] == 'toggleStatusNewsCat') {
    echo toggleStatusNewsCat($_POST['newsCatId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// edit news category
if ($_POST['action'] == 'editNewsCat') {
    echo json_encode(getNewsCat(null, $_POST['newsCatId'])[0]);
}
if ($_POST['action'] == 'editNewsData') {
    $expload = explode('&', $_POST['data']);
    $data = (object)[
        'newsCatName' => explode('=', $expload[0])[1],
        'newsCatSort' => explode('=', $expload[1])[1],
        'newsCatStatus' => explode('=', $expload[2])[1]
    ];
    echo updateNewsCat($_POST['id'], $data) ?? false;
}

// delete news 
if ($_POST['action'] == 'deleteNews') {
    echo deleteNews($_POST['newsId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// toggle status news
if ($_POST['action'] == 'toggleStatusNews') {
    echo toggleStatusNews($_POST['newsId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// edit product
if ($_POST['action'] == 'editNews') {
    echo json_encode(getNews(null, $_POST['newsId'])[0]);
}

// delete massage on contacts
if ($_POST['action'] == 'deleteMassage') {
    echo deleteMassage($_POST['massageId']) ?? 'لطفا مجددا تلاش کنید!!!';
}

// toggle read or unread massage on contacts
if ($_POST['action'] == 'toggleStatusMassage') {
    echo toggleStatusMassage($_POST['massageId']) ?? 'لطفا مجددا تلاش کنید!!!';
}
