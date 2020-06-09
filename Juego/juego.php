<html>
    <head>
        <?php
        include_once 'funciones.php';
        
        // Recibir el usuario        
        if (isset($_GET["usuario"])){
            $_SESSION["usuario"] = $_GET["usuario"];
        }        
        
        // Dividir los numeros generados para poder compararlos mejor
        dividir();
        
        // Hacer comparaciones 
        comparar();
        
        // procesar respuestas
        respuesta();
        
        //$_SESSION["respuesta_actual"]++;
        
        echo '<pre>';
        //print_r($_SESSION);
        echo '</pre>';
        ?>
        <title>JUEGO</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body >
        <h1> ADIVINA SI ES MAYOR O MENOR </h1>
        <p>El numero de abajo es mayor o menor que el que tiene encima?</p>
        <?php
        
        echo "este mensaje siempre se lee";
        // Si el jugador llega a respuesta actual igual a 3 significa que gano
        if ($_SESSION["respuesta_actual"] == 3){            
            echo 'Ganaste';
            echo "<pre>";
            guardar_y_mostrar("gano");
            echo "</pre>";
            
            goto gano;
        }        
        
        
        // En caso de que el jugador falle, $_SESSION["error"] se creara y el juego acaba
        if (!isset($_SESSION["error"])){            
        
        ?>
        <table border="1" class="muestra">            
            <tbody>
                <tr>
                    <td><?php echo $_SESSION["numeros"][0] ?></td>                    
                    <td><?php echo $_SESSION["numeros"][1] ?></td>                    
                    <td><?php echo $_SESSION["numeros"][2] ?></td>                    

                </tr>  
                <tr>
                    <td><?php
                     echo $_SESSION["cuadro_de_respuesta"][0];
                        ?>
                    </td>                    
                    <td>
                     <?php
                     echo $_SESSION["cuadro_de_respuesta"][1];
                     ?>
                    </td>
                    <td>
                    <?php
                     echo $_SESSION["cuadro_de_respuesta"][2];                  
                    ?>
                    </td>    
                </tr>
                <tr>

                </tr>
            </tbody>
        </table>
        
        <a href="juego.php?respuesta=1">Mayor</a>
        <br>
        <a href="juego.php?respuesta=0">Menor</a>
        <?php
        
        }        
        else{            
            echo "Fallaste";
            echo "<pre>";
            guardar_y_mostrar("perdio");
            echo "</pre>";
        }
        
        gano:
            
        ?>
        <hr>  
        <a href="Dificultades.php">volver atras</a>  
    </body>
</html>




