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
    $avatar = $linha['avatar'];

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
    <title>Alterar Avatar</title>
</head>
<body>

<form class="box" action="../php/updateimg.php" method="POST" id="cadastro" enctype="multipart/form-data">
      <h1>ALTERAR AVATAR</h1>
      <br>
      <input type="hidden" name="id_user" required maxlength="8" value="<?php echo $id_user;?>" readonly> 
<div id="img-container">
  <img id="preview" src="" height="100">
</div>
<input type="file" id ="input_avatar" accept="image/*" title="Escolha o avatar" required name="avatar">
<br>
<br>
      <input type="submit" name = "enviar" id="enviar">
      <input type="reset" name= "limpar" value="Limpar" class="limpar"> 
    </form>
    </center>
    </body>
    <script type="text/javascript" src="../js/loadimg.js"></script>
</html>