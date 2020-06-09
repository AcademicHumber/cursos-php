<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = "usuario";
    
    function buscar_todos(){
        return $db->query("select * ");
    }
    
}
