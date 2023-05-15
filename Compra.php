<?php

Class Compra{

    private int $codigo;
    private string $hora;

    private string $descricao;

    public function __construct($codigo,$hora,$descricao){
        $this->codigo=$codigo;
        $this->hora=$hora;
        $this->descricao=$descricao;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        return $this->codigo=$codigo;
    }


    public function getHora(){
        return $this->hora;
    }
    public function setHora($hora){
        return $this->hora=$hora;
    }


    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        return $this->descricao=$descricao;
    }
}

$compra1=new Compra(123,"10:32:09", "Detergente neutro 5L");
echo $compra1->getDescricao();
$compra1->setDescricao("Descricao do produto");




?>