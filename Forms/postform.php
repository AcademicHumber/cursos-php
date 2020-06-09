
<pre>
    <?php
   //VARIABLES GLOBALES
        //Son las que llevan informacion de un script a otro, o cuando uno mismo se este recargando
        //
        echo "<pre>";
        print_r($_POST); //llevar info mediante una variable oculta//no en la url
        //es volatil, o sea, se actualiza la pagina y se borra todo
        echo "<hr>";
        print_r($_GET);//lleva info mediante la uri,y se puede enviar tambien desde la uri
        echo "<hr>";
        //Si se quiere recibir archivos el formulario debe tener multipart_form_enctype
       //es volatil, o sea, se actualiza la pagina y se borra todo
        print_r($_FILES);
        echo "<hr>";    //Si o si se tiene que enviar por metodo POST
        //print_r($_SERVER);//toda la info del servidor
        echo "<hr>";
        print_r($_COOKIES);
        echo "<hr>";
        print_r($_SESSION);//maneja la sesion, hay que inicializarla para que funcione bien. Podes enviar toda la informacion que queras. Session no se guarda en el servidor, session no se borra, se actualiza la pagina y no se borra, en cambio post si se borra.
        //la manera para borrarlos es con un unset
        //es una variable que permite compartir informacion entre todos los scripts del servidor
        //es necesario cargarla en todos los scrips, o en un scripr
        //no es volatil, o sea, recarges la pagina, los datos se quedan guardados y no se mueven
        echo "</pre>";
        
        
        //Ejemplo de GET de ID de usuario
        foreach (range(0, 10)as $id){
            echo "<a href='postform.com?id=($id)'>Eliminar</a> Usuario $id<br>";
        }
  
    ?>
</pre>

