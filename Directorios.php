<?php
//Directorios

//fopen_nos permite abrir archivos y manipularlos, y se quiere esbribir algo, lo pone el puntero o cursor en 0, o sea, al inicio del archivo
//es importante cerrar el archvio con fclose luego de trabjar cone l

//Modo de apertura:
//lectura r
//lec y escrt r+
//escritura w(si el archivo no existe lo crea, y si existe lo sobreescribe)
//lec y esc w+(si el archivo no existe lo crea, y si existe lo sobreescribe)
//añadir escritura a(pone el cursor al final)
//añadir escritura/leer a+(pone el cursor al final)

$archivo="escribiendo.txt";
$cursor= fopen($archivo, "a+");//se inicia al inicio
//fwrite(cursor, contenido)
//$contenido= "I am writing again from my code";
//fwrite($cursor, $contenido);

//fread(cursor, cantidad a leer)
//$cantidad_a_leer= filesize($archivo);


//FORMAS DE MOVER EL CURSOR PARA EMPEZAR DESDE UN PUNTO ESPECIFICO
//fseak, tiene que ir antes del read
//fseek($cursor, 5);
//$contenido= fread($cursor, $cantidad_a_leer);

//si el cursoor esta en w+, con fwrite se puede escribir o al final o donde uno le ponga el cursor
//fwrite($cursor, "$hola");

//Modo añadir (a)

if(isset($_GET["usuario"])){
    $contenido=$_GET["usuario"];
    //se escribe el nombre de usuario
    fwrite($cursor, $contenido);
    
    //se coloca el cursor al principio
    fseek($cursor, 0);
}

//obtenemos nueva longitud
$cantidad_a_leer= filesize($archivo);
$contenido= fread($cursor, $cantidad_a_leer);

echo $contenido;

fclose($cursor);

?>
<html>
    <head>
        <title>Directorios</title>
    </head>
    <body>
        <form action="juego.php">
            <p>Introduce tu nombre</p>
            <input type="text" name="usuario" required="">
            <input type="submit" value="Agregar">
        </form>

    </body>
</html>
