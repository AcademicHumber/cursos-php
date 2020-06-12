<html>
    <head>
        <title>Articulos</title>
         <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    </head>
    <body class="contenedor">
        <div class="form">
        <h1>Crear Articulos</h1>
                  
            <?php
            
            //doc: https://codeigniter.com/user_guide/helpers/form_helper.html?highlight=form#loading-this-helper
            //apertura de formulario que es equivalente a
            //<form action="" method="POST" enctype="multipart/form-data"
            echo form_open_multipart("contenido/crear");

            //comprobamos errores o exito en la consulta
            echo "<h3>$exito</h3>";
  
            ?>
            <table>
                <tbody>

                    <tr>
                        <td><label>Título de la página</label></td>
                        <td>
                            <?php
                            //Atributos de texto: nombre,valor,[atributos del input]
                            //es equivalente a <input type="text" name"cont[titulo] value="" required="1"
                            echo form_input("cont[titulo]", "", ["required" => 1, "class"=>"round"]);
                            ?> 
                        </td> 

                    </tr>
                    <tr>
                        <td><label>Encabezado de la página</label></td>
                        <td>
                            <?php
                            echo form_input("cont[encabezado]", "", ["required" => 1, "class"=>"round"]);
                            ?> 
                        </td>
                    </tr>
                    <tr>
                        <td><label>Cuerpo de la página</label></td>
                        <td>
                            <?php
                            echo form_textarea("cont[cuerpo]", "", ["required" => 1, "class"=>"round"]);
                            ?> 
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php
                            //submit: nombre ninguno, valor del boton
                            echo "<br>";
                            echo form_submit("", "Crear articulo", ["class" => "bot2"]);
                            echo anchor("contenido/mostrar", "Ir a la lista de Artículos", ["class" => "bot2"]);
                            ?> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
            //cerrar formulario
            echo form_close();
      

            //Generar un enlace hacia la lista con anchor
            //requiere url,lo que dira el enlace,[]atributos
            //<a href="contenido/mostrar" class="boton" >Ir a la lista</a>
          //echo anchor("contenido/mostrar", "Ir a la lista de Artículos", ["class" => "bot2"]);
            ?>
        </div>

    </body>
</html>
