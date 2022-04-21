<?php
echo "<h2>Range</h2>";
$numbers = range(1, 10);
print_r($numbers);
//============================================
echo "<h2>Question 01: random keys / Index / এলোমেলো কী বাছুন </h2>";
//array_rand(from_which_array, how_many_element) - pick random keys / Index
$name = [
    'Shakil','Kalam','Rohim','Mizan','Azad','Nourol',
];

$rend = array_rand($name, 3);

foreach( $rend as $key => $number){
    echo '<pre>';
    echo ++$key  ;
    echo " => Random Value {$number}";
}
//=============================================
echo "<h2>Question 02: Shuffle Index Randomize Kore</h2>";
//shuffle(which_array) - randomize order of array elements
$car = [
    'Toyota','Mercedes-Benz','Tesla','BMW','Rolls Royce','Bentley','Bugatti'
];

shuffle($car);
//print_r($car);
foreach($car as $index => $car_name){
    echo '<pre>';
    echo ++$index;
    echo " => $car_name";
}
//========================================================
echo "<h2>array_chunk(which_array, how_many_element, keys_sequence) - Split an array into chunks</h2>";

$car_names = [
    'Mercedes- Benz',' Tesla','BMW','Rolls Royce','Bentley
    ',' Bugatti','Porsche','Lexus',' Land Rover','Toyota','Audi','Jaguar','Volvo',
];

print_r(array_chunk($car_names, 3));
//=======================================================
echo "<h2>array_chunk(which_array, how_many_element, keys_sequence) - Split an array into chunks Index Value 0,1,2,3,4,5</h2>";

$car_names = [
    'Mercedes- Benz',' Tesla','BMW','Rolls Royce','Bentley
    ',' Bugatti','Porsche','Lexus',' Land Rover','Toyota','Audi','Jaguar','Volvo',
];

print_r(array_chunk($car_names, 3, true));
//=====================================================
echo "<h2>Asort ascending order Siriyale Shajiye Dei Like, A, B, C, D</h2>";
//asort(which_array, sort_rule) - sort ascending order, 
$car_names = [
    'Mercedes-Benz',' Tesla','BMW','Rolls Royce','Bentley
    ',' Bugatti','Porsche','Lexus',' Land Rover','Toyota','Audi','Jaguar','Volvo',
];
asort($car_names);
echo '<pre>';
print_r($car_names);
//+=======================================
echo "<h2>Arsort ascending order Siriyale Shajiye Dei Like, D,C,B,A</h2>";
//arsort(which_array, sort_rule) - sort descending order,
$car_names = [
    'Mercedes-Benz','Tesla','BMW','Rolls Royce','Bentley
    ',' Bugatti','Porsche','Lexus',' Land Rover','Toyota','Audi','Jaguar','Volvo',
];
arsort($car_names);
echo '<pre>';
print_r($car_names);
//=============================================
echo "<h2>Ksort ascending order Siriyale Shajiye Dei Like,  A, B, C, D</h2>";
//ksort(which_array, sort_rule) - sort keys by ascending order,
$car_names = [
    'BMW','Rolls Royce','Bentley', ' Bugatti','Porsche','Lexus','Toyota','Volvo',
    
];
ksort($car_names);
echo '<pre>';
print_r($car_names);

//===============================================
echo "<h2>Krsort ascending order Siriyale Shajiye Dei Like,  D,C,B,A</h2>";
//krsort() - sort keys by descending order
$car_names = [
    'BMW','Rolls Royce','Bentley', ' Bugatti','Porsche','Lexus','Toyota','Volvo',
    
];
krsort($car_names);
echo '<pre>';
print_r($car_names);
//=======================================
echo "<h2>implde array to string</h2>";
//implode(separator_symble, which_array) - Join array elements with a string (array to string)
$car_names = [
    'BMW','Rolls Royce','Bentley', ' Bugatti','Porsche','Lexus','Toyota','Volvo'  
];
$result = implode(' | ', $car_names);
echo $result;
//==============================================
echo "<h2>explode String to array</h2>";
//explode(separator_symble, which_string, element_limit) - String to array
$string_name = "The explode function breaks a string into an array";

$sreg = explode(' ', $string_name);
print_r($sreg);

?>