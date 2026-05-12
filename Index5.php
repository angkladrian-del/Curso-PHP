<?php

echo "Funciones<br><br>";
echo "Una función es un bloque de código que se puede reutilizar para realizar una tarea específica, se pueden definir con o sin parámetros y pueden devolver un valor o no devolver nada.<br><br>";
echo "<br><br>";

$a = 5;
$b = 10;

function suma($a, $b) {
    return $a + $b;
}

$resultado = suma($a, $b);
echo "La suma de " . $a . " y " . $b . " es: " . $resultado, "<br>", "Es una funcion que devuelve un valor";
echo "<br><br>";

echo "La funcion es un bloque de codigo que se puede reutilizar para realizar una tarea especifica, se pueden definir con o sin parametros y pueden devolver un valor o no devolver nada. En este caso la funcion pide a y b, realiza una operacion y lo regresa cuando se llama la funcion se le pasan los valores de a y b y se obtiene el resultado de la suma de ambos numeros.";
echo "<br><br>";

echo "En casos matemeticos una funcion con un blucle realizara la operacion hasta que termine el ciclo";

function buclefor() {
    for ($i=0; $i < 10; $i++) { 
        echo "El numero es: " . $i, "<br>";
    }
}
buclefor();
echo "<br><br>";
