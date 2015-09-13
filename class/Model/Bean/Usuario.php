<?php
/**
 * Class Estudante
 * @author Luis Araujo
 * @description Classe modelo de Usuário
 * @versio 1.0
 * @package Model/
 */

abstract class Usuario {

    /**
     * @param string  $email
     * @param string  $senha
     * @param string $nome
     * @param string $CPF
     * @param string $enderecoLattes
     */
    public  function _constuct($nome="", $CPF="", $email="", $senha="", $enderecoLattes=""){

    }

   // private $idUsuario;
    private $id;
    private $nome;
    private $CPF;
    private $enderecoLattes;
    private $email;
    private $senha;
    private $titulacao;
    private $campus;


    /**
     * @param string $CPF
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }

    /**
     * @return string
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string  $enderecoLattes
     */
    public function setEnderecoLattes($enderecoLattes)
    {
        $this->enderecoLattes = $enderecoLattes;
    }

    /**
     * @return string
     */
    public function getEnderecoLattes()
    {
        return $this->enderecoLattes;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        //criptografia MD5
        $this->senha = md5($senha);
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }



    /**
     * @param string $titulacao
     */
    public function setTitulacao($titulacao)
    {

        $this->titulacao = $titulacao;
    }

    /**
     * @return mixed
     */
    public function getTitulacao()
    {
        return $this->titulacao;
    }


    /**
     * @param string $titulacao
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $campus
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;
    }

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->campus;
    }




} 