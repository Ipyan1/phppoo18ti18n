<?php   
    namespace PHP\Modelo; //Reclacionamento com outras pastas

    class Pessoa{
        //Delcarando as variaveis que vai usar
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
   
    //metodo contrutor para instanciar(dar valor)
    public function __construct(string $cpf,string $nome,string $telefone,string $endereco){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;

    }//fim o construtor

    //Metodo de acesso e modificação Get e Set
    public function getCPF():string
    {
        return $this->cpf;
    }//fim do método getcpf


    public function getNome():string
    {
        return $this->nome;
    }//fim do metodo getNome

    public function getTelefone():string
    {
        return $this->telefone;
    }//fim do método gettelefone

    public function getEndereco():string
    {
        return $this->endereco;
    }//fim do método getEndereço

    public function setCPF(string $cpf):void
    {
        $this->cpf = $cpf;
    }//fim do metodo SetCPF

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }//fim do metodo SetNome

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
        return "<br><br>CPF: ".$this->getCPF().
               "<br>Nome: ".$this->getNome().
               "<br>Telefone: ".$this->getTelefone().
               "<br>Endereco: ".$this->getEndereco();

    }//fim do método imprimir
        
 }//fim da classe
?>