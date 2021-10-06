<?php
if (isset($_GET['add-widget'])) {
    if (in_array($_GET['add-widget'], [0, 1]) and $_GET['add-widget'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-widget'>با موفقیت انجام شد.!</a> </h4> <p>ویجت شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-widget'], [0, 1]) and $_GET['add-widget'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>ویجت شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>

<section class="panel">
    <header class="panel-heading">
        افزودن ویجت جدید
    </header>
    <div class="panel-body">
        <form id="addWidgetForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان ویجت را وارد کنید:</label>
                <input type="text" class="form-control" name="widgetName" placeholder="نام ویجت  . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش ویجت را وارد کنید :</label>
                <input type="number" class="form-control" name="widgetSort" placeholder="ترتیب نمایش . . ." required>
            </div>


            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویری برای ویجت خود آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage" required>
                </label>
            </div><br>


            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات ویجت :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="widgetDescription" required style="resize: vertical;">توضیحات ویجت  . . .</textarea>
            </div>
            
            <button type="submit" name="addWidgetBtn" class="btn btn-info">ثبت ویجت </button>
        </form>

    </div>
</section>
