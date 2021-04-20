<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Laser Gift Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <!--<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">-->

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">


    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">


    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color2.css" media="screen" id="color">
</head>
<body>
<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="../assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<?php include_once "navs.php" ?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>login</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                <div class="theme-card">
                    <h3 class="text-center">Login</h3>
                    <span id="msg" style="color:red;"></span>
                    <form class="theme-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required="">
                        </div>
                        <a href="javascript:void(0)" class="btn btn-normal" id="btn2">Login</a>
                        <a class="float-right txt-default mt-2" href="forget-pwd" id="fgpwd">Forgot your password?</a>
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy.</p>
                    <a href="register" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->


<!--footer start-->
<?php include_once "footer.php" ?>
<!--footer end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js" ></script>

<!-- menu js-->
<script src="../assets/js/menu.js"></script>

<!-- popper js-->
<script src="../assets/js/popper.min.js" ></script>

<!-- slick js-->
<script  src="../assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
<script>
    $('#btn2').click(function(){
                email = $('#email').val();
                password = $('#password').val();
                $.post('handler.php',{ password, email, request:'login'},function(data){
                    data = JSON.parse(data);
                    if(data.success){
                        window.location.href="/dashboard";
                    } else {
                        $('#msg').html("Incorrect Email or password");
                        
                    }
                })

            })
</script>
</body>
</html>
