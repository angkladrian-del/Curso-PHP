<?php

    echo "constantes<br><br>";
    
    $variable1 = 1;
    $variable2 = 2;

    $suma = $variable1 + $variable2; 
    echo "La suma es: " . $suma, "<br>", "Es variable";
    echo "<br><br>";

    define("CONSTANTE1", 3);
    echo "La constante es: " . CONSTANTE1, "<br>", "Es constante no va cambiar en todo el programa";

?>