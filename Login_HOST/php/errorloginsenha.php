

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/cadastro.css" type="text/css">
    <title>Login e senha errados</title>
</head>
<body>
<html>

    <center>
    <form class="box" action="../php/login.php" method="POST">
      <h1>LOGIN</h1>
      <br>
     <input type="email" name = "login" class="dados" placeholder="Digite seu email" required title="Preencha o campo email" maxlength="100">
      <br>
      <br>
     <input type="password" name = "senha" class="dados" placeholder="Digite sua senha" required title="Preencha o campo senha" maxlength="20">
      <br>
      <br>
      <input type="submit" name = "enviar" id="enviar">
      <br><br>
      <p class="error">✖ Email ou senha inválidos</p>
    </form>
    </center>


</body>
</html>

    
<?php


?>