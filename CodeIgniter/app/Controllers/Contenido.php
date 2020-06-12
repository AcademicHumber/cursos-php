<?php

namespace App\Controllers;

use App\Models\ContentModel;

class contenido extends BaseController {

//los helpers se declaran en el controlador
    function crear() {
        helper("form");

        //se crean las variables para almacenar los errores y otra para almancenar el mensaje de exito
        $errores = [];
        $exito = "";

        //si se ejecuto el formulario, el servidor tendra un metodo post y se ejecutará lo que esta dentro del if
        if ($this->request->getMethod() == "post") {
            //se crea una instancia del modelo
            $instancia_modelo = new ContentModel();

            //insertamos los datos a la bd utilizando la funcion insert del modelo
            //se guarda en una variable $insertar para comprobar si todo salio bien
            //si no hubo errores , insertar vale 1 o true
            //si hubo erres insertar es igual a 0 o false
            $insertar = $instancia_modelo->insert($_POST["cont"]);

            //se comprueba el resultado
            if ($insertar) {
                $exito = "Se guardó correctamente";
            } else {
                $exito = "Hubo problemas al guardar";
                $errores = $instancia_modelo->errors();
            }
        }
        //ejecutamos la vista y mandamos las variables
        return view("Contenidos/crear", ["exito" => $exito, "errores" => $errores]);
    }

    function mostrar() {
        $instancia_del_modelo = new ContentModel();
        //se obtiene la lista de toda la bd 
        $lista_completa = $this->listar($instancia_del_modelo);
        return view("Contenidos/mostrar", ["datos" => $lista_completa]);
    }

    //cuando es privada, no se accede desde la url del servidor, sino se trabajara con el modelo
    private function listar($instancia_del_modelo) {
        //crear una instancia del modelo, llamar a la funcion find_all
        //la cual devolvera los datos en nuestra tabla. estos se guardan en una variable
        $lista = $instancia_del_modelo->findAll();
        return $lista;
    }

}
