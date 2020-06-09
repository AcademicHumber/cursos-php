<?php

session_start();

function generar_numeros($num) {
    $_SESSION["numeros"] = [];
    $pares = [0, 2, 4, 6, 8];
    $impares = [1, 3, 5, 7, 9];
    for ($i = 0; $i < $num; $i++) {
        if ($i < 3) {
            $_SESSION["numeros"][$i] = $pares [array_rand($pares)];
        } else {
            $_SESSION["numeros"][$i] = $impares [array_rand($impares)];
        }
    }
}

function comparar() {
    $_SESSION["comparando"] = [];

    if (isset($_GET["respuesta"])) {

        for ($j = 0; $j < 3; $j++) {
            if ($_SESSION["respuestas"][$j] > $_SESSION["preguntas"][$j]) {
                $_SESSION["comparando"][$j] = 1;
            } else {
                $_SESSION["comparando"][$j] = 0;
            }
        }
    }
}

function respuesta() {
    //si dio clic a mayor o menor
    if (isset($_GET["respuesta"])) {
        //se asigna 
        $actual = $_SESSION["respuesta_actual"];
        $respuesta_Real = $_SESSION["comparando"][$actual];
        $respuesta_usuario = $_GET["respuesta"];

        //compara si respondio correcto
        if ($respuesta_usuario == $respuesta_Real) {
            //caso correcto:se cambia el valor de ? por la respuesta real
            $_SESSION["cuadro_de_respuesta"][$actual] = $_SESSION["respuestas"][$actual];
            //se incrementa la variable respuesta actual
            $_SESSION["respuesta_actual"]++;
        } else {
            $_SESSION["error"] = 1;
        }
    }
}

function preparar_cuadros($num) {
    for ($i = 0; $i < $num; $i++) {
        $_SESSION["cuadro_de_respuesta"][$i] = "?";
    }
}

function usuarios() {
    if (isset($_GET["usuario"])) {
        $_SESSION["usuarios"] = [];
        //guardando el nombre del usuario
        $_SESSION["usuarios"] = $_GET["usuario"];
    }
}
function escribir(){
     $archivo="Jugadores.txt";
     $cursor= fopen($archivo, "a+");
     $jugadores=$_SESSION["usuarios"];
     if($_SESSION["respuesta_actual"]==3){
          fwrite($cursor, "\n Ganaste $jugadores");
     }
     else{
          fwrite($cursor, "\n Perdiste $jugadores");
     }
     leer($cursor, $archivo);
}
function leer($cursor,$archivo){
        fseek($cursor, 0);
        //obtenemos nueva longitud
        $cantidad_a_leer= filesize($archivo);
        $contenido= fread($cursor, $cantidad_a_leer);
        
        fclose($cursor);
}