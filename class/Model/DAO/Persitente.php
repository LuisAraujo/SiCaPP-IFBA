<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 25/08/15
 * Time: 01:05
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

     /**
     * @description Busca elemento através do  $email
     * @param $email String
     * @return Usuario
     */
    public function buscar($email);



}