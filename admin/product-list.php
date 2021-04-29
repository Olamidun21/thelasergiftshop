<?php
if(!isset($_SESSION)){
        session_start();
    }
if(isset($_SESSION['admin_id'])){
    require_once '../classes/Dashboard.php';
   $obj = new Dashboard();
$Productlist= $obj->getProductlist();
  $color = $obj->getcolors();
  $font = $obj->getfont(); 
  $shape = $obj->getshapes();
  $material = $obj->getmaterial();
  $holes = $obj->getholes();
  $size = $obj->getsizes();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Laser Gift Shop admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, The Laser Gift Shop admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <title>The Laser Gift Shop - Admin</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <?php include_once "navbar.php" ?>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <?php include_once "nav.php" ?>
        <!-- Page Sidebar Ends-->


        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>The Laser Gift Shop Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Product Lists</h5>
                                </div>
                                <div class="card-body">
                                    <!-- <div id="basicScenario" class="product-list digital-product"></div> -->
                                    <div class="col-sm-12 product-list digital-product">
                                        <table class="table cart-table table-responsive-xs">
                                            <thead>
                                            <tr class="table-head">
                                                <th scope="col">Product id</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Product name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">action</th>
                                            </tr>
                                            </thead>
                                                <?php foreach ($Productlist as $p){ ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $p['product_id'] ?></td>
                                                <td>
                                                    <a href="#"><img src="../assets/images/products/<?php echo $p['productimage'];?>" alt="cart" class="img-thumbnail mx-auto d-block" style="width:100px; height:100px;"></a>
                                                </td>
                                                <td> <?php echo $p['productname'];?>
                                                </td>
                                                <td>
                                                    &pound;<?php echo $p['price'];?>
                                                </td>
                                                <td><a href="addprices?id=<?php echo $p['product_id']?>" class="icon"><i class="fa fa-plus"></i></a>
                                                    <a href="edit?id=<?php echo $p['product_id']?>" class="icon"><i class="fa fa-pencil"></i></a>
                                                    <a href="delete?id=<?php echo $p['product_id']?>" class="icon"><i class="fa fa-trash"></i></a>
                                            </td>
                                            </tr>
                                            
                                            </tbody>
                                            <?php } ?>
                                            
                                            
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2021 © The Laser Gift Shop All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Jsgrid js-->
<script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-productlist-digital.js"></script>
<script src="../assets/js/jsgrid/jsgrid-list.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
</body>
</html>

<?php 
} else {
    
}
    ?>