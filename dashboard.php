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
    <link rel="icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/color2.css" media="screen" id="color">
</head>
<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<?php include_once 'navs.php'; ?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>dashboard</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">dashbord</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                    <div class="block-content ">
                        <ul>
                            <li class="active"><a href="javascript:void(0)">Account Info</a></li>
                            <li><a href="addresses">Address Book</a></li>
                            <li><a href="order-history">My Orders</a></li>
                            <li><a href="profile">Change Password</a></li>
                            <li class="last"><a href="logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2></div>
                        <div class="welcome-msg">
                            <p>Hello, <?php echo $user[0]["firstname"]. " ". $user[0]["lastname"] ;?> !</p>
                            <!-- <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p> -->
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="profile">Edit</a></div>
                                        <div class="box-content">
                                            <h6> <?php echo $user[0]["firstname"]. " ". $user[0]["lastname"]?></h6>
                                            <h6> <?php echo $user[0]["email"];?></h6>
                                            <h6><a href="reset">Change Password</a></h6></div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="#">Manage Addresses</a></div>
                                    <div class="row">
                                       
                                        <div class="col-6">
                                        <?php if(count($billing) == 0){ ?>
                                            <h6>Default Billing Address</h6><address>You have not set a default billing address.<br><a href="addresses">Edit Address</a></address>
                                        <?php } else {

                                        } ?>
                                        </div>
                                            <div class="col-6">
                                            <?php if(count($shipping) == 0){ ?>
                                            <h6>Default Shipping Address</h6><address>You have not set a default shipping address.<br><a href="addresses">Edit Address</a></address>
                                    <?php } else {
                                            
                                        } ?>
                                        </div>
                                           </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->


<!--footer start-->
<?php include_once "footer.php"; ?>
<!--footer end-->

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js" ></script>


<!-- menu js-->
<script src="assets/js/menu.js"></script>


<!-- popper js-->
<script src="assets/js/popper.min.js" ></script>

<!-- slick js-->
<script  src="assets/js/slick.js"></script>


<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="assets/js/script.js" ></script>
</body>
</html>
<?php
    // }
} else {
    header("location:login");
} 

?>