<?php
/**
 * Class
 * @author Luis Araujo
 * @description
 * @versio
 * @package
 */

//namespace Model\Bean;
require_once("../Model/Bean/Usuario.php");

class Pesquisador extends Usuario{


     private  $idPesquisador;
     private $SIAPE;


    /**
     * @param $SIAPE int
     */
    public  function __construct($SIAPE=""){

    }

    /**
     * @param int $SIAPE
     */
    public function setSIAPE($SIAPE)
    {
        $this->SIAPE = $SIAPE;
    }

    /**
     * @return int
     */
    public function getSIAPE()
    {
        return $this->SIAPE;
    }

    /**
     * @param int $idPesquisador
     */
    public function setIdPesquisador($idPesquisador)
    {
        $this->idPesquisador = $idPesquisador;
    }

    /**
     * @return int
     */
    public function getIdPesquisador()
    {
        return $this->idPesquisador;
    }


} 