<?php
if(isset($_GET['id'])){
    $product_id =$_GET['id'];

if(!isset($_SESSION)){
    session_start();
    require_once '../classes/Dashboard.php';
    $obj = new Dashboard();
    $delete = $obj->deleteproduct($product_id);
    echo $delete;
}  
} else {
    header("location: index.php");
}
?>