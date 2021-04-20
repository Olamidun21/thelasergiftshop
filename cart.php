<?php
$ip = $_SERVER['REMOTE_ADDR'];
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();

    $product = $obj->getProducts();
    $bestselling = $obj->getBestSelling();
    $featured = $obj->getFeatured();
    $categories = $obj->getCategories();
    $subcat = $obj->getSubcategories();
    $cart = $obj->getCart($ip);
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

    <!--portfolio css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color2.css" media="screen" id="color">
</head>
<body class="bg-dark">

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
                        <h2>cart</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                        <?php foreach ($cart as $c){ ?>
                    <tbody>
                    <tr>
                        
                        <td>
                            <a href="#"><img src="../assets/images/layout-3/product/<?php echo $c['image'];?>" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#"><?php echo $c['name'];?></a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="<?php echo $c['quantity'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><?php echo $c['image'];?></h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>&pound;<?php echo $c['price'];?></h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="<?php echo $c['quantity'];?>">
                                </div>
                            </div>
                        </td>
                        <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                        <td>
                            <h2 class="td-color">&pound;<?php echo $c['purchase'];?></h2></td>
                    </tr>
                    
                    </tbody>
                    <?php } ?>
                    
                    
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>&pound;<?php $a =$obj->getCartTotal($ip); echo $a[0]['total'];?></h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="javascript:history.back()" class="btn btn-normal">continue shopping</a> <a href="checkout" class="btn btn-normal ml-3">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->


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

<!-- Bootstrap Notification js-->
<script src="../assets/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>

</body>
</html>
