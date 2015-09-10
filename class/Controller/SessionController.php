<?php
/**
 * Class SessionController
 * @author Luis Araujo
 * @description Classe controla a criação da session de login e da requisição desses dados
 * @versio 1.0
 * @package Controller/
 */
class SessionController{
    static public $user;
    static public $tipo;

    public function __construct($user="",$tipo=""){

        session_start();

        if($user!="")
        $_SESSION["user"] = $user;
        if($user!="")

        $_SESSION["tipo"] = $tipo;
        Self::$user = $_SESSION["user"];
        Self::$tipo = $_SESSION["tipo"];

    }

    public function getUserSession(){
     return Self::$user;
    }
    public function getTipoSession(){
        echo Self::$tipo;
    }

    public function destroySession(){
        session_destroy();
    }
}
