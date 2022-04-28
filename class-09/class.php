<?php
//isset
echo "<span>Isset Function => </span>" . " ";
$name;
if(isset($name)){
    echo "Yes, Valoue Already Set";
}else{
    echo "Valoue Not Set";
}
echo '<br>';
//=================================
echo "<span>Empty Function => </span>" . " ";
//empty
$number = '1';
if(empty($number)){
   echo "Empty";
}else{
    echo "Not Empty";
}
echo '<br>';
//=====================================
echo "<span>Die Function => </span>" . " ";
//Die / Exit
echo "5" ."<br>";
echo "4" ."<br>";
echo "3" ."<br>";
die("Stop") ."<br>";
echo "2";
echo "1";
echo '<br>';
?>