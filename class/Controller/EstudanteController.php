<?php
/**
 * Class EstudanteController
 * @author Luis Araujo
 * @description Classe controladora de Estudantes
 * @versio 1.0
 * @package Controller/
 */

class EstudanteController {


    private  $estudanteView;
    private  $objEstudanteView;
    private  $estudanteDAO;
    private  $estudanteClass;

    public function  __construct(){

        //Url Class
        $this->estudanteClass = "../Model/Bean/Estudante.php";
        require_once($this->estudanteClass);

        //Url View
        $this->estudanteView = "../View/EstudanteView.php";
        require_once($this->estudanteView);

        //Url DAO
        $this->estudanteDAO = "../Model/DAO/EstudanteDAO.php";
        require_once($this->estudanteDAO);

        //Instaciando o objeto View
        $this->objEstudanteView = new EstudanteView();
    }



    public function inserirEstudante(){

        Conexao::Conectar();

        $novoEstudante = new Estudante();

        $novoEstudante->setNome( isset($_POST["nome"])?$_POST["nome"]:"" );
        $novoEstudante->setCPF(  isset($_POST["CPF"])?$_POST["CPF"]:"" );
        $novoEstudante->setEnderecoLattes( isset($_POST["lattes"])?$_POST["lattes"]:"" );
        $novoEstudante->setEmail( isset($_POST["email"])?$_POST["email"]:"" );
        $novoEstudante->setSenha( isset($_POST["senha"])?$_POST["senha"]:"" );
        $novoEstudante->setMatricula( isset($_POST["matricula"])?$_POST["matricula"]:"" );

        $estudanteDao = new EstudanteDAO($novoEstudante);

        $retornoDAO = $estudanteDao->atualizar();

        $this->objEstudanteView->exibeStatusInserido( $retornoDAO );

    }


    public function alterarEstudante(){

        Conexao::Conectar();

        $alterEstudante = new Estudante();

        $alterEstudante->setNome( isset($_POST["nome"])?$_POST["nome"]:"" );
        $alterEstudante->setCPF(  isset($_POST["CPF"])?$_POST["CPF"]:"" );
        $alterEstudante->setEnderecoLattes( isset($_POST["lattes"])?$_POST["lattes"]:"" );
        $alterEstudante->setEmail( isset($_POST["email"])?$_POST["email"]:"" );
        $alterEstudante->setSenha( isset($_POST["senha"])?$_POST["senha"]:"" );
        $alterEstudante->setMatricula( isset($_POST["matricula"])?$_POST["matricula"]:"" );

        $estudanteDao = new EstudanteDAO($alterEstudante);

        $retornoDAO = $estudanteDao->atualizar();

        $this->objEstudanteView->exibeStatusAtualizado( $retornoDAO );


    }

    public function deletarEstudante(){

        Conexao::Conectar();

        $deletEstudante = new Estudante();

        $deletEstudante->setIdEstudantes($_POST["id"]);

        $estudanteDao = new EstudanteDAO($deletEstudante);

        $retornoDAO = $estudanteDao->deletar();

        $this->objEstudanteView->exibeStatusDeletado( $retornoDAO );

    }


} 