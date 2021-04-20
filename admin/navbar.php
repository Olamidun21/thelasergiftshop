<?php
if(!isset($_SESSION)){
        session_start();
    }
if(isset($_SESSION['admin_id'])){
    // require_once '../classes/Dashboard.php';
    // $obj = new Dashboard();

    // $product = $obj->getProducts();
    // $bestselling = $obj->getBestSelling();
    // $featured = $obj->getFeatured();
    // $categories = $obj->getCategories();
    // $subcat = $obj->getSubcategories();
    // $a = count($featured);    
    // $b = count($bestselling);
?>

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="../assets/images/layout-2/logo/logo.png" alt=""></a></div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                  
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

<?php 
} else {
    header("Location: index.php");
}
?>