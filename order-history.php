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
        $orderhistory = $obj->getorder();

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

    <!--portfolio css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color2.css" media="screen" id="color">
</head>
<body class="bg-light">

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
<div class="breadcrumb-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>order-history</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">order-history</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="cart-section order-history section-big-py-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">product</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">detail</th>
                        <th scope="col">status</th>
                    </tr>
                    </thead>
                    <?php foreach($orderhistory as $o){ ?>
                    <tbody>
                    <tr>
                        <td>
                            <a href="javascript:void(0)"><img src="../assets/images/product-sidebar/001.jpg" alt="product" class="img-fluid  "></a>
                        </td>
                        <td><a href="#">order no: <span class="dark-data"><?php echo $o["order_id"]; ?></span> <br></a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                  
                                </div>
                                <div class="col-xs-3">
                                    <h4 class="td-color">&pound;<?php echo $o["order_amount"]; ?></h4></div>
                        </td>
                        <td>
                            <h4><?php echo $o["order_amount"]; ?></h4></td>
                        <td>
                        </td>
                        <td>
                            <div class="responsive-data">
                                <h4 class="price"><?php echo $o["total_amount"]; ?></h4>
                            </div>
                            <span class="dark-data"><?php echo $o["shipment_status"]; ?></span><?php echo $o["date"]; ?>
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                    <!-- <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/product-sidebar/002.jpg" alt="product" class="  img-fluid"></a>
                        </td>
                        <td><a href="#">order no: <span class="dark-data">15454841</span> <br>cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h4 class="td-color">$63.00</h4></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h4>$63.00</h4></td>
                        <td>
                            <span>Size: L</span>
                            <br>
                            <span>Quntity: 1</span>
                        </td>
                        <td>
                            <div class="responsive-data">
                                <h4 class="price">$63.00</h4>
                                <span>Size: L</span>|<span>Quntity: 1</span>
                            </div>
                            <span class="dark-data">Delivered</span> (jul 01, 2019)
                        </td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/product-sidebar/001.jpg" alt="product" class="  img-fluid"></a>
                        </td>
                        <td><a href="#">order no: <span class="dark-data">15454841</span> <br>cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h4 class="td-color">$63.00</h4></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h4>$63.00</h4></td>
                        <td>
                            <span>Size: L</span>
                            <br>
                            <span>Quntity: 1</span>
                        </td>
                        <td>
                            <div class="responsive-data">
                                <h4 class="price">$63.00</h4>
                                <span>Size: L</span>|<span>Quntity: 1</span>
                            </div>
                            <span class="dark-data">Delivered</span> (jul 01, 2019)
                        </td>
                    </tr>
                    </tbody> -->
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12 pull-right"><a href="#" class="btn btn-normal btn-sm">show all orders</a></div>
        </div>
    </div>
</section>
<!--section end-->


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