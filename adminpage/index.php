<?php
    session_start();
    include_once "connection.php";
    if (isset($_SESSION["admin"])){
        if (isset($_GET["controller"])){
            $controller=$_GET["controller"];
            $action=$_GET["action"];
        }
        else{
            $controller="page";
            $action="home";
            $_GET["controller"]='page';
            $_GET["action"]='home';
        }
    }
    else if (isset($_GET["controller"])&&!isset($_SESSION["admin"])){
        $controller="page";
        $_GET["action"]="error";
        $_GET["controller"]="page";
        $action="error";
    }
    else{
        $controller="page";
        $_GET["action"]="login";
        $_GET["controller"]="page";
        $action="login";
    }
    include "route.php";
?>