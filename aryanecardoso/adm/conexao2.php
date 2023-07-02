<?php
session_start();
$localhost ='localhost';
$usuario = 'root';
$senha ='';
$banco="Landing_page_ary_cardoso";

global $pdo;
try {
    //orientada a objetos com PDO
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $usuario, $senha);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
echo "ERRO :".$e->getMessage();
exit;
}



?>