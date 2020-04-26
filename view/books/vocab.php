<?php
include "randvocab.php";
include "model/vocab.php";
    $object=new vocab("","","","","");
    $num=$object->count($_GET["bookid"]);
    $res=randvocab::tim($num);
    echo"
    <div class='main-panel'>
        <div class='content-wrapper'>
            <div class='row'>
                <div class='col-12'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='row portfolio-grid'>
                                        <div style='text-align:center' class='col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12'>
    ";
                                        if ($res==null){
                                            echo "<h3>Hết từ học rồi nha</h3>";
                                            echo"<a href='index.php?controller=books&action=vocab&bookid={$_GET["bookid"]}&page=1'><button class='btn btn-primary'>Học lại</button></a>";
                                        }
                                        else{
                                            echo "
                                                <h6 style='color:gray'><p>Click below to show meaning</p>{$_SESSION["count"]}/{$num} words</h6>
                                            <h3 style=' border-radius:20px;cursor:pointer;border:1px black solid; padding: 20px' class='contentvocab'>{$res->content}</h3>
                                            <h4 style=' border-radius:20px;cursor:pointer;display:none; border:1px black solid; padding: 20px' class='meanvocab' class='contentvocab'>
                                                Meaning: {$res->meaning}<br/><hr/>
                                                Example: {$res->example}
                                            </h4>";
                                            echo"<a href='index.php?controller=books&action=vocab&bookid={$_GET["bookid"]}&page=1'><button class='btn btn-primary'>Từ tiếp theo</button></a>";
                                        }
    echo"
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>";
?>