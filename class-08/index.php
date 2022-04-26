<?php
//Create a function that will return children, teenagers, young people, old people from the age
echo "<h3>Question 01</h3>";
function age1($age = 22){
    if($age >= 0 && $age <= 5){
        return "Your Are Children";
    }elseif($age >= 6 && $age <= 18){
        return "Your Are Teenagers";
    }elseif($age >= 18 && $age <= 26){
        return "Your Are Young";
    }elseif($age >= 27 && $age <= 45){
        return "Your Are People";
    }elseif($age >= 46 && $age <= 100){
        return "Your Are Old People";
    }else{
        return "Your Are Age unvalid";
    }
}
echo age1();
//====================================
//Create a function that will return the area of a rectangle, square, triangle
echo "<h3>Question 02</h3>";

function rectangle($Length, $Width){
    $area_rectangle = $Length * $Width;
    return $area_rectangle;
}
echo "Rectangle" . ' '. rectangle(5,6). "<br>";

function square($square){
    $area_square = $square * $square;
    return $area_square;
}
echo "Square" . ' '. square(5). "<br>";

function triangle($base, $height){
    $area_triangle = $base * $height;
    return $area_triangle;
}
echo "Triangle" . ' '. triangle(5,6). "<br>";

// function area($side, $length = 0, $width = 0){
//     if($side > 0 && $length > 0 && $width > 0){
//         return $side * $length * $width;
//     }elseif($length > 0 && $width > 0){
//          return $length * $width;
//     }elseif($side == $side){
//         return $side * $side;
//     }
// }
// echo area(5,3);
//====================================
//GPA function for result publishing
echo "<h3>Question 03</h3>";
function gpa($number = 50){
    if($number >= 0 && $number <= 32){
        return "Your GPA = 0";
    }elseif($number >= 33 && $number < 40){
        return "Your GPA = 1";
    }elseif($number >= 40 && $number < 50){
        return "Your GPA = 2";
    }elseif($number >= 50 && $number < 60){
        return "Your GPA = 3";
    }elseif($number >= 60 && $number < 70){
        return "Your GPA = 3.5";
    }elseif($number >= 70 && $number < 80){
       return "Your GPA = 4";
    }elseif($number >= 80 && $number < 100){
        return "Your GPA = 5";
    }else{
        return "Your GPA = Not Valid";
    }
}
echo gpa();
//============================
//Create a BMI function for health
echo "<h3>Question 05</h3>";

// function bmis($weight_kg, $height){
//     $bmi = $weight_kg / ($height * $height);
//     $bmi =  number_format($bmi, 2);

//     if($bmi < 18.5){
//         return "Yout BMI Thin {$bmi}";
//     }elseif($bmi >= 18.5 && $bmi <= 24.9){
//         return "Yout BMI Normal {$bmi}";
//     }elseif($bmi >= 25 && $bmi <= 29.9){
//         return "Yout BMI Overweight {$bmi}";
//     }elseif($bmi >= 30 && $bmi <= 34.9){
//         return "Yout BMI Obesity {$bmi}";
//     }elseif($bmi >= 35 && $bmi <= 39.9){
//         return "Yout BMI Obesity (Hight / Stepi) {$bmi}";
//     }elseif($bmi > 40){
//         return "Yout BMI Obesity Overhight (Hight / Stepi) {$bmi}";
//     }
// }

// echo bmis(60, 1.58496); //5.2 Feed/Ince = 1.58496

//==================================
function bmis($weight_kg, $height){
    $new_hight = explode(".", $height);
    $new_array = reset($new_hight);
    $end_array = end($new_hight);

    $feed_ince = ($new_array * 12)+$end_array;
    $feed_ince = $feed_ince * 0.0254;

    $bmis = $weight_kg/($feed_ince*$feed_ince);
    $bmis = number_format($bmis,2);

    if($bmis < 18.5){
        return "Yout BMI Thin {$bmis}";
    }elseif($bmis >= 18.5 && $bmis <= 24.9){
        return "Yout BMI Normal {$bmis}";
    }elseif($bmis >= 25 && $bmis <= 29.9){
        return "Yout BMI Overweight {$bmis}";
    }elseif($bmis >= 30 && $bmis <= 34.9){
        return "Yout BMI Obesity {$bmis}";
    }elseif($bmis >= 35 && $bmis <= 39.9){
        return "Yout BMI Obesity (Hight / Stepi) {$bmis}";
    }elseif($bmis > 40){
        return "Yout BMI Obesity Overhight (Hight / Stepi) {$bmis}";
    }
}

echo bmis(50, 6.5);











//============================
//Create an age calculator function
echo "<h3>Question 04</h3>";

$birth = "17-10-2000";
$current = date("d-m-Y");
$age = date_diff(date_create($birth), date_create($current));
echo "Current age is ".$age->format("%y");
//========================================
//Create a BMI function for health
echo "<h3>Question 05</h3>";
function bmi($Age, $Height, $Weight){
    
}
//===================================================
//Create a currency converter function from taka to USD, CAD, POUND, EURO etc
echo "<h3>Question 06</h3>";
function converter($amound, $converter){
    $string = strtoupper($converter);
    if($string == 'USD'){
        return $amound * 86.23;
    }elseif($string == 'CAD'){
        return $amound * 67.56;
    }elseif($string == 'POUND'){
        return $amound * 109.65;
    }elseif($string == 'EURO'){
        return $amound * 92.34;
    }else{
        return "This is a Not currency";
    }
}
echo converter(20, 'euro');



?>