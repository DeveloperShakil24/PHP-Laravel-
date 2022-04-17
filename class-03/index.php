<?php
//Question 01:
//Rishita’s subject marks:

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;

$subject_namber = [75, 80, 65, 90];

$total_namber = 0;
foreach($subject_namber as $number){
    $total_namber = $total_namber + $number;
}

$averageMark = $total_namber / 4;

echo $total_namber;
echo '<br/>';
echo $averageMark;

echo '<br/>';

if($averageMark >= 80 && $averageMark <= 100){
    echo "Your Grade A+";
}elseif($averageMark >= 70 && $averageMark <= 79){
    echo "Your Grade A";
}elseif($averageMark >= 60 && $averageMark <= 69){
    echo "Your Grade A-";
}elseif($averageMark >= 50 && $averageMark <= 59){
    echo "Your Grade B";
}elseif($averageMark >= 40 && $averageMark <= 49){
    echo "Your Grade C";
}elseif($averageMark >= 1 && $averageMark <= 39){
    echo "Your Grade F";
}
echo '<br/>';



// $number = 100;

// if($number <= 32){
//     echo "F";
// }elseif($number <= 39){
//     echo "D";
// }elseif($number <= 49){
//     echo "C";
// }elseif($number <= 59){
//     echo "B";
// }elseif($number <= 69){
//     echo "A-";
// }elseif($number <= 79){
//     echo "A";
// }elseif($number <= 100){
//     echo "A+";
// }else{
//     echo "Not Valid";
// }
// echo "<br/>";



//Bike
// start, stop, break, gear, button, headlight
$bike = "stop";

switch($bike){
    case "start":
        echo "Bike Start";
        break;
    case "stop":
        echo "Bike Stop";
        break;
    case "break":
        echo "Bike Break";
        break;
    case "gear":
        echo "Bike Moves Faster and Faster";
        break;
    case "button":
        echo "bike shows a signal light";
        break;
    case "headlight ":
        echo "bike’s headlight will start";
}


?>