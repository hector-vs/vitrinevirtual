<?php
    include('protect.php');
    include('conexao.php');
    include('listar.php');
    ini_set('default_charset','utf-8');

    if($_POST){
        $fotopintura = $_POST['fotopintura'];
        $nomepintura = $_POST['nomepintura'];
        $tipopintura = $_POST['tipopintura'];
        $disponibilidade = $_POST['disponibilidade'];
        $sql = "INSERT INTO obras(fotopintura, nomepintura, tipopintura, disponibilidade) VALUES('$fotopintura','$nomepintura','$tipopintura','$disponibilidade')";
        $sql_query = $mysqli->prepare($sql);
        $sql_query->execute() or die("Falha na execução do código SQL: " . $mysqli->error);
    }

    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $mysqli->exec("DELETE FROM obras WHERE id=$id");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <abbr title="Hector Vieira Saldivar"><a href="#"><img id="logo" src="../imgs/logo.png" alt="assinatura" height="50px"></a></abbr>
    </header>
    <nav>
        <ul>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="obras.php">Obras</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
    <div class="linha"></div>
    <main class="adminforms">
        <h1 style="padding-top: 20px;">ADMINISTRAÇÃO</h1>
        <h2 style="margin-bottom: -15px;">Cadastrar obra:</h2>
        <form action="" method="post" id="adminform" autocomplete="off">
            <input type="text" name="fotopintura" id="fotopintura" placeholder="URL da imagem">
            <input type="text" name="nomepintura" id="nomepintura" placeholder="Nome da obra">
            <input type="text" name="tipopintura" id="tipopintura" placeholder="Técnica utilizada, dimensões">
            <label for="disponibilidade">Disponibilidade:</label>
            <select name="disponibilidade" id="disponibilidade">]
                <option value="disp">Disponível</option>
                <option value="indisp">Indisponível</option>
            </select>
            <input type="submit" value="Cadastrar" id="inputcadastrar">
        </form>
        <table>
            <tr>
              <th>Ações</th>
              <th>ULR da foto</th>
              <th>Nome</th>
              <th>Detalhes</th>
              <th>Disponibilidade</th>
            </tr>
            <?php
            foreach ($fetchObras as $key => $value){
                echo '<tr><td><a href="?delete='.$value['id'].'">Excluir</a></td>
                <td>'.$value['fotopintura'].'</td>
                <td>'.$value['nomepintura'].'</td>
                <td>'.$value['tipopintura'].'</td>
                <td>'.$value['disponibilidade'].'</td></tr>';
            }
            ?>
          </table>
        <a id="botaosair" href="logout.php">Encerrar sessão</a>
    </main>
</body>
</html>