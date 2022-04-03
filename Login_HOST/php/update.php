<?php

include 'conectar.php';

$id_user = $_POST['id_user'];
$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$senha_user = $_POST['senha_user'];
$tipo = $_POST['tipo'];

$connect->query("UPDATE logar SET nome_user = '$nome_user', email_user = '$email_user', senha_user = '$senha_user', tipo = '$tipo' WHERE id_user = '$id_user'");

echo "Dados atualizados com sucesso!";
echo"<meta http-equiv='refresh' content='5;url=listar.php'>";


?>