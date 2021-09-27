<?php

use Hekmatinasser\Verta\Verta; ?>

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست منـــــــــــــو ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان منو</th>
                    <th class="hidden-phone">عنوان سرگروه</th>
                    <th>لینک منو</th>
                    <th>تاریخ ثبت</th>
                    <th>ترتیب نمایش منو</th>
                    <th>وضعیت منو</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($menuList)) {
                    foreach ($menuList as $value) :
                ?>
                        <tr>
                            <td><a href="#"><?= $value['title'] ?></a></td>
                            <td class="hidden-phone"><?php echo getParentName($value['parentId']) ?></td>
                            <td><?= $value['url'] ?></td>

                            <td><?php
                                $v = new Verta($value['createdAt']);
                                echo $v->format("%d / %B / %Y");
                                ?>
                            </td>

                            <td><?= $value['sort'] ?></td>
                            <td><span class="label label-<?= $value['status'] ? 'success' : 'danger' ?> label-mini"><?= $value['status'] ? 'فعال' : 'غیر فعال' ?></span></td>
                            <td>
                                <button data-menuId="<?= $value['id'] ?>" class="btn btn-<?= $value['status'] ? 'danger' : 'success' ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-menuId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editMenuBtn"><i class="icon-pencil"></i></button>
                                <button data-menuId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteMenu"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                } else { ?>

                    <td>هیچ منوی وجود ندارد</td>
                <?php } ?>
            </tbody>
        </table>
    </section>
</div>

<div id="modalEditMenu">
    <div class="modalContent">
        <button type="button" class="btn btn-shadow btn-danger closeEditMenu">X</button>
        <section class="panel">
            <header class="panel-heading">
                بروزرسانی منو
            </header>
            <div class="panel-body">
                <form id="editMenuForm" role="form" action="<?= BASE_URL ?>process/ajaxHandler.php" method="POST">
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
                            if (!is_null($menuList)) {
                                foreach ($menuList as $value) :
                                    if ($value['parentId'] == 0) {
                            ?>
                                        <option class="parentOption" value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
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
    // delete menu script
    $(document).ready(function() {
        $('button.deleteMenu').click(function() {
            var menu_id = $(this).attr('data-menuId');
            var isOk = confirm('از حذف این منو مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteMenu',
                        menuId: menu_id
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
            var menu_id = $(this).attr('data-menuId');
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'toggleStatusMenu',
                    menuId: menu_id
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
    var menu_id;
    $(document).ready(function() {
        $("button.closeEditMenu").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editMenuBtn").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            menu_id = $(this).attr("data-menuId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editMenu',
                    menuId: menu_id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $("input[name='menuName']").val(response['title']);
                    $("input[name='menuLink']").val(response['url']);
                    $("input[name='menuSort']").val(response['sort']);
                    if (response['status'] == 0) {
                        $("#radio-02").attr({
                            checked: ' '
                        });
                    } else {
                        $("#radio-01").attr({
                            checked: ' '
                        });
                    }
                    if (response['parentId'] > 0) {
                        $('option.parentOption[value=' + response['parentId'] + ']').attr({
                            selected: ' '
                        });
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('#editMenuForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var editserialize = form.serialize();
            editserialize = decodeURIComponent(editserialize.replace(/%2F/g, " "));
            editserialize = decodeURIComponent(editserialize.replace(/\+/g, " "));
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: {
                    action: 'editMenuData',
                    data: editserialize,
                    id: menu_id
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