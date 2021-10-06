<?php

if (isset($_GET['footer-work'])) {
    if (in_array($_GET['footer-work'], [0, 1]) and $_GET['footer-work'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-menu'>با موفقیت انجام شد.!</a> </h4> <p>اطلاعات شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['footer-work'], [0, 1]) and $_GET['footer-work'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>اطلاعات شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        مدیریت بخش کار های ما در قسمت فوتر وب سایت
    </header>
    <div class="panel-body">
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی کارخود بدهید : </label>
                <input type="text" class="form-control" name="work1" value="<?= (is_string($footerWork[0]) and $footerWork[0] != '') ? $footerWork[0] : '' ?>" placeholder="توضیح دهید  . . ." require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی کارخود بدهید : </label>
                <input type="text" class="form-control" name="work2" value="<?= (is_string($footerWork[1]) and $footerWork[1] != '') ? $footerWork[1] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی کارخود بدهید : </label>
                <input type="text" class="form-control" name="work3" value="<?= (is_string($footerWork[2]) and $footerWork[2] != '') ? $footerWork[2] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی کارخود بدهید : </label>
                <input type="text" class="form-control" name="work4" value="<?= (is_string($footerWork[3]) and $footerWork[3] != '') ? $footerWork[3] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی کارخود بدهید : </label>
                <input type="text" class="form-control" name="work5" value="<?= (is_string($footerWork[4]) and $footerWork[4] != '') ? $footerWork[4] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <button type="submit" name="addFooterWorkBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>
    </div>
</section>