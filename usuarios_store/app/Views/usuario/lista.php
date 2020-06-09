<?php 
echo view("common/header", ["title"=>"Lista de usuarios"]); 
?>
<h1>Lista de usuarios</h1>
<?php 
echo '<p>'.anchor("usuario/nuevo", "Registrar nuevo usuario").'</p>';

if (isset($_GET["deleted"])) {
    echo "<p>";
    if (empty($_GET["deleted"])) {
        echo "No se pudo borrar el usuario.";
    } else {
        echo "Usuario borrado.";
    }
    echo "</p>";
}

if (!empty($lista)) {
?>
<table class="data">
    <tr>
         <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Extranjero</th>
        <th>Becado</th>
        <th>Carrera</th>
        <th>Fecha de Registro</th>
        <th>Foto</th>
        <th>Titulo</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    <?php
    foreach($lista as $row){
    ?>
    <tr>
        <td><?php echo esc($row["id"]); ?></td>
        <td><?php echo esc($row["nombre"]); ?></td>
        <td><?php echo esc($row["apellido"]); ?></td>
        <td><?php echo esc($row["sexo"]); ?></td>
        <td><?php echo esc($row["telefono"]); ?></td>
        <td><?php echo esc($row["direccion"]); ?></td>
        <td><?php echo esc($row["extranjero"]); ?></td>
        <td><?php echo esc($row["becado"]); ?></td>
        <td><?php echo esc($row["carrera"]); ?></td>
        <td><?php echo esc($row["fecha_registro"]); ?></td>
          <td><?php
        if (!empty($row["foto"])) {
            echo '<img src="'.$usuario_model->get_thumbnail($row["foto"], 20, 20).'" alt="" >';
        } else {
            echo '<img src="'. base_url("img/usuario_default.png").'" alt="" height="20" >';
        }
        ?></td>
           <td><?php
        if (!empty($row["titulo"])) {
            echo '<img src="'.$usuario_model->get_thumbnail($row["titulo"], 20, 20).'" alt="" >';
        } else {
            echo '<img src="'. base_url("img/usuario_default.png").'" alt="" height="20" >';
        }
        ?></td>
        /*Editar*/
        <td><?php echo anchor("usuario/editar?id=".$row["id"], "Editar"); ?></td>
        /*Borrar*/
        <td><?php echo anchor("usuario/borrar/".$row["id"], "Borrar"); ?></td>
        
      
    </tr>
    <?php
    }
    ?>
</table>
<?php  
} else {
?>
<p>No hay usuarios registrados</p>
<?php
}

echo view("common/footer");
?>