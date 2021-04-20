<?php
if(!isset($_SESSION)){
    session_start();

$ip = $_SERVER['REMOTE_ADDR'];
    require_once 'classes/Dashboard.php';
    $obj = new Dashboard();
    
    $shipprice = $obj->getshipping();
    $billing =array();
    if(isset($_SESSION['loggedIn'])){
    $billing = $obj->getUserBilling();
    }
    $cart;
?>        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Laser Gift Shop</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/color1.css" media="screen" id="color">

     <!-- stripe checkout -->
<script src="https://js.stripe.com/v3/"></script>

<!-- CSS for each example: -->
<link rel="stylesheet" type="text/css" href="assets/stripe/css/example4.css" data-rel-css="" />

</head>
<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<?php 
include_once 'navs.php';
?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>checkout</h2>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form action="charge" method="post" id="payment-form">
                    <div class="row">
                        <?php if(count($billing) > 0){ ?>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3></div>
                                <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>First Name *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['firstname']; ?>" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Last Name *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['lastname']; ?>" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['phone']; ?>" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['email']; ?>" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label for="address-two">Country *</label>
                                                <input type="text" class="form-control" id="country" placeholder="Country" value="<?php echo $billing[0]['country'] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Address *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['houseaddress']; ?>" placeholder="Street address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Town/City *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['town']; ?>" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">State / Country *</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['state']; ?>" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">Postal Code</label>
                                        <input type="text" name="field-name" value="<?php echo $billing[0]['postcode']; ?>" placeholder="">
                                    </div>
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>

                        
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" value="" placeholder="" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" value="" placeholder="" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="phone" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input type="text" name="email" value="" placeholder="" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label for="address-two">Country</label>
                                        <input type="text" name="country" id="country" value="" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Address</label>
                                        <input type="text" name="address" value="" placeholder="Street address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Town/City</label>
                                        <input type="text" name="town" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">State / Country</label>
                                        <input type="text" name="state" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label class="field-label">Postal Code</label>
                                        <input type="text" name="postalcode" value="" placeholder="">
                                    </div>
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <?php 
                                if(isset($_POST['request'])){
                                    $request = $_POST['request'];
                                
                                    if($request == "product"){
                                     $cart = $_POST;
                                    
                                     ?>
                                     <input type="hidden" name="quantity" value="<?php echo $cart['quantity'];  ?>"/>
                                     <input type="hidden" name="price" value="<?php echo $cart['price'];  ?>"/>
                                     <input type="hidden" name ="amount" id="amount"/>
                                    <input type="hidden" name="custom" value="<?php echo $cart['custom'];  ?>"/>
                                     <input type="hidden" name="font" value="<?php echo $cart['font'];  ?>"/>
                                     <input type="hidden" name="name" value="<?php echo $cart['name'];  ?>"/>
                                     <!-- <input type="hidden" name="size" value="<?php echo $cart['size'];  ?>"/>
                                     <input type="hidden" name="shape" value="<?php echo $cart['shape'];  ?>"/>
                                     <input type="hidden" name="material" value="<?php echo $cart['material'];  ?>"/>
                                     <input type="hidden" name="holes" value="<?php echo $cart['holes'];  ?>"/>
                                     <input type="hidden" name="request" value="<?php echo $cart['request'];  ?>"/> -->
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        <li><?php echo $cart["name"]?> × <?php echo $cart["quantity"]?> <span>&pound;</i><?php $price =  number_format(($cart["quantity"] * $cart["price"]),2); echo $price;?></span></li>
                                        </ul>
                                    
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">&pound;<?php  echo $price?></span></li>
                                        <li>Shipping
                                            <ul class="ml-3">
                                            <?php foreach($shipprice as $sp){ ?>
                                                <li class="ml-3">
                                                    <input type="radio" name="shipping" id="shipping-<?php echo $sp['ship_id'] ?>" value="<?php echo $sp['amount'] ?>">
                                                    <label for="free-shipping"><?php echo $sp["shipping_name"] ?></label>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                           
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count"><b>&pound;</b><b id="total"></b></span></li>
                                    </ul>
                                </div>
                                <?php
                                        }
                                        } else {
                                            $cart = $obj->getCart($ip);  

                                        
                                    ?>
                                    <input type="hidden" name="product" value="<?php echo json_encode($cart);  ?>"/>
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                            <?php foreach($cart as $c){?>
                                            <li><?php echo $c["name"]?> × <?php echo $c["quantity"]?> <span>&pound;</i><?php echo number_format(($c["purchase"]),2);?></span></li>
                                            <?php } ?>
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Subtotal <span class="count">&pound;<?php $a =$obj->getCartTotal($ip); echo number_format(($a[0]['total']),2);?></span></li>
                                            <li>Shipping
                                                <ul class="ml-3">
                                                <?php foreach($shipprice as $sp){ ?>
                                                    <li class="ml-3">
                                                    <input type="radio" name="shipping" id="shipping-<?php echo $sp['ship_id'] ?>" value="<?php echo $sp['amount'] ?>">
                                                    <label for="free-shipping"><?php echo $sp["shipping_name"] ?></label>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                           
                                        </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count"><b>&pound;</b><b id="total"></b></span></li>
                                        </ul>
                                </div>
                                <?php  
                                        }
                                        ?>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment_method" value="Direct Transfer" id="payment-1">
                                                        <label for="payment-1">Direct Bank Transfer<span class="small-text">Please include the order number in the description of .</span></label>
                                                    </div>
                                                </li>
                                                
                                        <div id="direct">
                                            <div class="card">
                                            <div class="card-body">Make your payment directly into our bank account.<br>
                                                The Laser Gift Shop<br>
                                                    Lloyds Bank. Sort code- 30-95-96 Account number- 27272860</div>
                                            </div>
                                        </div>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment_method" value="Credit Card" id="payment-2">
                                                        <label for="payment-2">Credit Card (stripe)<span class="image"><img src="assets/images/paypal.png" alt=""></span>
                                                        <!-- <img src="assets/images/pay/1.png" alt=""><img src="assets/images/pay/2.png" alt=""><img src="assets/images/pay/4.png" alt=""> -->
                                                    </label>
                                                    </div>
                                                </li>
                                                    <div id="stripe">
                                                        
                                                       
                                                     <div class="cell example example4" id="example-4">
           
                                                          <fieldset>
                                                            <legend class="card-only" data-tid="elements_examples.form.pay_with_card">Pay with card</legend>
                                                            <legend class="payment-request-available" data-tid="elements_examples.form.enter_card_manually">Enter card details</legend>
                                                            <div class="container">
                                                              <div id="example4-card"></div>
                                                              <button type="submit" data-tid="elements_examples.form.donate_button">Pay</button>
                                                            </div>
                                                          </fieldset>
                                                          <div class="error" id="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                                            <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
                                                            <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
                                                            </svg>
                                                            <span class="message" id="message"></span></div>
                                                         
                                                      </div>
                                                    </div>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment_method" value="paypal" id="payment-3">
                                                        <label for="payment-3">PayPal<span class="image"><img src="assets/images/pay/3.png" alt=""></span></label>
                                                    </div>
                                                </li>
                                                <div id="paypal">
                                            <div id="paypal-button"></div>
                                        </div>
                                            </ul>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="text-right">
                                     <button class="btn-normal btn" id="btn">Place Order</button> 
                                    <!--<input type="submit" class="btn-normal btn" value="Place Order" id="btn"/></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->


<!--footer start-->
<?php include_once 'footer.php' ?>
<!--footer end-->

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->



<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js" ></script>

<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js" ></script>

<!-- slick js-->
<script  src="assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js" ></script>

<!-- Theme js-->
<script src="assets/js/script.js" ></script>

<!-- paypal checkout -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<!-- Simple localization script for Stripe's examples page. -->
<script src="assets/stripe/js/l10n.js" data-rel-js></script>



<script>
    let total,totals;
    $(document).ready(function(){
        $('#error').hide();
        total = <?php if(isset($price)){ echo $price; } else { echo number_format(($a[0]['total'] ),2);}?>;
        $('#total').text(total.toFixed(2));
        $('#amount').val(totals);
        $('#direct').hide();
        $('#stripe').hide();
        $('#paypal').hide();
        $('#loader').hide();
        $('#payment-1').on('change', function () {
           $(this).prop('checked',true);
          $('#payment-2').not(this).prop('checked', false);
          $('#payment-3').not(this).prop('checked', false);
          if($(this).prop("checked") == true){
            $('#direct').show();
            $('#stripe').hide();
            $('#paypal').hide();
          } else {
            $('#direct').hide();
            $('#stripe').hide();
            $('#paypal').hide();
          }
        });
        $('#payment-2').on('change', function () {
           $(this).prop('checked',true);
          $('#payment-1').not(this).prop('checked', false);
          $('#payment-3').not(this).prop('checked', false);
          if($(this).prop("checked") == true){
            $('#stripe').show();
            $('#direct').hide();
            $('#paypal').hide();
          } else {
            $('#direct').hide();
            $('#stripe').hide();
            $('#paypal').hide();
          }
        });
        $('#payment-3').on('change', function () {
           $(this).prop('checked',true);
          $('#payment-1').not(this).prop('checked', false);
          $('#payment-2').not(this).prop('checked', false);
          if($(this).prop("checked") == true){
            $('#paypal').show();
            $('#direct').hide();
            $('#stripe').hide();
          } else {
            $('#paypal').hide();
            $('#direct').hide();
            $('#stripe').hide();
          }

        });
//  add shipping amount to subtotal
        $('input[name="shipping"]').on('change',function (){
            shipping = $("input[type='radio'][name='shipping']:checked").val();
            totals = parseFloat(total) + parseFloat(shipping);
            $('#total').text(totals.toFixed(2) );
            $('#amount').val(totals);
        })

        // set amount for stripe users
        $('input[name="amount"]').val(total);
      
    })
    // direct bank transfer
    $('#btn').click(function(){
    //   var formData = new FormData($('#payment-form')[0]);
    //   console.log(formData.get('product'));
    
        <?php  $orders = $obj->addtoinvoice($cart);
        
        ?>
        status = <?php echo $orders['success']; ?>;
        if(status == true){
        order =<?php echo $orders['order_id']; ?>;
       <?php $_SESSION['cart'] = $cart; 
       $_SESSION['order_id'] = $orders['order_id']; ?>
        window.location.href="order-success";
        console.log(order);
        
        }
    else {
            return;
        }
        //  example = document.querySelector("#payment-form");
        //  console.log(example);
    })
    
    // paypal payment integration
    paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AYo87SStQLaybGXPODNmKVjJiCHpAizB-u--HaK7Coe2us2CeqjMyHnDqnKnuu1JA88xPgFGNapKa4zM',
    //    production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'large',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: totals,
            currency: 'GBP'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        <?php  $order = $obj->addtoinvoice($cart); ?>
        order =JSON.parse(<?php json_encode($order); ?>);
        if(order.success){
        window.location.href="order-success";
        console.log(order);
        } else {
            return;
        }
        // window.alert('THANK YOU FOR YOUR ORDER <br> Many thanks for your order which has now been received.  A further confirmation will be sent once your order has been dispatched. Meanwhile, if you have any questions or concerns, please contact us at orders@thelasergiftshop.co.uk');
        
    });
    }
  }, '#paypal-button');

