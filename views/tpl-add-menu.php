<section class="panel">
    <header class="panel-heading">
        افزودن منوی جدید
    </header>
    <div class="panel-body">
        <form id="addMenuForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان منو را وارد کنید:</label>
                <input type="text" class="form-control" name="menuName" placeholder="نام منو . . ." required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">لینک منو را وارد کنید :</label>
                <input type="text" class="form-control" name="menuLink" placeholder="لینک منوی مورد نظر " required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">سرگروه </label>
                <select class="form-control m-bot15" name="menuParent">
                    <option value="0">سرگروه</option>
                    <?php
                    if (!is_null($menus)) {
                        foreach ($menus as $value) :
                            if ($value['parentId'] == 0) {
                    ?>
                                <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                    <?php
                            }
                        endforeach;
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش منو را وارد کنید :</label>
                <input type="number" class="form-control" name="menuSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="menuStatus" id="radio-01" value="1" type="radio" checked>
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="menuStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>

            <button type="submit" name="addMenuBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>

    </div>
</section>
<?php

if (isset($_GET['add-menu'])) {
    if (in_array($_GET['add-menu'], [0, 1]) and $_GET['add-menu'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> با موفقیت انجام شد.! </h4> <p>منوی شما با موفقیت اضافه شد.</p> </div>";
    } elseif (in_array($_GET['add-menu'], [0, 1]) and $_GET['add-menu'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>منوی شما اضافه نشد ، مجددا تلاش کنید!</div>";
    }
}
?>