<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function prueba ()
    {
        echo 'prueba de MIGUEL';
    }

    public function api ()
    {

        $usuarios= array (
            "usuario"=>"miguel",
            "nombres"=>"Juan Calero",
            "genero"=>"Masculino",
            "Pais"=>"Ecuador",
            "Direccion"=>"Quito Av. Atahualpa OE1-109",
            "telefono"=>"+593052520890"
        );
        return $this->response->setJSON($usuarios);
    }


    public function login(){

return view('login');
    }

    public function testbd()
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT id, nombre_usuario, contrasena  FROM apimiguel.usuarios ");
        $result=$query->getResult();
        return $this->response->setJSON($result);

    }
}
