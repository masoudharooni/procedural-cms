<section class="panel">
    <header class="panel-heading">
        افزودن محصول جدید
    </header>
    <div class="panel-body">
        <form id="addProductForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان محصول را وارد کنید:</label>
                <input type="text" class="form-control" name="proName" placeholder="نام محصول . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">دسته بندی محصول</label>
                <?php
                if (!is_null($productCategory)) {
                ?>
                    <select class="form-control m-bot15" name="proCategory">
                        <?php

                        foreach ($productCategory as $value) :
                        ?>
                            <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach;
                        ?>
                    </select>
                <?php } else {
                    echo '<br><br>لطفا دسته بندی ای را اضافه کنید. <a style="color:blue;" href="' . BASE_URL . 'dashboard.php?p=add-product-cat">اینجا کلیک کنید</a>';
                } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش محصول را وارد کنید :</label>
                <input type="number" class="form-control" name="proSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت محصول<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="proStatus" id="radio-01" value="1" type="radio" checked>
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="proStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>
            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویری برای محصول خود آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage" required>
                </label>
            </div><br>


            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات محصول :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="proDescription" required style="resize: vertical;">توضیحات محصول . . .</textarea>
            </div>

            <button type="submit" name="addProBtn" class="btn btn-info">ثبت محصول </button>
        </form>

    </div>
</section>
<?php

if (isset($_GET['add-product'])) {
    if (in_array($_GET['add-product'], [0, 1]) and $_GET['add-product'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-products'>با موفقیت انجام شد.!</a> </h4> <p>محصول شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-product'], [0, 1]) and $_GET['add-product'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>محصول شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>