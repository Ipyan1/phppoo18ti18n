<?php   
    namespace PHP\Modelo; //Relacionamento com outras pastas

    class Cliente{
        //Declarando as variaveis que vai usar
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private date $dtNascimento;
        private float $totalCompras;
   
    //metodo contrutor para instanciar(dar valor)
    public function __construct(string $cpf,string $nome,string $telefone,string $endereco, date $dtNascimento, float $totalCompras){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->dtNascimento = $dtNascimento;
        $this->totalCompras = $totalCompras;

    }//Fim do método construtor

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

    public function getdtNascimento():date
    {
        return $this->dtNascimento;

    }//fim do método getdtNascimento

    public function gettotalCompras():string
    {
        return $this->totalCompras;
    }
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

    public function setdtNascimento(): void
    {
        $this->dtNascimento = $dtNascimento;
    }//fim do método Setdtnascimento

    public function imprimir():string
    {
        return "<br><br>CPF: ".$this->getCPF().
               "<br>Nome: ".$this->getNome().
               "<br>Telefone: ".$this->getTelefone().
               "<br>Endereco: ".$this->getEndereco();
               "<br>Data Nascimento: ".$this->getdtNascimento();
               "<br>Total Compras: ".$this->gettotalCompras();

    }//fim do método imprimir



}//Fim da Classe


