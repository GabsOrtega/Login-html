<?php

include 'session_home.php';

$avatar = $_SESSION['avatar_session'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" type= "text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/cadastro.css" type="text/css">
    <link rel="stylesheet" href="../css/sobre.css" type="text/css">
    <link rel="stylesheet" href="../css/responsivosobre.css" type="text/css">
</head>
<body>
<nav id="menu-h">
    <ul>
    <li><a href="home2.php">Início</a></li>
      <li><a href="sobre2.php">Sobre</a></li>
     <a href=sair.php id="avatarmenu"> <img src = <?php echo"$avatar height=70"?>></a>
    </ul>
  </nav>

  <div id="sobre">

  <h1>Sobre</h1>
  <br>
  <br>
  <p>Criado por: Gabriel Ortega</p>
  <br>
  <br>
  <p>Email de contato: gabs.ortega2610@gmail.com/p>
  <br>
  <br>
  <p>Telefone: (11) 98282-9538</p>
  <br>
  <br>
  <div>
  <a href="https://www.instagram.com/dev.gabsortegz/"><img src="../img/instagram_icon.png" height=50 class="redes"></a>
  <a href="https://github.com/GabsOrtega"><img src="../img/github.png" height=50 class="redes"></a>
</div>
  </div>
</body>
</html>