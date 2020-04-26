<?php 
    echo "
    <div class='main-panel'>
        <div class='content-wrapper'>
            <div class='row'>
                <div class='col-12'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='row portfolio-grid'>
                                        <div class='col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12'>
                                            <a href='index.php?controller=add&action=addbook'>
                                                <figure class='addcat'>
                                                    <img src='../images/category/300x300/add.png' alt='image' />
                                                </figure>
                                            </a>
                                        </div>";
                                        foreach($books as $book){
                                        echo "
                                        <a href='index.php?controller=book&action=showfile&bookid={$book->id}'>
                                            <div class='col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12'>
                                                    <figure class='effect-text-in'>
                                                    <img src='../{$book->image}'alt='image' />
                                                        <figcaption>
                                                            <h4>{$book->namebook}</h4>
                                                            <p><a href='controller/deletebookController.php?bookid=$book->id' type='button' onClick='return confirm();' style='color:black'>Xóa</a></p>
                                                        </figcaption>
                                                    </figure>
                                            </div>
                                        </a>
                                        ";
                                        }
                                    echo"</div>
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