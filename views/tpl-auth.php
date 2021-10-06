<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favIcon.png">

    <title>فرم ورود ادمین</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/dashbord-style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body class="login-body">

    <div class="container">

        <form id="login-form" class="form-signin" action="process/ajaxHandler.php" method="POST">
            <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
            <div class="login-wrap">
                <input type="email" class="form-control" name="email" placeholder="ایمیل شما . . ." autofocus>
                <input type="password" class="form-control password" name="password" placeholder="کلمه عبور شما . . . ">
                <label class="checkbox" for="radio">
                    <span style="cursor: pointer;" class="showPass">رمز عبور</span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit" name="admin_login">ورود</button>


            </div>

        </form>

    </div>

    <script>
        $(document).ready(function() {
            $('form#login-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var editserialize = form.serialize();
                editserialize = decodeURIComponent(editserialize.replace(/%2F/g, " "));
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: {
                        action: 'login',
                        data: editserialize
                    },
                    success: function(response) {
                        if (response === false) {
                            alert('رمز عبور یا ایمیل وارد شده صحیح نمی باشد!!!');
                        } else {
                            window.location.replace('http://localhost/procedural-cms/dashboard.php');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {

            $("span.showPass").mousedown(function(e) {
                $("input.password").attr("type", "text");
            });
            $("span.showPass").mouseup(function(e) {
                $("input.password").attr("type", "password");
            });
        });
    </script>

</body>

</html>