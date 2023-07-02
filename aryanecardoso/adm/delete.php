<?php
if(!empty($_GET['id'])){
    require 'conexao2.php';
    
    
    $id= $_GET['id'];
    $sqlSelect ="SELECT * FROM cadastro WHERE id=$id";
    $result= $pdo->query($sqlSelect);

    // Verifica se há registros retornados pela consulta
if ($result->rowCount() > 0) {
    $sqlDelete = "DELETE FROM cadastro WHERE id=:id";
    $stmt = $pdo->prepare($sqlDelete);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo "Registro deletado com sucesso.";
    } else {
        echo "Erro ao deletar registro.";
    }
} else {
    echo "Nenhum registro encontrado.";
}

}

?>