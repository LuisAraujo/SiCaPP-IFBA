<?php
/**
 * Class LoginController
 * @author Luis Araujo
 * @description Classe controladora de Pesquisador
 * @versio 1.0
 * @package Controller/
 */

//include("../View/PesquisadorView.php");
require_once("SessionController.php");
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
        //$this->pesquisadorView = "../View/PesquisadorView.php";
        //require_once($this->pesquisadorView);

        //Url DAO
        $this->pesquisadorDAO = "../Model/DAO/PesquisadorDAO.php";
        require_once($this->pesquisadorDAO);

        //Instaciando o objeto View
        //$this->objPesquisadorView = new PesquisadorView();
    }


    public function inserir(){

        Conexao::Conectar();

        $novoPesquisador = new Pesquisador();

        $novoPesquisador->setNome( isset($_POST["nome"])?$_POST["nome"]:"" );
        $novoPesquisador->setCPF(  isset($_POST["cpf"])?$_POST["cpf"]:"" );
        $novoPesquisador->setEnderecoLattes( isset($_POST["lattes"])?$_POST["lattes"]:"" );
        $novoPesquisador->setEmail( isset($_POST["email"])?$_POST["email"]:"" );
        $novoPesquisador->setSenha( isset($_POST["senha"])?$_POST["senha"]:"" );
        $novoPesquisador->setSIAPE( isset($_POST["siape"])?$_POST["siape"]:"" );
        $novoPesquisador->setTitulacao( isset($_POST["titulacao"])?$_POST["titulacao"]:"" );
        $novoPesquisador->setCampus( isset($_POST["campus"])?$_POST["campus"]:"" );

        $pesquisadorDao = new PesquisadorDAO($novoPesquisador);

        $retornoDAO = $pesquisadorDao->inserir();

        return $retornoDAO;
        //$this->objPesquisadorView->exibeStatusInserido( $retornoDAO );

    }

    public function atualizar(){
        Conexao::Conectar();

        $novoPesquisador = new Pesquisador();

        $session = new SessionController();
        $novoPesquisador->setId($session->getUserSession());
        $novoPesquisador->setNome( isset($_POST["nome"])?$_POST["nome"]:"" );
        $novoPesquisador->setCPF(  isset($_POST["cpf"])?$_POST["cpf"]:"" );
        $novoPesquisador->setEnderecoLattes( isset($_POST["lattes"])?$_POST["lattes"]:"" );
        $novoPesquisador->setEmail( isset($_POST["email"])?$_POST["email"]:"" );
        $novoPesquisador->setSenha( isset($_POST["senha"])?$_POST["senha"]:"" );
        $novoPesquisador->setSIAPE( isset($_POST["siape"])?$_POST["siape"]:"" );
        $novoPesquisador->setTitulacao( isset($_POST["titulacao"])?$_POST["titulacao"]:"" );
        $novoPesquisador->setCampus( isset($_POST["campus"])?$_POST["campus"]:"" );

        $pesquisadorDao = new PesquisadorDAO($novoPesquisador);

        $retornoDAO = $pesquisadorDao->atualizar();

        return $retornoDAO;

    }

    public function deletar(){

    }

    public function buscar(){
        Conexao::Conectar();

        $novoPesquisador = new Pesquisador();
        $session = new SessionController();
        $novoPesquisador->setId($session->getUserSession());
        $pesquisadorDao = new PesquisadorDAO($novoPesquisador);
        $retornoDAO = $pesquisadorDao->buscar();

        return $retornoDAO;
        //$this->objPesquisadorView->exibeStatusInserido( $retornoDAO );

    }


    public function logar(){

        Conexao::Conectar();

        $Usuario = new Pesquisador();

        $Usuario->setSenha($_POST["senha"]);
        $Usuario->setEmail($_POST["email"]);

        //polimorfirmos
        $pesquisadorDao = new PesquisadorDAO($Usuario);

        $retornoDAO =  $pesquisadorDao->logar();

        if($retornoDAO!= -1)
            $session = new SessionController($Usuario->getEmail(),1);


        return $retornoDAO;
        //$this->objPesquisadorView->retornaLogin( $retornoDAO );

    }


} 