<?php
session_start();
    include "../model/read.php";
    $object=new read("","","","");
    $id=$_POST["id"];
    $bookid=$_POST["bookid"];
    if (isset($_POST["delete"])){
        $object->delete($id);
        $_SESSION["message"]="Xóa thành công";
    }
    else{
        if (isset($_FILES["audio"]["name"])){
            $Fname=$_FILES["audio"]["name"];
            $Fm=$_FILES["audio"]["type"];
            $Fsize=$_FILES["audio"]["size"];
                if (!$Fname==null){
                    $direction="audio/";
                    $temp=$_FILES["audio"]["tmp_name"];
                    $main=$_FILES["audio"]["name"];
                    move_uploaded_file($temp,'../../'.$direction.$main);
                    $audio=$direction.$main;
                }
                else{
                    $_SESSION["message"]="Chưa chọn audio";
                }
        }
        else{
            $ausio="";
        }
        //end-audio
        ///image
        $Fname=$_FILES["file"]["name"];
        $Fm=$_FILES["file"]["type"];
        $Fsize=$_FILES["file"]["size"];
            if (!$Fname==null){
                if ($Fm=="image/jpeg"||$Fm=="image/png"){
                    $direction="reading/";
                    $temp=$_FILES["file"]["tmp_name"];
                    $main=$_FILES["file"]["name"];
                    move_uploaded_file($temp,'../../'.$direction.$main);
                    if (isset($_POST["add"])){
                        $object->add($direction.$main,$audio,$bookid);
                        $_SESSION["message"]="Thêm thành công";
                    }
                    else{
                        $object->update($id,$direction.$main,$audio);
                        $_SESSION["message"]="Sửa thành công";
                    }
                }
                else{
                    $_SESSION["message"]="File không phải ảnh";
                }
            }
            else{
                $_SESSION["message"]="Chưa chọn ảnh bài đọc";
            }
    }
    header("location:../index.php?controller=book&action=read&bookid=$bookid&page=1");
?>