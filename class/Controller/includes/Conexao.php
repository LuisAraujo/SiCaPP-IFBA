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

         $link = mysql_connect("localhost", "root", "root");
         mysql_select_db("gia", $link);

       // mysql_query("SET NAMES 'utf8'");
       // mysql_query('SET character_set_connection=utf8');
       // mysql_query('SET character_set_client=utf8');
       // mysql_query('SET character_set_results=utf8');

    }

}


?>