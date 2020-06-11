<html>
    <head>
        <title>Crear Articulo</title>
    </head>
    <body>
        <h1>Crear artículo</h1>
        <div>
            <?php
            //Documentacion:
            // https://codeigniter.com/user_guide/helpers/form_helper.html?highlight=form#loading-this-helper
            //
            // Codigo de apertura de fomulario, equivalente a
            // <form action="Content/mostrar" method="POST" enctype="multipart/form-data">            
            echo form_open_multipart("Content/mostrar");
            ?>
            <table>              
                <tbody>                                  
                    <tr>
                        <td><label>Titulo de la pàgina</label></td>
                        <td>                            
                            <?php
                            // input de texto, sus atributos son (nombre, valor, [atributos del input])
                            echo form_input("cont[titulo]", "", ["required" => 1]);
                            
                            // equivalente a <input type="text" name="cont[titulo]" value="" required="1">
                            ?> 
                        </td>                       
                    </tr>
                    <tr>
                        <td><label>Encabezado de la pàgina</label></td>
                        <td>
                            <?php
                            echo form_input("cont[encabezado]", "", ["required" => 1]);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Cuerpo de la pàgina</label></td>
                        <td>
                           <?php
                           echo form_textarea("cont[cuerpo]", "", ["required" => 1]);
                           ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                           <?php
                           echo form_submit("", "Crear Artículo");
                           ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
           // Cerrar formulario
            echo form_close();
            ?>
            
        </div>    


    </body>
</html>

