<?php
$servidor = 'Localhost';
$usuario = 'root';
$senha = "";
$dbName = "Landing_page_ary_cardoso";

$conexao =  mysqli_connect($servidor,$usuario,$senha,$dbName);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>  