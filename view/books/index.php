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
                                    <div class='row portfolio-grid'>";
                                        foreach($books as $book){
                                        echo "
                                            <div class='col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12'>
                                                <a href='index.php?controller=books&action=showfile&bookid={$book->id}'>
                                                    <figure class='effect-text-in'>
                                                        <img src='{$book->image}'
                                                            alt='image' />
                                                        <figcaption>
                                                            <h4>{$book->namebook}</h4>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
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