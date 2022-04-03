<?php
include_once 'session_home.php';

$nome_user = $_SESSION['nome_session'];
$avatar = $_SESSION['avatar_session'];

If ($_SESSION['tipo_session'] != 1){
  session_destroy();
  header('location: ../index.html');
  exit;
}

$firstname = explode(" ", $nome_user);


echo"
<div id=quadro><h2 id=msg>Bem vindo(a), $firstname[0]</h2> <img src= $avatar height=100 id=avatarhome><p id=txt_tipo>Usuário: Administrador</p> <a href=sair.php><img src=../img/logout.png height=80 id=logout></a></div>";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link rel="stylesheet" href="../css/responsivohome.css" type="text/css">
    <title>Home 1</title>
</head>
<body>
<nav id="menu-h">
    <ul>
      <li><a href="home.php">Início</a></li>
      <li><a href="cadastrar.php">Cadastrar</a></li>
      <li><a href="listar.php">Listar</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      <a href=sair.php id="avatarmenu"> <img src = <?php echo"$avatar height=70"?>></a>
    </ul>
  </nav>
   </body>
</html>