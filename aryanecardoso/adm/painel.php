<?php
require 'conexao2.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id'])):
/*if(empty($_POST['']));
*/ ?>
<?php
$consulta = "SELECT * FROM cadastro";
$con =$pdo->query($consulta) or die (mysqli_connect_error());   

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulari de Inscritos</title>  
    <link rel="stylesheet" href="/css/style.css">
    <style>
      body{
            background-image:url(./imagem/imagem1.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            color: aliceblue;
            max-width: 1400px;
            margin: 0 auto;       
}
        table {

            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 70%;
            height: 80%;
            
        
        
        }
        th, td {
            border: 2px solid salmon;
            padding: 8px;
            text-align: left;
        }
        .encerrar {
            font-style: oblique;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px; /* Ajuste os valores de padding para diminuir o tamanho do botão */
            font-size: 20px; /* Ajuste o tamanho da fonte do botão */
            background-color:darksalmon;
            position:absolute;
            top: 90%;
            left: 50%;
        transform: translate(-50%, -50%);
        }
    </style>
    <!--<script>
        function encerrarSessao() {
            // Fazer uma solicitação ao servidor para encerrar a sessão
            fetch(session_destroy())
                .then(function(response) {
                    // Redirecionar para outra página ou atualizar a página atual
                    window.location.href = 'logout.php';
                });
        }
    </script>-->
</head>
<body id="formulario">
    
<form method="GET" action="painel.php">
    <table>
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>WhatsApp</th>
                <th>Email</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dado =$con->fetch()) { ?>
            <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["celular"]; ?></td>
                <td><?php echo $dado["email"]; ?></td>
                <td><a class='btn btn-sm btn-danger' href='delete.php?id=<?php echo $dado['id']; ?>'>
                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' color='#FF8C00' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>
                </a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="encerrar">
     <a href="logout.php"><buton>Encerrar sessão</buton></a>
    </div>

    
    </body>

</form>
</html>
<?php else: header('location: login.php'); endif; ?>