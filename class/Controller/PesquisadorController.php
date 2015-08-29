<?php
/**
 * Class LoginController
 * @author Luis Araujo
 * @description Classe controladora de Pesquisador
 * @versio 1.0
 * @package Controller/
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


    public function inserirPesquisador(){

        Conexao::Conectar();

        $novoPesquisador = new Pesquisador();

        $novoPesquisador->setNome( isset($_POST["nome"])?$_POST["nome"]:"" );
        $novoPesquisador->setCPF(  isset($_POST["CPF"])?$_POST["CPF"]:"" );
        $novoPesquisador->setEnderecoLattes( isset($_POST["lattes"])?$_POST["lattes"]:"" );
        $novoPesquisador->setEmail( isset($_POST["email"])?$_POST["email"]:"" );
        $novoPesquisador->setSenha( isset($_POST["senha"])?$_POST["senha"]:"" );
        $novoPesquisador->setSIAPE( isset($_POST["SIAPE"])?$_POST["SIAPE"]:"" );

        $pesquisadorDao = new PesquisadorDAO($novoPesquisador);

        $retornoDAO = $pesquisadorDao->inserir();

        $this->objPesquisadorView->exibeStatusInserido( $retornoDAO );

    }

    public function alterarPesquisador(){

    }

    public function deletePesquisador(){

    }



} 