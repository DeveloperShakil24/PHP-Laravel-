<?php
//isset
echo "<span>Isset Function => </span>" . " ";
$name;
if (isset($name)) {
    echo "Yes, Valoue Already Set";
} else {
    echo "Valoue Not Set";
}
echo '<br>';
//=================================
echo "<span>Empty Function => </span>" . " ";
//empty
$number = '1';
if (empty($number)) {
    echo "Empty";
} else {
    echo "Not Empty";
}
echo '<br>';
//=====================================
echo "<span>Die Function => </span>" . " ";
//Die / Exit
echo "5" . "<br>";
echo "4" . "<br>";
echo "3" . "<br>";
//die("Stop") ."<br>";
echo "2" . "<br>";
echo "1";
echo '<br>';
//=====================================
//undefined undefined
// $name ;
// echo $name;
//==================================
//Empty / Flag Variable
$list = '';
$list .= '<ul>';
$list .= '<li> List Number 1</li>';
$list .= '<li> List Number 2</li>';
$list .= '<li> List Number 3</li>';
$list .= '<li> List Number 4</li>';
$list .= '</ul>';

echo $list;
echo '<br>';
//===================
//Array Variable
$name1[] = 'Shakil';
$name1[] = 'Shakil';
echo "<pre>";
print_r($name1);
//======================

// function data()
// {
//     $outpout = ['sd'];

//     if ($outpout) {
//         $outpout['Massage'] = 'Successfull';
//         $outpout['status'] = 1;
//     } else {
//         $outpout['Massage'] = 'Feiled';
//         $outpout['status'] = 0;
//     }
//     return $outpout;
// }
// echo $outpout();
//===========================