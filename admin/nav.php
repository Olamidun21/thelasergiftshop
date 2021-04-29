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


        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14"><?php echo $_SESSION['firstname']; ?></h6>
                   
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="dashboard"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        
                                <ul class="sidebar-submenu">
                                <!-- <li><a href="colors"><i class="fa fa-circle"></i>Colors</a></li> -->
                                    <li><a href="sizes"><i class="fa fa-circle"></i>Sizes</a></li>
                                    <!-- <li><a href="fonts"><i class="fa fa-circle"></i>Fonts</a></li> -->
                                    <li><a href="shapes"><i class="fa fa-circle"></i>Shapes</a></li>
                                    <li><a href="materials"><i class="fa fa-circle"></i>Materials</a></li>
                                    <li><a href="holes"><i class="fa fa-circle"></i>Holes</a></li>
                                    <li><a href="category"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="subcategory"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-list"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-product"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="create-user"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="reports"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="invoice"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="../admin"><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
<?php 
} else {
    header("Location: index.php");
}
?>