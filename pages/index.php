<?php 
    include('conexaolog.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {
        if(strlen($_POST['email']) == 0){
            echo '<p class="avisologin">Preencha seu e-mail!</p>';
        } else if(strlen($_POST['senha']) == 0) {
            echo '<p class="avisologin">Preencha sua senha!</p>';
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução di código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['nome'];

                header("Location: admin.php");

            } else {
                echo '<p class="avisologin">Falha ao logar! E-mail ou senha incorretos.</p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body id="body-index">
    <main id="main-login-area">
        <div id="main-login">
            <img src="../imgs/logo.png" alt="Logo" height="48px">
            <form action="" method="POST">
                <input type="email" name="email" id="email" autocomplete="off" placeholder="E-mail">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <input type="submit" value="Entrar" id="inputenviar">
            </form>
        </div>
    </main>
</body>
</html>