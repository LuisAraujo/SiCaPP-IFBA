<?php
/**
 * Class EstudanteDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Estudante como a base de dados
 * @versio 1.0
 * @package Model/DAO
 */

require_once("Persitente.php");
require_once("UsuarioDAO.php");

class EstudanteDAO  extends UsuarioDAO implements Persistente{

    /**
     * @description Guarda a referência do Estudante
     * @type Estudante
     */
    private $estudante;


    /**
     * @description Recebe o parametro do Tipo Estudante para extrair os dados
     * @param $estudante Estudante
     */
    public  function __construct($estudante){
        $this->estudante = $estudante;
    }


    /**
     * @description Insere elemento a partir de usuario e filhos
     * @return mixed
     */
    public function inserir()
    {

        $sql="insert into usuario (nome, cpf, lattes, email, senha, matricula, eprofessor)
        values(".$this->estudante->getNome().",".$this->estudante->getCPF().",".$this->estudante->getEnderecoLattes().","
        .$this->estudante->getEmail().",".$this->estudante->getSenha().",".$this->estudante->getMatricula().",false)";

        $result = mysql_query($sql);

        //teste
        return $this->estudante->getNome();
    }

    /**
     * @description Atualiza elemento através do id
     * @return mixed
     */
    public function atualizar()
    {
        $sql="update from usuario set nome=".$this->estudante->getNome().", CPF=".$this->estudante->getCPF().",
        lattes=".$this->estudante->getEnderecoLattes().", email=".$this->estudante->getEmail().",
        senha".$this->estudante->getSenha().", matricula".$this->estudante->getMatricula()."
        where idusuario = ".$this->estudante->getIdEstudantes()."";

        $result = mysql_query($sql);

        return "ok";
    }

    /**
     * @description Deletar elemento através do id
     * @return bool
     */
    public function deletar()
    {
        $sql="delete from usuarios where idusuario = ".$this->estudante->getIdEstudantes();

        return "ok";
    }




}