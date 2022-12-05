<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../pages/style.css">
</head>
<body>
    <header>
        <abbr title="Hector Vieira Saldivar"><a href="admin.php"><img id="logo" src="../imgs/logo.png" alt="assinatura" height="50px"></a></abbr>
    </header>
    <nav>
        <ul>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="obras.php">Obras</a></li>
            <li><span class="atual"><a href="#">Contato</a></span></li>
        </ul>
    </nav>
    <div class="linha"></div>
    <main id="main-contact">
        <a href="#">
            <div id="insta">
                <img src="https://www.pngmart.com/files/21/Instagram-Logo-PNG.png" alt="Instagram Logo" height="40px">
                <h2>INSTAGRAM</h2>
            </div>
        </a>
        <div id="form-contact">
            <h2 style="margin-top: 10px; margin-bottom:0; color: var(--cor1);">Enviar E-mail</h2>
            <form action="https://api.staticforms.xyz/submit" method="post" autocomplete="off">
                <!-- Replace with accesKey sent to your email -->
                <input type="hidden" name="accessKey" value="e5bc815d-afe1-437b-9114-9de106c9d541"> <!-- Required -->
                <input type="text" name="name" placeholder="Seu nome" required> <!-- Optional -->
                <input type="text" name="email" placeholder="Seu email" required> <!-- Optional -->
                <input type="text" name="subject" placeholder="Assunto" required> <!-- Optional -->
                <textarea name="message"></textarea> <!-- Optional -->
                <!-- If you want form to redirect to a specific url after submission -->
                <input type="hidden" name="redirectTo" value="https://example.com/contact/success"> <!-- Optional -->
                <input type="submit" value="Enviar" id="enviaremail">
            </form>
        </div>
    </main>
</body>
</html>