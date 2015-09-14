<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 12/09/15
 * Time: 23:47
 */

class TitulacaoController {
    private  $titulacaoView;
    private  $objTitulacaoView;
    private  $titulacaoDAO;
    private  $titulacaoClass;


    public function  __construct(){

        //Url Class
        $this->titulacaoClass = "../Model/Bean/Titulacao.php";
        require_once($this->titulacaoClass);

        //Url View
        //$this->titulacaoView = "../View/TitulacaoView.php";
        //require_once($this->titulacaoView);

        //Url DAO
        $this->titulacaoDAO = "../Model/DAO/TitulacaoDAO.php";
        require_once($this->titulacaoDAO);

        //Instaciando o objeto View
        //$this->objTitulacaoView = new TitulacaoView();
    }


    public function buscarTodos(){

         Conexao::Conectar();

        $titulacaoDao = new TitulacaoDAO();
        $retornoDAO = $titulacaoDao->buscarTodos();

        return $retornoDAO;


    }
} 