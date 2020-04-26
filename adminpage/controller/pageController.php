<?php
    include "controller/baseController.php";
    include "model/book.php";
    class pageController extends baseController{
        function pageController(){
            $this->folder="page";
        }
        function home(){
            $object= new book("","","");
            $books=$object->all();
            $data=array("books"=>$books);
            $this->render("home",$data);
        }
        function login(){
            $this->render("login",array("null"=>"null"));
        }
        function error(){
            $this->render("error",array("null"=>"null"));
        }
    }
?>