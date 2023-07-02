<?php
$localhost ='localhost';
$usuario = 'root';
$senha ='';
$banco="Landing_page_ary_cardoso";

$conecta= mysqli_connect($localhost, $usuario, $senha, $banco);
$sql =mysqli_query($conecta, "SELECT * FROM cadastro" );

echo mysqli_num_rows($sql);
?>