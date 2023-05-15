<?php   

    Class Funcionario{

        private string $cpf;
        private string $nome;
        private string $telefone;

        public function __construct($cpf,$nome,$telefone){
            $this->cpf=$cpf;
            $this->nome=$nome;
            $this->telefone=$telefone;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            return $this->cpf=$cpf;
        }


        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            return $this->nome=$nome;
        }


        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            return $this->telefone=$telefone;
        }
    }

    $funcionario1=new Funcionario("896-072-523-07", "Ferreira", "(021)98450-9128");
    echo $funcionario1->getTelefone();
    $funcionario1->setTelefone("Número de telefone do cliente."); 






?>