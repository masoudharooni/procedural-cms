<?php

use Hekmatinasser\Verta\Verta; ?>

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            لیست پیام ها
        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>نام شخص</th>
                    <th>موضوع پیام</th>
                    <th>تاریخ ثبت</th>
                    <th>وضعیت</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!is_null($allContacts)) {
                    foreach ($allContacts as $value) :
                ?>
                        <tr>
                            <td><?= $value['name'] ?></td>
                            <td style="line-height: 33px;"><?= $value['subject'] ?></td>
                            <td>
                                <?php
                                $v = new Verta($value['createdAt']);
                                echo $v->format("%d/%B/%Y");
                                ?>
                            </td>
                            <td><a href="?p=msg-page&msg-id=<?= $value['id'] ?>"><span class="label label-<?= ($value['readed'] ? 'success' : 'danger') ?> label-mini"><?= ($value['readed'] ? 'خوانده شده' : 'خوانده نشده ') ?></span></a></td>
                            <td>
                                <button data-massageId="<?= $value['id'] ?>" class="btn btn-<?= ($value['readed'] ? 'primary' : 'success') ?> btn-xs toggleStatus"><i class="icon-ok"></i></button>
                                <button data-massageId="<?= $value['id'] ?>" class="btn btn-danger btn-xs deleteMassage"><i class="icon-trash"></i></button>
                            </td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </section>
</div>

<?php
if (isset($_GET['sendEmail'])) {
    if (in_array($_GET['sendEmail'], [0, 1]) and $_GET['sendEmail'] == 1) {
        echo "<div style='line-height:30px;' class='alert alert-success alert-block fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <h4> <i class='icon-ok-sign'></i> <a href='dashboard.php?p=list-news'>با موفقیت انجام شد.!</a> </h4> <p>ایمیل  شما با موفقیت ارسال شد.</p> </div>";
    } elseif (in_array($_GET['sendEmail'], [0, 1]) and $_GET['sendEmail'] == 0) {
        echo "<div style='line-height:30px;' class='alert alert-block alert-danger fade in'> <button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>اوه ، با خطا مواجه شد.</strong>ایمیل شما ارسال نشد ، مجددا تلاش کنید!</div>";
    }
}
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // delete news script
    $(document).ready(function() {
        $('button.deleteMassage').click(function() {
            var massage_id = $(this).attr('data-massageId');
            var isOk = confirm('از حذف این پیام مطمئن هستید؟');
            if (isOk) {
                $.ajax({
                    type: "post",
                    url: "process/ajaxHandler.php",
                    data: {
                        action: 'deleteMassage',
                        massageId: massage_id
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
            var massage_id = $(this).attr('data-massageId');
            $.ajax({
                type: "post",
                url: "process/ajaxHandler.php",
                data: {
                    action: 'toggleStatusMassage',
                    massageId: massage_id
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