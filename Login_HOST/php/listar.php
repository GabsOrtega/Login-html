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
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css" type="text/css">
  <link rel="stylesheet" href="../css/home.css" type="text/css">
  <link rel="stylesheet" href="../css/table.css" type="text/css">
  <title>Listagem</title>
</head>
<nav id="menu-h">
    <ul>
      <li><a href="home.php">Início</a></li>
      <li><a href="cadastrar.php">Cadastrar</a></li>
      <li><a href="listar.php">Listar</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      <a href=sair.php id="avatarmenu"> <img src = <?php echo"$avatar height=70"?>></a>
      <link rel="stylesheet" href="../css/responsivolistar.css" type="text/css">
    </ul>
  </nav>
<body>
  <br>
  <center><h2 id="titlelistagem">LISTAGEM DE DADOS</h2></center>
<?php


include 'conectar.php';

$dados = $connect->query("SELECT * FROM logar");

while ($linha = mysqli_fetch_array($dados)) {
    $id_user = $linha['id_user'];
    $nome_user = $linha['nome_user'];
    $email_user = $linha['email_user'];
    $avatar = $linha['avatar'];
    $tipo = $linha['tipo'];
    $senha_user = $linha['senha_user'];

 echo  "<table border=1 colspan =2 id=table>

 <tr>
 <br> <br>
 <th> ID </th>
   <th> NOME </th>
   <th> EMAIL </th>
   <th> SENHA </th>
   <th> TIPO </th>
   <th colspan = 2> AVATAR </th>
   <th colspan = 3> Ação </th>
  </tr>

   <tr>
   <td> $id_user <br> </td>
     <td> $nome_user <br> </td>
     <td> $email_user <br> </td>
     <td> $senha_user <br> </td>
     <td> $tipo <br> </td>
     <td colspan = 2> <img src= $avatar height = 100px> <br> </td>
     <td> <a href='alterar.php?id_user=$id_user'><img src= ../img/alteraricon.png height=50 ></a></td>
     <td> <a href='alterarimg.php?id_user=$id_user'><img src= ../img/picture.png height=40 ></a></td>
     <td> <a href='delete.php?email_user=$email_user' onclick=\"return confirm('Quer mesmo apagar esses Dados?');\"><img src= ../img/lixeira.png height=50 ></a></td>
     </tr>

     </table>";
}

?>
</body>
</html>