<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 12/09/15
 * Time: 23:08
 */

class TitulacaoDAO {
    public $titulacao;

    public  function __construct($titulacao=""){
        $this->titulacao = $titulacao;
    }

    public function  inserir(){
    }
    public function  deletar(){
    }
    public function  buscar(){
    }

    public function  buscarTodos(){

        $query = "select * from sicapp_titulacoes";

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