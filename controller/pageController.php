<?php
    include "controller/baseController.php";
    include "model/admin.php";
    class pageController extends baseController{
        function pageController(){
            $this->folder="page";
        }
        function home(){
            $object= new admin("","","","","","");
            $admin=$object->all();
            $data=array("admin"=>$admin);
            $this->render("home",$data);
        }
        function error(){
            $this->render("error",array("null"=>"null"));
        }
    }
?>