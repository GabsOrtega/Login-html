<?php

include 'session_home.php';

$avatar = $_SESSION['avatar_session'];
  
If ($_SESSION['tipo_session'] != 1){
  session_destroy();
  header('location: ../index.html');
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/cadastro.css" type="text/css">
    <title>Document</title>
</head>
<body>
    
<body>
<nav id="menu-h">
    <ul>
      <li><a href="home.php">Início</li></a>
      <li><a href="cadastrar.php">Cadastrar</li></a>
      <li><a href="listar.php">Listar</li></a>
      <li><a href="sobre.php">Sobre</a></li>
      <a href=sair.php id="avatarmenu"> <img src = <?php echo"$avatar height=70"?>></a>
    </ul>
  </nav>
    <center>
    <form class="box" action="../php/index.php" method="POST" id="cadastro" enctype="multipart/form-data">
      <h1>CADASTRAR</h1>
      <br>
     <input type="text" name="nome_user" placeholder="Digite o nome" required maxlength="100" title="Formato: Apenas letras e no maximo 50 digitos"> 
     <br>
     <br>
     
    
     <input type="email" name = "email_user" class="dados" placeholder="Digite seu email" required maxlength="50" title="Formato: email@dominio.com">
      <br>
      <br>
      
      
      
     <input type="password" name = "senha_user" class="dados" placeholder="Digite sua senha" required maxlength="20" title="Formato: Letras, numeros e caracter especial">
     <br>
      <br>
      
    
  
     <select name="tipo" id="tipo_user" required>

        <option value="" disabled selected>Selecione o tipo de usuário</option>
         <option value="1">Admin</option>
         <option value="2">Comum</option>
         
     </select>
      <br>
      <br>
      <input type="file" id ="input_avatar" accept="image/*" title="Escolha o avatar" required name="avatar">
      <br>
      <br>
      <input type="submit" name = "enviar" id="enviar">
      <input type="reset" name= "limpar" value="Limpar" class="limpar"> 
      <br>
      <br>
      <p class="error">✖ Email e senha inválidos</p>
    </form>
    </center>


<?php



?>

</body>
</html>