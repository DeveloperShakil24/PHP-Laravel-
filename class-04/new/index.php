<?php
// echo " <h1>Question 01:</h1>";
// $day = date("d");
// $last_day = date("t");;
// for($d = $day; $d <= $last_day; $d++){
//     echo $d . "<br/>";
// }
// echo'<br/>';

// echo " <h1>Question 02:</h1>";
// //odd (বিজোড়) number
// for( $i = 1; $i <= 100; $i++){
//         echo $i. '<br/>';
// }
// //=========================
// for( $i = 21; $i <= 30; $i+=2){
//         echo $i. '<br/>';
// }

// //odd (বিজোড়) number
// echo'<br/>';
// for( $i = 1; $i <= 100; $i++){
//     if($i % 2 != 0){ 
//         echo $i. '<br/>';
// }
// }
//odd (বিজোড়) number

echo'<br/>';
for( $i = 1; $i <= 100; $i++){
    if($i % 2){ 
        
        echo $i. '<br/>';
}
}
// echo'<br/>';




// echo " <h1>Question 03:</h1>";
// //Factorial
// $number=7;
// $fact =1;
// for($i = $number; $i >= 1; $i--) {
//     $fact = $fact * $i;
// }
// echo  '<br>'.'The factorial of the number 7 is '.$fact;

// echo  '<br>';
// echo  '<br>';




echo " <h1>Question 04:</h1>";
//while loop
$num = 100;
while($num > 1){
     echo "Decrement Number: $num <br/>";
     $num--; 
}
echo "<br/>";


echo " <h1>Question 05:</h1>";
//Product Array
$product = ['apple', 'orange', 'banana', 'mango'];

foreach($product as $key => $furit)
{
    echo ++$key. ' - ' .$furit. '<br/>';
}

?>