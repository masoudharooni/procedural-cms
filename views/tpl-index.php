<?php

use Hekmatinasser\Verta\Verta;

if (isset($_GET['contactUs']) and in_array($_GET['contactUs'], [0, 1]) and $_GET['contactUs'] == 1) {
	echo '<div style="margin:20px" class="alert alert-success alert-block fade in">
	<button data-dismiss="alert" class="close close-sm" type="button">
		<i class="icon-remove">X</i>
	</button>
	<h4>
		<i class="icon-ok-sign"></i>
		تشکر از نظر شما.
	</h4>
	<p>نظر شما به مدیر وب سایت ارسال شد.</p>
</div>';
} elseif (isset($_GET['contactUs']) and in_array($_GET['contactUs'], [0, 1]) and $_GET['contactUs'] == 0) {
	echo '<div class="alert alert-block alert-danger fade in">
	<button data-dismiss="alert" class="close close-sm" type="button">
		<i class="icon-remove">X</i>
	</button>
	<strong>نظر شما ثبت نشد !</strong> لطفا مجددا تلاش کنید.
</div>';
}

?>
<!DOCTYPE HTML>
<html>

<head>

	<title>cms اختصاصی</title>
	<!---css--->
	<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!---css--->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!---js--->
	<script src="assets/js/jquery-1.12.0.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<!---js--->
	<!--JS for animate-->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->

	<!---webfont--->
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!---webfont--->
	<link rel="stylesheet" type="text/css" href="assets/css/style_common.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style9.css" />

	<style>
		.view {
			float: right;
		}

		p.widgetDescription {
			height: 170px;
			width: 100%;
			overflow-y: scroll;
			text-align: center;
		}

		p.widgetDescription::-webkit-scrollbar {
			width: 0px;
		}

		.news-grids.wow.fadeInLeft.animated.animated {
			margin: 15px 0;
			height: 300px;
		}

		.contactInput {
			border-color: #000;
		}

		.product-left {
			height: 100%;
			overflow-y: scroll;
		}

		.product-left::-webkit-scrollbar {
			width: 0px;
		}

		.col-md-6.product-grid.wow.fadeInRight.animated.animated {
			height: 250px;
			margin-top: 15px;
		}

		img.img-responsive.proImage {
			height: 250px;
		}

		.dropdown {
			position: absolute;
			background: #17c2a4;
			width: 100%;
			color: #fff;
			text-align: center;
			font-size: 17px;
			display: none;
		}

		.dropdown li {
			padding: 10px;
		}

		.dropdown li:hover {
			background-color: #007561;
			cursor: pointer;
		}

		.dropDownContainer:hover .dropdown {
			display: block;
		}

		.dropDownLink {
			border-bottom: 5px solid rgba(0, 0, 0, 0);
		}

		.dropDownLink:hover {
			text-decoration: none;
			color: inherit;
			border-bottom: 5px solid red;
		}
	</style>
</head>

