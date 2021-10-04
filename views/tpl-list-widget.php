<?php

use Hekmatinasser\Verta\Verta;

if (isset($_GET['update-widget'])) {
    if (in_array($_GET['update-widget'], [0, 1]) and $_GET['update-widget'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> با موفقیت انجام شد.! </h4> <p>ویجت شما با موفقیت بروزرسانی شد.</p> </div>";
    } elseif (in_array($_GET['update-widget'], [0, 1]) and $_GET['update-widget'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>ویجت شما بروز رسانی نشد ، مجددا تلاش کنید!</div>";
    }
}

?>

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست ویـــــــــــــــــــــــــــــــــــــــــــــــجت ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان</th>
                    <th>تاریخ ثبت</th>
                    <th>ترتیب نمایش </th>
                    <th>عکس</th>
                    <th>وضعیت</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($showWidgets)) {
                    foreach ($showWidgets as $value) :
                ?>
                        <tr>
                            <td><?= $value['title'] ?></td>
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
                                <button data-widgetId="<?= $value['id'] ?>" class="btn btn-<?= ($value['status'] ? 'warning' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-widgetId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editWidgetBtn"><i class="icon-pencil"></i></button>
                                <button data-widgetId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteWidget"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                <?php endforeach;
                } else {
                    echo '<a style="color:blue;font-size:20px;" href="dashboard.php?p=add-widget">ویجتی وجود ندارد ، اینجا کلیک کنید.</a>';
                } ?>
            </tbody>
        </table>
    </section>
</div>

<div id="modalEditMenu">
    <div class="modalContent" style="height: 690px; margin-top: -50px;">
        <button type="button" class="btn btn-shadow btn-danger closeEditMenu">X</button>
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="number" name="widgetId" style="display: none;">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان محصول را وارد کنید:</label>
                <input type="text" class="form-control" name="widgetName" placeholder="نام محصول . . ." required>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش محصول را وارد کنید :</label>
                <input type="number" class="form-control" name="widgetSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت محصول<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="widgetStatus" id="radio-01" value="1" type="radio">
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="widgetStatus" id="radio-02" value="0" type="radio">
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
                <textarea id="widgetDesc" type="text" class="form-control" rows="8" name="widgetDescription" required style="resize: vertical;"></textarea>
            </div>

            <button type="submit" name="editWidgetBtn" class="btn btn-info">ثبت تغیرات </button>
        </form>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete widget script
    $(document).ready(function() {
        $('button.deleteWidget').click(function() {
            var widget_id = $(this).attr('data-widgetId');
            var isOk = confirm('از حذف این ویجت مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteWidget',
                        widgetId: widget_id
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

    // toggle status widget
    $(document).ready(function() {
        $('button.toggleStatus').click(function() {
            var widget_id = $(this).attr('data-widgetId');
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'toggleStatusWidget',
                    widgetId: widget_id
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

    // edit widget 
    var widget_id;
    $(document).ready(function() {
        $("button.closeEditMenu").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editWidgetBtn").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            widget_id = $(this).attr("data-widgetId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editWidget',
                    widgetId: widget_id
                },
                dataType: 'json',
                success: function(response) {
                    $("input[name='widgetName']").val(response['title']);
                    $("input[name='widgetSort']").val(response['sort']);
                    $("#widgetDesc").val(response['description']);;
                    $("img#editImage").attr({
                        src: response['imagePath']
                    });



                    $("input[name='widgetId']").val(widget_id);
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
</script>