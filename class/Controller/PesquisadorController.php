<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 25/08/15
 * Time: 01:37
 */

class PesquisadorController {

    private  $pesquisadorView;
    private  $objPesquisadorView;
    private  $pesquisadorDAO;
    private  $pesquisadorClass;

    public function  __construct(){

        //Url Class
        $this->pesquisadorClass = "../Model/Bean/Pesquisador.php";
        require_once($this->pesquisadorClass);

        //Url View
        $this->pesquisadorView = "../View/PesquisadorView.php";
        require_once($this->pesquisadorView);

        //Url DAO
        $this->pesquisadorDAO = "../Model/DAO/PesquisadorDAO.php";
        require_once($this->pesquisadorDAO);

        //Instaciando o objeto View
        $this->objPesquisadorView = new PesquisadorView();
    }


    public function inserir(){

        Conexao::Conectar();

        $novoPesquisador = new Pesquisador();
        $novoPesquisador->setNome($_POST["nome"]);

        $pesquisadorDao = new PesquisadorDAO($novoPesquisador);

        $retornoDAO = $pesquisadorDao->inserir();

        $this->objPesquisadorView->exibeStatusInserido( $retornoDAO );

    }



} 