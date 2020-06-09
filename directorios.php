<?php

// La funcion fopen() nos permite abrir archivos y manipularlos mediante un cursor
// Es importante cerrar el archivo luego de trabajar en el fclose()

// Modos de apertura

// Lectura r

// Lectura y escritura r+

// Escritura w (Si el archivo no exite lo crea y si existe, lo sobreescribe) reemplaza todo el contenido dentro del archivo

// Lectura y escritura w+ (Si el archivo no exite lo crea y si existe, lo sobreescribe)

// Añadir escritura a (coloca el curso al final)

// Añadir escritura y leer a+ (coloca el curso al final) UTIL



// fwrite($cursor, $contenido) nos permite escribir en el archivo

//fwrite($cursor, $contenido);

// fread($cursor, $cantidad_a_leer) nos permite leer el archivo




        // mover el cursor para empezar desde un punto especifico con fseek($cursor, $punto_para_empezar)
        //fseek($cursor, 20);
        
//$contenido = fread($cursor, 30);

// con lectura y escritura, el comando fwrite empezara a reemplazar las letras luego de la lectura

//fwrite($cursor, "hola buenas tardes");


$nombre_archivo = "escrito.txt";
$cursor = fopen($nombre_archivo, "a+");
// Modo añadir (a)
if (isset($_GET["usuario"])){
   $contenido = $_GET["usuario"];
   
   // escribimos el nuevo usuario
    fwrite($cursor, "\n $contenido");
    
   // recolocar el cursor para leer
   fseek($cursor, 0);
    
}

// obtenemos la nueva longitud

$cantidad_a_leer = filesize($nombre_archivo);

$contenido = fread($cursor, $cantidad_a_leer);

echo "<pre>";
echo $contenido;
echo "</pre>";

fclose($cursor);

?>
<html>
    <head>
        <title>ranking</title>
    </head>
    <body>
        <form action="juego/juego.php">
            <p>Introduce tu nombre</p>
            <input type="text" name="usuario" required="1">
            <input type="submit" value="Agregar">
        </form>

    </body>
</html>


