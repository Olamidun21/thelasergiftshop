<?php
if(isset($_GET["id"])){
    $pid = $_GET["id"];
$ip = $_SERVER['REMOTE_ADDR'];
if(!isset($_SESSION)){
    session_start();
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();

    $productss = $obj->getProductDetails($pid);
    $productsssizes = $obj->getProductsize($pid);
    $productsscolors = $obj->getProductcolor($pid);
    $productssshapes = $obj->getProductshape($pid);
    $productssfonts = $obj->getProductfont($pid);
    $productssmate = $obj->getProductmaterial($pid);
    $productssholes = $obj->getProductHole($pid);
    $productssimages = $obj->getProductImages($pid);
    $colors = $obj->getcolors();
    // print_r($productss[0]);
    // $productss = $obj->getCatProducts($cate);
    // $bestselling = $obj->getBestSelling();
    // $featured = $obj->getFeatured();
    // $categories = $obj->getCategories();
    // $category = $obj->getCategory($cate);
    // $subcat = $obj->getSubCategory($cate); 
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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="assets/fonts/American-Typewriter.ttf?family=American" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> -->

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

    <!-- fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> -->
    <style>
        @font-face {
            font-family: Rochester;
            src: url(assets/fonts/Rochester-Regular.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Amsterdam;
            src: url(assets/fonts/Amsterdam.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Mishaland;
            src: url(assets/fonts/Mishaland.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Quick Kiss;
            src: url(assets/fonts/Quick-Kiss.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Beautiful People;
            src: url(assets/fonts/Beautiful-People.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Xiomara;
            src: url(assets/fonts/Xiomara-Script.ttf);
            font-weight: bold;
}
@font-face {
            font-family: Vesta Night;
            src: url(assets/fonts/Vesta-Night.otf);
            font-weight: bold;
}
@font-face {
            font-family: Bold Stylish Calligraphy;
            src: url(assets/fonts/Bold-Stylish-Calligraphy.ttf);
            font-weight: bold;
}
@font-face {
    font-family:American Typewriter ;
    src: url(assets/fonts/American-Typewriter.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Ananda Black;
    src: url(assets/fonts/Ananda.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Arial;
    src: url(assets/fonts/arial.ttf);
    font-weight: bold;
}
@font-face {
    font-family: August;
    src: url(assets/fonts/august.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Bernard MT;
    src: url(assets/fonts/bernard.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Brock Script;
    src: url(assets/fonts/BrockScript.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Brush Script MT;
    src: url(assets/fonts/brush-script.ttfCalling Heart);
    font-weight: bold;
}
@font-face {
    font-family: Calling Heart;
    src: url(assets/fonts/CallingHeart.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Century751 seBd BT;
    src: url(assets/fonts/centuary.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Clarendon Blk;
    src: url(assets/fonts/clarendon.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Countryiside;
    src: url(assets/fonts/Countryside.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Edwardian Script;
    src: url(assets/fonts/Edwardian.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Great Vibes;
    src: url(assets/fonts/GreatVibes.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Montserrat;
    src: url(assets/fonts/Montserrat.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Rage Italic;
    src: url(assets/fonts/RAGE.TTF);
    font-weight: bold;
}
@font-face {
    font-family: Waltograph;
    src: url(assets/fonts/waltographUI.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Matchmaker;
    src: url(assets/fonts/Matchmaker.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Blangkon Script;
    src: url(assets/fonts/BlangkonScript.ttf);
    font-weight: bold;
}
@font-face {
    font-family: Sweet Sensations;
    src: url(assets/fonts/Sweet-Sensations.ttf);
    font-weight: bold;
}
/*@font-face {*/
/*    font-family: ;*/
/*    src: url(assets/fonts/);*/
/*    font-weight: bold;*/
/*}*/

    </style>
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
<?php include_once "navs.php"; ?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>product</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-slick">
                        <div><img src="assets/images/products/<?php echo $productss[0]['image'] ?>" alt="" class="img-fluid  image_zoom_cls-0"></div>
                        <?php if(count($productssimages) > 0){ 
                                foreach($productssimages as $image){        
                      ?> 
                        <div><img src="assets/images/products/<?php echo $image['url'] ?>" alt="" class="img-fluid  image_zoom_cls-1"></div>
                        <!-- <div><img src="assets/images/products/<?php echo $productssimages[1]['image'] ?>" alt="" class="img-fluid  image_zoom_cls-2"></div>
                        <div><img src="assets/images/products/<?php echo $productssimages[2]['image'] ?>" alt="" class="img-fluid  image_zoom_cls-3"></div> -->
                   <?php
                            }
                         } 
                ?>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                            <?php foreach($productssimages as $i){ ?>
                                <div><img src="assets/images/products/<?php echo $i['url'] ?>" alt="" class="img-fluid  image_zoom_cls-0"></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-right product-description-box">
                        <h2><?php echo $productss[0]["name"] ?></h2>
                        <div class="border-product">
                            <h6 class="product-title">product details</h6>
                            <p><?php echo $productss[0]["short_description"] ?></p>
                        </div>
                      
                        <div class="border-product">
                            <h6 class="product-title">100% SECURE PAYMENT</h6>
                            <div class="payment-card-bottom">
                                <ul>
                                    <li>
                                        <a href="#"><img src="assets/images/pay/1.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/pay/2.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/pay/3.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/pay/4.png" alt=""></a>
                                    </li>
                                </ul>
                            </div><br>
                            <div class="border-product"> 
                            <h6 class="product-title">Available in these colors</h6>
                       <?php foreach($productsscolors as $c){?>
                        <div class="text-center mr-1" style="display:inline-block;">     
                            <img src ="assets/color/<?php echo $c['image'];?>" class="rounded" style="width:30px; height:30px;"/>
                            <p><?php echo $c['name'];?></p>
                        </div>
                        
                      <?php } ?>
                       </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="specs" method="post" action="checkout">
                    <input type="hidden" name="name" value="<?php echo $productss[0]['name']; ?>"/>
                    <input type="hidden" name="scp_id" value="<?php echo $productss[0]['scp_id']; ?>"/>
                    <input type="hidden" name="product_id" value="<?php echo $productss[0]['product_id']; ?>"/>
                    <div class="product-right product-form-box">
                        <h3>From: &pound;<?php echo $productss[0]["price"]; ?><input type="hidden" name="price" value="<?php echo $productss[0]['price']; ?>"/></h3>
                        <h5 style="color:#000;">Personalise Product</h5>
                        <?php if($productss[0]["customizeable"] == "yes"){ ?>
                        <div class="row">
                        <input type = "text" class="form-control col-9 mr-1" name="custom" id="custom" placeholder="Customisation Message"><input type="button" value="View Text" class="btn btn-primary col-2" id="viewtext" ><br>
                        </div>
                        <small style="color:#000;"><b>**Please enter the text required for personalisation. Ensure all spellings are correct. Text written in Capitals or small letters will be recreated in the same format. Also, note that the font preview is to depict the font style, not the font thickness of the applicable product</b></small>
                        <?php } ?>
                        <div class="product-description border-product">
                        <?php if($productss[0]["color"] == "yes"){ ?>
                           
                            <h6 class="product-title">select color</h6>
                            <select class="form-control col-4" name="color" id="colour">
                                    <option value="0"></option>
                                        <?php foreach($productsscolors as $pc){ ?>
                                            <option value="<?php echo $pc['name'] ?>"><?php echo $pc["name"] ?></option>
                                        <?php } ?>
                                        </select>
                                        <?php } ?>
                                        <?php if($productss[0]["font"] == "yes"){ ?>
                                        <h6 class="product-title">select font</h6>
                                        <select class="form-control col-4" name="font" id="font">
                                        <option value="0"></option>
                                        <?php foreach($productssfonts as $pf){ ?>
                                            <option value="<?php echo $pf['name'] ?>"><?php echo $pf["name"] ?></option>
                                        <?php } ?>
                                        </select></br>
                                        <?php } ?>
                                        <?php if($productss[0]["size"] == "yes"){ ?>
                                        <h6 class="product-title">select size</h6>
                                        <select class="form-control col-4" id="size" name="size">
                                        <option value="0"></option>
                                        <?php foreach($productsssizes as $ps){ ?>
                                            <option value="<?php echo $ps['size_id'] ?>"><?php echo $ps["name"] ?></option>
                                        <?php } ?>
                                        </select></br>
                                        <?php } ?>
                                        <?php if($productss[0]["materials"] == "yes"){ ?>
                                        <h6 class="product-title">select material</h6>
                                        <select class="form-control col-4" id="material" name="material">
                                        <option value="0"></option>
                                        <?php foreach($productssmate as $pm){ ?>
                                            <option value="<?php echo $pm['material_id'] ?>"><?php echo $pm["name"] ?></option>
                                        <?php } ?>
                                        </select><br>
                                        <?php } ?>
                                        
                                        <?php if($productss[0]["shapes"] == "yes"){ ?>
                                        <h6 class="product-title">select shape</h6>
                                        <select class="form-control col-4" id="shape" name="shape">
                                        <option value="0"></option>
                                        <?php foreach($productssshapes as $psh){ ?>
                                            <option value="<?php echo $psh['shape_id'] ?>"><?php echo $psh["name"] ?></option>
                                        <?php } ?>
                                        </select>
                                        <?php } ?>
                                        <?php if($productss[0]["holes"] == "yes"){ ?>
                                        <h6 class="product-title">select Holes</h6>
                                        <select class="form-control col-4" id="holes" name="holes">
                                        <option value="0"></option>
                                        <?php foreach($productssholes as $ph){ ?>
                                            <option value="<?php echo $ph['hole_id']; ?>"><?php echo $ph["name"]; ?></option>
                                        <?php } ?>
                                        </select>
                                        <?php } ?>
                            <!-- <div class="size-box">
                                <ul>
                                    <li class="active"><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                </ul>
                            </div> -->
                            <input type="hidden" value="product" name="request"/>
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                            </div>
                        </div>
                        <div class="product-buttons"><a href="javascript:void(0)" class="overlay" onclick="addTocart()" class="btn btn-normal">add to cart</a><input type="submit" value="Buy Now" class="btn btn-normal"></div>
                    </div>
                                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<!-- product-tab starts -->
<section class="tab-product  tab-exes">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
               <div class="creative-card creative-inner">
                   <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                       <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true">Description</a>
                           <div class="material-border"></div>
                       </li>
                       <!-- <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false">Details</a>
                           <div class="material-border"></div>
                       </li>
                       <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-selected="false">Video</a>
                           <div class="material-border"></div>
                       </li> -->
                       <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                           <div class="material-border"></div>
                       </li>
                   </ul>
                   <div class="tab-content nav-material" id="top-tabContent">
                       <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                           <p><?php echo $productss[0]['description']; ?></p>
                       </div>
                       <!-- <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           <div class="single-product-tables">
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Febric</td>
                                       <td>Chiffon</td>
                                   </tr>
                                   <tr>
                                       <td>Color</td>
                                       <td>Red</td>
                                   </tr>
                                   <tr>
                                       <td>Material</td>
                                       <td>Crepe printed</td>
                                   </tr>
                                   </tbody>
                               </table>
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Length</td>
                                       <td>50 Inches</td>
                                   </tr>
                                   <tr>
                                       <td>Size</td>
                                       <td>S, M, L .XXL</td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                           <div class="mt-4 text-center">
                               <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                       </div> -->
                       <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                           <form class="theme-form">
                               <div class="form-row">
                                   <div class="col-md-12">
                                       <div class="media">
                                           <label>Rating</label>
                                           <div class="media-body ml-3">
                                               <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="name">Name</label>
                                       <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="email">Email</label>
                                       <input type="text" class="form-control"  placeholder="Email" required>
                                   </div>
                                   <div class="col-md-12">
                                       <label for="review">Review Title</label>
                                       <input type="text" class="form-control"  placeholder="Enter your Review Subjects" required>
                                   </div>
                                   <div class="col-md-12">
                                       <label for="review">Review Title</label>
                                       <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                   </div>
                                   <div class="col-md-12">
                                       <button class="btn btn-normal" type="submit">Submit YOur Review</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->

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

<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 m-3 p-3" id="viewt">
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end -->

<!-- Add to setting bar end-->

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- slick js-->
<script src="assets/js/slick.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js" ></script>


<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- elevatezoom js-->
<script src="assets/js/jquery.elevatezoom.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js"></script>
<script>
    $('#viewtext').click(function(){
        text = $('#custom').val();
        font = $('#font').val();
        color = $('#colour').val();
        // col = color.toLowerCase();
        fontext = $('#font').html();
        if(text == ""){ 
            alert("No custom Text");
        } else {
        // if(color != 0){
        // result = "<p style ='font-size:25px; font-family:sofia,san-serif; color:blue'>"+text+"</p>";
        // } else {

        // }
        // if(font != 0){
        if(color == undefined){
            result = "<p style ='font-size:30px; font-family:"+font+",san-serif; color:black;'>"+text+"</p>";
        } else {
            result = "<p style ='font-size:30px; font-family:"+font+",san-serif; color:"+color.toLowerCase()+";'>"+text+"</p>";
        }
        // } else {
        
        // }
        $('#viewt').html(result);
        $('#quick-view').modal('show');
        }
    })
    function buy(){
        customtext = $('#custom').val();
        font = $('#font').val();
        color = $('#colour').val();
        shape = $('#shape').val();
        size = $('#size').val();
        material = $('#material').val();
        quantity = $('#quantity').val();
        holes = $('#holes').val();
        name = <?php echo $productss[0]["price"] ?>;
        // payment_method = $('#payment').val();
        // font = $('#font').val();
        // color = 0;
        // shape = $('#shape').val();
        // size = $('#size').val();
        // material = $('#material').val();
        // quantity = $('#quantity').val();
        // holes = $('#holes').val();
        scp_id = <?php echo $productss[0]["scp_id"] ?>;
        product_id = <?php echo $productss[0]["product_id"] ?>;
        ip = "<?php echo $ip; ?>";
        price = <?php echo $productss[0]["price"] ?>;
        $.post("handler.php",{customtext,font,color,shape,size,material,scp_id,ip,price,quantity,holes, request:'addtoinvoice'},function(data){
            data = JSON.parse(data);
            if(data.success){
                order_id = data.order_id;
            $.post("checkout.php",{name,order_id,price,quantity},function(data){
            data = JSON.parse(data);
            console.log(data);
        })
            } else {
                return;
            }
        
        })
       

        // $.post("handler.php",{customtext,font,color,shape,size,material,scp_id,ip,price,quantity,holes,payment_method, request:'addtoinvoice'},function(data){
        //     data = JSON.parse(data);
        //     console.log(data);
        // })
        <?php 
            // if(isset($_SESSION['loggedIn'])){ 
                ?>
            
            // window.location.href = "checkout";
            // header("location:../checkout");
       <?php 
    //  } else { ?>
            // openAccount();
      <?php 
    // } ?>
    }
</script>
</body>
</html>
<?php

}
} else {
    header("Location: ../");
} 
?>