<?php
    include "controller/baseController.php";
    include "model/lis.php";
    include "model/read.php";
    include "model/vocab.php";
    class bookController extends baseController{
        function bookController(){
            $this->folder="book";
        }
        function showfile(){
            $this->render("showfile",array(null=>null));
        }
        function lis(){
            $this->render("lis",array(null=>null));
        }
        function read(){
            $this->render("read",array(null=>null));
        }
        function vocab(){
            $this->render("vocab",array(null=>null));
        }
    }
?>