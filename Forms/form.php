<html>
    <head>
         <?php
    //include_once 'clase1.php';
    ?>
        <title>Forms</title>
    </head>
    <body>
        <form action="postform.php" method="POST" enctype="multipart/form-data">
            Nombre <input type="text" name="nombre"><br>
            Clave <input type="text" name="nombre"><br>
            <input type="radio" name="sexo" value="hombre">Hombre<br> 
            <input type="radio" name="sexo" value="mujer">Mujer<br>
            <input type="checkbox" name="estudiante" value="Estudiante">Estudiante<br>
            <input type="checkbox" name="casado" value="Casado(a)">Casado<br>
            Nacionalidad<select name="nacionalidad">
                <option> Boliviano </option>
                <option> Brasilero </option>
                <option> Cubano </option>
            </select><br>
            Descripción <textarea name="descripcion"></textarea><br>
            Archivo <input type="file" name="archivo" accept="image/png, image/jpg"><br>
            Oculto <input type="hidden" name="oculto" value="noseveenelform"> <br>
            <input type="submit" value="enviar datos"><br>

        </form>
        <a href="form.php?enlace=2" >Enviar</a>

        <?php
        echo "holitas";
        ?>

    </body>
</html>


