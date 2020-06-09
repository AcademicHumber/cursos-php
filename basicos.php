<?php
// PHP es un lenguaje Flexible



//Entero

$numero1 = 9; 
$numero2 = 3;

// Operaciones aritmericas

$suma = $numero1 + $numero2; // 12
$resta = $numero1 - $numero2; // 6
$multiplicacion = $numero1 * $numero2; // 27
$division = $numero1 / $numero2; // 3
$modulo = $numero1 % $numero2; // 0 es el resto del 9/3

//flotantes

$decimales = 9.599; 

// Cadena

$nombre_personaje = "Ignacio Warnes";
$cadena = "Hola, Mundo!"; 

//Arreglos o listas

$arreglo = [9, "Hola, Mundo!"]; 

// Boleanos

$bool1 = True;
$bool2 = False; 
$bool3 = True;

// valores nulos

$nula = null;

// Definir si un valor fue declarado o no

if (isset($nula)){
    //echo "esta declarada la variable";
}

// Operadores de comparacion

$igual = $bool1 == $bool2; // false
$identico = $bool1 === $bool2; // false
$diferente = $bool1 != $bool2; // true
$diferente2 = $bool1 <> $bool2; // true
$NoIdentico = $bool1 !== $bool2; // false
$mayorque= $bool1 > $bool2; 
$menorque= $bool1 < $bool2;
$menorOigual = $bool1 <= $bool2;
$mayorOigual = $bool1 >= $bool2;

//Diccionario

$diccionario = [
    "Nombre" => "Dariana",
    "Edad" => 20, // la clave del numero 20 es "Edad"
    "Telefono" => "no disponible", 
    "5" => "ocho",
    "ArregloInterno" => [9, "hola mundo", true, false],
    "nacionalidad" => "española"
];

/*
for ($i = 0 ; $i < count($arreglo) ; $i++) {
    print_r($arreglo[$i]);
    echo "<br>";
}
 // for mejorado, la variable creada luego de "as" asume el valor de la posicion que toca en cada vuelta
foreach ($diccionario as $clave=>$dato){
    print_r($clave);
    echo " -> ";
    print_r($dato);
    echo "<br>";
}

foreach ($arreglo as $variable){
    print_r($variable);
    echo "<br>";
}
    
/*
// Imprimir valores
echo "<pre>";
echo $cadena[6];
echo "<hr>";

// En arreglo nos movemos por la posicion del valor
print_r($arreglo[1]);
echo "<hr>";
// Funcion para depurar codigo
var_dump($diccionario);
echo "<hr>";
// En diccionario nos movemos por la clave del valor
print_r($diccionario["ArregloInterno"][1]);
echo "</pre>";
*/

// Llamando a $_SESSION

session_start();







