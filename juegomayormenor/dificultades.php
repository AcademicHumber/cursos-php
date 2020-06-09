<html>
    <head>
        <title>Juego Mayor o Menor</title>
        <link rel="stylesheet"  href="estilos.css">
        <?php
        
        include_once 'funciones.php';
        //cargar la funcion solo una vez para que esta no se actualice cuando se vaya a jugar en el otro script
        //crea los numeros aleatorios
        generar_numeros(6);
        //respuesta qie dira el campo que toca responder
        $_SESSION["respuesta_actual"]=0;
        //esto tendra los signos de itnerrogacion para luego sustituirlo por los valores de la respuetsas
        preparar_cuadros(3);
       //$_SESSION["cuadro_de_respuesta"]=["?","?","?"];
        //cada que se reincia el juego se elimina el campo error
        //para que se cumpla la condicion de fallo
        unset($_SESSION["error"]);
        ?>
    </head>
    <body>
        <h2>Dificultad</h2>
<table border="1">
        <tbody>
            <tr>
                <td><?php echo random_int(0, 9) ?></td>
                <td><?php echo random_int(0, 9) ?></td>
                <td><?php echo random_int(0, 9) ?></td>
            </tr>
         
        </tbody>
    </table>
        <br>
        <form action="juego.php">
            <p>Introduce tu nombre</p>
            <input type="text" name="usuario" required="">
            <input type="submit" value="Juguemos">
        </form>
    </body>
</html>


