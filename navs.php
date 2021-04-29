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
<html lang="en" dir="ltr">
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
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="assets/fonts/American-Typewriter.ttf?family=American" rel="stylesheet">
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
.searchdivmobile {
     display: none;
     margin:auto;
     /*position: absolute;*/
     /*top: 20px;*/
 }
@media (max-width: 767px) {
    .searchdiv {
     display: none;
     /*position: absolute;*/
     /*top: 20px;*/
 }
  .searchdivmobile {
     display: block;
     /*position: absolute;*/
     /*top: 20px;*/
 }
 .brand-logo {
     display:inline-block;
 }
 .navmenu {
     display : none;
 }
}
 

    /* @font-face {
    font-family: sofia;
    src: url(https://fonts.googleapis.com/css?family=Sofia);
    font-weight: bold;
} */
/* @font-face {
    font-family: Tangerine;
    src: url(https://fonts.googleapis.com/css?family=Tangerine);
    font-weight: bold;
} */
/* body {
    font-family: sofia, san-serif !important;
    background-color:white !important;
} */
    /* } */
a {
    color: #1D3361;
}
.saerchInput{
    border-radius:40px;
    width:400px;
    /* border-bottom-left-radius:40px;
    border-top-left-radius:40px; */
    outline:none;

}
.saerchCategory{
    border-bottom-right-radius:40px;
    border-top-right-radius:40px;
    outline:none;


}

</style>

  </head>
  <body>
