<?php
    namespace PHP\Modelo; //Definir o local do projeto para se conversarem
    //require once ele executa uma vez a leitura e armazena
    //require - leitura varias vezes
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Cliente.php');

    //pessoa - chamar objeto
    //funcionário - chamar objeto

    $pessoa1 = new Pessoa("125.254.545-55","Pâmela","119999999","Rua O, 174");    
    $pessoa2 = new Pessoa("125.254.000-55","Aroldo","119999999","Rua 1, 174");
   
    $funcionario1 = new Funcionario(1188, "Pâmela",1000,"Atendente","Vergueiro, 55- SBC", "11999555588");

    $cliente1 = new Cliente("133.254.545-55","Talita","119999999","Rua O, 174","24/07/1983", 1000);

    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
    echo $funcionario1->imprimir();
    echo $cliente1->imprimir();
    

 
    

?>