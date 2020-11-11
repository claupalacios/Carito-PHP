<?php

require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../views/Inicio.php';
require '../models/Login.php';


session_start(); //no olvidar

if(isset($_POST["mail"])){
    $e=new Login;
    $todos=$e->logueo($_POST["mail"],$_POST["contrasena"]);


    if($todos){
        $_SESSION["login"]=true; //flag 
        header("Location:../paginaprincipal.php");
        exit;
    }
        else{$huboerror=true;}
    

}



$e=new Inicio;  //controler pide datos a modelo
$e->render();

?>
