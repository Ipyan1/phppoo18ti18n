<?php
    namespace PHP\Modelo; //Definir o local do projeto para se conversarem

    class Funcionario{
        //Delcarando as variaveis que vai usar
        private int $matricula;
        private string $nome;
        private float $salario;
        private string $cargo;
        private string $endereco;
        private string $telefone;

        //metodo construtor

        public function __construct(int $matricula, string $nome,float $salario, string $cargo,string $endereco, string $telefone){
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cargo = $cargo;        
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construct(construtor)

        //Metodo de acesso e modificação Get e Set
    public function getMatricula():int
    {
        return $this->matricula;
    }//fim do método getMatricula


    public function getNome():string
    {
        return $this->nome;
    }//fim do metodo getNome

    public function getSalario():float
    {
        return $this->salario;
    }//fim do metodo getSalario

    public function getCargo():string
    {
        return $this->cargo;
    }//fim do metodo getCargo

    public function getTelefone():string
    {
        return $this->telefone;
    }//fim do método gettelefone

    public function getEndereco():string
    {
        return $this->endereco;
    }//fim do método getEndereço

    public function setMatricula(int $Matricula):void
    {
        $this->matricula = $matricula;
    }//fim do metodo SetMatriucla

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }//fim do metodo SetNome

    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }//fim do metodo SetSalario

    public function setCargo(string $cargo):void
    {
        $this->endereco = $endereco;
    }//fim do metodo SetCargo

    public function setTelefone(string $telefone):void
    {
        $this->telefone = $telefone;
    }//fim do metodo Settelefone

    public function setEndereco(string $endereco):void
    {
        $this->endereco = $endereco;
    }//fim do metodo SetEndereço

    public function imprimir():string
    {
        return "<br><br>matricula: ".$this->getMatricula().
               "<br>Nome: ".$this->getNome().
               "<br>Salario: ".$this->getSalario().
               "<br>Cargo: ".$this->getCargo().
               "<br>Telefone: ".$this->getTelefone().
               "<br>Endereco: ".$this->getEndereco();

    }//fim do método imprimir


    }//Fim da classe

