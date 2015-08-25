<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 25/08/15
 * Time: 00:39
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


    private $idUsuario;
    private $nome;
    private $CPF;
    private $enderecoLattes;
    private $email;
    private $senha;

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
     * @param int  $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }







} 