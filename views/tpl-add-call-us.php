<?php

if (isset($_GET['add-callInfo'])) {
    if (in_array($_GET['add-callInfo'], [0, 1]) and $_GET['add-callInfo'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-callInfos'>با موفقیت انجام شد.!</a> </h4> <p>تغیرات شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-callInfo'], [0, 1]) and $_GET['add-callInfo'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>تغیرات شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        افزودن اطلاعات تماس با ما
    </header>
    <div class="panel-body">
        <form id="addProductForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">ایمیل خودرا وارد کنید :</label>
                <input type="email" class="form-control" name="callEmail" placeholder="ایمیل  . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">توضیحاته نمایشی :</label>
                <input type="text" class="form-control" name="callDescription" placeholder="توضیحات  . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">شماره ی موبایل خود را وارد کنید :</label>
                <input type="number" class="form-control" name="callPhone" placeholder="0913-312-1111" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">آدرس برای فرم تماس با ما وارد کنید :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="callAddress" required style="resize: vertical;">توضیحات  . . .</textarea>
            </div>

            <button type="submit" name="addCallInfoBtn" class="btn btn-info">ثبت </button>
        </form>

    </div>
</section>