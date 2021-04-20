<?php
if(!isset($_SESSION)){
    session_start();
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
<body>
<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="assets/images/loader.gif" alt="loader">
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
                        <h2>Address</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">Address</a></li>
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
        <div class="col-lg-6">
                <h3 class="mb-3 spc-responsive">BILLING ADDRESS</h3>
                <form class="theme-form" id="billing">
                    <div class="form-row">
                    <div class="col-md-6">
                           <div class="form-group">
                               <label for="name">First Name</label>
                               <input type="text" class="form-control" id="name" placeholder="Enter Your name"  value="<?php echo $billing[0]['firstname'] ?>" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="email">Last Name</label>
                               <input type="text" class="form-control" id="last-name" placeholder="Last Name" value="<?php echo $billing[0]['lastname'] ?>" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="review">Phone number</label>
                               <input type="text" class="form-control" id="review" placeholder="Enter your number" value="<?php echo $billing[0]['phone'] ?>" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $user[0]['email'] ?>" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="home-ploat">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="company name" value="<?php echo $billing[0]['apartment'] ?>" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address-two">Address *</label>
                                <input type="text" class="form-control" id="address-two" placeholder="Address" value="<?php echo $billing[0]['houseaddress'] ?>" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="zip-code">Zip Code *</label>
                               <input type="text" class="form-control" id="zip-code" placeholder="zip-code" value="<?php echo $billing[0]['postcode'] ?>"  required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="address-two">Country *</label>
                                <input type="text" class="form-control" id="country" placeholder="Country" value="<?php echo $billing[0]['country'] ?>" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="city">City *</label>
                               <input type="text" class="form-control" id="city" placeholder="City" value="<?php echo $billing[0]['town'] ?>" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="region-state">Region/State *</label>
                               <input type="text" class="form-control" id="region-state" placeholder="Region/state" value="<?php echo $billing[0]['state'] ?>" required="">
                           </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit" id="btn">Save setting</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3 spc-responsive">SHIPPING ADDRESS</h3>
                <form class="theme-form" id="shipping">
                    <div class="form-row">
                    <div class="col-md-6">
                           <div class="form-group">
                               <label for="name">First Name</label>
                               <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="email">Last Name</label>
                               <input type="text" class="form-control" id="last-name" placeholder="Last Name" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="home-ploat">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="company name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address-two">Address *</label>
                                <input type="text" class="form-control" id="address-two" placeholder="Address" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="zip-code">Zip Code *</label>
                               <input type="text" class="form-control" id="zip-code" placeholder="zip-code" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="address-two">Country *</label>
                                <input type="text" class="form-control" id="country" placeholder="Country" value="<?php echo $shipping[0]['country'] ?>" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="city">City *</label>
                               <input type="text" class="form-control" id="city" placeholder="City" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="region-state">Region/State *</label>
                               <input type="text" class="form-control" id="region-state" placeholder="Region/state" required="">
                           </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit" id="btn2">Save setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

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
<script>
     $(document).ready(function(){

        $('#btn').click(function(){
        var formData = new FormData($('#billing')[0]);

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
    

        $('#btn2').click(function(){
        var formData = new FormData($('#shipping')[0]);

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
</script>
</body>
</html>
<?php
    }
} else {
    header("location:login");
} 

?>