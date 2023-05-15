<?php

Class Cliente{
    private string $telefone_cliente;

    private string $cpf_cliente;

    private string $nome;

    public function __construct($telefone_cliente,$cpf_cliente,$nome){
        $this->telefone_cliente=$telefone_cliente;
        $this->cpf_cliente=$cpf_cliente;
        $this->nome=$nome;
    }

    public function getTelefone_cliente(){
        return $this->telefone_cliente;
    }
    public function setTelefone_cliente($telefone_cliente){
        return $this->telefone_cliente=$telefone_cliente;

    }

    public function getCpf_cliente(){
        return $this->cpf_cliente;
    }
    public function setCpf_cliente($cpf_cliente){
        return $this->cpf_cliente=$cpf_cliente;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome=$nome;
    }
    
}

$cliente1=new Cliente("(19)99836-7902","533-072-520-01","Fernando");
echo $cliente1->getCpf_cliente();
$cliente1->setCpf_cliente("Número de cpf do cliente");


?>