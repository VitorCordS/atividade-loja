<?php

session_start(); //Inicia a sessão
//Verifica se está definido
if(!isset($_SESSION["adm"])){
    header('Location: login.php');
}else {
    header("Location:App/views/adm_pages/adm_home.php ");
}

if(!isset($_SESSION["user"])){
    header('Location: login.php');
}else {
    header("Location:App/views/user_pages/user_home.php ");
}
