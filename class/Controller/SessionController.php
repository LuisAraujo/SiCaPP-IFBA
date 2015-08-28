<?php

class SessionController{

    private $idSession;
    private $currentSession;
    private $user;
    private $tipo;

    /**
     * Usando padrão SINGLETON de "br.phptherightway.com"
     * @param $user
     * @param $tipo
     */

    public static function getInstance($user="", $tipo=""){

        static $instance = null;

        if (null == $instance) {
            $instance = new SessionController($user, $tipo);
        }else if($user!="" && $tipo!=""){
            $instance->setTipoSession($tipo);
            $instance->setUserSession($user);
        }
        return $instance;
    }

    protected  function __construct($user="", $tipo=""){
            $this->user = $user;
            $this->tipo = $tipo;
            $this->currentSession = session_start();
            $this->idSession = session_id($this->currentSession);
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup(){ }
    /**
    * Método clone do tipo privado previne a clonagem dessa instância
    * da classe
    *
    * @return void
    */
    private function __clone() { }



    public function setStart(){
        $_SESSION["user"] = $this->user ;
        $_SESSION["tipo"] = $this->tipo;
    }

    public function setUserSession($user){
        $this->user = $user;
    }
    public function getUserSession(){
        return $this->user;
    }
    public  function setTipoSession($tipo){
        $this->tipo = $tipo;
    }
    public function getTipoSession(){
        return $this->tipo;
    }

    public function getIdSession(){
        return $this->idSession;
    }
}

$a = SessionController::getInstance("luis","1");
$b = SessionController::getInstance();

echo $b->getUserSession();
echo "<br>";
echo $b->getIdSession();
echo "<br>";
$c = SessionController::getInstance("marcos","1");
echo $c->getUserSession();
echo "<br>";
echo $c->getIdSession();

