<?php
    include "../model/vocab.php";
    $object=new vocab("","","","","");
    $id=$_POST["id"];
    $content=$_POST["content"];
    $meaning=$_POST["meaning"];
    $example=$_POST["example"];
    $bookid=$_POST["bookid"];
    if (isset($_POST["add"])){
        $object->add($content,$example,$meaning,$bookid);
    }
    else if(isset($_POST["edit"])){
        $object->update($id,$content,$example,$meaning);
    }
    else{
        $object->delete($id);
    }
    header("location:../index.php?controller=book&action=vocab&bookid=$bookid&page=1");
?>