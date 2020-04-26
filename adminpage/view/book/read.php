<?php
if (isset($_SESSION["message"])){
    echo"<script>alert('{$_SESSION["message"]}')</script>";
    unset($_SESSION["message"]);
}
$object=new read("","","","");
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
                                <th>Image<i class='mdi mdi-chevron-down'></i></th>
                            </tr>
                        </thead>
                        <tbody>
                ";
                    foreach ($result as $res){
                        echo"
                            <tr class='tablelist'>
                                <td class='id'>$res->id</td>
                                <td class='audio'>$res->audio</td>
                                <td><img src='../$res->image'></td>
                            </tr>
                        ";
                    }
                echo"
                                <td colspan='3' style='text-align:center'>
            ";
                                    if ($_GET["page"]>$pagelimit){
                                        $page=(ceil(($_GET['page']/$pagelimit)-1)*$pagelimit);
                                        echo "<label class='pagi'><a  href='index.php?controller=book&action=read&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-left'></i><i class='mdi mdi-chevron-left'></i></a></label>";
                                    }
                                    $z=ceil(($_GET["page"])/$pagelimit)*$pagelimit-4;
                                    for ($i=$z;$i<=($z+4);$i++){
                                        if ($i>$pages){
                                            break;
                                                }
                                        if ($i==$_GET["page"]){
                                            echo "<label class='pagi pagi-active'><a href='index.php?controller=book&action=read&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                        else{
                                            echo "<label class='pagi'><a href='index.php?controller=book&action=read&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                    } 
                                    if (ceil($_GET["page"]/$pagelimit)<$bigpage){
                                        $page=$pagelimit*ceil($_GET["page"]/$pagelimit)+1;
                                        echo "<label class='pagi'><a href='index.php?controller=book&action=read&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-right'></i><i class='mdi mdi-chevron-right'></i></a></label>";
                                    }
                            echo"        
                            </td>
                            </tbody>
                        </table>
                    </div>
                    <form action='controller/changeread.php' method='post' enctype='multipart/form-data'>
                        <table class='col-lg-4 table table-striped'>
                            <tr>
                                <td>ID</td>
                                <td><input id='id' name='id' type='text' readonly></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><input id='file' name='file' type='file'></td>
                            </tr>
                            <tr>
                                <td>Audio</td>
                                <td><input name='audio' type='file'></td>
                            </tr>
                            <tr>
                                <td>BookID</td>
                                <td><input name='bookid' type='text' value='{$_GET['bookid']}' readonly></td>
                            </tr>
                            <tr>
                                    <td colspan='2' style='text-align:center'>
                                        <button name='add' class='btnadd btn btn-primary' type='submit'>Thêm</button>
                                        <button name='edit' class='btnedit btn btn-dark' type='submit'>Sửa</button>
                                        <button name='delete' class='btnedit btn btn-danger' type='submit'>Xóa</button>
                                        <button class='btnadd btn btn-warning' type='reset'>Reset</button>
                                        <button type='button' class='btnedit btncancle btn btn-warning'>Hủy</button>
                                    </td>
                            </tr>
                        </table>
                    </form>
            </div>
        </div>
    </div>
        ";
?>