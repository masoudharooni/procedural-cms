<?php

if (isset($_GET['footer-solution'])) {
    if (in_array($_GET['footer-solution'], [0, 1]) and $_GET['footer-solution'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-menu'>با موفقیت انجام شد.!</a> </h4> <p>اطلاعات شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['footer-solution'], [0, 1]) and $_GET['footer-solution'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>اطلاعات شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        مدیریت بخش راه حل های ما در قسمت فوتر وب سایت
    </header>
    <div class="panel-body">
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی راه حل هایی که برای مشکلات ارائه میدهید بنویسید : </label>
                <input type="text" class="form-control" name="solution1" value="<?= (is_string($footerSolution[0]) and $footerSolution[0] != '') ? $footerSolution[0] : '' ?>" placeholder="توضیح دهید  . . ." require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی راه حل هایی که برای مشکلات ارائه میدهید بنویسید : </label>
                <input type="text" class="form-control" name="solution2" value="<?= (is_string($footerSolution[1]) and $footerSolution[1] != '') ? $footerSolution[1] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی راه حل هایی که برای مشکلات ارائه میدهید بنویسید : </label>
                <input type="text" class="form-control" name="solution3" value="<?= (is_string($footerSolution[2]) and $footerSolution[2] != '') ? $footerSolution[2] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی راه حل هایی که برای مشکلات ارائه میدهید بنویسید : </label>
                <input type="text" class="form-control" name="solution4" value="<?= (is_string($footerSolution[3]) and $footerSolution[3] != '') ? $footerSolution[3] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحی کوتاه درباره ی راه حل هایی که برای مشکلات ارائه میدهید بنویسید : </label>
                <input type="text" class="form-control" name="solution5" value="<?= (is_string($footerSolution[4]) and $footerSolution[4] != '') ? $footerSolution[4] : '' ?>" placeholder="توضیح دهید  . . .">
            </div>
            <button type="submit" name="addFooterSolutionBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>
    </div>
</section>