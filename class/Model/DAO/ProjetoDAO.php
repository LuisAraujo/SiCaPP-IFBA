<?php
/**
 * Class ProjetoDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Projeto como a base de dados
 * @version 1.0
 * @package Model/DAO
 */
class ProjetoDAO implements Persistente{


    /**
     * @type Array <Bolsista>
     */
    private $bolsistas = array();
    /**
     * @type Pesquisadro
     */
    private $coodernando;

     private  $agencia;
     private  $natureza;
     private  $instituicao;
     private $subarea;
     private $categoria;
    /**
     * @type Resumo
     */
    private $resumo;


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
     * @description Busca elemento através do  $email
     * @param $email String
     * @return Usuario
     */
    public function buscar($email)
    {
        // TODO: Implement buscar() method.
    }
}