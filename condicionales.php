<?php
//include llama a un scrip que esta en otro rchivo

include_once 'clase1.php';

$num3= $num1;

if($num1==$num3 && $num1 != $num2 ){
    echo "Son verdaderas";
    echo "<hr>";
}

if(!$bool2){
    echo "La condiciones es falsa";
    echo "<hr>";
}

if($cadenas!="Carlos" || $bool1 ==true){
    echo "Imprime si una de las condiciones es verdadera";
    echo "<hr>";
}
//Definir si un valor fue declarado o no
if(isset($nula)){
    echo "Esta declariada esta variable";
}

//Date devuelve una cadena con los datos en base al parametro
//Switch reemplaza el uso del if
$num_de_dia= date("N");


switch ($num_de_dia){
case 1:
    echo "Lunes";
    break;
case 2:
    echo "Martes";
    break;
case 3:
    echo "Miércoles";
    break;
case 4:
    echo "Jueves";
    break;
case 5:
    echo "Viernes";
    break;
case 6:
    echo "Sábado";
    break;
case 7:
    echo "Domingo";
    break;
default :

    echo "No se sabe el día";
    break;
}

/*while
 * 
 */

