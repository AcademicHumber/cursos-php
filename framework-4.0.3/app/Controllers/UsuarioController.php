<?php namespace App\Controllers;


use App\Models\UsuarioModel;

class UsuarioController extends BaseController {
    
    public function index(){
        $hola = "Camion";
        // view("Nombre del archivo en las vistas",
        //      ["nombre de los atributos que vamos a mandar en formato diccionario,
        //       ejm:"Nombre de la variable en la vista"=>"variable del controlador"])
        
        $id = 82*5+64;
        
        return view("vista_principal.php", ["titulo" => $hola, "id" => $id]);
    }
    
    public function recurso2(){
        $id = 5;
        
        $conexion = new UsuarioModel;
        $lista_de_usuario = $conexion->buscar_todos();
        
                
        return view("vista_principal", ["titulo"=>"biblioteca", "id" => $id, "lista" => $lista_de_usuario]);
    }
  
}

