<?php
    include "controller/baseController.php";
    include "model/book.php";
    class addController extends baseController{
        function addController(){
            $this->folder="add";
        }
        function addbook(){
            $this->render("addbook",array("null"=>"null"));
        }
    }
?>