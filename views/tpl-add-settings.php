<?php

if (isset($_GET['add-settings'])) {
    if (in_array($_GET['add-settings'], [0, 1]) and $_GET['add-settings'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-settingss'>با موفقیت انجام شد.!</a> </h4> <p>تنظیمات شما با موفقیت اعمال شد.</p> </div>";
    } elseif (in_array($_GET['add-settings'], [0, 1]) and $_GET['add-settings'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>تنظیمات شما اعمال نشد ، مجددا تلاش کنید!</div>";
    }
}
?>
<section class="panel">
    <header class="panel-heading">
        تغیر تنظیمات وب سایت
    </header>
    <div class="panel-body">
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">نام شرکت شما:</label>
                <input type="text" class="form-control" name="companyName" value="<?= (!is_null($settings->companyName) ? $settings->companyName : '') ?>" placeholder="نام . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">یک توضیح کوتاه در باره شرکت شما:</label>
                <input type="text" class="form-control" name="companyDesc" value="<?= (!is_null($settings->companyDesc) ? $settings->companyDesc : '') ?>" placeholder="مثلا : شرکت تعسیساتی مسعود">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">عنوانی برای نمایش در صفحه ی اول وبسایت وارد کنید :</label>
                <input type="text" class="form-control" name="titlePage" value="<?= (!is_null($settings->titlePage) ? $settings->titlePage : '') ?>" placeholder="عنوانی که افکت تایپینگ دارد ، مثلا : شرکت ما از مجرب ترین شرکت ها در این حوزه است." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">متنی برای کپی رایت وارد کنید :</label>
                <input type="text" class="form-control" name="copyRight" value="<?= (!is_null($settings->copyRight) ? $settings->copyRight : '') ?>" placeholder="مثلا : تمام حقوق مادی و معنوی این وب سایت برای شرکت تهویه اندیشان نوین محفوظ است." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">لینک صفحه ی اینستاگرام خود را وارد کنید :</label>
                <input type="text" class="form-control" name="instagram" value="<?= (!is_null($settings->instagram) ? $settings->instagram : '') ?>" placeholder="درصورت داشتن صفحه ی اینستاگرام لینک آنرا وارد کنید.">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">لینک صفحه ی توییتر خود را وارد کنید :</label>
                <input type="text" class="form-control" name="twitter" value="<?= (!is_null($settings->twitter) ? $settings->twitter : '') ?>" placeholder="درصورت داشتن صفحه ی توییتر لینک آنرا وارد کنید.">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">لینک صفحه ی فیسبوک خود را وارد کنید :</label>
                <input type="text" class="form-control" name="facebook" value="<?= (!is_null($settings->facebook) ? $settings->facebook : '') ?>" placeholder="درصورت داشتن صفحه ی فیس بوک لینک آنرا وارد کنید.">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">اگر وبسایت دیگری دارید که میخواهید لینک آنرا هم قرار دهید اینجا وارد کنید :</label>
                <input type="text" class="form-control" name="google" value="<?= (!is_null($settings->google) ? $settings->google : '') ?>" placeholder="لینک وبسایت خود را در صورت داشتن وارد کنید.">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">یک رنگ انتخواب کنید برای بیس طراحی وبسایت :</label>
                <input type="color" class="form-control" value="<?= (!is_null($settings->color) ? $settings->color : '') ?>" name="color">
            </div>

            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویری برای بک گراند صفحه ی اصلی آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage">
                    <img width="60px" height="60px" style="float: left;" src="<?= $settings->imgPage ?>" alt="تصویری وجود ندارد ! ! ">
                </label>
            </div><br>


            <button type="submit" name="updateSettingBtn" class="btn btn-info">ثبت محصول </button>
        </form>

    </div>
</section>