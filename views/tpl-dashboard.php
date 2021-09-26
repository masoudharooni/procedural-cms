<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

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
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">شما 6 برنامه در دست کار دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پنل مدیریت</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">بروزرسانی دیتابیس</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه نویسی IPhone</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه موبایل</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پروفایل v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">برنامه های بیشتر</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">شما 5 پیام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from">سجاد باقرزاده</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">ایمان مدائنی</span>
                                        <span class="time">10 دقیقه قبل</span>
                                    </span>
                                    <span class="message">
                                        سلام، چطوری شما؟
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">صبا ذاکر</span>
                                        <span class="time">3 ساعت قبل</span>
                                    </span>
                                    <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">مسعود شریفی</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی پیام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">شما 7 اعلام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    سرور شماره 3 توقف کرده
                                    <span class="small italic">34 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    سرور شماره 4 بارگزاری نمی شود
                                    <span class="small italic">1 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    پنل مدیریت 24% پیشرفت داشته است
                                    <span class="small italic">4 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    ثبت نام کاربر جدید
                                    <span class="small italic">همین حالا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    برنامه پیام خطا دارد
                                    <span class="small italic">10 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی اعلام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
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
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">سجاد باقرزاده</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                            <li><a href="login.html"><i class="icon-key"></i> خروج</a></li>
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
                            <span>عناصر صفحه</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="general.html">عمومی</a></li>
                            <li><a class="" href="buttons.html">دکمه ها</a></li>
                            <li><a class="" href="widget.html">ویجت ها</a></li>
                            <li><a class="" href="slider.html">اسلایدر ها</a></li>
                            <li><a class="" href="font_awesome.html">فونت های شکل دار</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-cogs"></i>
                            <span>کامنت ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="grids.html">گرید</a></li>
                            <li><a class="" href="calendar.html">تقویم</a></li>
                            <li><a class="" href="charts.html">چارت</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-tasks"></i>
                            <span>ابزارهای فرم</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="form_component.html">کامنت فرم</a></li>
                            <li><a class="" href="form_wizard.html">فرم Wizard</a></li>
                            <li><a class="" href="form_validation.html">ارزیابی فرم</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-th"></i>
                            <span>اطلاعات جدول</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="basic_table.html">جدول ساده</a></li>
                            <li><a class="" href="dynamic_table.html">جدول داینامیک</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="inbox.html">
                            <i class="icon-envelope"></i>
                            <span>ایمیل </span>
                            <span class="label label-danger pull-right mail-info">2</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-glass"></i>
                            <span>عناصر اضافی</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="blank.html">صفحه خالی</a></li>
                            <li><a class="" href="profile.html">پروفایل</a></li>
                            <li><a class="" href="invoice.html">فاکتور</a></li>
                            <li><a class="" href="404.html">404 Error</a></li>
                            <li><a class="" href="500.html">500 Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="login.html">
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
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="icon-user"></i>
                            </div>
                            <div class="value">
                                <h1>22</h1>
                                <p>کاربر جدید</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="icon-tags"></i>
                            </div>
                            <div class="value">
                                <h1>140</h1>
                                <p>فروش</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="icon-shopping-cart"></i>
                            </div>
                            <div class="value">
                                <h1>345</h1>
                                <p>سفارش جدید</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class="icon-bar-chart"></i>
                            </div>
                            <div class="value">
                                <h1>34,500</h1>
                                <p>سود خالص</p>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->

                <div class="row">
                    <div class="col-lg-8">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>چارت ورودی</h3>
                        </div>
                        <div class="custom-bar-chart">
                            <div class="bar">
                                <div class="title">فروردین</div>
                                <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">اردیبهشت</div>
                                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">خرداد</div>
                                <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">تیر</div>
                                <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                            </div>
                            <div class="bar">
                                <div class="title">مرداد</div>
                                <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">شهریور</div>
                                <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                            </div>
                            <div class="bar">
                                <div class="title">مهر</div>
                                <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">آبان</div>
                                <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">آذر</div>
                                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">دی</div>
                                <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                            </div>
                            <div class="bar ">
                                <div class="title">بهمن</div>
                                <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                            </div>
                            <div class="bar doted">
                                <div class="title">اسفند</div>
                                <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                            </div>
                        </div>
                        <!--custom chart end-->
                    </div>
                    <div class="col-lg-4">
                        <!--new earning start-->
                        <div class="panel terques-chart">
                            <div class="panel-body chart-texture">
                                <div class="chart">
                                    <div class="heading">
                                        <span>جمعه</span>
                                        <strong>ريال 570000 | 15%</strong>
                                    </div>
                                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">ورودی ها</span>
                                <span class="value">
                                    <a href="#" class="active">فروش</a>
                                    |
                                    <a href="#">بازگشتی</a>
                                    |
                                    <a href="#">آنلاین</a>
                                </span>
                            </div>
                        </div>
                        <!--new earning end-->

                        <!--total earning start-->
                        <div class="panel green-chart">
                            <div class="panel-body">
                                <div class="chart">
                                    <div class="heading">
                                        <span>مهر</span>
                                        <strong>23 روز | 65%</strong>
                                    </div>
                                    <div id="barchart"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">درآمد کل</span>
                                <span class="value">ريال, 76،54،678</span>
                            </div>
                        </div>
                        <!--total earning end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <!--user info table start-->
                        <section class="panel">
                            <div class="panel-body">
                                <a href="#" class="task-thumb">
                                    <img src="img/avatar1.jpg" alt="">
                                </a>
                                <div class="task-thumb-details">
                                    <h1><a href="#">Anjelina Joli</a></h1>
                                    <p>Senior Architect</p>
                                </div>
                            </div>
                            <table class="table table-hover personal-task">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class=" icon-tasks"></i>
                                        </td>
                                        <td>New Task Issued</td>
                                        <td> 02</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon-warning-sign"></i>
                                        </td>
                                        <td>Task Pending</td>
                                        <td> 14</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon-envelope"></i>
                                        </td>
                                        <td>Inbox</td>
                                        <td> 45</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class=" icon-bell-alt"></i>
                                        </td>
                                        <td>New Notification</td>
                                        <td> 09</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <!--user info table end-->
                    </div>
                    <div class="col-lg-8">
                        <!--work progress start-->
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="task-progress">
                                    <h1>Work Progress</h1>
                                    <p>Anjelina Joli</p>
                                </div>
                                <div class="task-option">
                                    <select class="styled">
                                        <option>Anjelina Joli</option>
                                        <option>Tom Crouse</option>
                                        <option>Jhon Due</option>
                                    </select>
                                </div>
                            </div>
                            <table class="table table-hover personal-task">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Target Sell
                                        </td>
                                        <td>
                                            <span class="badge bg-important">75%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress1"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Product Delivery
                                        </td>
                                        <td>
                                            <span class="badge bg-success">43%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress2"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            Payment Collection
                                        </td>
                                        <td>
                                            <span class="badge bg-info">67%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress3"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Work Progress
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">30%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress4"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            Delivery Pending
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">15%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress5"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <!--work progress end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!--timeline start-->
                        <section class="panel">
                            <div class="panel-body">
                                <div class="text-center mbot30">
                                    <h3 class="timeline-title">Timeline</h3>
                                    <p class="t-info">This is a project timeline</p>
                                </div>

                                <div class="timeline">
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon red"></span>
                                                    <span class="timeline-date">08:25 am</span>
                                                    <h1 class="red">12 July | Sunday</h1>
                                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon green"></span>
                                                    <span class="timeline-date">10:00 am</span>
                                                    <h1 class="green">10 July | Wednesday</h1>
                                                    <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon blue"></span>
                                                    <span class="timeline-date">11:35 am</span>
                                                    <h1 class="blue">05 July | Monday</h1>
                                                    <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                                    <div class="album">
                                                        <a href="#">
                                                            <img alt="" src="img/sm-img-1.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="img/sm-img-2.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="img/sm-img-3.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="img/sm-img-1.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="img/sm-img-2.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon purple"></span>
                                                    <span class="timeline-date">3:20 pm</span>
                                                    <h1 class="purple">29 June | Saturday</h1>
                                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                                    <div class="notification">
                                                        <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon light-green"></span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="light-green">10 June | Friday</h1>
                                                    <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="clearfix">&nbsp;</div>
                            </div>
                        </section>
                        <!--timeline end-->
                    </div>
                    <div class="col-lg-4">
                        <!--revenue start-->
                        <section class="panel">
                            <div class="revenue-head">
                                <span>
                                    <i class="icon-bar-chart"></i>
                                </span>
                                <h3>Revenue</h3>
                                <span class="rev-combo pull-right">
                                    June 2013
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 text-center">
                                        <div class="easy-pie-chart">
                                            <div class="percentage" data-percent="35"><span>35</span>%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="chart-info chart-position">
                                            <span class="increase"></span>
                                            <span>Revenue Increase</span>
                                        </div>
                                        <div class="chart-info">
                                            <span class="decrease"></span>
                                            <span>Revenue Decrease</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer revenue-foot">
                                <ul>
                                    <li class="first active">
                                        <a href="javascript:;">
                                            <i class="icon-bullseye"></i>
                                            Graphical
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class=" icon-th-large"></i>
                                            Tabular
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="javascript:;">
                                            <i class=" icon-align-justify"></i>
                                            Listing
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!--revenue end-->
                        <!--features carousel start-->
                        <section class="panel">
                            <div class="flat-carousal">
                                <div id="owl-demo" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <h1>Flatlab is new model of admin dashboard for happy use</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h1>Fully responsive and build with Bootstrap 3.0</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h1>Responsive Frontend is free if you get this.</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="ft-link">
                                    <li class="active">
                                        <a href="javascript:;">
                                            <i class="icon-reorder"></i>
                                            Sales
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class=" icon-calendar-empty"></i>
                                            promo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class=" icon-camera"></i>
                                            photo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class=" icon-circle"></i>
                                            other
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!--features carousel end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!--latest product info start-->
                        <section class="panel post-wrap pro-box">
                            <aside>
                                <div class="post-info">
                                    <span class="arrow-pro right"></span>
                                    <div class="panel-body">
                                        <h1><strong>popular</strong> <br> Brand of this week</h1>
                                        <div class="desk yellow">
                                            <h3>Dimond Ring</h3>
                                            <p>Lorem ipsum dolor set amet lorem ipsum dolor set amet ipsum dolor set amet</p>
                                        </div>
                                        <div class="post-btn">
                                            <a href="javascript:;">
                                                <i class="icon-chevron-sign-left"></i>
                                            </a>
                                            <a href="javascript:;">
                                                <i class="icon-chevron-sign-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="post-highlight yellow v-align">
                                <div class="panel-body text-center">
                                    <div class="pro-thumb">
                                        <img src="img/ring.jpg" alt="">
                                    </div>
                                </div>
                            </aside>
                        </section>
                        <!--latest product info end-->
                        <!--twitter feedback start-->
                        <section class="panel post-wrap pro-box">
                            <aside class="post-highlight terques v-align">
                                <div class="panel-body">
                                    <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago by jonathan smith</h2>
                                </div>
                            </aside>
                            <aside>
                                <div class="post-info">
                                    <span class="arrow-pro left"></span>
                                    <div class="panel-body">
                                        <div class="text-center twite">
                                            <h1>Twitter Feed</h1>
                                        </div>

                                        <footer class="social-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>
                            </aside>
                        </section>
                        <!--twitter feedback end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-xs-6">
                                <!--pie chart start-->
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="chart">
                                            <div id="pie-chart"></div>
                                        </div>
                                    </div>
                                    <footer class="pie-foot">
                                        Free: 260GB
                                    </footer>
                                </section>
                                <!--pie chart start-->
                            </div>
                            <div class="col-xs-6">
                                <!--follower start-->
                                <section class="panel">
                                    <div class="follower">
                                        <div class="panel-body">
                                            <h4>Jonathan Smith</h4>
                                            <div class="follow-ava">
                                                <img src="img/follower-avatar.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <footer class="follower-foot">
                                        <ul>
                                            <li>
                                                <h5>2789</h5>
                                                <p>Follower</p>
                                            </li>
                                            <li>
                                                <h5>270</h5>
                                                <p>Following</p>
                                            </li>
                                        </ul>
                                    </footer>
                                </section>
                                <!--follower end-->
                            </div>
                        </div>
                        <!--weather statement start-->
                        <section class="panel">
                            <div class="weather-bg">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <i class="icon-cloud"></i>
                                            California
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="degree">
                                                24°
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="weather-category">
                                <ul>
                                    <li class="active">
                                        <h5>humidity</h5>
                                        56%
                                    </li>
                                    <li>
                                        <h5>precip</h5>
                                        1.50 in
                                    </li>
                                    <li>
                                        <h5>winds</h5>
                                        10 mph
                                    </li>
                                </ul>
                            </footer>

                        </section>
                        <!--weather statement end-->
                    </div>
                </div>

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