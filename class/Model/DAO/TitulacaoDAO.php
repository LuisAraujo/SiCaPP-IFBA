<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 12/09/15
 * Time: 23:08
 */

class TitulacaoDAO {
    //public $titulacao;

    public  function __construct(){

    }

    public function  inserir(){
    }
    public function  deletar(){
    }
    public function  buscar(){
    }

    public function  buscarTodos(){



        $query = "select idtitulacoes, nome from sicapp_titulacoes";

        $result = mysql_query($query) or die(mysql_error());

       if(!$result){
            echo "erro ao obter dados...";
       }else{

           $fetch = array();

           while ($row = mysql_fetch_row($result)){
               $rowAux = [$row[0], utf8_encode($row[1])];
               array_push($fetch,$rowAux);

           }

           return $fetch;
       }

    }



} 