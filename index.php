<?php
    session_start();
    if (isset($_GET["page"])&&($_GET["page"]==='admin')){
        header("location:adminpage/index.php");
    }
    include_once "connection.php";
    if (isset($_GET["controller"])){
        $controller=$_GET["controller"];
        $action=$_GET["action"];
    }
    else{
        $controller="page";
        $action="home";
        $_GET["action"]="home";
    }
    include "route.php";
?>