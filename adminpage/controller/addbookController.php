<?php
session_start();
    include "../model/book.php";
    $object = new book("","","");
    $namebook=$_POST["namebook"];
    $Fname=$_FILES["file"]["name"];
    $Fm=$_FILES["file"]["type"];
    $Fsize=$_FILES["file"]["size"];
        if (!$Fname==null){
            if ($Fm=="image/jpeg"||$Fm=="image/png"){
                $direction="images/book/";
                $temp=$_FILES["file"]["tmp_name"];
                $main=$_FILES["file"]["name"];
                move_uploaded_file($temp,'../../'.$direction.$main);
                $object->add($namebook,$direction.$main);
                $_SESSION["message"]="Thêm thành công";
            }
            else{
                $_SESSION["message"]="File không phải ảnh";
            }
        }
        else{
            $_SESSION["message"]="Chưa chọn ảnh sách";
        }
    header("location:../index.php?controller=add&action=addbook");
?>