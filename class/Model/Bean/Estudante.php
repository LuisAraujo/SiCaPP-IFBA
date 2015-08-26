<?php
/**
 * Class
 * @author Luis Araujo
 * @description
 * @versio
 * @package
 */

require_once("../Model/Bean/Usuario.php");

class Estudante extends Usuario{


    /**
     * @type int
     */
    private  $idEstudantes;
    /**
     *@type int
     */
    private  $periodo;
    /**
     * @type String
     */
    private  $curso;
    /**
     * @type int
     */
    private  $matricula;

    /**
     * @param String $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    /**
     * @return String
     */
    public function getCurso()
    {
        return $this->curso;
    }

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

    /**
     * @param int $periodo
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    /**
     * @return int
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }



}