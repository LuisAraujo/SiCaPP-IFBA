<?php

require_once("../Model/DAO/UsuarioDAO.php");

/**
 * Class PesquisadorDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Pesquisador como a base de dados
 * @versio 1.0
 * @package Model/DAO
 */
class PesquisadorDAO extends UsuarioDAO{

    /**
     * @description Recebe o parametro do Tipo Pesquisador para extrair os dados
     * @param $pesquisador Pesquisador
     */
    public  function __construct($pesquisador){

        $this->pesquisador = $pesquisador;

        //instancia um usuarioDAO e passa a própria referência como parâmetro
        //usando polimorfismo (Pesquisador é um Usuario)
        $this->usuarioDAO = new UsuarioDAO($this);
    }

    /**
     * @description Guarda a referência do Pesquisador
     * @type Pesquisador
     */
    private $pesquisador;

   /**
   * @description Guarda a referência do UsuarioDAO para posterior inserção, atualização e deleção
   * elemento necessário pelo padrão de especialização do banco (Pesquisador é um Usuario)
   * @type UsuarioDAO;
   */
    private $usuarioDAO;

    /**
     * @description Insere elemento a partir de usuario e filhos
     * @return mixed
     */
    public function inserir()
    {
        //chama inserir de usuárioDAO e pega o id de retorno
        //se id -1 erro
        //senão insere com referência a usuario de id retorno
        //retorna id se tudo correto
        //retorna -1 se erro (apaga usuario)

        return $this->pesquisador->getNome();
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

}