<?php
session_start();

include 'conectar.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$logar = $connect->query("SELECT * FROM logar WHERE email_user = '$login' AND senha_user = '$senha'");

while ($linha = mysqli_fetch_array($logar)) {
    $tipo = $linha['tipo'];
    $avatar = $linha['avatar'];
    $nome_user = $linha['nome_user'];

}

$contagem = mysqli_num_rows($logar);

If ($contagem == 1 && $tipo == 1) {
    $_SESSION['id_session'] = $id;
    $_SESSION['email_session'] = $login;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['avatar_session'] = $avatar;
    $_SESSION['tipo_session'] = $tipo;
    $_SESSION['nome_session'] = $nome_user;

    header('location: home.php');
    exit;
}

elseif ($contagem == 1 && $tipo == 2) {
    $_SESSION['id_session'] = $id;
    $_SESSION['email_session'] = $login;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['avatar_session'] = $avatar;
    $_SESSION['tipo_session'] = $tipo;
    $_SESSION['nome_session'] = $nome_user;

    header('location: home2.php');
    exit;
}

else {
    unset($_SESSION['id_session']);
    unset($_SESSION['email_session']);
    unset($_SESSION['senha_session']);
    unset($_SESSION['avatar_session']);
    unset($_SESSION['tipo_session']);
    unset($_SESSION['nome_session']);

    header('location: errorloginsenha.php');
    exit;
}


?>