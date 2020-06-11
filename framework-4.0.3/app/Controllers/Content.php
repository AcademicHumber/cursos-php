<?php namespace App\Controllers;


use Models\ContentModel;

class Content extends BaseController{
    
    function crear(){
        helper('form');
        return view("contenidos/crear");
    }
    
    function mostrar(){
        return view("contenidos/mostrar");
    }
    
}