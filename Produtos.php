<?php

Class Produtos{
    private string $categoria;
    private string $validade;
    private float $preco;
    private int $codigo;


    public function __construct($categoria,$validade,$preco,$codigo){
    $this->categoria=$categoria;
    $this->validade=$validade;
    $this->preco=$preco;
    $this->codigo=$codigo;

    
 
}


public function getCategoria(){
    return $this->categoria;
}
public function setCategoria($categoria){
    $this->categoria=$categoria;
}

public function getValidade(){
    return $this->validade;
}
public function setValidade($validade){
    $this->validade=$validade;
}

}


$produto1=new Produtos("cate","12/05",55.5,123);
 echo $produto1->getCategoria();

 $produto1->setCategoria("fdsfsd");

?>