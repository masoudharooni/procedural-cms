<?php

use Hekmatinasser\Verta\Verta; ?>
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست بخش های درباره ی ما
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان </th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($allAboutUs)) {
                    foreach ($allAboutUs as $value) :
                ?>
                        <tr>
                            <td><a href="#"><?= $value['title'] ?></a></td>
                            <td><?= $value['sort'] ?></td>
                            <td><span class="label label-<?= ($value['status'] ? 'success' : 'danger') ?> label-mini"><?= ($value['status'] ? 'فعال' : 'غیرفعال') ?></span></td>
                            <td>
                                <button data-aboutId="<?= $value['id'] ?>" class="btn btn-<?= ($value['status'] ? 'warning' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-aboutId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editAboutUs"><i class="icon-pencil"></i></button>
                                <button data-aboutId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteAboutUs"><i class="icon-trash"></i></button>
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
                بروزرسانی فرم درباره ی ما
            </header>
            <div class="panel-body">
                <form id="editAboutUsForm" role="form" action="<?= BASE_URL ?>process/ajaxHandler.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان فرم درباره ی ما را وارد کنید:</label>
                        <input type="text" class="form-control" name="aboutName" placeholder="نام فرم درباره ی ما . . ." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ترتیب نمایش فرم درباره ی ما را وارد کنید :</label>
                        <input type="number" class="form-control" name="aboutSort" placeholder="ترتیب نمایش . . ." required>
                    </div>

                    وضعیت<div class="radios">
                        <label class="label_radio r_off" for="radio-01">
                            <input name="aboutStatus" id="radio-01" value="1" type="radio">
                            فعال
                        </label>
                        <label class="label_radio r_off" for="radio-02">
                            <input name="aboutStatus" id="radio-02" value="0" type="radio">
                            غیر فعال
                        </label>
                    </div><br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات در باره ی این بخش :</label>
                        <textarea type="number" class="form-control" name="aboutDesc" style="resize: vertical;" placeholder="توضیحات . . ." required></textarea>
                    </div>ط


                    <button type="submit" name="editAboutUsBtn" class="btn btn-info">ثبت تغیرات </button>
                </form>

            </div>
        </section>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete product cat script
    $(document).ready(function() {
        $('button.deleteAboutUs').click(function() {
            var aboutId = $(this).attr('data-aboutId');
            var isOk = confirm('از حذف این بخش مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteAboutUs',
                        aboutId: aboutId
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
                var aboutId = $(this).attr('data-aboutId');
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'toggleStatusAboutUs',
                        aboutId: aboutId
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
    var about_id;
    $(document).ready(function() {
        $("button.closeEditProductCat").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editAboutUs").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            about_id = $(this).attr("data-aboutId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editAboutUs',
                    aboutId: about_id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $("input[name='aboutName']").val(response['title']);
                    $("input[name='aboutSort']").val(response['sort']);
                    $("textarea[name='aboutDesc']").val(response['description']);
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
        $('#editAboutUsForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var editserialize = form.serialize();
            editserialize = decodeURIComponent(editserialize.replace(/%2F/g, " "));
            editserialize = decodeURIComponent(editserialize.replace(/\+/g, " "));
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: {
                    action: 'editAboutData',
                    data: editserialize,
                    id: about_id
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