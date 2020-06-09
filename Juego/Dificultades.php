<html>
    <head>
        <title>Juego Mayor-Menor</title>        
        <link rel="stylesheet" href="styles.css"/>
        <?php
        include_once 'funciones.php';
        
        // Cargar funcion en un script que solo se ejecuta una vez,
        // para que no se actulice constantemente
        
        cargar_numeros(6);
        
        // Respuesta actual nos dira cual campo toca responder
        
        $_SESSION["respuesta_actual"] = 0;
        
        // Este arreglo tendra los signos de interrogacion hasta que sea
        // sustituido por los valores de las respuestas
        
        preparar_contenido_de_cuadros(3);        
        
        // Cada vez que se reinicia el juego se elimina el campo error
        // para que no se cumpla la condicion de fallo
        
        unset($_SESSION["error"]);

        ?>
    </head>
    
    <h1>JUEGO</h1>
    
    <body>
        <table border="1" class="muestra">            
            <tbody>
                <tr>
                    <td><?php echo random_int(0, 9) ?></td>                    
                    <td><?php echo random_int(0, 9) ?></td>                    
                    <td><?php echo random_int(0, 9) ?></td>                                                       
                </tr>                        
            </tbody>
        </table>
        
         <form action="juego.php">
            <p>Introduce tu nombre</p>
            <input type="text" name="usuario" required="1">
            <input type="submit" value="Jugar">
        </form>
      


    </body>
</html>


