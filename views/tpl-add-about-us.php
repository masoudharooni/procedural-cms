<?php

if (isset($_GET['add-about-us'])) {
    if (in_array($_GET['add-about-us'], [0, 1]) and $_GET['add-about-us'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-about-us'>با موفقیت انجام شد.!</a> </h4> <p> این بخش با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-about-us'], [0, 1]) and $_GET['add-about-us'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>یان بخش اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        افزودن اطلاعات برای بخش درباره ی ما در وبسایت
    </header>
    <div class="panel-body">
        <form id="addMenuForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوانی برای این بخش وارد کنید :</label>
                <input type="text" class="form-control" name="titleAbout" placeholder="عنوان . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش این بخش را وارد کنید :</label>
                <input type="number" class="form-control" name="sortAbout" placeholder="ترتیب نمایش . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات در باره ی این بخش :</label>
                <textarea type="number" class="form-control" name="descAbout" style="resize: vertical;" placeholder="توضیحات . . ." required></textarea>
            </div>

            <button type="submit" name="addAboutUsBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>

    </div>
</section>