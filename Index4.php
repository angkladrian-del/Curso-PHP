<?php

    echo "Bucles<br><br>";

    for ($i=0; $i < 10; $i++) { 
        echo "El numero es: " . $i, "<br>";
    }

    echo "<br><br>";

    $array = array("rojo", "verde", "azul");
    foreach ($array as $color) {
        echo "El color es: " . $color, "<br>";
    }
    echo "<br><br>";
    
    echo "Los array  son estructuras de datos que pueden almacenar múltiples valores en una sola variable, se pueden acceder a ellos mediante índices o claves, dependiendo del tipo de array que se utilice.";
    echo "<br><br>";
    echo "foreach es una estructura de control que se utiliza para iterar sobre los elementos de un array o de un objeto, permitiendo ejecutar un bloque de código para cada elemento del array u objeto.";
    echo "<br><br>";

    $Name = "Juan";
    $array2 = array(1,2,3, "Casa", $Name);
    #El array es como una lista de elementos donde el primer elemento ocupa la posicion 0.
    $longitud = count($array2);
    #Long es una funcion que se utiliza para contar el numero de elementos que hay en un array, en este caso el array2 tiene 5 elementos.
    #El bucle for que se colocara hara un conteneo inicializanco (i) desde la posicion 0 hasta el ultimo elemento del array.
    for ($i=0; $i < $longitud; $i++) { 
        echo "La posicion " . $i . " del array es: " . $array2[$i], "<br>"; 
        
    }
    ?>