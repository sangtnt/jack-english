<?php
    include "../model/book.php";
    $id =$_GET["bookid"];
    $object= new book("","","");
    $object->delete($id);
    header("location:../index.php");
?>