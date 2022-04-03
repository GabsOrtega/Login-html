<?php
include 'session_home.php';
include 'conectar.php';

If ($_SESSION['tipo_session'] != 1){
    session_destroy();
    echo"<meta http-equiv='refresh' content='0;url=../index.html'>";
    exit;
  }

$id_user = $_GET["id_user"];


$dados = $connect->query("SELECT * FROM logar WHERE id_user = '$id_user'");


while ($linha = mysqli_fetch_array($dados)) {
    $id_user = $linha['id_user'];
    $nome_user = $linha['nome_user'];
    $email_user = $linha['email_user'];
    $avatar = $linha['avatar'];
    $tipo = $linha['tipo'];
    $senha_user = $linha['senha_user'];

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
    <title>Alterar</title>
</head>
<body>
    

<form class="box" action="../php/update.php" method="POST" id="cadastro" enctype="multipart/form-data">
      <h1>ALTERAR</h1>
      <br>
      <input type="hidden" name="id_user" required maxlength="8" value="<?php echo $id_user;?>" readonly> 
<br>
<br>
     <input type="text" name="nome_user" placeholder="Digite o nome" required maxlength="50" title="Formato: Apenas letras e no maximo 50 digitos" value="<?php echo $nome_user;?>"> 
     <br>
     <br>
     <input type="email" name = "email_user" class="dados" placeholder="Digite seu email" required maxlength="100" title="Formato: email@dominio.com" value="<?php echo $email_user;?>">
      <br>
      <br>
     <input type="password" name = "senha_user" class="dados" placeholder="Digite sua senha" required maxlength="20" title="Formato: Letras, numeros e caracter especial" value="<?php echo $senha_user;?>">
     <br>
      <br>
     <select name="tipo" id="tipo_user" required>
        <option value="" selected>Selecione o tipo de usuário</option>
         <option value="1">Admin</option>
         <option value="2">Comum</option>
     </select>
      <br>
      <br>
      <input type="submit" name = "enviar" id="enviar">
      <input type="reset" name= "limpar" value="Limpar" class="limpar"> 
    </form>
    </center>
    </body>
</html>