<html>
    <head>
        <?php
        include_once("basicos.php");
        
        $usuario = "Luis";
        ?>
        <title>Forms</title>
    </head>
    <body>
        <!-- GET o POST ; En caso que se llame a post sin accion, se vuelve de ambos tipos -->
        
        <!-- Si queremos recibir archivos el formulario debe tener enctype = multipart/form-data -->

        <form action="POST_recep.php" method="POST" enctype="multipart/form-data">

            <!-- en este input va texto de una sola linea -->

            Nombre<input type="text" name="nombre"><br><hr>
            Clave<input type="text" name="clave"><br><hr>

            <!-- en este input van opciones de eleccion unica -->

            <input type="radio" name="sexo" value="hombre">Hombre <br>
            <input type="radio" name="sexo" value="mujer">Mujer <br><hr>

            <!-- en este input van opciones de eleccion multiple -->

            <input type="checkbox" name="amabale" value="amable"> Amable<br>
            <input type="checkbox" name="solidario" value="solidario"> Solidario<br>
            <input type="checkbox" name="honrado" value="honrado"> Honrado<br><hr>

            <!-- en este input van opciones de eleccion unica en un slider -->

            Nacionalidad <select name="nacionalidad">
                <option>Boliviano</option>
                <option>Argentino</option>
                <option>Brasilero</option>
            </select><hr><hr>

            <!-- en este input va texto de varias lineas -->
            Descripcion<textarea name="descripcion">
            </textarea><br><hr>

            <!-- en este input van archivos, estos datos de archivo se mandan por POST -->
            Archivo <input type="file" name="archivo" accept="image/png, image/jpeg"><br><hr>

            <!-- en este input van datos que no se muestran en la vista principal -->
             <input type="hidden" name="usuario" value="<?php echo $usuario ?>"><br><hr>
             <input type="text" name="contraseña" value="<?php echo $_SESSION["password"] ?>"><br><hr>

            <!-- Este input manda la informacion  -->
            <input type="submit" value="Enviar Datos"><hr>
            <br>
        </form>

        <pre>
            <?php
            
            
            // Variables Superglobales
            // Son variables capaces de mantenerse entre archivos o scripts
            
            
            //print_r($_COOKIE);
            echo "POST <br>";
            print_r($_POST);
            echo "GET <br>";
            print_r($_GET);
            echo "Files <br>";
            print_r($_FILES);
            
            // Muestra toda la informacion del servidor
            
            /*echo "Server <br>";
            print_r($_SERVER);*/
            
            // Variable que maneja tu sesion, es importante inicializarla
            // Una variable que permite mover informacion entre todos los scripts del servidor
            // es necesario inicializarla en cada script o cargar un script que la tenga inicializada
            // Los datos son tan globales que para eliminarlos es necesario usar la funcion unset($_SESSION["dato"])
           
            
            echo "Session <br>";
            print_r($_SESSION);
            echo " <br>";
            ?>
        </pre>
        Ejemplo de uso del GET <br>
        <?php
            $id_eliminado = $_GET["id"];
            $consulta = "Delete FROM usuarios where id=$id_eliminado";
            echo "$consulta <br>";
            foreach (range(0, 10) as $id){
              echo "<a href='formularios.php?id={$id}'>Eliminar</a> Usuario {$id} <br>";  
            }        
        ?>
    </body>

</html>

