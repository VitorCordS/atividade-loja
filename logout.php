<?php
//Inicia a sessão
session_start(); 
//Destrói um registro em uma sessão
unset($_SESSION["adm"]);
unset($_SESSION["user"]);
//Destrói todos os dados registrados em uma sessão
session_destroy();
//Redirecionar
header('Location: index.php');