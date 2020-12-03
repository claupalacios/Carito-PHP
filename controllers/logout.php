<?php

require '../fw/fw.php';

session_start();

unset($_SESSION['logueado']);

header("Location:PaginaPrincipal");
exit;

?>
