<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController {
    public function index($pagina=1){
        // $this->load->model("usuario");
        
        $usuario = new UsuarioModel();
        $usuarios = $usuario->listar($pagina);
        
        $data = [
            "titulo" => "Lista de usuarios",
            "subtitulo" => "",
            "usuarios" => $usuarios
        ];
        
        echo view("usuario/index", $data);
    }
    
    public function lista(){
        $usuario = new UsuarioModel();
        $lista = $usuario->listar();
        
        /*if ($this->request->getMethod()=="post") {
            // Procesar el formulario
            switch ($_POST["accion"]){
                  case "Editar":                   
                  $this->editar($id=$_POST["id"]);
                  exit;
                break;
                
                case "Borrar":
                    $this->borrar($id=$_POST["id"]);
                  exit;
                break;
                default:
                    
                  break;                 
                
            }*/
         echo view("usuario/lista", ["lista" => $lista, "usuario_model"=>$usuario]);
        }
        
       
    

    /*public function editar($id) {
       $edicion=new UsuarioModel();
       $usuario=$edicion->ver($id);
       
        $errores = [];
        $success = NULL;

       helper("form");      
       if ($this->request->getMethod()=="post"){
           $data=$_POST["u"];

           $edicion->update($data, ['id' => $id]);
   
       }
       echo view("usuario/editar",["id" => $id,
                                  "usuario"=>$usuario]);
    }
    
    public function borrar($id) {
        
       helper("form");       
      
    }*/ 
    
    public function nuevo(){
        $usuario_model = new UsuarioModel();
        $usuario = [
            "nombre" => "",
            "apellido" => "",
            "sexo" => "hombre",
            "telefono" => "",
            "direccion" => "",
            "extranjero" => 0,
            "becado" => 0,
            "carrera" => "",
            "foto" => "",
            "titulo" => "",
        ];
        
        $errores = [];
        $success = NULL;
        // $this->request->getMethod(); // $_SERVER["REQUEST_METHOD"]
        if ($this->request->getMethod()=="post") {
            // Procesar el formulario
            $usuario = $_POST["u"];
            $usuario["fecha_registro"] = date("Y-m-d H:i:s");
            $insertado = $usuario_model->insert($usuario);
            $usuario["id"] = $usuario_model->getInsertID();
            $usuario_model->procesar_fotos($usuario, $this->request->getFiles());
            if (!$insertado) {
                $errores = $usuario_model->errors();
            } else {
                $success = "Usuario registrado";
            }
        }
        
        helper("form");
        
        echo view("usuario/nuevo", [
            "usuario"=>$usuario, 
            "errores"=>$errores,
            "success"=>$success
        ]);
    }
        public function editar(){
        $usuario_model = new UsuarioModel();
        
        $usuario = $usuario_model->ver($_GET["id"]);
        $errores = [];
        $success = [];
        
        if (empty($usuario)) {
            return redirect()->to(site_url("usuario/lista"));
        }
        
        if ($this->request->getMethod()=="post") {
            // Procesar el formulario
            $datos = $_POST["u"];
            $datos["id"] = $usuario["id"];
            $datos["foto"] = $usuario["foto"];
            $datos["titulo"] = $usuario["titulo"];
            $usuario_model->procesar_fotos($datos, $this->request->getFiles());
            $usuario = $datos;
            
            $modificado = $usuario_model->update($_GET["id"], $usuario);
            if (!$modificado) {
                $errores = $usuario_model->errors();
            } else {
                $success = "Usuario modificado";
            }
        }
        
        helper("form");
        echo view("usuario/editar", [
            "usuario"=>$usuario, 
            "errores"=>$errores,
            "success"=>$success
        ]);
    }
    
    public function borrar($id){
        $usuario_model = new UsuarioModel();
        if ($usuario_model->borrar($id)) {
            return redirect()->to(site_url("usuario/lista?deleted=1"));
        } else {
            
            return redirect()->to(site_url("usuario/lista?deleted=0"));
        }
    }
    
    public function test(){
        $arr = get_defined_constants();
        print_r($arr);
        /* @var $image \CodeIgniter\Images\Handlers\GDHandler */
        /*$image = \Config\Services::image();
        $image->fit($width, $height, $position);
        var_dump($image);*/
    }
}



