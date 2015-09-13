<?php
/**
 * Class PesquisadorDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Pesquisador como a base de dados
 * @version 1.0
 * @package Model/DAO
 */

require_once("Persitente.php");
require_once("UsuarioDAO.php");

class PesquisadorDAO extends UsuarioDAO implements Persistente{


    /**
     * @description Guarda a referência do Pesquisador
     * @type Pesquisador
     */
    private $pesquisador;

     /**
     * @description Recebe o parametro do Tipo Pesquisador para extrair os dados
     * @param $pesquisador Pesquisador
     */
    public  function __construct($pesquisador){

        $this->pesquisador = $pesquisador;

    }


    /**
     * @overloping
     * @description Insere elemento a partir de usuario e filhos
     * @return mixed
     */
    public function inserir()
    {
        $query = "INSERT INTO sicapp_pesquisadores(cpf, nome, lattes, email, senha, siape, titulacoes_idtitulacoes, sicapp_campus_idcampus)
        VALUES('".$this->pesquisador->getCPF()."','".$this->pesquisador->getNome()."','".$this->pesquisador->getEnderecoLattes()."','".$this->pesquisador->getEmail()."',
        '".$this->pesquisador->getSenha()."','".$this->pesquisador->getSIAPE()."','".$this->pesquisador->getTitulacao()."','".$this->pesquisador->getCampus()."')";

        $resp = mysql_query($query);

        if(!$resp)
            return 0;
        else
            return 1;
    }

    /**
     * @description Atualiza elemento através do id
     * @return mixed
     */
    public function atualizar()
    {
        $query = "UPDATE sicapp_pesquisadores SET   cpf = ".$this->pesquisador->getCPF().",nome =".$this->pesquisador->getNome().",lattes =".$this->pesquisador->getEnderecoLattes().",
        email =". $this->pesquisador->getEmail() .", senha = ". $this->pesquisador->getSenha().",siape = ".$this->pesquisador->getSIAPE().",titulacoes_idtitulacoes =". $this->pesquisador->getTituacao().
        "WHERE sicapp_pesquisadores.idpesquisadores = ".$this->pesquisador->getId().";";

        $resp = mysql_query($query) or die(mysql_error());

        return $resp;
    }

    public function buscar(){
        $query = "SELECT *   FROM sicapp_pesquisadores WHERE sicapp_pesquisadores.idpesquisadores = ".$this->pesquisador->getId().";";


    }


    public function logar(){

        $sql="select count(*) from sicapp_pesquisadores where senha ='". $this->pesquisador->getSenha()."' and email='".$this->pesquisador->getEmail()."'";

        $result = mysql_query($sql) or die(mysql_error());

        $fetch = mysql_fetch_row($result);
        //pesquisador
        if($fetch[0]=="1")
            return 1;
        //estudante
        else if($fetch[0]=="0")
            return 0;
        //nao encontrou
        else
            return -1;




    }

}