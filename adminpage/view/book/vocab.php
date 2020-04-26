<?php
$object=new vocab("","","","","");
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
                                <th class='sortStyle'>Content<i class='mdi mdi-chevron-down'></i></th>
                                <th class='sortStyle'>Meaning<i class='mdi mdi-chevron-down'></i></th>
                                <th class='sortStyle'>Example<i class='mdi mdi-chevron-down'></i></th>
                            </tr>
                        </thead>
                        <tbody>
                ";
                    foreach ($result as $res){
                        echo"
                            <tr class='tablevocab'>
                                <td class='id'>$res->id</td>
                                <td class='content'>$res->content</td>
                                <td class='meaning'>$res->meaning</td>
                                <td class='example'>$res->example</td>
                            </tr>
                        ";
                    }
                echo"
                            <tr>
                                <td colspan='4' style='text-align:center'>
            ";
                                    if ($_GET["page"]>$pagelimit){
                                        $page=(ceil(($_GET['page']/$pagelimit)-1)*$pagelimit);
                                        echo "<label class='pagi'><a  href='index.php?controller=book&action=vocab&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-left'></i><i class='mdi mdi-chevron-left'></i></a></label>";
                                    }
                                    $z=ceil(($_GET["page"])/$pagelimit)*$pagelimit-4;
                                    for ($i=$z;$i<=$z*$pagelimit;$i++){
                                        if ($i>$pages){
                                            break;
                                                }
                                        if ($i==$_GET["page"]){
                                            echo "<label class='pagi pagi-active'><a href='index.php?controller=book&action=vocab&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                        else{
                                            echo "<label class='pagi'><a href='index.php?controller=book&action=vocab&bookid={$_GET['bookid']}&page={$i}'>$i</a></label>";
                                        }
                                    } 
                                    if (ceil($_GET["page"]/$pagelimit)<$bigpage){
                                        $page=$pagelimit*ceil($_GET["page"]/$pagelimit)+1;
                                        echo "<label class='pagi'><a href='index.php?controller=book&action=vocab&bookid={$_GET['bookid']}&page={$page}'><i class='mdi mdi-chevron-right'></i><i class='mdi mdi-chevron-right'></i></a></label>";
                                    }
                            echo"        
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action='controller/changevocab.php' method='post'>
                        <table class='col-lg-4 table table-striped'>
                            <tr>
                                <td>ID</td>
                                <td><input id='id' name='id' type='text' readonly></td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td><input id='content' name='content' type='text' required></td>
                            </tr>
                            <tr>
                                <td>Meaning</td>
                                <td><input id='meaning' name='meaning' type='text' required></td>
                            </tr>
                            <tr>
                                <td>Example</td>
                                <td><input id='example' name='example' type='text' required></td>
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
                                        <button type='button' class='btnedit btncanclevocab btn btn-warning'>Hủy</button>
                                    </td>
                            </tr>
                        </table>
                    </form>
            </div>
        </div>
    </div>
        ";
?>