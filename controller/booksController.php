<?php
    include "controller/baseController.php";
    include "model/book.php";
    include "model/lis.php";
    include "model/read.php";
    class booksController extends baseController{
        function booksController(){
            $this->folder="books";
        }
        function index(){
            $object= new book("","","");
            $books=$object->all();
            $data=array("books"=>$books);
            $this->render("index",$data);
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