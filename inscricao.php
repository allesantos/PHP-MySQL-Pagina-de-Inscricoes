<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscreva-se!</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div>
        <!-- Formulário que envia dados via POST -->
        <form action="" method="POST"> 
            <h1>Inscreva-se para receber novidades e conteúdos exclusivos!</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome"> 
            <br /><br />
            <input type="text" name="email" id="email" placeholder="Email"> 
            <br /><br />
            <input type="submit" name="submit" id="submit"> 
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) { // Verifica se o formulário foi enviado
    
        include_once('config.php'); // Inclui o arquivo de configuração do banco de dados
    
        $nome = $_POST['nome']; // Captura o nome do formulário
        $email = $_POST['email']; // Captura o e-mail do formulário
    
        // Insere os dados na tabela "tb_inscritos"
        $resultado = mysqli_query($conexao, "INSERT INTO tb_inscritos(nome, email) VALUES ('$nome', '$email')");
    }
    ?>
    
</body>

</html>