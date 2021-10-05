<?php

use Hekmatinasser\Verta\Verta; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favicon.html">

    <title>پنل ادمین</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashbord-style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <!-- ckeditor -->
    <style>
        th {
            text-align: center;
        }

        td {
            text-align: center;
        }

        div#modalEditMenu {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #00000099;
            display: none;
        }

        .modalContent {
            width: 50%;
            background-color: white;
            position: absolute;
            top: 15%;
            right: 25%;
            height: 500px;
            padding: 10px;
            border-radius: 10px;
        }

        .closeEditMenu {
            position: absolute;
            left: 10px;
            top: 10px;
        }
    </style>
</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">فلت<span>لب</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important"><?= contactsReaded(0) ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">شما <?= contactsReaded(0) ?> پیام خوانده نشده دارید.</p>

                            </li>

                            <?php
                            if (!is_null($preViewContacts)) {
                                foreach ($preViewContacts as  $value) :
                            ?>
                                    <li>
                                        <a href="dashboard.php?p=msg-page&msg-id=<?= $value['id'] ?>">
                                            <span class="photo"><img alt="avatar" src="assets/img/avatar-mini4.jpg"></span>
                                            <span class="subject">
                                                <span class="from"><?= $value['name'] ?></span>
                                                <span class="time">
                                                    <?php
                                                    $v = new Verta($value['createdAt']);
                                                    echo $v->format("%d / %B / %Y");
                                                    ?>
                                                </span>
                                            </span>
                                            <span class="message">
                                                <?= $value['subject'] ?>
                                            </span>
                                        </a>
                                    </li>
                            <?php endforeach;
                            } ?>

                            <li>
                                <a href="?p=list-contacts">نمایش تمامی پیام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->

                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="assets/img/avatar1_small.jpg">
                            <span class="username"><?= $_SESSION['admin_login']['firstname'] . ' ' . $_SESSION['admin_login']['lastname'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                            <li style="float: left;"><a href="dashboard.php?p=list-contacts"><i class="icon-envelope-alt"></i>پیام های شما</a></li>
                            <li><a onclick="return confirm('آیا از خــــروج خــــــود اطمینان دارید؟');" href="?logout=1"><i class="icon-key"></i> خروج</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="index.html">
                            <i class="icon-dashboard"></i>
                            <span>صفحه اصلی</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت منو ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-menu">افزودن منوی جدید</a></li>
                            <li><a class="" href="?p=list-menu">لیست منو ها</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت دسته بندی ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-product-cat">افزودن برای محصولات</a></li>
                            <li><a class="" href="?p=list-product-cat">لیست دسته محصولات</a></li>
                            <li><a class="" href="?p=add-news-cat">افزودن برای اخبار</a></li>
                            <li><a class="" href="?p=list-news-cat">لیست دسته اخبار</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت محصولات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-product">افزودن محصول جدید</a></li>
                            <li><a class="" href="?p=list-products">لیست محصولات ها</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت اخبار</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-news">افزودن خبر جدید</a></li>
                            <li><a class="" href="?p=list-news">لیست اخبار</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت ویجت ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-widget">افزودن ویجت جدید</a></li>
                            <li><a class="" href="?p=list-widget">لیست ویجت ها</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>مدیریت فرم تماس با ما</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-call-us">افزودن اطلاعات</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-book"></i>
                            <span>درباره ی ما</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="?p=add-about-us">افزودن</a></li>
                            <li><a class="" href="?p=list-about-us">لیست</a></li>
                        </ul>
                    </li>

                    <li>
                        <a onclick="return confirm('مطمئن هستید؟');" class="" href="adm-auth.php">
                            <i class="icon-user"></i>
                            <span>صفحه ورود به سایت</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">





                <?php
                if (isset($_GET['p'])) {
                    $page = $_GET['p'];
                    include  'views/tpl-' . $page . '.php';
                    // echo $page . '.php';
                } else {
                    echo 'صفحه ی اصلی';
                }
                ?>










            </section>
        </section>
        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/css/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="assets/js/easy-pie-chart.js"></script>





    <script>
        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });
    </script>

</body>

</html>