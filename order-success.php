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
    <link rel="stylesheet" type="text/css" href="../assets/css/color5.css" media="screen" id="color">
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

<!-- thank-you section start -->
<section class="section-big-py-space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <p> Many thanks for your order which has now been received.  A further confirmation will be sent once your order has been dispatched. Meanwhile, if you have any questions or concerns, please contact us at orders@thelasergiftshop.co.uk</p>
                    <!-- <p>Transaction ID:267676GHERT105467</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-big-py-space mt--5">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="../assets/images/layout-4/product/1.jpg" alt="" class="img-fluid "></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>product name</h4>
                                <h5><?php echo $_SESSION['cart']['name'] ?></h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                                <h5><?php echo $_SESSION['cart']['quantity'] ?></h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                                <h5>&pound;<?php echo $_SESSION['cart']['price'] ?></h5></div>
                        </div>
                    </div>
                    <!--<div class="row product-order-detail">-->
                    <!--    <div class="col-3"><img src="../assets/images/layout-4/product/2.jpg" alt="" class="img-fluid "></div>-->
                    <!--    <div class="col-3 order_detail">-->
                    <!--        <div>-->
                    <!--            <h4>product name</h4>-->
                    <!--            <h5>cotton shirt</h5></div>-->
                    <!--    </div>-->
                    <!--    <div class="col-3 order_detail">-->
                    <!--        <div>-->
                    <!--            <h4>quantity</h4>-->
                    <!--            <h5>1</h5></div>-->
                    <!--    </div>-->
                    <!--    <div class="col-3 order_detail">-->
                    <!--        <div>-->
                    <!--            <h4>price</h4>-->
                    <!--            <h5>$555.00</h5></div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span><?php echo $_SESSION['cart']['quantity'] * $_SESSION['cart']['price'] ?></span></li>
                            <li>shipping <span><?php $_SESSION['shipping'] ?></span></li>
                            <!--<li>tax(GST) <span>$10.00</span></li>-->
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span><?php echo $_SESSION['total'] ?></span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>summery</h4>
                        <ul class="order-detail">
                            <li>order ID: <?php $_SESSION['order_id']; ?></li>
                            <!--<li>Order Date: October 22, 2018</li>-->
                            <!--<li>Order Total: $907.28</li>-->
                        </ul>
                    </div>
                    <!--<div class="col-sm-6">-->
                    <!--    <h4>shipping address</h4>-->
                    <!--    <ul class="order-detail">-->
                    <!--        <li>gerg harvell</li>-->
                    <!--        <li>568, suite ave.</li>-->
                    <!--        <li>Austrlia, 235153</li>-->
                    <!--        <li>Contact No. 987456321</li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>Direct Bank Transfer</p>
                    </div>
                    <!--<div class="col-md-12">-->
                    <!--    <div class="delivery-sec">-->
                    <!--        <h3>expected date of delivery</h3>-->
                    <!--        <h2>october 22, 2018</h2></div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

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

<!-- slick js-->
<script  src="../assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
</body>
</html>
