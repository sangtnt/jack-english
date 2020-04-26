<?php
    $listController=array("page"=>["home","error"],"books"=>["index","showfile","lis","read","vocab"]);
    if (!array_key_exists($controller,$listController)||!in_array($action,$listController[$controller])){
        header("location:index.php?controller=page&action=error");
    }
    include "controller/{$controller}Controller.php";
    $class_temp="{$controller}Controller";
    $object=new $class_temp;
    $object->$action();
?>