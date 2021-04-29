<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once 'Crud.php';
    // date_default_timezone_set("Africa/Lagos");
    class Dashboard extends Crud{
        public function __construct(){
            parent::__construct();
        }

        public function adminlogin($email, $password){
            // $email = $_POST['email'];
            // $password = md5(sha1($_POST['password']));
            $query = "SELECT * FROM admin WHERE email= ? AND password = ? AND status = 'active'";
            $binder = array("ss", "$email", "$password");
            $stmt = $this->read($query, $binder);
            if($stmt->num_rows > 0){
                $resp['success'] = true;
                $_SESSION['aloggedIn'] = true;
                $row = $stmt->fetch_assoc();
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];

            }else{
                $resp['success'] = false;
            }

            return $resp;
        }
        public function login($post){
            $email = $post['email'];
            $password = md5(sha1($post['password']));
            $query = "SELECT * FROM users WHERE email= ? AND password = ?";
            $binder = array("ss", "$email", "$password");
            $stmt = $this->read($query, $binder);
            if($stmt->num_rows > 0){
                $resp['success'] = true;
                $_SESSION['loggedIn'] = true;
                $row = $stmt->fetch_assoc();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['status'] = $row['status'];

            }else{
                $resp['success'] = false;
            }

            return $resp;
        }

        public function register($data){
            $fname = $data['firstname'];
            $lname = $data['lastname'];
            $email = $data['email'];
            $password = md5(sha1($data['password']));

            $query = "SELECT email FROM users WHERE email = ?";
            $binder = array("s", "$email");
            $no = $this->read($query, $binder);
            if($no->num_rows > 0){
                $resp['success'] = false;
                $resp['message'] = "Failed. Email already exist";   
            }else{
                $q = "INSERT INTO users ( firstname, lastname, email, password) VALUES (?,?,?,?)";
                $b = array("ssss", "$fname","$lname", "$email", "$password");
                if($this->create($q, $b)){
        
                            $resp['success'] = true;
                            $resp['message'] = "Registered successfully";                            
                }else{
                    $resp['success'] = false;
                    $resp['message'] = "Failed. Please try again";
                }
                
            }  
            return $resp;
        }
        public function getUsers(){
            $data = array();
            $query = "SELECT * FROM users";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;    
        }
        public function getUser(){
            $data = array();
            $query = "SELECT * FROM users where user_id ='$_SESSION[user_id]'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;    
        }
        public function getUserBilling(){
            $data = array();
            $query = "SELECT * FROM billing_address where user_id ='$_SESSION[user_id]'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;    
        }
        public function getUserShipping(){
            $data = array();
            $query = "SELECT * FROM shipping_address where user_id ='$_SESSION[user_id]'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;    
        }
        public function forgotPassword($email){
            $email = $email['email'];
            
                $token = md5(sha1($email.rand()));
                $date = date("Y-m-d h:i:s");
                $d= strtotime("+30 Minutes");
                $expired_date = date("Y-m-d h:i:s", $d);
            $query = "SELECT * FROM users WHERE email= ? ";
            $binder = array("s", "$email");
            $stmt = $this->read($query, $binder);
            if($stmt->num_rows > 0){
                $row = $stmt->fetch_assoc();
                $firstname = $row['name'];
                $q = "insert into forgot(email,token,created_by,expires,status) values (?,?,?,?,?)";
                $b = array("sssss", "$email", "$token","$date","$expired_date","valid");
                
                if( $this->create($q,$b)){
                         $resp['success'] = true;
                        $resp['message'] = "A email has been sent to you to reset your password";  
                        } else {
                            $resp['success'] = false;
                        $resp['message'] = "pass word reset failed";
                        }
            }else{
                $resp['success'] = false;
                $resp['message'] = "There is no account linked to this email";
            }

            return $resp;
        }
        public function updateUser($data){
            $firstname = $data['name'];
            // $middlename = $data['middlename'];
            $lastname = $data['lastname'];
            $email = $data['email'];
            $phone = $data['phone'];
            // $callno = $data['callno'];
            // $userid = $data['userid'];
            // $passport = $data['passport'];
            // $year_of_call = $data['year'];
            $country = $data['country'];
            $address = $data['address'];
            $city =  $data['city'];
            // $state = $data['state'];
            $time = date("Y-m-d h:i:s");
            $postalcode = $data['postalcode'];
           
            $q = "UPDATE users SET name = ?, lastname = ?, email = ?, phone = ?,city = ?,postalcode = ?,country = ?, updated_at = ? WHERE user_id = ?";
            $b = array("sssssssss", "$firstname", "$lastname", "$email", "$phone", "$city","$postalcode", "$country", "$time", "$_SESSION[user_id]");
            if($this->create($q, $b)){

                        $resp['success'] = true;
                        $resp['message'] = "Updated Successfully";
                //     }
                // }

            }else{
                $resp['success'] = false;
                $resp['message'] = "1. Failed. Please try again";
            }
            
            return $resp;
        } 
        public function addProduct($product){            
            $image = $_FILES["image"]["name"];
            $date = date("Y-m-d h:i:s");
            $target_dir = "../assets/images/products/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            $query ="INSERT INTO products ( name, slug, price, short_description, description, customizeable, font, size, color, shapes, materials, holes, image, status, created_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $binder = array("sssssssssssssss", "$product[title]", "$product[slug]", "$product[price]","$product[short_description]","$product[description]", "$product[customize]", "$product[fonts]","$product[size]", "$product[color]", "$product[shape]", "$product[materials]", "$product[hole]", "$image", "$product[status]", "$date");
            if($this->create($query, $binder)){
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    $product_id = $this->conn->insert_id;
                    $q = "INSERT INTO sub_cate_products (product_id, sub_cat_id, status, featured, best_selling) values (?,?,?,?,?)";
                    $b = array("sssss","$product_id", "$product[subcategory]", "$product[status]","$product[featured]","$product[best_selling]");
                    if($this->create($q,$b)){
                            if(isset($product['pfont'])){
                                $pfont = $product['pfont'];
                                foreach($pfont as $f){
                        
                                    $query2 = "INSERT INTO product_fonts (product_id, font_id, status) VALUES (?, ?, ?)";
                                    $binder2 = array("sss", "$product_id", "$f", "active");
                                    if($this->create($query2, $binder2)){
                                        $resp['success'] = true;
                                        $resp['message'] = "Added Successfully.";  
                                    }
                                }
                            }
                            if(isset($product['pcolor'])){
                                $pcolor = $product['pcolor'];
                                foreach($pcolor as $c){
                                    $query1 = "INSERT INTO product_colors (product_id, color_id, status) VALUES (?, ?, ?)";
                                    $binder1 = array("sss", "$product_id", "$c", "active");
                                    if($this->create($query1, $binder1)){
                                        $resp['success'] = true;
                                        $resp['message'] = "Added Successfully.";  
                                    }
                                }
                            }
                            if(isset($product['psizes'])){
                                $psize = $product['psizes'];
                                    foreach($psize as $s){
                        
                                            $query3 = "INSERT INTO product_sizes (product_id, size_id, status) VALUES (?, ?, ?)";
                                            $binder3 = array("sss", "$product_id", "$s", "active");
                                            if($this->create($query3, $binder3)){
                                                $resp['success'] = true;
                                                $resp['message'] = "Added Successfully.";  
                                            }
                                    }
                            }
                            if(isset($product['pmaterial'])){
                                
                                $pmaterial = $product['pmaterial'];
                                    foreach($pmaterial as $m){
                        
                                        $query3 = "INSERT INTO product_sizes (product_id, material_id, status) VALUES (?, ?, ?)";
                                        $binder3 = array("sss", "$product_id", "$m", "active");
                                        // $stmt= $this->create($query3, $binder3);
                                        // $success3 =  $stmt['success'];
                                        if($this->create($query3, $binder3)){
                                            $resp['success'] = true;
                                            $resp['message'] = "Added Successfully.";  
                                        }
                                }                    
                            } 
                            if(isset($product['pshape'])){
                                $pshape = $product['pshape'];
                                foreach($pshape as $sh){
                                    $query1 = "INSERT INTO product_shapes (product_id, shape_id, status) VALUES (?, ?, ?)";
                                    $binder1 = array("sss", "$product_id", "$sh", "active");
                                    if($this->create($query1, $binder1)){
                                        $resp['success'] = true;
                                        $resp['message'] = "Added Successfully.";  
                                    }
                                }
                            }
                            if(isset($product['pholes'])){
                                $psize = $product['pholes'];
                                    foreach($pholes as $h){
                        
                                            $query3 = "INSERT INTO product_holes (product_id, hole_id, status) VALUES (?, ?, ?)";
                                            $binder3 = array("sss", "$product_id", "$h", "active");
                                            if($this->create($query3, $binder3)){
                                                $resp['success'] = true;
                                                $resp['message'] = "Added Successfully.";  
                                            }
                                    }
                            }  
                            $resp['success'] = true;
                            $resp['message'] = "Added Successfully.";
                    } else {
                
                        $resp['success'] = false;
                        $resp['message'] = "Failed";
                    } 
                }
            }
                    else {
                
                        $resp['success'] = false;
                        $resp['message'] = "Failed";
                    }
                }
                return $resp;

        }
        public function contactus($contact){
            $query ="INSERT INTO contacts (firstname, lastname, email,phone,message) VALUES (?,?,?,?,?)";
         $binder = array("sssss","$contact[firstname]","$contact[lastname]","$contact[email]","$contact[phone]","$contact[message]");
         if($this->create($query, $binder)){
         
             $resp['success'] = true;
             $resp['message'] = "Success";
         } else {
             
             $resp['success'] = false;
             $resp['message'] = "Failed";
         }

        }
        public function addProductsizes(){
            $query ="INSERT INTO product_sizes () VALUES ()";
            $binder = array("");
            if($this->create($query, $binder)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }

        }

        public function addProductColor(){
            $query ="INSERT INTO products () VALUES ()";
            $binder = array("");
            if($this->create($query, $binder)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }

        }
        public function addbillingaddress($bill){
            $query ="INSERT INTO billing_address (firstname, lastname, country, houseaddress, apartment, town, state, postcode, phone, email, user_id) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $binder = array("sssssssssss", "$bill[firstname]", "$bill[lastname]", "$bill[country]", "$bill[houseaddress]", "$bill[apartment]", "$bill[town]", "$bill[state]", "$bill[postcode]", "$bill[phone]", "$bill[email]", "$_SESSION[user_id]");
            if($this->create($query, $binder)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }

        }
        public function addshippingaddress($ship){
            $query ="INSERT INTO shipping_address (firstname, lastname, country, housenumber, apartment, town, state, postalcode, user_id, status) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $binder = array("ssssssssss","$ship[firstname]", "$ship[lastname]", "$ship[country]", "$ship[housenumber]", "$ship[apartment]", "$ship[town]", "$ship[state]", "$ship[postalcode]", "$_SESSION[user_id]","default");
            if($this->create($query, $binder)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }

        }
        public function addCategory($cat){
            $image = $_FILES["image"]["name"];
            $target_dir = "../assets/images/category/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            $query ="INSERT INTO categories (name,image,status) VALUES (?,?,?)";
            $binder = array("sss","$cat[name]","$image","active");
            if($this->create($query, $binder)){
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
               
                    $resp['success'] = true;
                    $resp['message'] = "Success";
                } else {
                    
                    $resp['success'] = false;
                    $resp['message'] = "Sorry, there was an error uploading your file.";
                }
            } else {
                $resp['success'] = false;
                    $resp['message'] = "Failed";
            }
            }
            return $resp;

        }
        public function addSubCategory($cat){
            $image = $_FILES["image"]["name"];
            if(empty($image)){
                $query ="INSERT INTO sub_categories (name,image,status,cat_id) VALUES (?,?,?,?)";
                $binder = array("ssss","$cat[name]","$image","active","$cat[category]");
                if($this->create($query, $binder)){
                
                        $resp['success'] = true;
                        $resp['message'] = "Success";
                    }else {
                        $resp['success'] = false;
                        $resp['message'] = "Failed";
                }  
            } else {
            $target_dir = "../assets/images/category/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                $query ="INSERT INTO sub_categories (name,image,status,cat_id) VALUES (?,?,?,?)";
                $binder = array("ssss","$cat[name]","$image","active","$cat[category]");
            if($this->create($query, $binder)){
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
               
                    $resp['success'] = true;
                    $resp['message'] = "Success";
                } else {
                    
                    $resp['success'] = false;
                    $resp['message'] = "Sorry, there was an error uploading your file.";
                }
            } else {
                $resp['success'] = false;
                    $resp['message'] = "Failed";
            }
            }
        }

        }
        public function getCategories(){
            $data = array();
            $query = "SELECT * FROM categories WHERE status = 'active'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function getCategory($cate){
            $data = array();
            $query = "SELECT * FROM categories WHERE cat_id ='$cate' and status = 'active'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function getSubsCategory($cate){
            $data = array();
            $query = "SELECT * FROM sub_categories WHERE sub_cat_id ='$cate' and status = 'active'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function getSubCategories(){
            $data = array();
            $query = "SELECT sub_cat_id, sub_categories.name, sub_categories.image,sub_categories.status,categories.name AS category, categories.cat_id FROM sub_categories join categories using(cat_id) WHERE sub_categories.status = 'active'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function getSubCategory($cate){
            $data = array();
            $query = "SELECT sub_cat_id, sub_categories.name, sub_categories.image,sub_categories.status,categories.name AS category, sub_categories.cat_id FROM sub_categories join categories using(cat_id) WHERE cat_id='$cate'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        public function getProductByCategory(){
            // $data = array();
            // $query = "SELECT sub_categories.name, sub_categories.image,sub_categories.status,categories.name AS categorys FROM sub_categories join categories using(cat_id) WHERE sub_categories.status = 'active'";
            // $stmt = $this->read2($query);
            // while($row = $stmt->fetch_assoc()){
            //     $data[] = $row;
            // }
            // return $data; 
        }
        public function getProducts(){
            $data = array();
            $size= array();
            $product = array();
            $color = array();
            $query = "select * from sub_cate_products join products using(product_id)";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
            // $product.map()
            // $q = "select * from product_sizes join sizes using(size_id) where product_id ='$row[product_id]'";
            // $stmt1 = $this->read2($q);
            // while($row1 = $stmt1->fetch_assoc()){
            //     $size[] = $row1;
            // }
            //  array($data,$size); 
            return $product;
        }
        public function getsubcatProducts($sub_id){
          
            $product = array();
            $query = "SELECT product_id, products.name, slug, price, short_description, description, customizeable, font, size, color, shapes, materials, holes, products.image, products.status, created_by FROM products join sub_cate_products using(product_id) join sub_categories using(sub_cat_id) where sub_cat_id = '$sub_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
           
            return $product;
        }
        public function getCatProducts($cat_id){
          
            $product = array();
            $query = "SELECT product_id, products.name, slug, price, short_description, description, customizeable, font, size, color, shapes, materials, holes, products.image, products.status, created_by FROM products join sub_cate_products using(product_id) join sub_categories using(sub_cat_id) where cat_id = '$cat_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
           
            return $product;
        }
        public function getBestSelling(){
            ;
            $product = array();
            $color = array();
            $query = "select * from sub_cate_products join products using(product_id) where best_selling='yes'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
            return $product;
        }
        public function getFeatured(){
            $product = array();
            $color = array();
            $query = "select * from sub_cate_products join products using(product_id) where featured='yes'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
            return $product;
        }
        public function getProductDetails($pid){
            $product = array();
            $color = array();
            $query = "select * from products join sub_cate_products using(product_id) where name = '$pid'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $product[] = $row;
            }
            return $product;
        }
        public function getProductcolors($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_colors using(product_id) join colors using(color_id) where products.product_id = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
         public function getProductsizes($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_sizes using(product_id) join sizes using(size_id) where products.product_id = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductsize($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_sizes using(product_id) join sizes using(size_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductmaterial($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_materials using(product_id) join materials using(material_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductcolor($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_colors using(product_id) join colors using(color_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductshape($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_shapes using(product_id) join shapes using(shape_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductfont($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_fonts using(product_id) join fonts using(font_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductImages($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_image using(product_id) where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function getProductHole($scp_id){
            $data = array();
            $color = array();
            $query = "select * from products join product_holes using(product_id) join holes using(hole_id)  where products.slug = '$scp_id'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data;  
        }
        public function search($searchs){
            $data = array();
            $search = $searchs['search'];
            // $cat = $searchs['cate'];
            // if($cat > 0){
            // $query = "SELECT * FROM sub_cate_products JOIN products using(product_id) join sub_categories using(sub_cat_id) join categories using(cat_id) where categories.name = '$cat' and products.name like '%$search%'";
            // $stmt = $this->read2($query);
            // while($row = $stmt->fetch_assoc()){
              
            //     $data[] = $row;
            // }
            // }else {
                $query = "SELECT * FROM sub_cate_products JOIN products using(product_id) where name like '%$search%'";
                $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            return $data; 

        }
        public function addtoinvoice($data){
            $date = date("Y-m-d h:i:s");
            $ip = $_SERVER['REMOTE_ADDR'];
            $amount = floatval($data['price']) * floatval($data['quantity']);
            if(isset($data['font'])){
            $font = $data['font'];
            } else {
                $font = 0;
            }
            if(isset($data['color'])){
                $color = $data['color'];
                
                } else {
                 $color = 0; 
                }
                if(isset($data['material'])){
                    $material = $data['material'];
                    } else {
                        $material = 0;
                    }
                    if(isset($data['hole'])){
                        $hole = $data['hole'];
                        } else {
                            $hole =0; 
                        }
                        if(isset($data['shape'])){
                            $shape = $data['shape'];
                            } else {
                                $shape = 0;  
                            }
                            if(isset($data['size'])){
                                $size = $data['size'];
                                } else {
                                    $size = 0;  
                                }
                            if(isset($data['custom'])){
                                $customtext = $data['custom'];
                                } else {
                                    $customtext = 0;
                                }
            
            if(isset($_SESSION['loggedIn'])){
                $user_id = $_SESSION['user_id'];
            } else {
                $user_id = 0;
            }
            
            $product_id =$data['product_id'];
            // $colour = $this->read2("SELECT pc_id FROM product_colors join colors using(color_id) WHERE product_id = $product_id and name = '$color'");
            // while($row1 = $colour->fetch_assoc()){
              
            //     $color = $row1['pc_id'];
            // }
            // $fonts = $this->read2("   ");
            // while($row2 = $fonts->fetch_assoc()){
              
            //     $font = $row2['pf_id'];
            // }

            $query ="INSERT INTO orders (date, order_amount,total_amount, user_id, ip) VALUES (?,?,?,?,?)";
            $binder = array("sssss","$date","$amount","$amount","$user_id","$ip");
            if($this->create($query, $binder)){
            $order = $this->conn->insert_id;
               
                // $q = "INSERT INTO `invoices`( `product_id`, `pc_id`, `pf_id`, `ph_id`, `pm_id`, `psh_id`, `psi_id`, `scp_id`, `order_id`, `note`, `customtext`, `quantity`, `unitcost`) VALUES (1,(SELECT pc_id FROM product_colors join colors using(color_id) WHERE product_id = 1 and name = "Blue"),(SELECT pf_id FROM product_fonts join fonts using(font_id) WHERE product_id = 1 and name = "Countryiside"),,0,0,0,1,1,"","delight",2,4)"
            $query1 ="INSERT INTO invoices (product_id, pc_id, pf_id, ph_id, pm_id, psh_id, psi_id, scp_id, order_id, note, customtext, quantity, unitcost) VALUES (?,(SELECT pc_id FROM product_colors join colors using(color_id) WHERE product_id = '$product_id' and colors.name = '$color'),(SELECT pf_id FROM product_fonts join fonts using(font_id) WHERE product_id = '$product_id' and fonts.name = '$font'),?,?,?,?,?,?,?,?,?,?)";
            $binder1 = array("sssssssssss","$product_id","$hole","$material","$shape","$size","$data[scp_id]","$order","","$customtext","$data[quantity]","$data[price]");
            if($this->create($query1, $binder1)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
                $resp['order_id'] = $order;
            }
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }
            return $resp;
        }
        public function addToCart($cart){
            if(isset($_SESSION['loggedIn'])){
                $user_id = $_SESSION['user_id'];
            } else {
                $user_id = 0;
            }
            $query ="INSERT INTO carts(user_id, scp_id, color, font, customtext, price, shape,quantity, ip) VALUES (?,?,?,?,?,?,?,?,?)";
            $binder = array("sssssssss","$user_id","$cart[scp_id]","$cart[color]","$cart[font]","$cart[customtext]","$cart[price]","$cart[shape]","$cart[quantity]","$cart[ip]");
            if($this->create($query, $binder)){
            
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";
            }
        }
        public function getCart($ip){
            $data = array();
            if(isset($_SESSION['loggedIn'])){
            $query = "select sub_cate_products .product_id AS product_id , carts .scp_id AS scp_id , carts .cart_id AS cart_id , carts .user_id AS user_id , carts .color AS color , carts .font AS font , carts .customtext AS customtext , carts .price AS price , carts .shape AS shape , carts .quantity AS quantity , carts .ip AS ip , products .name AS name , products .image AS image ,carts.quantity * carts.price AS purchase from carts join sub_cate_products join products where (( sub_cate_products .scp_id = carts .scp_id ) and ( products .product_id = sub_cate_products .product_id ) and ( carts .user_id = '$_SESSION[user_id]')) ";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
        } else {
            $query = "select sub_cate_products .product_id AS product_id , carts .scp_id AS scp_id , carts .cart_id AS cart_id , carts .user_id AS user_id , carts .color AS color , carts .font AS font , carts .customtext AS customtext , carts .price AS price , carts .shape AS shape , carts .quantity AS quantity , carts .ip AS ip , products .name AS name , products .image AS image ,carts.quantity * carts.price AS purchase from carts join sub_cate_products join products where (( sub_cate_products .scp_id = carts .scp_id ) and ( products .product_id = sub_cate_products .product_id ) and ( carts .ip = '$ip'))";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }
            // $query = "select sub_cate_products .product_id AS product_id , carts .scp_id AS scp_id , carts .cart_id AS cart_id , carts .user_id AS user_id , carts .color AS color , carts .font AS font , carts .customtext AS customtext , carts .price AS price , carts .shape AS shape , carts .quantity AS quantity , carts .ip AS ip , products .name AS name , products .image AS image ,carts.quantity * carts.price AS purchase, sum(carts.quantity * carts.price) as total from carts join sub_cate_products join products where (( sub_cate_products .scp_id = carts .scp_id ) and ( products .product_id = sub_cate_products .product_id ) and ( carts .ip = '$ip'))";

        }
            return $data;
        }
        public function getCartTotal($ip){
            $data = array();
            $query = "select sum(carts.quantity * carts.price) as total from carts join sub_cate_products join products where (( sub_cate_products .scp_id = carts .scp_id ) and ( products .product_id = sub_cate_products .product_id ) and ( carts .ip = '$ip'))";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data;
        }
        public function getfont(){
            $data = array();
            $query = "select * from fonts";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        public function getshapes(){
            $data = array();
            $query = "select * from shapes";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        public function getsizes(){
            $data = array();
            $query = "select * from sizes";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        public function getcolors(){
            $data = array();
            $query = "select * from colors";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        public function getmaterial(){
            $data = array();
            $query = "select * from materials";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        public function getholes(){
            $data = array();
            $query = "select * from holes";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        function getProductNew($product_id){
            $data = array();
            $query = "select distinct sub_categories.cat_id AS cat_id,sub_cate_products.sub_cat_id AS sub_cat_id,products.product_id AS product_id,products.name AS productname,
            products.slug AS slug,products.price AS price,products.short_description AS short_description,products.description AS description,products.customizeable 
            AS customizeable,products.font AS font,products.size AS size,products.color AS color,products.shapes AS shapes,products.materials AS materials,
            products.holes AS holes,products.image AS productimage,products.status AS productstatus,products.created_by AS created_by,sub_cate_products.scp_id AS 
            scp_id,sub_cate_products.status AS subcatproductstatus,sub_cate_products.featured AS featured,
            sub_cate_products.best_selling AS best_selling,sub_categories.name AS subcategory,sub_categories.image AS subimage,sub_categories.status AS 
            subcatstatus,categories.name AS category,categories.slug AS slug,categories.image AS catimage,categories.innerbanner AS innerbanner,categories.status 
            AS catstatus from products join sub_cate_products join sub_categories join categories where ((sub_cate_products.product_id = '$product_id') and (sub_categories.
             sub_cat_id = sub_cate_products.sub_cat_id) and (categories.cat_id = sub_categories.cat_id) and 
             ('$product_id' = '$product_id')) order by '$product_id' desc";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        function getProductlist(){
            $data = array();
            $query = "select DISTINCT sub_categories.cat_id AS cat_id,sub_cate_products.sub_cat_id AS sub_cat_id,products.product_id AS product_id,products.name AS productname,products.slug AS slug,products.price AS price,products.short_description AS short_description,products.description AS description,products.customizeable AS customizeable,products.font AS font,products.size AS size,products.color AS color,products.shapes AS shapes,products.materials AS materials,products.holes AS holes,products.image AS productimage,products.status AS productstatus,products.created_by AS created_by,sub_cate_products.scp_id AS scp_id,sub_cate_products.status AS subcatproductstatus, sub_cate_products.featured AS featured,sub_cate_products.best_selling AS best_selling,sub_categories.name AS subcategory,sub_categories.image AS subimage,sub_categories.status AS subcatstatus,categories.name AS category,categories.slug AS slug,categories.image AS catimage,categories.innerbanner AS innerbanner,categories.status AS catstatus from products join sub_cate_products join sub_categories join categories where ((products.product_id = sub_cate_products.product_id) and (sub_categories.sub_cat_id = sub_cate_products.sub_cat_id) and (categories.cat_id = sub_categories.cat_id)) order by products.product_id desc";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              
                $data[] = $row;
            }

            return $data; 
        }
        function deleteproduct($product_id){
            $sql = "Delete p,s from products p join sub_cate_products s on p.product_id = s.product_id where p.product_id ='?'";
            $query = "Delete from products join sub_cate_products using(product_id) join product_colors using(product_id) join product_fonts_using(product_id)
            join product_sizes using(product_id) where product_id = '?'";
            $binder= array('s',"$product_id");
            if($this->delete($sql,$binder)){
                $resp['success'] = true;
                $resp['message'] = "Success";
            } else {
                
                $resp['success'] = false;
                $resp['message'] = "Failed";   
            }
        }
       
function getOrders(){
    $data = array();
    $query = "Select * from orders order by order_id desc";
    $stmt = $this->read2($query);
    while($row = $stmt->fetch_assoc()){
      
        $data[] = $row;
    }

    return $data; 

}
public function getshipping(){
    $data = array();
    $query = "SELECT * FROM shipping";
    $stmt = $this->read2($query);
    while($row = $stmt->fetch_assoc()){
      $data[] = $row;
    }
    return $data;
}
public function addpayment($payment){
    $date = new Date("Y-M-D h-m-s");
    $query = "insert into payments ( transaction_id, amount, date, transaction_type, order_id, status) values (?,?,?,?,?,?)";
    $binder = array("ssssss","$payment[transaction_id]", "$payment[amount]","$date", "$payment[transaction_type]", "$payment[order_id]","$payment[status]" );
    if($this->create($query, $binder)){
        $resp['success'] = true;
        $resp['message'] = "Added Successfully";
    } else {
        $resp['success'] = false;
        $resp['message'] = "Failed";
    }
    return $resp;
}
public function getPayments(){
    $data = array();
    $query = "select * from payments";
    $stmt = $this->read2($query);
    while($row = $stmt->fetch_assoc()){
        $data[] = $row;
    }
    return $data;
}
public function addshipping($ship){
    $query = "insert into shipping (shipping_name, s_description, amount) values (?,?,?)";
    $binder = array("sss", "$ship[shipping_name]","$ship[description]","$ship[amount]");
    if($this->create($query, $binder)){
        $resp['success'] = true;
        $resp['message'] = "Added Successfully";
    } else {
        $resp['success'] = false;
        $resp['message'] = "Failed";
    }
    return $resp;
}
      public function getorder(){
          $data = array();
        $query = "Select * from orders where user_id = '$_SESSION[user_id]'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              $data[] = $row;
            } 
            return $data;
      }
      public function addProductprice($data){
          $size = $data['size'];
          $price = $data['price'];
          $color = $data['color'];
          foreach($color as $c){
          $query = "insert into pricelist (pc_id,psi_id,price) values (?,?,?)";
          $binder = array("sss","$c","$size","$price");
              if($this->create($query,$binder)){
                  $resp['success'] = true;
                  $resp['message'] = "Added Successfully";
              } else {
                  $resp['success'] = false;
                  $resp['failed'] = "Failed";
              }
          }
          return $resp;
          
      }
        function getDetails($p){

            $size= array();
            $shape = array();
            $color = array();
            $query = "Select * from product_sizes join size using (size_id) where product_id = '$p'";
            $stmt = $this->read2($query);
            while($row = $stmt->fetch_assoc()){
              $size[] = $row;
            }
        }
    }
       
?>