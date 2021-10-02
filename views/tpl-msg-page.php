<?php
if (isset($_GET['msg-id']) and is_int($_GET['msg-id'])) {
    echo $_GET['msg-id'];
}
if (isset($_GET['msg-id']) and is_numeric($_GET['msg-id'])) {
?>
    <div class="panel-body">
        <form class="form-horizontal tasi-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-4">ایمیل کاربر</label>

                <div class="col-sm-5">
                    <input type="text" name="email" class="cp1 form-control" value="<?= contacts(null, $_GET['msg-id'])[0]['email'] ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">موضوع پیام خود را وارد کنید</label>

                <div class="col-sm-5">
                    <input type="text" name="subject" placeholder="موضوع پیام شما . . . " class="cp1 form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">متن پیام خود را وارد کنید</label>

                <div class="col-sm-5">
                    <textarea name="msg" id="" cols="61" rows="10" style="resize: vertical;">متن پیام شما . . . </textarea>
                </div>
            </div>
            <button type="submit" name="sendEmailBtn" class="btn btn-success btn-lg btn-block">ارسال ایمیل </button>
        </form>
    </div>



    <!-- description -->

    <div class="panel-group m-bot20" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">آیمیل کاربر
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse in" style="height: auto;">
                <div class="panel-body">
                    <?= contacts(null, $_GET['msg-id'])[0]['email'] ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">موضوع پیام کاربر
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <?= contacts(null, $_GET['msg-id'])[0]['subject'] ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">پیام کاربر
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <?= contacts(null, $_GET['msg-id'])[0]['description'] ?> </div>
            </div>
        </div>
    </div>
<?php
} else {
    echo "هیچ کاربری انتخاب نشده ، لطقا مجددا وارد این صفحه شوید.";
}
?>