<?php
//for loop 
echo " <h1>for loop</h1>";
for ($i = 0; $i <= 10; $i++){
    echo"ForLoop: $i <br/>";
}
echo"<br/>";

//Year Calcloter
echo " <h1>Year Calcloter</h1>";
$rining_year = date("Y");
$initial_year = $rining_year - 50;

for($initial_year; $initial_year <= $rining_year; $initial_year++){
    echo $initial_year;
    echo "<br/>";
    if($initial_year == 2000){
        echo "Happy Barday";
    }
}



//While Loop
echo " <h1>While Loop</h1>";
$a = 10;
while($a >= 1){
    echo"While Loop: $a <br/>";
    $a--;
}

//Do While Loop
echo " <h1>Do While Loop</h1>";

$b = 1;
do{
    echo "Do While Loop: $b <br/>";
}while($b > 20);
echo "<br/>";

//Foreach Loop
echo " <h1>Foreach Loop</h1>";
$name = ['Shakil','Kasmal','Shohan','Lavlo','Nurul Islam'];

foreach ($name as $key => $dokandar)
{
    echo ++$key. $dokandar. '<br/>';
}

?>
