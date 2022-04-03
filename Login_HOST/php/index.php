
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>

</head>
<body>
</body>
    </html>
<?php

include 'conectar.php';

$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$senha_user = $_POST['senha_user'];
$tipo = $_POST['tipo'];

$avatar = "../avatares/";

$separador = explode(".", $avatar);
$separador = array_reverse($separador);


$up_avatar = $_FILES['avatar']['name'];


$testeemail = $connect->query("SELECT * FROM logar WHERE email_user ='$email_user'");
$checkemail = mysqli_num_rows($testeemail);

$testesenha = $connect->query("SELECT * FROM logar WHERE senha_user='$senha_user'");
$checksenha = mysqli_num_rows($testesenha);



If ($checkemail == 0 and $checksenha == 0) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar . $up_avatar);
    $up_avatarf = $avatar . $up_avatar;
    $connect->query("INSERT INTO logar (id_user, nome_user, email_user, senha_user, tipo, avatar) VALUES (default, '$nome_user', '$email_user', '$senha_user', '$tipo', '$up_avatarf')");
    echo"<meta http-equiv='refresh' content='0;url=sucesso.php'>";
    exit;
}

elseif ($checkemail == 1 and $checksenha == 1) {
    echo"<meta http-equiv='refresh' content='0;url=error.php'>";
    exit;
}

elseif ($checkemail == 1) {
    echo"<meta http-equiv='refresh' content='0;url=erroremail.php'>";
    exit;
}

elseif ($checksenha == 1) {
    echo"<meta http-equiv='refresh' content='0;url=errorsenha.php'>";
    exit;
}

?>




