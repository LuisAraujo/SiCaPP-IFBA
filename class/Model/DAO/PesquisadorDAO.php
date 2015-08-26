<?php
require_once("Persitente.php");
/**
 * Class PesquisadorDAO
 * @author Luis Araujo
 * @description Classe responsável pela interação de Pesquisador como a base de dados
 * @version 1.0
 * @package Model/DAO
 */
class PesquisadorDAO implements Persistente{

    /**
     * @description Recebe o parametro do Tipo Pesquisador para extrair os dados
     * @param $pesquisador Pesquisador
     */
    public  function __construct($pesquisador){

        $this->pesquisador = $pesquisador;

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
     * @overloping
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