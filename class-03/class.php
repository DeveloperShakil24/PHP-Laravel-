<?php
/*
Addition
*/
$number  = 10;
$number2 = 10;
echo $number + $number2;
echo '<br/>';

/**
 * Subtraction
 */
$number3 = 50;
$number4 = 20;
echo $number3 - $number4;
echo '<br/>';

/**
 * Multiplication
 */
$product_quantity = 60;
$add_to_cart = 4;
echo $product_quantity * $add_to_cart;
echo '<br/>';

/**
 * Division
 */
$price = 60;
$divided = 4;
echo $price / $divided;
echo '<br/>';

/**
 * Modulus
 */
$product_price = 71;
$seld = 7;
echo $product_price % $seld;
echo '<br/>';

/**
 * Exponentiation
 */
$product = 6;
$qun_product = 2;
echo $product ** $qun_product;
echo '<br/>';

// we have 5 product on our inventory. price are sepuencly 10, 20, 30, 40, 50.
$prices = [10, 20, 30, 40, 50];

$total_price = 0;
foreach($prices as $MyPrice){
    $total_price = $total_price + $MyPrice;
}
echo $total_price;
echo '<br/>';
//if else
$Car_rental = 120;

if($Car_rental >= 120){
    echo 'You Can Go to Dhaka';
}else{
    echo "You can't go to Dhaka";
}
echo '<br/>';

?>