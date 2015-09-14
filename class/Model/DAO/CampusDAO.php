<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 13/09/15
 * Time: 01:17
 */

class CampusDAO {

    public $campus;

    public  function __construct($titulacao=""){
        $this->campus = $titulacao;
    }

    public function  inserir(){
    }
    public function  deletar(){
    }
    public function  buscar(){
    }

    public function  buscarTodos(){

        $query = "select * from sicapp_campus";

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