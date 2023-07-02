<?php
require 'conexao2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aryane Cardoso</title>
    <!--CSS-->

    <link rel="stylesheet" href="style.css">
    
    <!-- IMPORTAR FONTE DO GOOGLE FONT-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Tangerine:wght@700&display=swap');
      </style>
           
</head>
<body>
    
 <!-- CABEÇALHO-->
 
    <header>
<!-- SUMÁRIO-->
        <div class="sumario">
            
        </div>
   </header>
   <div> <hr> </div>
 <!--DEFINE O CONTEUDO PRINCIPAL-->
    <section id="container">
       
        <!--lado da foto-->
        <article>
            <img class="foto" src="./Image/imagem1.jpeg" alt="">
        </article>

 <!--A tag ASIDE define um bloco de conteúdo que faz referência ao conteudo principal que o cerca Normalmente ela fica na lateral e pode conter assuntos relacionados, conteudo publicitario, informações contextuais, etc.-->
        <aside> <br>

            <span class="a1">
                <h2>CURSO DE MAQUIAGEM BÁSICA </h2>
            </span> <!--É um container generico em linhas, usados para agrupar para estilezar-->

            <h2 class="nome-evento">Aryane Cardoso</h2> 
            <p>INSCREVA-SE</p>  
            <form action="cadastro.php" method="post" >
                <label for="nome"></label>
                <input type="text" id="nome" name="nome" required placeholder="Nome Completo">
                
                <label for="telefone"></label>
                <input type="tel" id="telefone" name="telefone" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}" placeholder=" WhatsApp (00) 12345-6789" required>
                
                <label for="e  mail"></label>
                <input type="e-mail" id="email" name="email" required placeholder="E-mail">
                <input type="submit" value="Enviar">
            </form>
            <br>
        </aside>

    </section>
    


    
    

   
</body>

</html> 