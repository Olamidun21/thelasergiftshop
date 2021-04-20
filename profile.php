<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['loggedIn'])){

        require_once 'classes/Dashboard.php';
        $obj = new Dashboard();
    
        $user = $obj->getUser();
        $billing = $obj->getUserBilling();
        $shipping = $obj->getUserShipping();

?>
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
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

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
<?php include_once "navs.php"; ?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>profile</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- personal deatail section start -->
<section class="contact-page register-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3">PERSONAL DETAIL</h3>
                <form class="theme-form">
                    <div class="form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="name">First Name</label>
                               <input type="text" class="form-control" id="name" value="<?php echo $user[0]['firstname'] ?>" placeholder="Enter Your name" required="">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="email">Last Name</label>
                               <input type="text" class="form-control" id="last-name" placeholder="Last Name"  value="<?php echo $user[0]['lastname'] ?>" required="">
                           </div>
                        </div>
                        <!-- <div class="col-md-6">
                           <div class="form-group">
                               <label for="review">Phone number</label>
                               <input type="text" class="form-control" id="review" placeholder="Enter your number" required="">
                           </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $user[0]['email'] ?>" required="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div >
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control mb-0" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <h3 class="mb-3 spc-responsive">Password Reset</h3>
                <form class="theme-form">
                    <div class="form-row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="old-password">Old Password</label>
                                <input type="password" class="form-control" id="opassword" placeholder="Old Password" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" class="form-control" id="npassword" placeholder="New Password" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit">Save setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!--footer start-->
<?php include_once 'footer.php' ?>
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
</body>
</html>
<?php
    // }
} else {
    header("location:login");
} 

?>