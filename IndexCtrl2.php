<?php

$i = 0;

while ($i < 10){
    echo "The value of i is: $i <br>";
    $i++;
}

echo "<br><br>";

for($i = 0; $i < 10; $i++){
    echo "The value of i is: $i <br>";
}

echo "<br><br>";

$array = array("apple", "banana", "cherry", "date", "elderberry");
$r = 0;
while($r <count($array)){
    echo $array[$r] . "<br>";
    $r++;
}

echo "<br><br>";

$x = 0;
do {
    echo "The value of x is:   $x   <br>";
    $x++;
} while ($x <= 10);

echo "<br><br>";

$s= 0;

switch ($s) {
    case 0:
        echo "The value of s is zero";
        break;
    case 1:
        echo "The value of s is one";
        break;
    case 2:
        echo "The value of s is two";
        break;
    default:
        echo "The value of s is not zero, one, or two";
}


?>