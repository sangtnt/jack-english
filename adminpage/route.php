<?php
    $listController=array("page"=>["home","login","error"],"add"=>["addbook"],"book"=>["showfile","lis","vocab","read"]);
    if (!array_key_exists($controller,$listController)||!in_array($action,$listController[$controller])){
        header("location: index.php?controller=page&action=error");
    }
    include "controller/{$controller}Controller.php";
    $class_temp="{$controller}Controller";
    
    $object=new $class_temp;
    $object->$action();
?>