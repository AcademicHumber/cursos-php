<?php

function funcion(){
    echo "Hola mundo";
}

// Metodo (no retorna valor)

function funcion_con_parametro($parametro1){
    echo "soy $parametro1, y soy un argumento";      
}

/*funcion();
echo "<br>";
funcion_con_parametro("carlos");
echo "<br>";
funcion_con_parametro("Dilan");
echo "<br>";*/

// Funcion (Retorna un valor)

// Funcion por asignacion 

function sacar_iva($venta){
    $venta = $venta * 0.13;       
}


$ventas_del_dia = [900, 482, 693, 210, 69];

foreach ($ventas_del_dia as $venta_unica){
    sacar_iva($venta_unica);
    //echo "El impuesto de la venta es $impuesto <br>";
}

print_r($ventas_del_dia);

echo "<br>";
// Mandar variables por referencia

// Funcion por referencia (&$parametro)

function duplicar($valor){
    $valor = $valor * 2;
    return $valor;
}

/*$num = 8;
echo $num;
echo "<br>";
duplicar($num);
echo "<br>";
echo $num;
echo "<br>";
duplicar($num);
echo "<br>";
echo $num;
echo "<br>";
duplicar($num);
echo "<br>";
echo $num;
echo "<br>";
duplicar($num);
echo "<br>";
echo $num;*/

function suma_de_duplicados($numero1, $numero2){
    $sumando1 = duplicar($numero1);
    $sumando2 = call_user_func('duplicar',$numero2);
    $resultado = $sumando1 + $sumando2;
    return $resultado;
}

$num2 = 15;

echo "<br>";
//echo suma_de_duplicados($num, $num2);

// Recursividad - Funciones recursivas

function potencias_hasta_cero($num){
    if ($num <= 0){
        echo "funcion finalizada <br>";
    }
    else{
        echo "El cuadrado de $num es: ". $num * $num. "<br>";
        $num = $num-1;        
        potencias_hasta_cero($num); 
        echo "cerrado el ciclo de $num <br>";
    }
}

potencias_hasta_cero(6);

