<?php

//Heading 
echo "<h1>Hello</h1>";

//Variable
$name = 'Shakil <br>'; 

//Constant variables
define('Project', 'http://localhost/sorobindu/class-01/index.php <br/>', true);
echo project;

$name = 'Shakil';
$occuption = 'Developer';
$address = 'Dhanmindi';
echo $name . ' ' .$occuption .' ' .$address. '<br>' ;

$name = 'Shakil';
$address = 'Dhanmindi';
echo "My Name {$name}, My Address {$address} '<br/>'";


//printf
$name = 'Shakil';
$roll = 1;
printf("My Name %s My Roll %d <br/>", $name, $roll) ;

//sprintf
$out_poyt = sprintf("My Name %s My Roll %d <br/>", $name, $roll);
echo $out_poyt;

//Most commonly used scalar (মৌলিক) data types - (String, Integer, float, Boolean)
$name   = "Shakil"; //String
$age    = 21;  //Integer
$amound = 20.50; //Floot ba Double
$switch = true; // false; // True or False
$null   = null; //Null
echo gettype($null);

//Array, 
$student =array('Shakil','Rafi','Nazmoul','Kamal','Kashem');
//echo gettype($student);

//object
class student{
   function name(){
    echo "This is Function";
    }
}
$obj = new student;
echo $obj->name()
?>