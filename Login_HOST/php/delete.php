<?php
include 'session_home.php';

If ($_SESSION['tipo_session'] != 1){
    session_destroy();
    echo"<meta http-equiv='refresh' content='0;url=../index.html'>";
    exit;
  }

include 'conectar.php';

$email2 = $_SESSION['email_session'];
$email_user = $_GET["email_user"];



$dados = $connect->query("SELECT * FROM logar WHERE email_user = '$email_user'");

while ($linha = mysqli_fetch_array($dados)) {
    $avatar = $linha['avatar'];

}

If ($email2 == $email_user) {
    unlink("$avatar");
    mysqli_query($connect, "DELETE FROM logar WHERE email_user = '$email_user'");
    session_destroy();
    echo"<meta http-equiv='refresh' content='0;url=../index.html'>";
    exit;
}

elseif ($email2 != $email_user) {
    unlink("$avatar");
    mysqli_query($connect, "DELETE FROM logar WHERE email_user = '$email_user'");
    echo"<meta http-equiv='refresh' content='0;url=listar.php'>";
    exit;
}