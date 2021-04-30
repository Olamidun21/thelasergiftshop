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


    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color2.css" media="screen" id="color">
</head>
<body class="bg-white">

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
                        <h2>register</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="login-page section-big-py-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 shadow-sm ">
                <div class="theme-card ">
                    <h3 class="text-center">Create account</h3>
                    <form class="theme-form bg-white" id="register" method="post">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email"  placeholder="Email" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                            </div>
                            <input type="hidden" name="request" value="register">
                            <div class="col-md-12 form-group"><button class="btn btn-normal" id="btn">create Account</button></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <p >Have you already account? <a href="login" class="txt-default">click</a> here to &nbsp;<a href="login" class="txt-default">Login</a></p>
                            </div>
                        </div>
                    </form>
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
     $(document).ready(function(){

        $('#btn').click(function(){
        var formData = new FormData($('#register')[0]);

                            let uploadsucess;
                                    $.ajax({
                                        type: 'POST',
                                        url: '../handler.php',
                                        data: formData,
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                        success: function (data) {
                                            console.log(data);
                                        }
                                });
                                
        })
     })    
</script>
</body>
</html>
