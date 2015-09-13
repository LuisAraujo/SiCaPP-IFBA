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

        $l= 0;
        $fetch = [[],[]];

        $result = mysql_query($query) or die(mysql_error());

        while ($row = mysql_fetch_array($result)) {
            $fetch[$l][0] = $row[0];
            $fetch[$l++][1] = $row[1];
        }
        return $fetch;

    }


} 