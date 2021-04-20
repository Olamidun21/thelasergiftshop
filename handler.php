<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();
    if($_POST){
    $request = $_POST['request'];
    
    if($request == 'login'){
        // $email = $_POST['email'];
        // $password = md5(sha1($_POST['password']));
        echo json_encode($obj->login($_POST));
    } else if($request == 'register'){
        echo json_encode($obj->register($_POST));

    } else if($request == 'update'){
        echo json_encode($obj->updateUser($_POST));
    } else if($request == 'getcategories'){
        echo json_encode($obj->getCategories());
    } else if($request == 'getsubcategories'){
        echo json_encode($obj->getSubCategories());
    }else if($request == 'getsubcatproduct'){
        echo json_encode($obj->getsubcatProducts($_POST));
    } else if($request == 'addtocart'){
        echo json_encode($obj->addToCart($_POST));
    }  else if($request == 'removecart'){
        echo json_encode($obj->removeCart($_POST));
    }  else if($request == 'contact'){
        echo json_encode($obj->contactus($_POST));
    } else if($request == 'search'){
        echo json_encode($obj->search($_POST));
    } else if($request == 'addbillingaddress'){
        echo json_encode($obj->addbillingaddress($_POST));
    } else if($request == 'addshippingaddress'){
        echo json_encode($obj->addshippingaddress($_POST));
    } 
 } else {
        $cat = $obj->getCategories();
        $scat = $obj->getSubCategories();
        $product = $obj->getProducts();
        $data = array($cat,$scat,$product);
        echo json_encode($data); 
    }
?>