<?php
// Inclui o arquivo de configuração
include("config.php");

// Verifica se as variaveis estao definidas no form
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['dt_nascimento'])){
    
    //atribuir um valor a variavel
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dt_nascimento = $_POST['dt_nascimento'];

    if(!empty($nome) || !empty($email) || !empty($senha) || !empty($dt_nascimento)) {
        $senha = md5($senha);
    
        // consulta SQL para inserir os dados do usuário no banco de dados
        $sql_query = "INSERT usuarios(nomeusu, emailusu, senhausu, dt_nascimento) VALUES ('$nome', '$email', '$senha', '$dt_nascimento')";
        
        // Executa a consulta SQL
        mysqli_query($conn, $sql_query);
    
        // Redireciona o usuário para a página de listagem
        header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>


<!-- Barra de Navegação -->
<nav>
    <a href="index.php">Lista de Usuarios</a>
    <a href="cadastro.php">Cadastrar usuario</a>
    <a href="sobrenos.html">Sobre nos</a>
</nav>

<!-- Conteúdo da Página -->
<div style="padding: 20px;">
    <!-- Conteúdo da página vai aqui -->
    <h2>Easy Company</h2>
    <p>Aqui voce pode cadastrar um novo usuario</p>
</div>


<body>
    <h1>Cadastro usuário</h1>

    <!-- Formulário de registro do usuário -->
    <form action="" method="POST">
        <!-- Campos de entrada para as informações do usuário -->
        <div class="form">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="form">
            <label>e-mail</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>

        <div class="form">
            <label>Data de Nascimento</label>
            <input type="date" name="dt_nascimento" class="form-control">
        </div>

        <!-- Botões de envio e reset -->
        <div class="form"> 
            <button type="submit" id="enviar_btn">Enviar</button>
        </div>

        <div class="form">
            <button onclick="location.href='http://localhost/crudphpfacul/crudphp/'" type="button">Voltar</button>
        </div>
    </form>   



<script src="script.js"></script>
</body>
</html>
