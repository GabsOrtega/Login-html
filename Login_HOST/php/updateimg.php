<?php


include 'conectar.php';

$id_user = $_POST['id_user'];

$new_avatar = "../avatares/";

$separar = explode(".", $new_avatar);
$separar = array_reverse($separar);



$new_up_avatar = $_FILES['avatar']['name'];

$fotobanco = $new_avatar . $new_up_avatar;



$connect->query("UPDATE logar SET avatar = '$fotobanco' WHERE id_user = '$id_user'");

move_uploaded_file($_FILES['avatar']['tmp_name'],  $new_avatar . $new_up_avatar);

echo"Avatar atualizado com sucesso!";
echo"<meta http-equiv='refresh' content='3;url=listar.php'>";



/* $avatar = "../avatares/";

$separador = explode(".", $avatar);
$separador = array_reverse($separador); */


/* $up_avatar = $_FILES['avatar']['name']; */


//move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar . $up_avatar);
    //$up_avatarf = $avatar . $up_avatar;

?>