//   let dateDropdown = document.getElementById('year'); 
       
//        let currentYear = new Date().getFullYear();    
//        let futureYear = currentYear+10;  
//        while (currentYear <= futureYear) {      
//          let dateOption = document.createElement('option');          
//          dateOption.text = currentYear;      
//          dateOption.value = currentYear-2000;        
//          dateDropdown.add(dateOption);      
//          currentYear += 1;    
//        }
    // stripe checkout

var stripe = Stripe('pk_test_51IbSB6DKLev3qQYE7QNTFEBHpeKAgnRCIlFE9OaoORoK2k4PrEuuzvdouQVrj4mIDxPc6mw6FpBFnWqEXRwHm4ap00D9QFNWvq');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#example4-card');

// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('message');
      errorElement.textContent = result.error.message;
      $("#error").show();
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
//   var submit = document.createElement('input');
//     submit.type = 'submit';
//     submit.style.display = 'none';
//     form.appendChild(submit);
//   submit.click();
//     submit.remove();
//   form.submit();
 <?php  $orders = $obj->addtoinvoice($cart);
        
        ?>
        status = <?php echo $orders['success']; ?>;
        if(status == true){
        order =<?php echo $orders['order_id']; ?>;
       <?php $_SESSION['cart'] = $cart; 
       $_SESSION['order_id'] = $orders['order_id']; ?>
       firstname =$('input[name="firstname"]').val();
lastname =$('input[name="lastname"]').val();
email =$('input[name="email"]').val();
phone =$('input[name="phone"]').val();
stripeToken = token.id;
quantity =$('input[name="quantity"]').val();
amount =totals;
description =$('input[name="name"]').val();
// order =$('input[name="order_id"]').val();
$.post("/charge",{firstname,lastname,email,phone,stripeToken,quantity,amount,description, order},function(data){
    console.log(data);
    if(data == "success"){
        <?php  $order = $obj->addtoinvoice($cart); ?>
        order =JSON.parse(<?php json_encode($order); ?>);
        if(order.success){
        window.location.href="order-success";
        console.log(order);
        } else {
            return;
        }
    }
    // charge = JSON.parse(data);
    // console.table(charge);
})
        window.location.href="order-success";
        console.log(order);
        
        }
    else {
            return;
        }

}
</script>
</body>
</html> 
 <?php } ?>      