<?php
/**
* Interface Persistent
* @descrition Interface para classes DAO que acessam o Banco
* @author Luis Araujo
* @version Luis Araujo
*/

interface Persistente{

    /**
     * @description Insere elemento a partir de usuario e filhos
     * @return mixed
     */
    public function inserir();

    /**
     * @description Atualiza elemento através do id
     * @return mixed
     */
    public function atualizar();

    /**
     * @description Deletar elemento através do id
     * @return bool
     */
    public function deletar();


}