<body>
	<!---header--->
	<div class="header-section">
		<div class="container">
			<div class="head-bottom">
				<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
					<h1><a href="index.html">Agrox<span>Farming company</span></a></h1>
				</div>
			</div>
		</div>
	</div>
	<!---header--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!---banner--->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?= $_SERVER['PHP_SELF'] ?>" class="wow fadeInDownBig" data-wow-delay=".1s">صفحه اصلی<span class="sr-only">(current)</span></a></li>
							<?php
							if (!is_null($menus)) {
								foreach ($menus as $menu) :
									if ($menu['parentId'] == 0) {

							?>
										<li class="dropDownContainer"><a href="<?= $menu['url'] ?>" class="wow fadeInDownBig" data-wow-delay=".2s"><?= $menu['title'] ?></a>
											<ul class="dropdown">
												<?php
												$getMenuByParentId = getMenusByParentId($menu['id']);
												if (!is_null($getMenuByParentId)) {
													foreach ($getMenuByParentId as $menuParent) :
												?>
														<li><a class="dropDownLink" href="<?= $menuParent['url'] ?>"><?= $menuParent['title'] ?></a></li>
												<?php endforeach;
												} else {
													echo "<span style='line-height:30px;'>زیر منو اضافه کنید.</span>";
												} ?>
											</ul>
										</li>
							<?php }
								endforeach;
							} ?>
						</ul>
					</div>
				</div>
			</nav>
			<div class="banner-center">
				<marquee>
					<h3>بهترین مزرعه کشاورزی</h3>
				</marquee>
			</div>

		</div>
	</div>
	<!---banner-->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!---welcome-->
	<div class="content">
		<div class="welcome-section">
			<div class="container">
				<div class="banner-bottom">
					<div class="banner-grids">
						<?php
						if (!is_null($widgets)) {
							foreach ($widgets as $value) :
						?>
								<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">
									<h4><?= $value['title'] ?></h4>
									<div class="ban1">
										<div class="ban-images  view fourth-effect">
											<a href="<?= BASE_URL . $value['imagePath'] ?>"><img src="<?= $value['imagePath'] ?>" class="img-responsive" alt="عکس ویجت مورد نظر شما لود نشد." /></a>
											<div class="mask"></div>
										</div>
										<p class="widgetDescription"><?= $value['description'] ?></p>
										<a href="#" class="button hvr-wobble-bottom" style="line-height: 30px;">تاریخ ثبت ویجت
											<?php $v = new Verta($value['createdAt']);
											echo "<br>" . $v->format("%d / %B / %Y");
											?></a>
									</div>
								</div>
						<?php endforeach;
						} ?>
						<!-- <div class="clearfix"></div> -->
					</div>

				</div>

				<h2>خوش آمدید</h2>
				<div class="welcome-grids">
					<div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="assets/img/i1.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

								لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="assets/img/i2.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

								لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="assets/img/i3.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

								لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="assets/img/i4.png">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="product-section">
			<div class="container">
				<h3>محصولات محبوب</h3>

				<div class="product-grids">
					<?php
					if (!is_null($products)) {
						foreach ($products as $value) :
					?>
							<div class="col-md-6 product-grid wow fadeInRight animated" data-wow-delay=".5s">
								<div class="product-right">
									<a href="<?= BASE_URL . $value['imagePath'] ?>"><img src="<?= $value['imagePath'] ?>" class="img-responsive proImage" alt="عکس محصول لود نشد!" width="300px" height="200px"></a>
								</div>
								<div class="product-left">
									<h4><?= $value['title'] ?></h4>
									<p><?= $value['description'] ?></p>
								</div>
								<div class="clearfix"></div>
							</div>

					<?php
						endforeach;
					} ?>
				</div>
			</div>
		</div>
		<!---product-->
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---news--->
		<div class="news-section">
			<div class="container">
				<h3>آخرین اخبار</h3>

				<?php
				if (!is_null($news)) {
					foreach ($news as $value) :
				?>
						<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">
							<div class="col-md-4 new-grid">
								<div id="box" class="burst-circle teal">
									<img src="<?= $value['imagePath'] ?>" alt="عکس خبر لود نشد!" class="img-responsive" />
									<a style="cursor: pointer;" href="<?= BASE_URL . $value['imagePath'] ?>">
										<h4><?= 'در دسته بندی : ' . getNewsCat(null, $value['category'])[0]['title'] ?></h4>
									</a>
								</div>
							</div>

							<div class="col-md-8 new-grid1 hvr-bounce-to-left">
								<h5>
									<?php
									$v = new Verta($value['createdAt']);
									echo $v->format("%d / %B / %Y");
									?>
								</h5>
								<h4><?= $value['title'] ?> </h4>
								<p><?= $value['description'] ?></p>
							</div>
							<div class="clearfix"></div>
						</div>
				<?php
					endforeach;
				} ?>


			</div>
		</div>
		<!---news--->

		<div class="testimonials-section">
			<div class="container">
				<h3>گواهی نامه</h3>
				<div class="testimonials-grids">
					<div class="col-md-2 testimonials-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="assets/img/t1.png" class="img-responsive" alt="" />
					</div>
					<div class="col-md-10 testimonials-grid wow fadeInRight animated" data-wow-delay=".5s">
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
						<h5>ایمان مدائنی</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---Contacts us--->

		<div class="mail" style="border-top: 1px solid #000;border-bottom:1px solid #000;padding-top:10px">
			<div class="container">
				<h2>تماس با ما</h2>
				<div class="mail-grids">
					<div class="col-md-6 mail-right wow fadeInLeft animated" data-wow-delay=".5s">
						<h4>اطلاعات تماس</h4>
						<p><?= $callInfo['description'] ?> </p>
						<ul>
							<li>تلفن<span><a href="tel:<?= $callInfo['phone'] ?>"></a><?= $callInfo['phone'] ?></span></li>
							<li>ایمیل<a href="mailto:<?= $callInfo['email'] ?>"><?= $callInfo['email'] ?></a></li>
						</ul>
						<ul>
							<li>آدرس<span><?= $callInfo['address'] ?></span></li>
						</ul>
					</div>
					<div class="col-md-6 mail-right wow fadeInRight animated" data-wow-delay=".5s">
						<h4>ارسال پیام</h4>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
						<form id="contactUs" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
							<input class="contactInput" name="contactName" type="text" placeholder="نام" required>
							<input class="contactInput" name="contactEmail" type="email" placeholder="ایمیل" required>
							<div class="clearfix"> </div>
							<input class="contactInput" name="contactSubject" type="text" placeholder="موضوع" required>
							<textarea name="contactDescription" class="contactInput" placeholder="
