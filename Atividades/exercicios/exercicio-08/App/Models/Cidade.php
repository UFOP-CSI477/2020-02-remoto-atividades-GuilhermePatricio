<?php

namespace App\Models;



class Cidade implements ModelInterface {

    private $id, $nome, $idEstado;

    public function __construct($id, $nome, $idEstado) {

        $this->id = $id;
        $this->nome = $nome;
        $this->idEstado = $idEstado;

    }

    public function __destruct() {

    }

    public function getAll(){

    }

    public function get($id){

    }

}