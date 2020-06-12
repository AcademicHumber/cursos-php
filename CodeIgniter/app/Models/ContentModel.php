<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model {

    //en el archivo config/database.php hay que configurar
    //variables con informacion sobre la tabla
    //tabla que se usara en el modelo actual
    protected $table = "contenido";
    //llave primaria
    protected $primaryKey = "id";
    //OPCIONAL_variable que define como la base de datos nos entrega informacion: arreglo, cadena
    protected $returnType = "array";
    //OPCIONAL_configurar la eliminacion de archivos(opcional)_EL DELETED DE LA BD o sea, cambia el estado del registro, no se borra.
    protected $useSoftDeletes = false;
    //campos habilitados para su escritura en la tabla
    protected $allowedFields = ["titulo", "encabezado", "cuerpo"];
    //configurar para agregar los campos creados_a y actualizados_a para los horarios
    protected $useTimestamps = true;
    //reglas de validacion
    protected $validationRules = [];
    //mensajes de validacion
    protected $validationMessages = [];
    //configurar el saltar la validacion (opcional)//para que no tome en cuenta el validation ni el messagew rules
    protected $skipValidation = false;

}