نوع متن خود را در اینجا ...."></textarea>
							<input class="contactInput" name="contactBtn" type="submit" value="ارسال">
						</form>
					</div>
					<!-- <div class="clearfix"> </div> -->
				</div>
			</div>
		</div>

	</div>
	<!---footer--->
	<div class="footer-section">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>درباره ما</h4>
					<ul>
						<li>
							تمرکز بر مشتری</li>
						<li>

							لورم ایپسوم یا طرح‌نما </li>
						<li>

							لورم ایپسوم یا طرح‌نما </li>
						<li>عملکردها</li>
						<li>نوآوری</li>
						<li>
							مسئوليت ها</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
					<h4>راه حل ها</h4>
					<ul>
						<li>
							مرکز تماس</li>
						<li>پشتیبانی مشتریان</li>
						<li>

							لورم ایپسوم یا طرح‌نما </li>
						<li>طرح‌نما </li>
						<li>
							وب سلف سرویس</li>
						<li>معیارهای عملکرد</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
					<h4>کارها</h4>
					<ul>
						<li>
							پشتیبانی مشتریان</li>
						<li>
							پشتیبانی پلاتین</li>
						<li>پشتیبانی طلا</li>
						<li>آموزش</li>
						<li>کارگاه های آموزشی</li>
						<li>
							آموزش آنلاین</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>تماس با ما</h4>
					<p>تهران-شریعتی</p>
					<p>خ ملک کوچه ایرانیاد</p>
					<p>تلفن رایگان: +1 900 448 9990</p>
					<p>
						تلفن: +1 459 503 7035</p>
					<p>فکس: + 1 304 789 7898</p>
					<a href="mailto:example@mail.com"> example@mail.com</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---footer--->
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!--copy-->
	<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
		<div class=" container">
		<div class="social-icons">
			<a href="#"><i class="icon"></i></a>
			<a href="#"><i class="icon1"></i></a>
			<a href="#"><i class="icon2"></i></a>
			<a href="#"><i class="icon3"></i></a>
		</div>
		<p>کلیه حقوق مادی و معنوی برای مجموعه برنامه نویسان محفوظ می باشد <a href="http://barnamenevisan.org/">برنامه نویسان</a></p>
	</div>
	</div>
	<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->

</html>