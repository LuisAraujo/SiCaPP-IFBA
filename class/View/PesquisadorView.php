<?php
/**
 * Class PesquisadorView
 * @author Luis Araujo
 * @description Classe de visão de Pesquisador
 * @version 1.0
 * @package View/
 */

include("../Controller/PesquisadorController.php");

class PesquisadorView{

    private $controller;

    public  function __construct(){
        $this->controller= new PesquisadorController();
    }

    public function exibeStatusInserido($param){

       echo $param;
    }


    public function logar(){
        //1 = professor, 0 = estudantes, -1 = erro

        echo $this->controller->logar();
    }

    public  function inserir(){

        echo $this->controller->inserir();
    }

    public function atualizar(){
        echo $this->controller->atualizar();
    }

    public  function obterDados(){

        $param = $this->controller->buscar();
        echo json_encode($param);

    }

} 