<header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-5 col-md-7 col-sm-6">
                        <div class="top-header-left">
                            <div class="shpping-order">
                            </div>
                            <div class="app-link">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-5 col-sm-6">
                        <div class="top-header-right">
                            <div class="top-menu-block">
                            </div>
                            <div class="language-block">
                                <div class="language-dropdown">
                                    <span  class="language-dropdown-click">
                                        english <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                    <ul class="language-dropdown-open">
                                    </ul>
                                </div>
                                <div class="curroncy-dropdown">
                                    <span class="curroncy-dropdown-click">
                                        gbp<i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                    <ul class="curroncy-dropdown-open">
                                        <li><a href="javascript:void(0)"><i class="fa fa-gbp"></i>gbp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-header1 layout-header1-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu-block">
                            <div class="menu-left">
                            
                                <div class="sm-nav-block toggle-nav">
                                    <span class="sm-nav-btn"><i class="fa fa-bars  sidebar-bar"></i></span>
                                    <ul class="nav-slide sm pixelstrap desc-horizontal sm-vertical sm-blue">
                                        <li>
                                            <div class="nav-sm-back">
                                                back <i class="fa fa-angle-right pl-2"></i>
                                            </div>
                                        </li>
                                    <?php
                                                            foreach($categories as $c){
                                                        ?>
                                                        <li><a href="category?id=<?php  echo $c['cat_id'] ?>" class="desc-menu-item"><?php echo $c['name'] ?></a>
                                                        <ul>
                                                            <li><a target="_blank" href="index.html">layout 1</a></li>
                                                        </ul>
                                                        </li>
                                                        <?php } ?>
                                       
                                    </ul>
                                </div>
                                <div class="brand-logo">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/layout-5/logo/logo.png" class="img-fluid  " alt="logo-header">
                                    </a>
                                </div>
                                
                            </div>
                            <div class="searchdiv">
                                                        <form class="big-deal-form mr-3 m-3" id="searchForm">
                                                            <div class="input-group ">
                                                                <!-- <div class="input-group-prepend">
                                                                    <span class="search"><i class="fa fa-search"></i></span>
                                                                </div> -->
                                                                <input type="text" name="search" id="searchInput" class="form-control saerchInput col-12" placeholder="Search a Product" >
                                                                <div class="input-group-prepend">
                                                                <input type="submit" class="form-control saerchCategory" value="Search" class=" btn btn-secondary" style ="color:#fff; background-color:#FF76AF;" >
                                                                    <!-- <select class="saerchCategory">
                                                                        <option value="*">All Category</option>
                                                                        <?php
                                                                            foreach($categories as $c){
                                                                        ?>
                                                                        <option value="<?php echo $c['cat_id'] ?>"><?php echo $c['name'] ?></option>
                                                                        <?php } ?>
                                                                    </select> -->
                                                                </div>
                                                            </div>
                                                        </form>
                                            </div>
                            <div class="menu-right">
                                <!-- <div class="toggle-block">
                                    <nav id="main-nav">
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                            </li>
                                            
                                           
                                        </ul>
                                    </nav>
                                </div> -->
                                <div>
                                    <div class="icon-nav">
                                        <ul>
                                        
                                         <li class="mr-3">
                                            <a href="/"><i class="icon-home"></i></a>
                                               
                                            </li>
                                           
                                        <?php 
                                                    if(isset($_SESSION['loggedIn'])){
                                                    ?>
                                                     <li><a href="dashboard"><i class="icon-user"></i></a></li>
                                                    <?php
                                                    } else {
                                                        ?>
                                                         <li class="mobile-user onhover-dropdown my" onclick="openAccount()"><a href="javascript:void(0)"><i class="icon-user"></i></a>
                                            </li>
                                                        <?php
                                                    }
                                                    ?>
                                                   
                                           
                                            <!-- <li class="mobile-wishlist" onclick="openWishlist()"><a href="#"><i class="icon-heart"></i><div class="cart-item"><div>0 item<span>wishlist</span></div></div></a></li> -->
                                            <!-- <li class="mobile-search" onclick="openSearch()"><a href="javascript:void(0)"><i class="icon-search"></i></a>
                                                <div class ="search-overlay">
                                                    <div>
                                                        <span class="close-mobile-search">×</span>
                                                        <div class="overlay-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <form>
                                                                            <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></li> -->
                                            
                                        </ul>
                                        <div class="cart-block mobile-cart cart-hover-div" onclick="openCart()">
                                            <a href="javascript:void(0)">
                                                <span class="cart-product"><?php echo count($obj->getCart($ip));?></span>
                                                <i class="icon-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                                                    <div class="searchdivmobile mt-2">
                                                        <!--<form class="big-deal-formm mr-3 m-3" id="searchFormm" submit="preventDefault(e)">-->
                                                            <div class="input-group ">
                                                                <!-- <div class="input-group-prepend">
                                                                    <span class="search"><i class="fa fa-search"></i></span>
                                                                </div> -->
                                                                <input type="text" name="searchm" id="searchInputm" class="form-control saerchInput col-12" placeholder="Search a Product" >
                                                                <div class="input-group-prepend">
                                                                <input type="submit" class="form-control saerchCategory" id="mobilesearch" value="Search" class=" btn btn-secondary" style ="color:#fff; background-color:#FF76AF;" >
                                                                    <!-- <select class="saerchCategory">
                                                                        <option value="*">All Category</option>
                                                                        <?php
                                                                            foreach($categories as $c){
                                                                        ?>
                                                                        <option value="<?php echo $c['cat_id'] ?>"><?php echo $c['name'] ?></option>
                                                                        <?php } ?>
                                                                    </select> -->
                                                                </div>
                                                            </div>
                                                        <!--</form>-->
                                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="category-header category-header-inverse"> -->
            <div class="custom-container navmenu">
                <div class="row">
                    <div class="col">
                        <div class="navbar-menu">
                            <!-- <div class="category-left"> -->
                                <div class=" nav-block">
                                    <div class="nav-left">
                                        <nav class="navbar row d-flex justify-content-between">
                                            <!-- <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5> -->
                                            <ul class="nav-cat title-font m-0" id="cat">
                                            <?php
                                                foreach($categories as $c){

                                            ?>
                                                    <li class="m-1 ml-3 "><a href="category?id=<?php  echo $c['cat_id'] ?>" class ="m-2"><img src="assets/images/category/<?php echo $c["image"]; ?>" alt="category-banner" style="height:30px; width:30px;" class="rounded-circle mr-1"><?php echo $c["name"]; ?></a></li>
                                               <?php
                                                }
                                            ?>
                                            </ul>
                                        </nav>
                                       
                                    </div>
                                </div>
                               
                            <!-- </div> -->
                           
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </header>
                    <div class="collection-content col shadow" id="searchResult">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                            <h4>Search Result</h4>
                                        <div class="collection-product-wrapper">
                                        
                                            <div class="product-wrapper-grid">
                                                <div class="row" id="productResult">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


    <!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCartss()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <?php foreach($cart as $c){ ?>
                <li>
                    <div class="media">
                        <a href="javascript:void(0)">
                            <img alt="" class="mr-3" src="assets/images/products/<?php echo $c['image'] ;?>">
                        </a>
                        <div class="media-body">
                            <a href="javascript:void(0)">
                                <h4><?php echo $c['name'] ;?></h4>
                            </a>
                            <h4>
                                <span><?php echo $c['quantity']." x <i class='fa fa-gbp'></i>". $c['price'];?> </span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="javascript:void(0)">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <?php } ?>
                
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>&pound;<?php $a =$obj->getCartTotal($ip); echo $a[0]['total'];?></span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="cart" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="checkout" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->

