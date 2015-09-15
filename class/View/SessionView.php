<?php

include("../Controller/SessionController.php");
class SessionView{

    public function obterTipoSession(){
        //1 = professor, 0 = estudantes, -1 = erro
        $controller = new SessionController();

        echo $controller->getTipoSession();

    }

    public function deslogaUsuario(){
        //1 = professor, 0 = estudantes, -1 = erro
        $controller = new SessionController();
        echo $controller->destroySession();
    }



}