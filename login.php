<?php
    if(isset($_POST['submit'])) {
        include('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $result = $conexao->query("SELECT * FROM login WHERE usuario = '$usuario' and senha = '$senha' ");

        if($result->num_rows > 0) {
            echo "Usuário $usuario logado com sucesso!";
            header('location: formulario.php');
        } else {
            echo "Usuário/senha não encontrado(s)!";
        }        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Login.css">

    <title>Página de Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <div>
            <h1>Login</h1>
            <input type="text" name="usuario" placeholder="Usuário"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <button class="botao" type="submit" name="submit">Enviar</button>
        </div>
    </form>
    
</body>
</html>