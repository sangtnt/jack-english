<?php
$object=new lis("","","");
$num= $object->count($_GET["bookid"]);
$maxrow=5;
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
    echo"
    <div class='main-panel'>
        <div class='content-wrapper'>
            <div class='row'>
                <div class='table-sorter-wrapper col-lg-12 table-responsive'>
                    <table id='sortable-table-2' class='table table-striped table-success'>
                        <thead >
                            <tr>
                                <th>#</th>
                                <th class='sortStyle'>Audio<i class='mdi mdi-chevron-down'></i></th>
                            </tr>
                        </thead>
                        <tbody>
                ";
                    foreach ($result as $res){
                        echo"
                            <tr class='tablelist'>
                                <td>$res->id</td>
                        ";
                        if ($res->audio!==''){
                        echo"
                                <td>
                                    <audio controls>
                                        <source src='$res->audio'>
                                    </audio>
                                </td>
                        ";
                        }else{
                            echo"
                                <td style='color:red'>
                                    Chưa có file listening
                                </td>
                        ";
                        }
                        echo"
                            </tr>
                        ";
                    }
                echo"
                                <td colspan='3' style='text-align:center'>
            ";
                                    if ($_GET["page"]>$pagelimit){
                                        $page=(ceil(($_GET['page']/$pagelimit)-1)*$pagelimit);
                                        echo "<label class='pagi'><a  href='index.php?controller=books&action=lis&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-left'></i><i class='mdi mdi-chevron-left'></i></a></label>";
                                    }
                                    $z=ceil(($_GET["page"])/$pagelimit)*$pagelimit-4;
                                    for ($i=$z;$i<=$z+4;$i++){
                                        if ($i>$pages){
                                            break;
                                                }
                                        if ($i==$_GET["page"]){
                                            echo "<label class='pagi pagi-active'><a href='index.php?controller=books&action=lis&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                        else{
                                            echo "<label class='pagi'><a href='index.php?controller=books&action=lis&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                    } 
                                    if (ceil($_GET["page"]/$pagelimit)<$bigpage){
                                        $page=$pagelimit*ceil($_GET["page"]/$pagelimit)+1;
                                        echo "<label class='pagi'><a href='index.php?controller=books&action=lis&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-right'></i><i class='mdi mdi-chevron-right'></i></a></label>";
                                    }
                            echo"        
                            </td>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
        ";
?>