<?php
session_start();

// Funcion que crea los numeros para el juego

function cargar_numeros($num) {
    $_SESSION["numeros"] = [];
    $pares = [0, 2, 4, 6, 8];
    $impares = [1, 3, 5, 7, 9];
    for ($i = 0; $i < $num; $i++) {
      if ($i < 3){
        $_SESSION["numeros"][$i] = $pares[array_rand($pares)];
      }
      else {
        $_SESSION["numeros"][$i] = $impares[array_rand($impares)];  
      }
           
    }
}

function Comparar() {
// si es 1 es mayor 
// si es 0 menor 
    $_SESSION["comparaciones"] = [];

    if (isset($_GET["respuesta"])) {
        
        for ($i = 0; $i < 3; $i++) {
            
            if ($_SESSION["respuestas"][$i] > $_SESSION["preguntas"][$i]) {
                // El de abajo, es mayor
                $_SESSION["comparaciones"][$i] = 1;
            } else {
                // El de abajo, es menor
                $_SESSION["comparaciones"][$i] = 0;
            }
        }
    }
}

// Recibir respuestas

function respuesta(){
    // Definimos si el metodo get esta seteado,
    // es decir, si se dio click a mayor o menor
    if (isset($_GET["respuesta"])){
        // Asignamos valores a variable que nos ayudaran a que nuestro codigo no sea tan largo
        $actual = $_SESSION["respuesta_actual"];
        $respuesta_real = $_SESSION["comparaciones"][$actual];
        $respuesta_usuario = $_GET["respuesta"];
        
        // Comparamos si lo que respondio el usuario es correcto
        if ($respuesta_usuario == $respuesta_real){
            // Caso correcto: cambiamos el valor del cuadro de "?" a el valor de la respuesta
            $_SESSION["cuadro_de_respuesta"][$actual]=$_SESSION["respuestas"][$actual];
            // Incrementamos la variable respuesta actual para seguir al siguiente cuadro
            $_SESSION["respuesta_actual"]++;
        }
        else {
            // significa que el usuario respondio mal y pierde el juego
            $_SESSION["error"] = 1;
        }
    }
}

function preparar_contenido_de_cuadros($num){
    for ($i = 0; $i < $num; $i++){
        $_SESSION["cuadro_de_respuesta"][$i] = "?";
    }
}

function dividir(){
     $_SESSION["preguntas"] = [$_SESSION["numeros"][0],
                                  $_SESSION["numeros"][1],
                                  $_SESSION["numeros"][2]];        
     $_SESSION["respuestas"] = [$_SESSION["numeros"][3],
                                   $_SESSION["numeros"][4],
                                   $_SESSION["numeros"][5]];
}

function guardar_y_mostrar($resultado){
   $archivo = "../escrito.txt";
   $cursor = fopen($archivo, "a+");
   $jugador = $_SESSION["usuario"];
   
   if($resultado == "gano"){
       fwrite($cursor, "\n $jugador ganó el juego");
   }
   else{
       fwrite($cursor, "\n $jugador perdió el juego");
   }
   mostrar($archivo, $cursor);
}

function mostrar($archivo, $cursor){
    fseek($cursor, 0);
    $contenido = fread($cursor, filesize($archivo));
    
    echo $contenido;    
}

