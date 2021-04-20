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
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

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
</head>
<body class="bg-light">
<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="../assets/images/loader.gif" alt="loader">
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
                        <h2>contact</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="contact-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row section-big-pb-space">
            <div class="col-xl-6 offset-xl-3">
                <h3 class="text-center mb-3">Get in touch</h3>
                <form class="theme-form" id="contact">
                    <div class="form-row">
                        <span id="msg" style="color:red"></span>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="name">First Name</label>
                               <input type="text" class="form-control" id="firstname" placeholder="Enter Your name" name="firstname" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="email">Last Name</label>
                              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required="">
                          </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="review">Phone number</label>
                               <input type="text" class="form-control" id="phone" placeholder="Enter your number" name="phone" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="emails" placeholder="Email" name="email" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control" placeholder="Write Your Message" id="message" name="message" rows="2"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="request" value="contact" />
                        <div class="col-md-12">
                            <button class="btn btn-normal" id="btn" type="submit">Send Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-lg-12 map">-->
        <!--        <div class="theme-card">-->
        <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"  allowfullscreen></iframe>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>
<!--Section ends-->


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



<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js" ></script>

<!-- menu js-->
<script src="../assets/js/menu.js"></script>

<!-- popper js-->
<script src="../assets/js/popper.min.js" ></script>

<!-- slick js-->
<script  src="../assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="../assets/js/script.js" ></script>
<script>
     $(document).ready(function(){

        $('#btn').click(function(){
            firstname = $('#firstname').val();
            lastname = $('#lastname').val();
            email = $('#emails').val();
            phone = $('#phone').val();
            message = $('#message').val();
        // var formData = new FormData($('#contact')[0]);
        $.post('handler.php',{firstname,lastname,email,phone,message, request:'contact'}, function(data){
            data = JSON.parse(data);
            if(data.success){
            alert("Sent Successfully");
            } else {
                $('#msg').html("Not Sent, Try again later");
            }
        })

                            // let uploadsucess;
                            //         $.ajax({
                            //             type: 'POST',
                            //             url: 'handler.php',
                            //             data: formData,
                            //             data: formData,
                            //             processData: false,
                            //             contentType: false,
                            //             success: function (data) {
                            //                 console.log(data);
                            //             }
                            //     });
                                
        })
     })
</script>
</body>
</html>
