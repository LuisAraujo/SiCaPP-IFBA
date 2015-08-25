<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 25/08/15
 * Time: 00:39
 */

//namespace Model\Bean;
require_once("../Model/Bean/Usuario.php");

class Pesquisador extends Usuario{

    /**
     * @param $SIAPE int
     */
    public  function __construct($SIAPE=""){

    }

    private  $idPesquisador;
   private $SIAPE;

   /**
   * @type Usuario
   */
    private $usuario;

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