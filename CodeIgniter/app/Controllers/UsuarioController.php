<?php
use App\Models\UsuarioModel;
namespace App\Controllers;

class UsuarioController extends BaseController{
    
    public function index(){
        $tituloController="Vista Principal con Diccionario";
        //view("Nombre del archivo en la vista,["nmobre de los atributos que se mandaran en diccionario])
        //ej:titulo;es la variable que esta en la vista_principal, y el tituloaqui es lo que se quiere enviar
        return view("vista_principal",["tituloVista"=>$tituloController]);
        
        
    }
    
    public function recurso2(){
      //  $conexion= new UsuarioModel;
      //  $lista_usuarios= $conexion->BuscarTodos(); 
      //  return view ("vista_principal",["tituloVista"=>"Titulo 2", "lista"=>$lista_usuarios]);
      return view ("vista_principal",["tituloVista"=>"Titulo 2"]);
    }
}