<?php
include ("conexao.php");

$nome       =   $_POST['nome'];
$celular   =   $_POST['celular'];
$email      =   $_POST['email'];

$sql= mysqli_query($conexao,"INSERT INTO cadastro (nome, celular, email) VALUES ('$nome', '$celular', '$email')");

if ($sql) {
    echo 1;
} else {
    echo 2;
}
mysqli_close($conexao);
?>
