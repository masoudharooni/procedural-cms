<section class="panel">
    <header class="panel-heading">
        افزودن دسته بندی جدید
    </header>
    <div class="panel-body">
        <form id="addMenuForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان دسته بندی را وارد کنید:</label>
                <input type="text" class="form-control" name="menuName" placeholder="نام دسته بندی . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش دسته بندی را وارد کنید :</label>
                <input type="number" class="form-control" name="menuSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت دسته بندی <div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="menuStatus" id="radio-01" value="1" type="radio" checked>
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="menuStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>

            <button type="submit" name="addProductCatBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>

    </div>
</section>
<?php

if (isset($_GET['add-product-cat'])) {
    if (in_array($_GET['add-product-cat'], [0, 1]) and $_GET['add-product-cat'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-product-cat'>با موفقیت انجام شد.!</a> </h4> <p>دسته بندی شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-product-cat'], [0, 1]) and $_GET['add-product-cat'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>دسته بندی شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>