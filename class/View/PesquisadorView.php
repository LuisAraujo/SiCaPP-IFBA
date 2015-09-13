<?php
/**
 * Class PesquisadorView
 * @author Luis Araujo
 * @description Classe de visão de Pesquisador
 * @version 1.0
 * @package View/
 */

include("UsuarioView.php");

class PesquisadorView extends UsuarioView{


    public function exibeStatusInserido($param){

       echo $param;
    }


    public function retornaLogin($param){
        //1 = professor, 0 = estudantes, -1 = erro
        echo $param;
    }

} 