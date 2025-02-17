<?php
    // Definição das credenciais do banco de dados
    $db_servidor = 'Localhost';
    $db_usuario = 'root'; 
    $db_senha = ''; 
    $db_nomeDB = 'db_clientes'; 

    // Criação da conexão com o banco de dados usando MySQLi
    $conexao = new mysqli($db_servidor, $db_usuario, $db_senha, $db_nomeDB);

    // Verifica se ocorreu algum erro na conexão
    if($conexao -> connect_errno) {
        echo "Erro"; // Exibe uma mensagem simples de erro (pode ser aprimorada para mais detalhes)
    } else {
        // Mensagem de sucesso ao estabelecer a conexão
        echo '<div class="mensagem-sucesso">Parabéns! Você agora está inscrito para receber novidades e conteúdos exclusivos!</div>';
    }
?>
