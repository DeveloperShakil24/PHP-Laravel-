<?php
echo "<h2>Question 01:</h2>";
$array_number = [12,34,2,6,78];
foreach($array_number as $key => $value){
    $x = $value;
    echo "The factors of the " . $x . " are: <br/>";
        
        for ($i = 1; $i <= $x; ++$i)
        {
            if ($x % $i == 0)
            {
                echo $i . " <br/> ";
            }
        }
}
//===================================


//Multidimensional array
echo "<h2>Question 02:</h2>"; //Multidimensional array
 $Electronic = [
    ['Phone Name' => 'Realme Phones', 'RAM' => '2GB', 'ROM' => '32GB'],
    ['Phone Name' => 'Samsung Phones', 'RAM' => '4GB', 'ROM' => '8GB'],
    ['Phone Name' => 'OPPO Phones','RAM' => '28GB', 'ROM' => '132GB'],
    ['Phone Name' => 'Vivo Phones','RAM' => '3GB', 'ROM' => '61GB'],
    ['Phone Name' => 'Walton Phones','RAM' => '6GB', 'ROM' => '64GB']
    ];

    foreach($Electronic as $key3 => $phone){
        foreach($phone as $key => $valos){
            echo $key. ' = ' .$valos;
            echo '<br/>';
        }
    }

//This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
echo "<h2>Question 03:</h2>";
$maxNumber = [0,10,80,67,60,89,91,56,45,30,95,83,99,];
$maximum = max($maxNumber);
foreach($maxNumber as $key1 => $Number1){
    if($Number1 >= $maximum){
        echo $maximum;
    }

}

//==============================================
//Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….
echo "<h2>Question 04:</h2>";
$number = [0,10,80,67,60,89,91,56,45,30,95,83,99];
foreach($number as $traverse){

    if($traverse == 10){        
        continue;
    }elseif($traverse == 67){
        continue;
    }
    echo '-'. $traverse;
}

?>