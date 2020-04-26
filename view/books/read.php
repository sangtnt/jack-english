<?php
    $object=new read("","","","");
    $num= $object->count($_GET["bookid"]);
    $maxrow=1;
    $pages=ceil($num/$maxrow);
    if ($_GET["page"]>$pages){
        $_GET["page"]=$pages;
    }
    if ($_GET["page"]==0){
        $_GET["page"]=1;
    }
    $pagelimit=5;
    $bigpage=ceil($pages/$pagelimit);
    $start=($_GET["page"]-1)*$maxrow;
    $result=$object->find($_GET["bookid"],$start,$maxrow);
    echo "
    <div class='main-panel'>
        <div class='content-wrapper'>";
            foreach($result as $res){
            echo"<div class='row'>
                <div class='col-12' style='text-align:center'>
                    <img src='{$res->image}' class='col-12 col-lg-8'>
                </div>
                <div class='col-12' style='text-align:center'>
                    <audio controls>
                        <source src='$res->audio'>
                    </audio>
                </div>
            </div>";
        }
        echo"<div class='row' style='text-align:center'>
                <div class='col-12'>";
                    if ($_GET["page"]>$pagelimit){
                        $page=(ceil(($_GET['page']/$pagelimit)-1)*$pagelimit);
                        echo "<label class='pagi'><a  href='index.php?controller=books&action=read&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-left'></i><i class='mdi mdi-chevron-left'></i></a></label>";
                    }
                    $z=ceil(($_GET["page"])/$pagelimit)*$pagelimit-4;
                    for ($i=$z;$i<=($z+4);$i++){
                        if ($i>$pages){
                            break;
                        }
                        if ($i==$_GET["page"]){
                            echo "<label class='pagi pagi-active'><a href='index.php?controller=books&action=read&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                        }
                        else{
                            echo "<label class='pagi'><a href='index.php?controller=books&action=read&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                        }
                    }   
                    if (ceil($_GET["page"]/$pagelimit)<$bigpage){
                        $page=$pagelimit*ceil($_GET["page"]/$pagelimit)+1;
                        echo "<label class='pagi'><a href='index.php?controller=books&action=read&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-right'></i><i class='mdi mdi-chevron-right'></i></a></label>";
                    }
        echo    "
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>";
    
?>