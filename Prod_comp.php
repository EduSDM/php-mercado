<?php

Class Prod_comp{

    private int $id_compre_prod;

    private float $total;

    private string $hora;

    public function __construct($id_compre_prod, $total, $hora){
        $this->id_compre_prod=$id_compre_prod;
        $this->total=$total;
        $this->hora=$hora;

    }

    public function getId_compre_prod(){
        return $this->id_compre_prod;
    }
    public function setId_compre_prod($id_compre_prod){
        return $this->id_compre_prod=$id_compre_prod;
    }

    public function getTotal(){
        return $this->total;
    }
    public function setTotal($total){
        return $this->total=$total;
    }

    public function getHora(){
        return $this->hora;
    }
    public function setHora($hora){
        return $this->hora=$hora;
    }

}

$prod_comp1=new Prod_comp(123,999,"06:05:29");
echo $prod_comp1->getHora();
$prod_comp1->setHora("hora da compra");




?>