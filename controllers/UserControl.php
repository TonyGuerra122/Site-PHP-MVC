<?php
session_start();
include_once("../models/Usuarios.php");

class UserControl extends Usuarios{
    private $logado;

    public function __construct($email, $senha)
    {
        $construct = parent::__construct($email, $senha);
        
        $this->logado = ($construct >= 1) ? true : false;
    }


    public function verifyLogin(){
        if($this->logado == true){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['email'] = $this->email;
            $_SESSION['senha'] = $this->senha;
            return true;
        }else{
            if(isset($_SESSION)){
                session_destroy();
            }
            return false;
        }
        
    }
    public function deslogar(){
        session_destroy();
        $this->logado = false;
        return "Deslogado";
    }
    

}