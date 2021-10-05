<?php

if (isset($_GET['add-certificate'])) {
    if (in_array($_GET['add-certificate'], [0, 1]) and $_GET['add-certificate'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i>با موفقیت انجام شد.! </h4> <p>نمونه گواهینامه ی  شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-certificate'], [0, 1]) and $_GET['add-certificate'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>نمونه گواهینامه ی  شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        افزودن نمونه گواهینامه
    </header>
    <div class="panel-body">
        <form id="addProductForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">نام شخص را وارد کنید:</label>
                <input type="text" class="form-control" name="name" value="<?= (!is_null($certificate)) ? $certificate['title'] : '' ?>" placeholder="نام  . . ." required>
            </div>

            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویری برای گواهینامه آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage">
                    <img width="60px" height="60px" style="float: left;" src="<?= (!is_null($certificate)) ? $certificate['imagePath'] : '' ?>" alt="تصویری آپلود کنید !">
                </label>
            </div><br>


            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات گواهینامه :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="description" required style="resize: vertical;" placeholder="توضیحات گواهینامه را وارد کنید . . ."><?= (!is_null($certificate)) ? $certificate['description'] : '' ?></textarea>
            </div>

            <button type="submit" name="certificateBtn" class="btn btn-info">ثبت</button>
        </form>

    </div>
</section>