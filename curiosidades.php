<?php
//Las bipolaridades de PHP
//Con dos puntos
$php="es depresivo";
$php2="hola";

if($php=="es bipolar"):
    echo 'No se usa esta sintáxis';
    echo "<hr>";
elseif($php=="es depresivo"):
    echo 'ÑO';
    echo "<hr>";
else:
    echo 'No se puede usar llaves';  
    echo "<hr>";
endif;

//con llaves
if($php2="hola"){
    echo "Se puede usar en un mismo script";
    echo "<hr>";
}

//GOTO: se salta a una zona específica del programa

echo "Hola, Jeniffer <hr>";
goto mi_cadenita;
echo "Esto no se muestra, porque goto se lo salta";
echo "será que esto también?";
echo "sí, goto lo saltó";
mi_cadenita:
 echo "Esto si se muestra <hr>";
 echo "esto igual <hr>";
 
//Archivos
 
 $archivo="archivo.txt";//nombre del archivo que quieres crear
 $archivo2="archivo2.docx";
 $recurso= fopen($archivo, "a+");//fopen_no solo abre el archivo para leerlo, sino escribe y manipula sus datos //a+:lec+escr, si el archivo no existe intenta crear
 $new_content="Nuevo contenido";
 fwrite($recurso, $new_content);//fwrite_escribir en un archivo, necesita abrir el archivo$recurso y luego el contenido que esta en la variable $new content
 $bytes= filesize($archivo);
 $contenido= fread($recurso, $bytes);//fread_leer un archivo, necesita abrir el archivo$recurso y luego el filesize($bytes) 
 fclose($recurso);
