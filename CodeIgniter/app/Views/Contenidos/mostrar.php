<html>
    <head>
        <title>Lista de Articulos</title>
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    </head>
    <body class="contenedor2">
        <h1>Lista de Articulos</h1>

        <?php
        echo anchor("contenido/crear", "Crea un nuevo artículo",["class" => "bot"]);
        echo "<hr>";
        foreach ($datos as $articulos) {
            ?>  
            <p><?php echo "<strong>Publicado el:</strong> {$articulos["created_at"]}"; ?> </p> 
            <h2><?php echo $articulos["titulo"]; ?> </h2> 
            <h4><?php echo $articulos["encabezado"]; ?> </h4> 
            <p><?php echo $articulos["cuerpo"]; ?> </p> 
            <hr>
            <?php
        }
        ?>
    </body>
</html>

