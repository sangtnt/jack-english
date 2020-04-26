<?php
    include "../connection.php";
    include "../model/admin.php";
    if (isset($_POST["username"])&&isset($_POST["password"])){
        $username=$_POST["username"];
        $password=$_POST["password"]; echo $username;echo $password;
        $object=new admin("","","","","","");
        $result=$object->find($username,$password);
        if ($result){
            session_start();
            session_unset();
            $_SESSION["admin"]=$object->findDetail($username,$password);
            header("location:../index.php?controller=page&action=home");
        }
        else{
            session_start();
            $_SESSION["message"]="Tài khoản hoặc mật khẩu sai";
            header("location:../index.php");
        }
    }
    else{
        //header("location:../index.php?controller=page&action=error");
    }
?>