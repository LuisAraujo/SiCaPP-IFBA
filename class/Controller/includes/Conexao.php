<?php
/**
 * Class Conexao
 * @author Luis Araujo
 * @description Classe responsável pela conexão com o banco de dados
 * @versio 1.0
 * @package Controller/includes
 */

class Conexao {

    public static function Conectar(){

        //$localhost ="mysql01.ifba.edu.br";
        $localhost ="localhost";
        //$user="gia";
        $user="root";
        //$senha = "2389sdmcH";
        $senha = "root";
        $banco="gia";

         $link = mysql_connect($localhost,$user,$senha);
         mysql_select_db($banco, $link);

    }
}

Conexao::Conectar();


?>