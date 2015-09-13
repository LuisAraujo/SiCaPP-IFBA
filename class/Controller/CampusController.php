<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 13/09/15
 * Time: 01:19
 */

class CampusController {

    private  $campusView;
    private  $objCampusView;
    private  $campusDAO;
    private  $campusClass;


    public function  __construct(){

        //Url Class
        $this->campusClass = "../Model/Bean/Campus.php";
        require_once($this->campusClass);

        //Url View
        $this->campusView = "../View/CampusView.php";
        require_once($this->campusView);

        //Url DAO
        $this->campusDAO = "../Model/DAO/CampusDAO.php";
        require_once($this->campusDAO);

        //Instaciando o objeto View
        $this->objCampusView = new CampusView();
    }


    public function buscarTodos(){

        Conexao::Conectar();

        $campusDao = new CampusDAO();
        $retornoDAO = $campusDao->buscarTodos();

        return $retornoDAO;
        //$this->objCampusView->exibeTodosCampus( $retornoDAO );

    }

    public function buscar(){


    }

} 