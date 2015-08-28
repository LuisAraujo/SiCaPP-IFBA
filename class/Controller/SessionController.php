<?php

class SessionController{

    private $idSession;
    private $currentSession;
    private $user;
    private $tipo;

    /**
     * Construtor requer email do usuário logado e tipo (professor ou bolsita)
     * @param $user
     * @param $tipo
     */
    public function __construct($user, $tipo){

        if (!isset($idSession )){
            $this->currentSession = session_start();
            $this->idSession = session_id($this->currentSession);
        }

        $this->user =  $user;
        $this->tipo =  $tipo;

        $this->setStart();

    }

    public function setStart(){
        $_SESSION["user"] = $this->user ;
        $_SESSION["tipo"] = $this->tipo;
    }

    public function getUserSession(){
        return $this->user;
    }

    public function getTipoSession(){
        return $this->tipo;
    }

    public function getIdSession(){
        return $this->idSession;
    }
}
