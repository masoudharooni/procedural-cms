<?php

if (isset($_GET['footer-about'])) {
    if (in_array($_GET['footer-about'], [0, 1]) and $_GET['footer-about'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-menu'>با موفقیت انجام شد.!</a> </h4> <p>اطلاعات شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['footer-about'], [0, 1]) and $_GET['footer-about'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>اطلاعات شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        مدیریت بخش درباره ی ما در قسمت فوتر وب سایت
    </header>
    <div class="panel-body">
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">شرکت خود را در یک متن کوتاه توصیف کنید</label>
                <input type="text" class="form-control" name="about1" value="<?= (is_string($footerAbout[0]) and $footerAbout[0] != '') ? $footerAbout[0] : '' ?>" placeholder="توصیف کنید  . . ." require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">شرکت خود را در یک متن کوتاه توصیف کنید</label>
                <input type="text" class="form-control" name="about2" value="<?= (is_string($footerAbout[1]) and $footerAbout[1] != '') ? $footerAbout[1] : '' ?>" placeholder="توصیف کنید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">شرکت خود را در یک متن کوتاه توصیف کنید</label>
                <input type="text" class="form-control" name="about3" value="<?= (is_string($footerAbout[2]) and $footerAbout[2] != '') ? $footerAbout[2] : '' ?>" placeholder="توصیف کنید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">شرکت خود را در یک متن کوتاه توصیف کنید</label>
                <input type="text" class="form-control" name="about4" value="<?= (is_string($footerAbout[3]) and $footerAbout[3] != '') ? $footerAbout[3] : '' ?>" placeholder="توصیف کنید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">شرکت خود را در یک متن کوتاه توصیف کنید</label>
                <input type="text" class="form-control" name="about5" value="<?= (is_string($footerAbout[4]) and $footerAbout[4] != '') ? $footerAbout[4] : '' ?>" placeholder="توصیف کنید  . . .">
            </div>
            <button type="submit" name="addFooterAboutBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>
    </div>
</section>