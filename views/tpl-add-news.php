<section class="panel">
    <header class="panel-heading">
        افزودن خبر جدید
    </header>
    <div class="panel-body">
        <form id="addProductForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان خبر را وارد کنید:</label>
                <input type="text" class="form-control" name="newsName" placeholder="نام خبر . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">دسته بندی خبر</label>
                <?php
                if (!is_null($newsCatActive)) {
                ?>
                    <select class="form-control m-bot15" name="newsCat">
                        <?php

                        foreach ($newsCatActive as $value) :
                        ?>
                            <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach;
                        ?>
                    </select>
                <?php } else {
                    echo '<br><br>لطفا دسته بندی ای را اضافه کنید. <a style="color:blue;" href="' . BASE_URL . 'dashboard.php?p=add-news-cat">اینجا کلیک کنید</a>';
                } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش خبر را وارد کنید :</label>
                <input type="number" class="form-control" name="newsSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت خبر<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="newsStatus" id="radio-01" value="1" type="radio" checked>
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="newsStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>
            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویری برای خبر خود آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage" required>
                </label>
            </div><br>


            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات خبر :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="newsDescription" required style="resize: vertical;">توضیحات خبر . . .</textarea>
            </div>

            <button type="submit" name="addNewsBtn" class="btn btn-info">ثبت خبر  </button>
        </form>

    </div>
</section>
<?php

if (isset($_GET['add-news'])) {
    if (in_array($_GET['add-news'], [0, 1]) and $_GET['add-news'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-news'>با موفقیت انجام شد.!</a> </h4> <p>خبر شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-news'], [0, 1]) and $_GET['add-news'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>خبر شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>