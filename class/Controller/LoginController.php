<?php

class LoginController{

    private  $usuarioView;
    private  $objUsuarioView;
    private  $usuarioDAO;
    private  $usuarioClass;

    public function  __construct(){

        //Url Class
        $this->usuarioClass = "../Model/Bean/Estudante.php";
        require_once($this->usuarioClass);

        //Url View
        $this->usuarioView = "../View/UsuarioView.php";
        require_once($this->usuarioView);

        //Url DAO
        $this->usuarioDAO = "../Model/DAO/UsuarioDAO.php";
        require_once($this->usuarioDAO);

        //Instaciando o objeto View
        $this->objUsuarioView = new UsuarioView();
    }

    public function logar(){

        Conexao::Conectar();

        $Usuario = new Estudante();

        $Usuario->setSenha($_POST["senha"]);
        $Usuario->setEmail($_POST["email"]);

        //polimorfirmos
        $usuarioDao = new UsuarioDAO($Usuario);

        $retornoDAO =  $usuarioDao->logar();

        $this->objUsuarioView->retornaLogin( $retornoDAO );


    }

}