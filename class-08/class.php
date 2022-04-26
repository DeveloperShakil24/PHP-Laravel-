<?php
//user Definf Function
// function sum($number, $number1){
//     $number = 20;
//     $number1 = 30;
//     $result = $number + $number1;
//     return $result;
// }
// echo sum(40, 60); //Arogoment
// echo "<br>";

// function array_sums($sums = ["10,20, 30, 40,50"]){
//     foreach($sums as $key => $valus){
//         echo $valus;
//     }
// }
// print_r($valus);

//===============================
echo "<h4>Strlen() Text Count</h4>";
$test = "publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without";
echo strlen("$test");
//===========================
echo "<h4>Str_word_count() Word Count</h4>";
$test = "publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without";
echo Str_word_count("$test");
//===================
echo "<h4>strpos() Word Position</h4>";
$test2 = "publishing and graphic design,";
echo strpos($test2,"design");
//===========================
echo "<h4>Substr() Koto namber Theke Nibe koto gulo cracter Nibe </h4>";
$test3 = "publishing and graphic design,";
$test3 = Substr($test3, 11, 3);
echo $test3;
//========================================
echo "<h4>str_split() Convard String into array</h4>";
$test4 = "publishing and graphic design,";
$result = str_split($test4, 5);
echo "<pre>";
print_r($result);
//========================================
// echo "<h4>Str_replace() String ke replace kore</h4>";
// $test5 = "publishing and graphic design,";
// $result = Str_replace($test5, 'with', 'and');
// echo $result;














