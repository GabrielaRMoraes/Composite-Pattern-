<?php

spl_autoload_register(function ($classe){
    if(file_exists("{$classe}.class.php")){
        include_once "{$classe}.class.php";
    }
});

// cria seleção de dados
$criteria = new TCriteria;
$criteria->add(new TCriteria('ID', '=', '3'));

// cria instrução DELETE
$sql = new TSqlDelete;

// define a entidade
$sql->setEntity('Aluno');

// define o critério de seleção de dados
$sql->setCriteria($criteria);

// processa a instrução sql 
echo $sql-> getInstruction();

echo "<br>\n";


?>