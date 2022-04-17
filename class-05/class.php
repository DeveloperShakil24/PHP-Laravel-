<?php
echo '<h2>break</h2>';
//break
for( $i = 1; $i <= 10; $i++ ){
    if($i == 5){
        break;
    }
    echo "{$i} - " ;
}
//============================
echo '<br/>';
//=============================
//continue Skip 
echo '<h2>continue</h2>';
for($a = 1; $a <= 10; $a++){
    if($a == 6){
        continue;
    }
    echo "{$a} - " ;
}
echo "<br/>";

//===========================
//Array = 3 index array
//1
// $array = array('Shakil','Kamal','Mizan');
//2
echo '<h2>Array</h2>';
$array = ['Shakil','Kamal','Mizan'];
var_dump($array);
echo "<br/>";
echo "<pre/>";
print_r($array);
//3
// $array[0] = 'Shakil';
// $array[0] = 'Kamal';
// $array[0] = 'Mizan';
//var_dump($array)
//===========================================

//Associative array ja nijer hate chenge kora jay

$student_info = [

    'Name' => "Shakil",
    'marid_status' => false,
    'ocopation' => 'Freelancing',

];
foreach( $student_info as $key => $valos ){ 
    echo "$key = {$valos} <br/>";
}
echo "<br/>";
// echo "<pre/>";
// print_r($student_info);
//=================================================

//Multidimensional array
$students_info = [
    ['Name' => "Shakil",'marid_status' => false, 'ocopation' => 'Freelancing'],
    ['Name' => "Kamal",'marid_status' => true, 'ocopation' => 'Freelancing'],
    ['Name' => "Mizan",'marid_status' => true, 'ocopation' => 'Freelancing'],
];

foreach($students_info as $key => $singelName){
    foreach($singelName as $index => $value){
        echo $value;
        echo "<br/>";
    }
    echo "<hr/>";
}



















?>