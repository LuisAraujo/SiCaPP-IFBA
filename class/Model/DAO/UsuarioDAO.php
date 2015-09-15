<?php
/**
 * Class UsuarioDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Usuario como a base de dados
 * @version 1.0
 * @package Model/DAO
 */

//CLASSE OBSOLETA!!!!!!!
class UsuarioDAO{

    public $usuario;

    /**
     * @description Recebe o parametro do Tipo Estudante para extrair os dados
     * @param $estudante Usuario
     */
    public  function __construct($usuario){
        $this->usuario = $usuario;
    }


    public function logar(){

         $sql="select count(*) from sicapp_usuarios where senha ='". $this->usuario->getSenha()."' and email='".$this->usuario->getEmail()."'";

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


    /**
     * @description Busca elemento através do  id
     * @param $email String
     * @return Usuario
     */
    public function buscar()
    {
        //buscar por id
    }

    /**
     * @description Deletar elemento através do id
     * @return bool
     */
    public function deletar()
    {
        //delete com o id do usuário
    }





}