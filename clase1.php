<?php
//COMENTARIOS // o /* */
//Php es flexible, no es necesario poner int varibale=6;
//VARIABLES

//Numéricas
$variable=10;
$flotantes=5.1;

//Cadenas
$cadenas="Jeniffer Balcazar";

//arreglos o listas
$Arreglo=[9, "Jeniffer"];

//valores nulos
$nula= null;

//booleanos
$bool1=true;
$bool2=false;
$bool3=true;

//variables diccionarios u objetos
$diccionario=[
    "Nombre"=>"Jeniffer",//el nombre es la clave
    "Edad"=>"20",
    100=>"Numeros",
    "arreglo_interno"=>[9,"Jeniffer",true]
];

//IMPRIMIR VALORES

//var_dump($diccionario);//para depurar codigo, saber que se esta enviado, indica el tipo de datos y lo que se envia

//echo imprimite cadenas
//print_r imprime arreglos

//en arreglos se mueve por la posicion del valor
//en diccionarios se mueve por la clave del valor 
//los hr hacen como una linea en la pagina
//los pre acomodan lo que se imprime
echo "<pre>";
echo $variable;
echo "<hr>";
echo $flotantes;
echo "<hr>";
print_r ($Arreglo[1]);
echo "<hr>";
echo $bool1;
echo "<hr>";
print_r($diccionario["arreglo_interno"][1]);
echo "</pre>";


//Operaciones aritmeticas
$num1=30;
$num2=20;

$suma=$num1+$num2;
$resta=$num1-$num2;
$multi=$num1*$num2;
$division=$num1/$num2;
$modulo=$num1 % $num2; //el residuo 

//Operadores comparacion
$igual = $bool1==$bool2; //falase
$identico= $bool1 === $bool2; //false
$diferente= $bool1 != $bool2; //true
$diferente2= $bool1 <> $bool2; //true
$noidentico= $bool1 !== $bool2; //false
//$mayorque= $bool1 > $bool2;
//$menorque= $bool1 < $bool2;
//$mayorigual= $bool1 >= $bool2;
//$menorigual= $bool1 < $bool2;


//el for se usa mas para recorrer arreglos, no diccionarios
//el foreach= la variable creada luego del as guardara el dato recorrido
foreach ($diccionario as $clave=> $dato){
    print_r($clave);
    echo "->";
    print_r($dato);
    echo "<br>";
  
}  
  echo "<hr>";
  
foreach($Arreglo as $data){
    print_r($data);
    echo "<br>";
}

//Variable session
session_start();
$_SESSION["user"]="jeniffer";
$_SESSION["password"]="123456";
