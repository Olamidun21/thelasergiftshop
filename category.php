<?php
if(isset($_GET["id"])){
$cate = $_GET["id"];
} else {
    $cate = 7;
}
if(!isset($_SESSION)){
    session_start();
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();

    // $product = $obj->getProducts();
    $catproduct = $obj->getCatProducts($cate);
    // $bestselling = $obj->getBestSelling();
    // $featured = $obj->getFeatured();
    // $categories = $obj->getCategories();
    $category = $obj->getCategory($cate);
    $subcats = $obj->getSubCategory($cate);       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Laser Gifts Shop</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/color1.css" media="screen" id="color">

    <style>
    @font-face {
    font-family: mishaland;
    src: url(assets/fonts/Mishaland.ttf);
    font-weight: bold;
}
.media-body {
    font-family: mishaland, san-serif !important;
}
body{
     background-color:white !important;
}
.cardBorder{
   border-radius:10px
}
    </style>
</head>
<body >

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="assets/images/loader.gif" alt="loader">
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
                        <h2><?php echo $category[0]['name']  ?></h2>
                        <ul>
                            <li><a href="/thelasergiftshop/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="category?id=<?php echo $category[0]['cat_id'] ?>"><?php echo $category[0]['name']  ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-big-pt-space ratio_asos">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-3 collection-filter category-page-side">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block creative-card creative-inner category-side">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <?php
                            foreach($subcats as $c){

                           
                        ?>
                            <div class="product-service">
                                <div class="media">
                                
                                    <div class="media-body">
                                    <a href="subcategory?id=<?php  echo $c['sub_cat_id'] ?>"><h3 style="font-family:mishaland, san-serif;color:black"><?php echo $c['name'] ?></h3></a>
                                    </div>
                                </div>
                        
                            </div>
                        <!-- <div class="collection-collapse-block open">
                            <a href="category?id=<?php echo $c['sub_cat_id'] ?>"><h3 class="collapse-block-title mt-0"><?php echo $c['name'] ?></h3></a>
                         
                        </div> -->
                        <?php
                            }
                        ?>
                        
                    </div>
                    <!-- silde-bar colleps block end here -->
                 
                </div>
                <div class="collection-content col ">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="top-banner-wrapper ">
                                    <!-- <a href="#"><img src="assets/images/category/<?php echo $category[0]['image']; ?>" class="img-fluid " alt=""></a> -->
                                    <div class="top-banner-content small-section">
                                        <p><?php echo $category[0]["name"]; ?></p>
                                      </div>
                                </div>
                                <div class="collection-product-wrapper mb-3">
                                  
                                    <div class="product-wrapper-grid ">
                                        <div class="row" id="product">
                                           <?php foreach($catproduct as $p){ ?>
                                            <div class="col-xl-3 col-md-4 col-6  col-grid-box shadow-sm  cardBorder">
                                            
                                            <a href="product?id=<?php echo $p['name'] ?>">
                                                <div class="product">
                                                    <div class="product-box">
                                                        <div class="product-imgbox">
                                                            <div class="product-front">
                                                                <img src="assets/images/products/<?php echo $p['image'] ?>" class="img-fluid  " alt="product">
                                                            </div>
                                                            <div class="product-back">
                                                                <img src="assets/images/products/<?php echo $p['image'] ?>" class="img-fluid  " alt="product">
                                                            </div>
                                                        </div>
                                                        <div class="product-detail detail-center ">
                                                            <div class="detail-title">
                                                                <div class="detail-left">
                                                                    <!-- <div class="rating-star">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div> -->
                                                                    <!-- <p> <?php echo $p['short_description'] ?></p> -->
                                                                    <a href="product?id=<?php echo $p['name'] ?>">
                                                                        <h6 class="price-title">
                                                                            <?php echo $p['name'] ?>
                                                                        </h6>
                                                                    </a>
                                                                </div>
                                                                <div class="detail-right">
                                                                    <!-- <div class="check-price">
                                                                        $ 56.21
                                                                    </div> -->
                                                                    <div class="price">
                                                                        <div class="price">From: &pound;
                                                                           <?php echo $p['price'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-detail">
                                                                <!-- <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                                    <i class="ti-bag" ></i>
                                                                </button> -->
                                                                <a href="product?id=<?php echo $p['name'] ?>">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            </div>

                                           <?php }?>
                                           
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
<!-- section End -->


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


<!-- Add to setting bar end-->

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- slick js-->
<script src="assets/js/slick.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js" ></script>


<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- Timer js-->
<script src="assets/js/menu.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js"></script>
<script>
        let data;
        function subcat(subcatid){
            var sub_id = subcatid;
            $.post('handler.php',{sub_id,request:'getsubcatproduct'}, function(data){
                products= JSON.parse(data);
             product = "";
            })
        }

</script>

</body>
</html>
<?php 
}
?>
