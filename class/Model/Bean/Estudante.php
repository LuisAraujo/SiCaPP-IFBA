<?php
/**
 * Class Estudante
 * @author Luis Araujo
 * @description Classe modelo de Estudante
 * @versio 1.0
 * @package Model/
 */

require_once("../Model/Bean/Usuario.php");

class Estudante extends Usuario{


    /**
     * @type int
     */
    private  $idEstudantes;

    private  $matricula;

    /**
     * @param int $idEstudantes
     */
    public function setIdEstudantes($idEstudantes)
    {
        $this->idEstudantes = $idEstudantes;
    }

    /**
     * @return int
     */
    public function getIdEstudantes()
    {
        return $this->idEstudantes;
    }

    /**
     * @param int $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return int
     */
    public function getMatricula()
    {
        return $this->matricula;
    }



}