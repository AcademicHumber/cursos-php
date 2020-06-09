<?php

//Las funciones son para hacer tareas repetitivas

//funciones_hacen algo y retornan valores
//matodos_solo hacen algo pero no retornan

//es un metodo
function funcion(){
    echo "Hola, Jeniffer";
    echo "<hr>";
}
//el param es el parametro de la funcion
//con el recibimos un valor, en si, es una variable

//es un metodo
function funcionconparametros($param){
    echo "Hola $param, soy un argumento";
      echo "<hr>";
}

//cuando llamas la funcion, ya no son parametros
//sino que se llaman argumentos, y es el VALOR que se le asignara al parametrod
funcion();
funcionconparametros("Danita");
funcionconparametros("Evita");

//FUNCION POR ASIGNACION
//es una funcion porque retorna algo
function sacar_iva($venta){
    $iva = $venta*0.13;
    return $iva;
    echo "<hr>";
}
$ventas_del_dia=[5000, 400, 300, 200, 50];

foreach ($ventas_del_dia as $venta_Unica){
    $impuesto = sacar_iva($venta_Unica);
    echo "El impuesto es: $impuesto <br>";

}
    echo "<hr>";
//$impuesto = sacar_iva(50);
//echo "El impuesto es: $impuesto";


//FUNCION POR REFERENCIA, utililza el & y el parametro
//& sirve para mandar la variable y el valor que se le asigne
function duplicar(&$valor){
    $valor=$valor*2;//aqui le cambias a la referencia su valor
    return $valor;
}  
$num=8;
echo $num;
duplicar($num);
echo "<br>";
echo $num;
duplicar($num);
echo "<br>";
echo $num;
duplicar($num);
echo "<br>";
echo $num;
duplicar($num);
echo "<br>";
echo "<hr>";

//LLamar funciones dentro de funciones
function suma_de_duplicados($num1,$num2){
    $suma1= duplicar($num1);//se llama asi a una funcion
    $suma2= duplicar($num2);//se llama asi a una funcion
    //$suma2= call_user_func('duplicar',$num2);//otra manera
    $result=$suma1+$suma2;
    return $result;
}
$num_2=13;
echo suma_de_duplicados($num,$num_2);
echo "<hr>";


//Recursividad_cuando se llama a si misma
//siempre hay que poner una condicion para romper la recursividad
//  if($num_1<=0), una vez llegó a eso, se termima la recursividad

//Funciones recursivas

function potencias_hasta_0($num_1){
    if($num_1<=0){
        echo "Funcion lista";
        echo "<br>";
    }
    else{
        echo "El cuadrado de $num_1, es:".$num_1*$num_1;
        echo "<br>";
        $num_1=$num_1-1;
        potencias_hasta_0($num_1); 
        echo "Cierre del ciclo de $num_1";
        echo "<br>";
      
        }
}

potencias_hasta_0(10);