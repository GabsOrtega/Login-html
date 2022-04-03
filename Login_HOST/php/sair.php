<?php

session_start();

unset($_SESSION['id_session']);
unset($_SESSION['nome_session']);
unset($_SESSION['email_session']);
unset($_SESSION['senha_session']);
unset($_SESSION['tipo_session']);
unset($_SESSION['avatar_session']);

session_destroy();

header("location: ../index.html");
exit;

?>