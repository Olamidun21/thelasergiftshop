<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once '../classes/Dashboard.php';
    $obj = new Dashboard();
    $request = $_POST['request'];
    if($request == 'login'){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        echo json_encode($obj->adminlogin($email, $password));
    } else if($request == 'register'){
        echo json_encode($obj->register($_POST));

    } else if($request == 'update'){
        echo json_encode($obj->updateUser($_POST));
    } else if($request == 'getcategories'){
        echo json_encode($obj->getCategories());
    } else if($request == 'getsubcategories'){
        echo json_encode($obj->getSubCategories());
    } else if($request == 'category') {
        echo json_encode($obj->addCategory($_POST));
      } else if($request == 'addsubcategory'){
        echo json_encode($obj->addSubCategory($_POST)); 
      } else if($request == 'addproduct'){
        echo json_encode($obj->addProduct($_POST)); 
      }  else if($request == 'addhole'){
        echo json_encode($obj->addhole($_POST)); 
      } else if($request == 'addshape'){
        echo json_encode($obj->addshape($_POST)); 
      }  else if($request == 'addsize'){
        echo json_encode($obj->addsize($_POST)); 
      }  else if($request == 'addmaterial'){
        echo json_encode($obj->addmaterial($_POST)); 
      }  else if($request == 'addproduct'){
        echo json_encode($obj->addProduct($_POST)); 
      } else if($request == 'addproductprice'){
        echo json_encode($obj->addProductprice($_POST)); 
      }
?>