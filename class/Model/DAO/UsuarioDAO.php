<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 25/08/15
 * Time: 01:01
 */

//namespace Model\DAO;

require_once("Persitente.php");
class UsuarioDAO implements Persistente {

    /**
     * @param $usuario Usuario
     */
    public  function __construct($usuario){
        $this->usuario = $usuario;
    }

    /**
     * @type Usuario
     */
    private $usuario;

    /**
     * @description Insere elemento a partir de usuario e filhos
     * @return mixed
     */
    public function inserir()
    {
        // TODO: Implement inserir() method.
    }

    /**
     * @description Atualiza elemento através do id
     * @return mixed
     */
    public function atualizar()
    {
        // TODO: Implement atualizar() method.
    }

    /**
     * @description Deletar elemento através do id
     * @return bool
     */
    public function deletar()
    {
        // TODO: Implement deletar() method.
    }


    /**
     * @param $nome String
     */
    public function buscar($email){
        //retrun usuario;
    }


    public function login($email, $senha){
        //logar
        //criar sessão com email
    }
} 