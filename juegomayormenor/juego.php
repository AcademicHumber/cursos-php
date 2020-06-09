<html>
    <head>
        <title>Juego Mayor Menor</title>
        <?php
        include_once 'funciones.php';

        $_SESSION["preguntas"] = [$_SESSION["numeros"][0],
                                  $_SESSION["numeros"][1],
                                  $_SESSION["numeros"][2]];
        $_SESSION["respuestas"] = [$_SESSION["numeros"][3],
                                  $_SESSION["numeros"][4],
                                  $_SESSION["numeros"][5]];

        echo "<pre>";
        print_r($_SESSION["respuestas"]);
        echo "</pre>";
        //el numero de abajo es emnor o mayor que el de arriba
        comparar();
        respuesta();        
        usuarios();
        
        ?>
    </head>
    <body>

        <h2>Intenta adivinar el número mayor o menor</h2>
        <?php
        if($_SESSION["respuesta_actual"]==3) {
            echo "Ganaste ".$_SESSION["usuarios"];
            escribir();
            goto el_jugador_gano;
        }
        //si no esta creado llenar con la tabla sino fallaste
        if (!isset($_SESSION["error"])) {
            ?>
            <table border="1">
                <tbody>
                    <tr>
                        <td><?php echo $_SESSION["numeros"][0] ?></td>
                        <td><?php echo $_SESSION["numeros"][1] ?></td>
                        <td><?php echo $_SESSION["numeros"][2] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION["cuadro_de_respuesta"][0]; ?> </td>
                        <td><?php echo $_SESSION["cuadro_de_respuesta"][1]; ?></td>
                        <td><?php echo $_SESSION["cuadro_de_respuesta"][2]; ?></td>
                    </tr>
                </tbody>
            </table>
         <a href="juego.php?respuesta=1" >Mayor</a>
         <a href="juego.php?respuesta=0" >Menor</a><hr>
            <?php
        } 
        else{
            echo "Perdiste ".$_SESSION["usuarios"];
            escribir();
        }
        el_jugador_gano:
        ?>
        <a href="dificultades.php" >Volver a Jugar</a>
    </body>
</html>



