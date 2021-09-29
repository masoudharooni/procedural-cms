<?php

use Hekmatinasser\Verta\Verta; ?>

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست اخبـــــــــــــــــــــــــــــــــار ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>توضیحات</th>
                    <th>تاریخ ثبت</th>
                    <th>ترتیب نمایش </th>
                    <th>عکس</th>
                    <th>وضعیت</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($list_of_news)) {
                    foreach ($list_of_news as $value) :
                ?>
                        <tr>
                            <td><?= $value['title'] ?></td>
                            <td><?= getNewsCat(null, $value['category'])[0]['title']; ?></td>
                            <td style="line-height: 33px;"><?= $value['description'] ?></td>

                            <td>
                                <?php
                                $v = new Verta($value['createdAt']);
                                echo $v->format("%d/%B/%Y");
                                ?>
                            </td>

                            <td><?= $value['sort'] ?></td>
                            <td><a href="<?= BASE_URL . $value['imagePath'] ?>"><img src="<?= $value['imagePath'] ?>" alt="عکس خبر لود نشد!" width="70px"></a></td>
                            <td><span class="label label-<?= ($value['status'] ? 'success' : 'danger') ?> label-mini"><?= ($value['status'] ? 'فعال' : 'غیر فعال') ?></span></td>
                            <td>
                                <button data-newsId="<?= $value['id'] ?>" class="btn btn-<?= ($value['status'] ? 'danger' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-newsId="<?= $value['id'] ?>" class="btn btn-primary btn-xs editNewsBtn"><i class="icon-pencil"></i></button>
                                <button data-newsId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteNews"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                <?php endforeach;
                } else {
                    echo '<a style="color:blue;font-size:20px;" href="dashboard.php?p=add-product">خبری وجود ندارد ، اینجا کلیک کنید.</a>';
                } ?>
            </tbody>
        </table>
    </section>
</div>

<div id="modalEditMenu">
    <div class="modalContent" style="height: 690px; margin-top: -50px;">
        <button type="button" class="btn btn-shadow btn-danger closeEditMenu">X</button>
        <form id="editNewsForm" role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="number" name="newsId" style="display: none;">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان خبر را وارد کنید:</label>
                <input type="text" class="form-control" name="newsName" placeholder="نام خبر . . ." required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">دسته بندی خبر</label>
                <?php
                if (!is_null($newsCat)) {
                ?>
                    <select class="form-control m-bot15" name="newsCategory">
                        <?php

                        foreach ($newsCat as $value) :
                        ?>
                            <option class="catOption" value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
                        <?php endforeach;
                        ?>
                    </select>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ترتیب نمایش خبر را وارد کنید :</label>
                <input type="number" class="form-control" name="newsSort" placeholder="ترتیب نمایش . . ." required>
            </div>

            وضعیت خبر<div class="radios">
                <label class="label_radio r_off" for="radio-01">
                    <input name="newsStatus" id="radio-01" value="1" type="radio">
                    فعال
                </label>
                <label class="label_radio r_off" for="radio-02">
                    <input name="newsStatus" id="radio-02" value="0" type="radio">
                    غیر فعال
                </label>
            </div><br>
            <div>
                <label for="uploadImageNews" style="cursor: pointer;width: 100%;padding:20px; border:3px dashed lightgray;text-align:center;font-size:22px;font-weight: bold;">تصویره جدید را آپلود کنید
                    <input type="file" name="file" style="display: none;" id="uploadImageNews">
                    <img style="float: left;" id="editImageNews" src="" alt="عکس خبر" width="90px" height="90px">
                </label>
            </div><br>
            <div class="form-group">
                <label for="exampleInputEmail1">توضیحات خبر :</label>
                <textarea type="text" class="form-control ckeditor" rows="8" name="newsDescription" required style="resize: vertical;"></textarea>
            </div>

            <button type="submit" name="editNewsBtn" class="btn btn-info">ثبت خبر </button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete news script
    $(document).ready(function() {
        $('button.deleteNews').click(function() {
            var news_id = $(this).attr('data-newsId');
            var isOk = confirm('از حذف این خبر مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteNews',
                        newsId: news_id
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

    // toggle status news
    $(document).ready(function() {
        $('button.toggleStatus').click(function() {
            var news_id = $(this).attr('data-newsId');
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'toggleStatusNews',
                    newsId: news_id
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

    // edit news 
    var news_id;
    $(document).ready(function() {
        $("button.closeEditMenu").click(function(e) {
            $('#modalEditMenu').fadeOut(1000);
        });
        $("button.editNewsBtn").click(function() {
            $('#modalEditMenu').fadeIn(1000);
            news_id = $(this).attr("data-newsId");
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'editNews',
                    newsId: news_id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $("input[name='newsName']").val(response['title']);
                    $("textarea[name='newsDescription']").val(response['description']);
                    $("input[name='newsSort']").val(response['sort']);
                    $("img#editImageNews").attr({
                        src: response['imagePath']
                    });

                    $("input[name='newsId']").val(news_id);
                    if (response['status'] == 0) {
                        $("#radio-02").attr({
                            checked: ' '
                        });
                    } else {
                        $("#radio-01").attr({
                            checked: ' '
                        });
                    }
                    if (response['category'] > 0) {
                        $('option.catOption[value=' + response['category'] + ']').attr({
                            selected: ' '
                        });
                    }
                }
            });
        });
    });
</script>


<?php
if (isset($_GET['update-news'])) {
    if (in_array($_GET['update-news'], [0, 1]) and $_GET['update-news'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> با موفقیت انجام شد.! </h4> <p>خبر شما با موفقیت بروزرسانی شد.</p> </div>";
    } elseif (in_array($_GET['update-news'], [0, 1]) and $_GET['update-news'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>خبر شما بروز رسانی نشد ، مجددا تلاش کنید!</div>";
    }
}
?>