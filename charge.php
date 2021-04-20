<?php
require "vendor/autoload.php";

// header('Content-Type: application/json');

// Set your secret key. Remember to switch to your live secret key in production.
\Stripe\Stripe::setApiKey('sk_test_51IbSB6DKLev3qQYE9b5kO3K2poWcX6ahaTa1PNT7TWQKwdSMU8BcOQdQXY1fTDTXJZPPUzRg9iazYIo2wjSQdWAX00P5CsZSy5');



// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$amount = floayval($_POST['amount']) *100;
$order = $_POST['name'];
$quantity = $_POST['quantity'];
$email = $_POST['email'];
$name = $_POST['firstname']. " ". $_POST['lastname'];;
$charge = \Stripe\Charge::create([
  'amount' => 1000,
  'currency' => 'gbp',
  'email' => $email,
  'name' => $name,
  'description' => $order,
  'source' => $token,
]);
$status = json_encode($charge->status);
return $status;
// return "success";
// if($status[0]->status){
// include_once 'order-success';
// } else {
//   include_once '';
// }
// $checkout_session = \Stripe\Checkout\Session::create([
//     'payment_method_types' => ['card'],
//     'line_items' =>[[
//         'price_data' => [
//             'currency' => 'gbp',
//             'unit_amount' => $amount,
//             'product_data' => [
//                 'name' => $order,
//             ],
//         ],
//         'quantity' => 1,
//     ]],
//     'mode' => 'payment',
//     'success_url'=>'order-sucess',
//     'cancel_url'=>'checkout',
// ]);
// echo json_ecncode(['id' => $checkout_session->id]);
?>