<?php 
    include('listar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <abbr title="Hector Vieira Saldivar"><a href="admin.php"><img id="logo" src="../imgs/logo.png" alt="assinatura" height="50px"></a></abbr>
    </header>
    <nav>
        <ul>
            <li><a href="sobre.php">Sobre</a></li>
            <li><span class="atual"><a href="#">Obras</a></span></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
    <div class="linha"></div>
    <main>
        <section class="flex">
            <?php 
                foreach ($fetchObras as $key => $value){
                     echo '<div class="bloco"><img src="'.$value['fotopintura'].'" class="pintura"><span class="nomeobra">
                         <p class="disponibilidade">'.$value['nomepintura'].'</p>
                     </span><p class="disponibilidade">'.$value['tipopintura'].'</p><p class="disponibilidade">'; 
                     if($value['disponibilidade'] == "disp"){
                        echo 'Disponível';
                     } else {
                        echo 'Indisponível';
                     }
                     echo '</p></div>';
                }
            ?>
            </div>
        </section>
    </main>
</body>
</html>