<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <span id="msg" style="color:red;"></span>
        <form class="theme-form" d="login">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-rounded btn-block " id="btn2">Login</button>
            </div>
            <div>
                <h5 class="forget-class"><a href="forget-pwd" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="register" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 m-3 p-3" id="searchresultmodal">
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- popper js-->
    <script src="assets/js/popper.min.js" ></script>

    <!-- Timer js-->
    <script src="assets/js/menu.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/slider-animat-three.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/timer.js"></script> -->
    <script src="assets/js/modal.js"></script>
    <script>
       $('#searchResult').hide();
        $('#btn2').click(function(){
                email = $('#email').val();
                password = $('#password').val();
                $.post('handler.php',{ password, email, request:'login'},function(data){
                    data = JSON.parse(data);
                    if(data.success){
                        alert("Login Successfullly");
                    } else {
                        $('#msg').html("Incorrect Email or password");
                        $('#quick-view').modal('show');
                        
                    }
                })

            })
     $('#searchForm').submit(function(){
         event.preventDefault();
         search = $('#searchInput').val();
         $.post('handler.php',{search, request:'search'},function(data){
             data = JSON.parse(data);
             list = '';
             if(data.length > 0){
                let searchresult =data.map(s=>{
                list += '<div class="col-xl-2 col-md-3 col-4  col-grid-box"><a href="product?id='+ s.slug +'"><div class="product"><div class="product-box"> <div class="product-imgbox"><div class="product-front"> <img src="assets/images/products/'+ s.image +'" class="img-fluid  " alt="product"></div><div class="product-back"><img src="assets/images/products/'+ s.image +'" class="img-fluid  " alt="product"></div></div><div class="product-detail detail-center "><div class="detail-title"><div class="detail-left"><a href="product?id='+ s.slug +'"><h6 class="price-title"> '+ s.name +'</h6></a></div><div class="detail-right"> <div class="price"><div class="price">From: &pound; '+ s.price +'</div></div></div></div><div class="icon-detail"><a href="product?id='+ s.slug +'"><i class="fa fa-eye" aria-hidden="true"></i></a></div></div></div></div></a> </div> '
	  
       })
            $('#productResult').html(list);
            $('#searchResult').show();
             } else {
                $('#searchresultmodal').html("<p> No product found</p>");
             }
         })

     })       
      $('#mobilesearch').click(function(){
         event.preventDefault();
         search = $('#searchInputm').val();
         $.post('handler.php',{search, request:'search'},function(data){
             data = JSON.parse(data);
             list = '';
             if(data.length > 0){
                let searchresult =data.map(s=>{
                list += '<div class="col-xl-2 col-md-3 col-4  col-grid-box"><a href="product?id='+ s.slug +'"><div class="product"><div class="product-box"> <div class="product-imgbox"><div class="product-front"> <img src="assets/images/products/'+ s.image +'" class="img-fluid  " alt="product"></div><div class="product-back"><img src="assets/images/products/'+ s.image +'" class="img-fluid  " alt="product"></div></div><div class="product-detail detail-center "><div class="detail-title"><div class="detail-left"><a href="product?id='+ s.slug +'"><h6 class="price-title"> '+ s.name +'</h6></a></div><div class="detail-right"> <div class="price"><div class="price">From: &pound; '+ s.price +'</div></div></div></div><div class="icon-detail"><a href="product?id='+ s.slug +'"><i class="fa fa-eye" aria-hidden="true"></i></a></div></div></div></div></a> </div> '
	  
       })
            $('#productResult').html(list);
            $('#searchResult').show();
             } else {
                $('#searchresultmodal').html("<p> No product found</p>");
             }
         })

     })       
    function addTocart(){
        customtext = $('#custom').val();
        font = $('#font').val();
        color = $('#color').val();
        shape = $('#shape').val();
        size = $('#size').val();
        material = $('#material').val();
        quantity = $('#quantity').val();
        holes = $('#holes').val();
        // font = $('#font').val();
        // color = 0;
        // shape = $('#shape').val();
        // size = $('#size').val();
        // material = $('#material').val();
        // quantity = $('#quantity').val();
        // holes = $('#holes').val();
        scp_id = <?php echo $product[0]["product_id"] ?>;
        ip = "<?php echo $ip; ?>";
        price = <?php echo $product[0]["price"] ?>;

        $.post("handler.php",{customtext,font,color,shape,size,material,scp_id,ip,price,quantity,holes, request:'addtocart'},function(data){
            data = JSON.parse(data);
            console.log(data);
        })


    }
</script>
                                                            </body>
                                                            </html>
