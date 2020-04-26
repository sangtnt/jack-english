<?php
session_start();
    include "../model/lis.php";
    $object=new lis("","","");
    $id=$_POST["id"];
    $bookid=$_POST["bookid"];
    if (isset($_POST["delete"])){
        $object->delete($id);
    }
    else{
        //audio
        $Fname=$_FILES["file"]["name"];
        $Fm=$_FILES["file"]["type"];
        $Fsize=$_FILES["file"]["size"];
            if (!$Fname==null){
                $direction="audio/";
                $temp=$_FILES["file"]["tmp_name"];
                $main=$_FILES["file"]["name"];
                move_uploaded_file($temp,'../../'.$direction.$main);
                $audio=$direction.$main;
            }
            else{
                $_SESSION["message"]="Chưa chọn audio";
            }
        //end-audio
        if (isset($_POST["add"])){
            $object->add($audio,$bookid);
        }
        else{
            $object->update($id,$audio);
        }
    }
    header("location:../index.php?controller=book&action=lis&bookid=$bookid&page=1");
?>