<?php
//include siirve para llamar un script que esta en otro archivo

include_once 'basicos.php';

$numero3 = $numero1;

if ($numero1 == $numero3 && $numero1 != $numero2){
    echo "Ambas condiciones son verdaderas";
    echo "<hr>";
}

if (!($cadena=="rio")){
    echo "La condicion es falsa";
    echo "<hr>";
}

if ($cadena!="carlos" || $bool1 == $bool3){
    echo "una de las 2 condiciones o ambas son verdaderas";
    echo "<hr>";
}

// Uso del Switch case

// Funcion date, devuelve una cadena con los datos que uno le pida mediante parametros
$numero_de_dia = 1;

/* evaluar una
única expresión o variable, y tomar diversas decisiones
en base a los diferentes posibles valores de la misma*/

switch ($numero_de_dia){
    case 1:
       echo "Lunes";
       echo "<p> Hola </p>";
       $numero_de_dia=2;               
    break;
    case 2:
       echo "Martes";
        $numero_de_dia=3; 
    break;
    case 3:
       echo "Miercoles";
    break;
    case 4:
       echo "Jueves";
    break;
    case 5:
       echo "Viernes";
    break;
    case 6:
       echo "Sabado";
    break;
    case 7:
       echo "Domingo";
    break;
    default:
       echo "No se que dia es";
    break;        
}

for ($i = 0 ; $i < count($arreglo) ; $i++) {
    print_r($arreglo[$i]);
}

/* While
 * mientras (condicion){
 * hacer algo
 * } 
 */





