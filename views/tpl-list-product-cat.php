<?php

use Hekmatinasser\Verta\Verta; ?>
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست دستــــــــــــــــــــه بندی ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان دسته بندی</th>
                    <th>تاریخ ثبت</th>
                    <th>ترتیب نمایش منو</th>
                    <th>وضعیت منو</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($productsCat)) {
                    foreach ($productsCat as $value) :
                ?>
                        <tr>
                            <td><a href="#"><?= $value['title'] ?></a></td>
                            <td>
                                <?php
                                $v = new Verta($value['createdAt']);
                                echo $v->format("%d / %B / %Y");
                                ?>
                            </td>
                            <td><?= $value['sort'] ?></td>
                            <td><span class="label label-<?= ($value['status'] ? 'success' : 'danger') ?> label-mini"><?= ($value['status'] ? 'فعال' : 'غیرفعال') ?></span></td>
                            <td>
                                <button data-productId="<?= $value['id'] ?>" class="btn btn-<?= ($value['status'] ? 'danger' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-productId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editProductCatBtn"><i class="icon-pencil"></i></button>
                                <button data-productId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteProductCat"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </section>
</div>

<div id="modalEditMenu">
    <div class="modalContent">
        <button type="button" class="btn btn-shadow btn-danger closeEditProductCat">X</button>
        <section class="panel">
            <header class="panel-heading">
                بروزرسانی منو
            </header>
            <div class="panel-body">
                <form id="editProductForm" role="form" action="<?= BASE_URL ?>process/ajaxHandler.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو را وارد کنید:</label>
                        <input type="text" class="form-control" name="productName" placeholder="نام منو . . ." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ترتیب نمایش منو را وارد کنید :</label>
                        <input type="number" class="form-control" name="productSort" placeholder="ترتیب نمایش . . ." required>
                    </div>

                    وضعیت<div class="radios">
                        <label class="label_radio r_off" for="radio-01">
                            <input name="menuStatus" id="radio-01" value="1" type="radio">
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
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete product cat script
    $(document).ready(function() {
        $('button.deleteProductCat').click(function() {
            var catId = $(this).attr('data-productId');
            var isOk = confirm('از حذف این منو مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteProductCat',
                        productCatId: catId
                    },
                    success: function(response) {
                        if (response == true) {
                            location.reload();
                        } else {
                            alert(response);
                        }
                    }
                });
            }
        });


        // toggle status product Cat
        $(document).ready(function() {
            $('button.toggleStatus').click(function() {
                var catId = $(this).attr('data-productId');
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'toggleStatusProductCat',
                        productCatId: catId
                    },
                    success: function(response) {
                        if (response == true) {
                            location.reload();
                        } else {
                            alert(response);
                        }
                    }
                });
            });
        });
    });



    // edit menu 
    var productCat_id;
    $(document).ready(function() {
        $("button.closeEditProductCat").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editProductCatBtn").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            productCat_id = $(this).attr("data-productId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editProductCat',
                    productCatId: productCat_id
                },
                dataType: 'json',
                success: function(response) {
                    $("input[name='productName']").val(response['title']);
                    $("input[name='productSort']").val(response['sort']);
                    if (response['status'] == 0) {
                        $("#radio-02").attr({
                            checked: ' '
                        });
                    } else {
                        $("#radio-01").attr({
                            checked: ' '
                        });
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('#editProductForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var editserialize = form.serialize();
            editserialize = decodeURIComponent(editserialize.replace(/%2F/g, " "));
            editserialize = decodeURIComponent(editserialize.replace(/\+/g, " "));
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: {
                    action: 'editProductData',
                    data: editserialize,
                    id: productCat_id
                },
                success: function(response) {
                    if (response == true) {
                        location.reload();
                    } else {
                        alert(response);
                    }
                }
            });
        });
    });
</script>