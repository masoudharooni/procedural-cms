<?php
include 'bootstrap/init.php';
if (isset($_GET['logout']) and in_array($_GET['logout'], [1])) {
    adminLogout();
}
if (!isset($_SESSION['admin_login'])) {
    header('location:adm-auth.php');
}

// get product category
$productCategory = getProductsCat(1, null);
$productsCat     = getProductsCat();

// get product
$showProducts = getProducts();

// get widgets
$showWidgets = getWidgets();


// get menus 
$menus = getMenus();


// get news category
$newsCat = getNewsCat();
$newsCatActive = getNewsCat(1, null);

// get news
$list_of_news = getNews();

// get contacts
$allContacts = contacts();
$preViewContacts = contacts(4, null, 0);


// get about us
$allAboutUs = getAboutUs();

// get settings
$settings = getSettings();


// add about us
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addAboutUsBtn'])) {
        addAboutUs($_POST) ? header("Location:dashboard.php?p=add-about-us&add-about-us=1") : header("Location:dashboard.php?p=add-about-us&add-about-us=0");
    }
}



// add call us info 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addCallInfoBtn'])) {
        addCallInfo($_POST) ? header("Location:dashboard.php?p=add-call-us&add-callInfo=1") : header("Location:dashboard.php?p=add-call-us&add-callInfo=0");
    }
}

// add widget 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addWidgetBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            header("Location:dashboard.php?p=add-widget&add-widget=0");
        }
        $imagePath = upload($_FILES);
        if ($imagePath['bool']) {
            if (addWidget($_POST, $imagePath['text'])) {
                header("Location:dashboard.php?p=add-widget&add-widget=1");
            } else {
                header("Location:dashboard.php?p=add-widget&add-widget=0");
            }
        } else {
            header("Location:dashboard.php?p=add-widget&add-widget=0");
        }
    }
}



// send email to contacts
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sendEmailBtn'])) {
        if (sendEmail($_POST['email'], $_POST['subject'], $_POST['msg'])) {
            header("Location:dashboard.php?p=list-contacts&sendEmail=1");
        } else {
            header("Location:dashboard.php?p=list-contacts&sendEmail=0");
        }
    }
}



// add menu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addMenuBtn'])) {
        if (addMenu($_POST)) {
            header("Location:dashboard.php?p=add-menu&add-menu=1");
        } else {
            header("Location:dashboard.php?p=add-menu&add-menu=0");
        }
    }
}

// add product category

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addProductCatBtn'])) {
        if (addProductCat($_POST)) {
            header("Location:dashboard.php?p=add-product-cat&add-product-cat=1");
        } else {
            header("Location:dashboard.php?p=add-product-cat&add-product-cat=0");
        }
    }
}

// add product
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addProBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            header("Location:dashboard.php?p=add-produc&add-product=0");
        }
        $imagePath = upload($_FILES);
        if ($imagePath['bool']) {
            if (addProduct($_POST, $imagePath['text'])) {
                header("Location:dashboard.php?p=add-product&add-product=1");
            } else {
                header("Location:dashboard.php?p=add-product&add-product=0");
            }
        } else {
            header("Location:dashboard.php?p=add-product&add-product=0");
        }
    }
}


// update a product 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['editProBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            echo (updateProduct($_POST, null)) ? header("Location:dashboard.php?p=list-products&update-products=1") : header("Location:dashboard.php?p=list-products&update-products=0");
        } else {
            $imagePath = upload($_FILES);
            if ($imagePath['bool']) {
                if (updateProduct($_POST, $imagePath['text'])) {
                    header("Location:dashboard.php?p=list-products&update-products=1");
                } else {
                    header("Location:dashboard.php?p=list-products&update-products=0");
                }
            } else {
                header("Location:dashboard.php?p=list-products&update-products=0");
            }
        }
    }
}

// update a widget 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['editWidgetBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            echo (updateWidget($_POST, null)) ? header("Location:dashboard.php?p=list-widget&update-widget=1") : header("Location:dashboard.php?p=list-widget&update-widget=0");
        } else {
            $imagePath = upload($_FILES);
            if ($imagePath['bool']) {
                if (updateWidget($_POST, $imagePath['text'])) {
                    header("Location:dashboard.php?p=list-widget&update-widget=1");
                } else {
                    header("Location:dashboard.php?p=list-widget&update-widget=0");
                }
            } else {
                header("Location:dashboard.php?p=list-widget&update-widget=0");
            }
        }
    }
}


