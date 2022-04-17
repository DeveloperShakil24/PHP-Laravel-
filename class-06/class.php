<?php
echo "<h3>Array Index Number Berkore</h3>";
//Array Theke Namber Berkore
$given_array = [12, 13, 14, 11, 16, 18, 17];
echo count($given_array);
echo '<br/>';
echo sizeof($given_array);
echo '<br/>';
//=================================
echo "<h3>Mix Number Berkore</h3>";
// max(which_array), min(which_array)
$number = [0,10,80,67,60,89,91,56,45,30,95,83,99];
echo max($number);
echo '<br/>';
//===========================
echo "<h3>in_array</h3>";
//in_array(which_you_want_search, from_which_array, strict_mode)
$number1 = [0,10,80,67,60,89,91,56,45,30,95,83,99];

if( in_array(300, $number1, 'ture')){
    echo'Have 30';
}else{
    echo "Don't Have"; 
}
echo '<br/>';
//=============================
echo "<h3>array_search</h3>";
//array_search(which_you_want_search, from_which_array) // Index Number Dekhai
$number2 = [0,10,80,67,60,89,91,56,45,30,95,83,99];
echo array_search(91, $number2 );
echo '<br/>';
if( array_search(91, $number2 )){
    echo'Have 91';
}else{
    echo "Don't Have";
}
echo '<br/>';
//======================================
echo "<h3>array_pop Number last theke End kore</h3>";
//array_pop(from_which_array) - for delete last element
$number3 = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$my = array_pop($number3);
echo $my; //array_pop(from_which_array) - pixup last element
//=============================
echo "<pre>";
$pop = array_pop($number3);
print_r($number3);
echo '<br/>';
//=============================
echo "<h3>array_pop Number last theke Add kore</h3>";
//array_push(which_array, new_value) - add element on last
$number4 = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$push = array_push($number4, 100);
echo "<pre>";
print_r($number4);
//=======================================
echo "<h3>array_merge array add kore</h3>";
//array_merge(all_arrays) - make a new array by merging multiple array

$number_merge = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$number_merge1 = [100,800,600,900,400,300,990, ];

$new_merge = array_merge($number_merge, $number_merge1);

echo"<pre>";
print_r($new_merge);
// =====================================
echo "<h3>একটি অ্যারে থেকে কিছু উপাদান নিয়ে একটি নতুন অ্যারে তৈরি করুন। array_slice</h3>";
//array_slice(from_which_array, from_index, total_element) - make a new array by taking some element from an array.
$array_slice = [0,10,80,67,60,89,91,56,45,30,95,83,99,100, 120, 130,150,180,167,160,189,191];

$new_slice = array_slice($array_slice, 12, 7);

echo"<pre>";
print_r($new_slice);

//====================================
echo "<h3>একটি অ্যারে থেকে কিছু উপাদান remove করুন।</h3>";
//array_splice(from_which_array, from_index, total_element) - remove array element from an this array
$array_splice = [0,10,80,67,60,89,91,56,45,30,95,83,99,100, 120, 130,150,180,167,160,189,191];

$remove_array = array_splice($array_splice,0, 12);
echo "<pre>";
echo print_r($remove_array);
//======================================
echo "<br>";
echo "<h3>একটি অ্যারে থেকে কিছু উপাদান array_diff করুন।</h3>";
//array_diff(first_array, second_array)

$diff = [1,2,3,4,8,11];
$diff1 = [1,2,3,4,];

$new_diff = array_diff($diff,$diff1);
echo "<pre>";
echo print_r($new_diff);
// =======================================================
echo "<h3>একটি অ্যারে থেকে কিছু উপাদান array_unique করুন।</h3>";
//array_unique(which_array)
$unique =  [1,2,3,4,8,11];
$unique1 = [1,2,3,4,];

$new_unique = array_unique($unique);
echo "<pre>";
echo print_r($new_unique);
// =================================
//array_sum(which_array)
echo "<h3>array_sum।</h3>";
$sum = [1,2,3,4,8,11,1];
echo array_sum($sum)











?>