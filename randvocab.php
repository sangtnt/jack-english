<?php
    class randvocab{
        protected static function test($index){
            $mang=$_SESSION["mang"];
            if ($mang[$index]){
                return false;
            }
            else{
                $mang[$index]=true;
                $_SESSION["mang"]=$mang;
                return true;
            }
        }
        public static function tim($num){
            $count=$_SESSION["count"];
            do{
                if ($count==$num){
                    $_SESSION["mang"]=array_pad(array(),1000,false);
                    $_SESSION["count"]=$count=0;
                    return null;
                }
                $tao=rand(0,$num-1);
                $kq=randvocab::test($tao);
                if ($kq){
                    $_SESSION["count"]=$count+1;
                }
            }while($kq==false);
            $object=new vocab("","","","","");
            $res=$object->find($_GET["bookid"],$tao,1);
            return $res;
        }
    }
?>