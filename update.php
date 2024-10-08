<?php

// função autoload 
// carrega uma classe quando ela é necessária, ou seja, quando é instanciado pela
// primeira vez

spl_autoload_register(function ($classe){
    if(file_exists("{$classe}.class.php")){
        include_once "{$classe}.class.php";
    }
});

// cria um critério de seleção 

$criteria = new TCriteria;
$criteria->add(new TFilter('ID', '=', '3'));

// cria instrução de UPDATE
$sql = new TSqlUpdate;
// define a entidade
$sql->setEntity('Aluno');
// atribui o valor de cada coluna 
$sql->setRowData('Nome','Pedro Cardoso da Silva');
$sql->setRowData('Rua','Machado de Assis');
$sql->setRowData('Fone','(88)5555');


// define o critério de seleção de dados
$sql->setCriteria($criteria);

// processa instrução SQL

echo $sql-> getInstruction();

echo "<br>\n";



?>