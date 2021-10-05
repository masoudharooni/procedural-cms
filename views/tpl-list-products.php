<?php

use Hekmatinasser\Verta\Verta; ?>

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست محصــــــــــــــــــــــــــــــولات ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    
                    <th>تاریخ ثبت</th>
                    <th>ترتیب نمایش </th>
                    <th>عکس</th>
                    <th>وضعیت</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($showProducts)) {
                    foreach ($showProducts as $value) :
                ?>
                        <tr>
                            <td><?= $value['title'] ?></td>
                            <td><?= getProductsCat(null, $value['category'])[0]['title'] ?></td>

                            <td>
                                <?php
                                $v = new Verta($value['createdAt']);
                                echo $v->format('%d / %B / %Y');
                                ?>
                            </td>

                            <td><?= $value['sort'] ?></td>
                            <td><a href="<?= BASE_URL . $value['imagePath'] ?>"><img src="<?= $value['imagePath'] ?>" alt="عکس محصول لود نشد!" width="70px"></a></td>
                            <td><span class="label label-<?= ($value['status'] ? 'success' : 'danger') ?> label-mini"><?= ($value['status'] ? 'فعال' : 'غیر فعال') ?></span></td>
                            <td>
                                <button data-proId="<?= $value['id'] ?>" class="btn btn-<?= ($value['status'] ? 'danger' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-proId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editProBtn"><i class="icon-pencil"></i></button>
                                <button data-proId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deletePro"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                <?php endforeach;
                } else {
                    echo '<a style="color:blue;font-size:20px;" href="dashboard.php?p=add-product">محصولی وجود ندارد ، اینجا کلیک کنید.</a>';
                } ?>
            </tbody>
        </table>
    </section>
</div>

<div id="modalEditMenu">
    <div class="modalContent" style="height: 690px; margin-top: -50px;">
        <button type="button" class="btn btn-shadow btn-danger closeEditMenu">X</button>
        <form id="addProductForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="number" name="proId" style="display: none;">
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
                            <option class="catOption" value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach;
                        ?>
                    </select>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش محصول را وارد کنید :</label>
                <input type="number" class="form-control" name="proSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت محصول<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="proStatus" id="radio-01" value="1" type="radio">
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="proStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>
            <div>
                <label for="uploadImage" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویره جدید را آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImage">
                    <img style="float: left;" id="editImage" src="" alt="عکس محصول" width="90px" height="90px">
                </label>
            </div><br>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات محصول :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="proDescription" required style="resize: vertical;"></textarea>
            </div>

            <button type="submit" name="editProBtn" class="btn btn-info">ثبت محصول </button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete menu script
    $(document).ready(function() {
        $('button.deletePro').click(function() {
            var pro_id = $(this).attr('data-proId');
            var isOk = confirm('از حذف این منو مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deletePro',
                        proId: pro_id
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
    });

    // toggle status menu
    $(document).ready(function() {
        $('button.toggleStatus').click(function() {
            var pro_id = $(this).attr('data-proId');
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'toggleStatusPro',
                    proId: pro_id
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

    // edit menu 
    var pro_id;
    $(document).ready(function() {
        $("button.closeEditMenu").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editProBtn").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            pro_id = $(this).attr("data-proId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editPro',
                    proId: pro_id
                },
                dataType: 'json',
                success: function(response) {
                    $("input[name='proName']").val(response['title']);
                    $("textarea[name='proDescription']").val(response['description']);
                    $("input[name='proSort']").val(response['sort']);
                    $("img#editImage").attr({
                        src: response['imagePath']
                    });

                    $("input[name='proId']").val(pro_id);
                    if (response['status'] == 0) {
                        $("#radio-02").attr({
                            checked: ' '
                        });
                    } else {
                        $("#radio-01").attr({
                            checked: ' '
                        });
                    }
                    if (response['cat_id'] > 0) {
                        $('option.catOption[value=' + response['cat_id'] + ']').attr({
                            selected: ' '
                        });
                    }
                }
            });
        });
    });
</script>


<?php
if (isset($_GET['update-products'])) {
    if (in_array($_GET['update-products'], [0, 1]) and $_GET['update-products'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> با موفقیت انجام شد.! </h4> <p>محصول شما با موفقیت بروزرسانی شد.</p> </div>";
    } elseif (in_array($_GET['update-products'], [0, 1]) and $_GET['update-products'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>محصول شما بروز رسانی نشد ، مجددا تلاش کنید!</div>";
    }
}
?>