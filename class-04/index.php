<?php
$day = date("d");
$last_day = date("t");;
for($d = $day; $d <= $last_day; $d++){
    echo $d . "<br/>";
}
echo'<br/>';

//odd (বিজোড়) number
for( $i = 1; $i <= 100; $i++){
    if($i % 2 != 0){ 
        echo $i. '<br/>';
}
}
echo'<br/>';

//Factorial
$number=7;
$fact =1;
for($i = $number; $i >= 1; $i--) {
    $fact = $fact * $i;
}
echo  '<br>'.'The factorial of the number 7 is '.$fact;

echo  '<br>';
echo  '<br>';


//while loop
$num = 100;
while($num > 1){
     echo "Decrement Number: $num <br/>";
     $num--; 
}
echo "<br/>";

//Product Array
$product = ['apple', 'orange', 'banana', 'mango'];

foreach($product as $key => $furit)
{
    echo ++$key. ' - ' .$furit. '<br/>';
}

?>