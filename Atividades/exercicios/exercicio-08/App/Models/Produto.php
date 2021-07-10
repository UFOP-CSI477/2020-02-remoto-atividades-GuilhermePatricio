<?php

namespace App\Models;



class Estado implements ModelInterface {

    private $id, $nome, $unidade;

    public function __construct($id, $nome, $unidade) {

        $this->id = $id;
        $this->nome = $nome;
        $this->unidade = $unidade;

    }

    public function __destruct() {

    }

    public function getAll(){

    }

    public function get($id){

    }

}