// add news category'

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addNewsCatBtn'])) {
        if (addNewsCat($_POST)) {
            header("Location:dashboard.php?p=add-news-cat&add-news-cat=1");
        } else {
            header("Location:dashboard.php?p=add-news-cat&add-news-cat=0");
        }
    }
}

// add news

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addNewsBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            header("Location:dashboard.php?p=add-news&add-news=0");
        }
        $imagePath = upload($_FILES);
        if ($imagePath['bool']) {
            if (addNews($_POST, $imagePath['text'])) {
                header("Location:dashboard.php?p=add-news&add-news=1");
            } else {
                header("Location:dashboard.php?p=add-news&add-news=0");
            }
        } else {
            header("Location:dashboard.php?p=add-news&add-news=0");
        }
    }
}


// update a news 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['editNewsBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            echo (updateNews($_POST, null)) ? header("Location:dashboard.php?p=list-news&update-news=1") : header("Location:dashboard.php?p=list-news&update-news=0");
        } else {
            $imageNews = upload($_FILES);
            if ($imageNews['bool']) {
                if (updateNews($_POST, $imageNews['text'])) {
                    header("Location:dashboard.php?p=list-news&update-news=1");
                } else {
                    header("Location:dashboard.php?p=list-news&update-news=0");
                }
            } else {
                header("Location:dashboard.php?p=list-news&update-news=0");
            }
        }
    }
}
// get certificate
$certificate = getCertificate();


// update certificate
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['certificateBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            (updateCertificate($_POST, null)) ? header("Location:dashboard.php?p=add-certificate&add-certificate=1") : header("Location:dashboard.php?p=add-certificate&add-certificate=0");
        } else {
            $imageNews = upload($_FILES);
            if ($imageNews['bool']) {
                if (updateCertificate($_POST, $imageNews['text'])) {
                    header("Location:dashboard.php?p=add-certificate&add-certificate=1");
                } else {
                    header("Location:dashboard.php?p=add-certificate&add-certificate=0");
                }
            } else {
                header("Location:dashboard.php?p=add-certificate&add-certificate=0");
            }
        }
    }
}


// update settings
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['updateSettingBtn'])) {
        if (!isset($_FILES['file']) or $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
            (updateSettings($_POST, null)) ? header("Location:dashboard.php?p=add-settings&add-settings=1") : header("Location:dashboard.php?p=add-settings&add-settings=0");
        } else {
            $imageNews = upload($_FILES);
            if ($imageNews['bool']) {
                if (updateSettings($_POST, $imageNews['text'])) {
                    header("Location:dashboard.php?p=add-settings&add-settings=1");
                } else {
                    header("Location:dashboard.php?p=add-settings&add-settings=0");
                }
            } else {
                header("Location:dashboard.php?p=add-settings&add-settings=0");
            }
        }
    }
}

// update footer about data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addFooterAboutBtn'])) {
        if (updateFooterData('about', $_POST)) {
            header("Location:dashboard.php?p=footer-about&footer-about=1");
        } else {
            header("Location:dashboard.php?p=footer-about&footer-about=0");
        }
    }
}
// get footer about data
$footerAbout = getFooterData('about');

// update footer work data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addFooterWorkBtn'])) {
        if (updateFooterData('work', $_POST)) {
            header("Location:dashboard.php?p=footer-work&footer-work=1");
        } else {
            header("Location:dashboard.php?p=footer-work&footer-work=0");
        }
    }
}
// get footer work data
$footerWork = getFooterData('work');

// update footer solution data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addFooterSolutionBtn'])) {
        if (updateFooterData('solution', $_POST)) {
            header("Location:dashboard.php?p=footer-solution&footer-solution=1");
        } else {
            header("Location:dashboard.php?p=footer-solution&footer-solution=0");
        }
    }
}
// get footer solution data
$footerSolution = getFooterData('solution');

include ROOT_PATH . 'views/tpl-dashboard.php';
