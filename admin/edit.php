<?php
if(isset($_GET['id'])){
    $product_id =$_GET['id'];

if(!isset($_SESSION)){
    session_start();
    require_once '../classes/Dashboard.php';
    $obj = new Dashboard();
    $product= $obj->getProductNew($product_id);
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

    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/dropzone.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


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
                                <h3>Add Products
                                    <small>The Laser Gift Shop Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Digital</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <form id="addproduct" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row product-adding">
                    
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>General</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Title</label>
                                        <input class="form-control" id="title" type="text" required="" name="title" value="<?php echo $product[0]['productname'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Slug</label>
                                        <input class="form-control" id="slug" type="text" required="" name="slug" value="<?php echo $product[0]['slug'] ;?>">
                                    </div>
                                    <div class="form-group">
                                                                <label class="col-form-label"><span>*</span> Categories</label>
                                                                <select class="custom-select" required="" name="category" id="cate" value="<?php echo $product[0]['cat_id'] ;?>">
                                                                   
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label"><span>*</span>Sub Categories</label>
                                                                <select class="custom-select" required="" name="subcategory" id="subcate" value="<?php echo $product[0]['sub_cat_id'] ;?>">
                                                                   
                                                                </select>
                                                            </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Short Description</label>
                                        <textarea rows="5" cols="12" name="short_description" id="short_description" value="<?php echo $product[0]['short_description'] ;?>"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                        <input class="form-control" id="validationCustom02" type="text" name="price" required="" value="<?php echo $product[0]['price'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Status</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="edo-ani" value="active" type="radio" name="status">
                                                Active
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="edo-ani1" value="inactive" type="radio" name="status">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Customizeable?</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="customize" value="yes" type="radio" name="customize">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="customize1" value="no" type="radio" name="customize">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Color</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="color" value="yes" type="radio" name="color">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="color1" value="no" type="radio" name="color">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Fonts</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="fonts" value="yes" type="radio" name="fonts">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="fonts1" value="no" type="radio" name="fonts">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Shape</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="shape" value="yes" type="radio" name="shape">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="shape1" value="no" type="radio" name="shape">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Sizes</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="size" value="yes" type="radio" name="size">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="size1" value="no" type="radio" name="size">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>holes</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="hole" value="yes" type="radio" name="hole">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="hole1" value="no" type="radio" name="hole">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>materials</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="materials" value="yes" type="radio" name="materials">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="materials1" value="no" type="radio" name="materials">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Featured</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="featured" value="yes" type="radio" name="featured">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="featured1" value="no" type="radio" name="featured">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span>Best Selling</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="best_selling" value="yes" type="radio" name="best_selling">
                                                Yes
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="best_selling1" value="no" type="radio" name="best_selling">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <label class="col-form-label pt-0"> Product Upload</label>
                                    <form class="dropzone digits" id="singleFileUpload">
                                        <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                            <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                        </div>
                                        <input type="file" class="form-control" name="image" placeholder="Select Image"  value="<?php echo $product[0]['productimage'] ;?>"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Description</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group mb-0">
                                        <div class="description-sm">
                                            <textarea id="description" name="description" cols="10" rows="4" value="<?php echo $product[0]['description'] ;?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <!-- <div class="card-header">
                                <h5>Meta Data</h5>
                            </div> -->
                            
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <input type="hidden" value="addproduct" name="request"/>
                                    
                                    <div class="form-group">
                                                 <label for="select" class=" form-control-label">Colors</label>

                                                    <select name="pcolor[]" class="form-control chosen-select" multiple>
                                                    <?php
                                        foreach($color as $c){
                            ?>
                                                        <option value="<?php echo $c['color_id']; ?>"><?php echo $c["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                 <label for="select" class=" form-control-label">Fonts</label>

                                                    <select name="pfont[]" class="form-control chosen-select" multiple>
                                                    <?php
                                        foreach($font as $f){
                            ?>
                                                        <option value="<?php echo $f['font_id']; ?>"><?php echo $f["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                 <label for="select" class=" form-control-label">Sizes</label>
                                                    <select name="psizes[]"  class="form-control chosen-select" multiple>
                                                    <?php foreach($size as $s){ ?>
                                                        <option value="<?php echo $s['size_id']; ?>"><?php echo $s["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                 <label for="select" class=" form-control-label">Shapes</label>

                                                    <select name="pshape[]" class="form-control chosen-select" multiple>
                                                    <?php
                                        foreach($shape as $sh){
                            ?>
                                                        <option value="<?php echo $sh['shape_id']; ?>"><?php echo $sh["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                 <label for="select" class=" form-control-label">Materials</label>

                                                    <select name="pmaterial[]" class="form-control chosen-select" multiple>
                                                    <?php
                                        foreach($material as $m){
                            ?>
                                                        <option value="<?php echo $m['material_id']; ?>"><?php echo $m["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                 <label for="select" class=" form-control-label">Holes</label>

                                                    <select name="pholes[]" class="form-control chosen-select" multiple>
                                                    <?php
                                        foreach($holes as $h){
                            ?>
                                                        <option value="<?php echo $h['hole_id']; ?>"><?php echo $h["name"]; ?></option>
                                                    
                                        <?php } ?>
                                                    </select>
                                            </div>
                                    <!-- <div class="form-group">
                                        <label for="validationCustom05" class="col-form-label pt-0"> Meta Title</label>
                                        <input class="form-control" id="validationCustom05" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Meta Description</label>
                                        <textarea rows="4" cols="12"></textarea>
                                    </div> -->
                                    <div class="form-group mb-0">
                                        <div class="product-buttons text-center">
                                            <button type="button" class="btn btn-primary" id="addbtn">Add</button>
                                            <button type="button" class="btn btn-light" id="discard">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </form>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © The Laser Gift Shop. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Made with<i class="fa fa-heart"></i></p>
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

<!--dropzone js-->
<script src="../assets/js/dropzone/dropzone.js"></script>
<script src="../assets/js/dropzone/dropzone-script.js"></script>

<!--ckeditor js-->
<script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="../assets/js/editor/ckeditor/styles.js"></script>
<script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
<script>
    
                  $('.uis.dropdowns')
  .dropdown()
;
    $('#multi-selects')
  .dropdown()
;
    $(document).ready(function(){
        let categories;
        let subcategories;
        $.post('admin.php',{request:'getcategories'},function(data){
            categories = JSON.parse(data);
            cat ="<option value=''>--Select--</option>";
            for(c in categories){
                cat += "<option value='"+ categories[c].cat_id+"'>"+ categories[c].name+"</option>";
            }
            $('#cate').html(cat);
        })
        $('#cate').change(function(){
            cat_id = $('#cate').val();
            $.post('admin.php',{request:'getsubcategories'},function(data){
            subcategories = JSON.parse(data);
            subcat ="<option value=''>--Select--</option>";
            for(s in subcategories){
                if(subcategories[s].cat_id == cat_id){
                subcat += "<option value='"+ subcategories[s].sub_cat_id+"'>"+ subcategories[s].name+"</option>";
                }
            }
            $('#subcate').html(subcat);
        })
        })
        $('#addbtn').click(function(){
        var formData = new FormData($('#addproduct')[0]);
        
                                let uploadsucess;
                                          $.ajax({
                                              type: 'POST',
                                              url: 'admin.php',
                                              data: formData,
                                              data: formData,
                                              processData: false,
                                              contentType: false,
                                              success: function (data) {
                                                data= JSON.parse(data);
                                                alert(data.message);
                                              }
                                      });
                                    
    })
    })
</script>
</body>
</html>
<?php 
}
} else {
    header("location: index.php");
}
?>