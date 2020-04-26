<?php
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
                                            <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12'>
                                                <a href='index.php?controller=book&action=vocab&bookid={$_GET["bookid"]}&page=1'>
                                                    <figure class='effect-text-in'>
                                                        <img src='../images/category/300x300/vocab.jpg'
                                                            alt='image' />
                                                        <figcaption>
                                                            <p>Vocabulary</p>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12'>
                                                <a href='index.php?controller=book&action=read&bookid={$_GET['bookid']}&page=1'>
                                                    <figure class='effect-text-in'>
                                                        <img src='../images/category/300x300/read.jpg'
                                                            alt='image' />
                                                        <figcaption>
                                                            <p>Reading</p>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12'>
                                                <a href='index.php?controller=book&action=lis&bookid={$_GET["bookid"]}&page=1'>
                                                    <figure class='effect-text-in'>
                                                        <img src='../images/category/300x300/lis.png'
                                                            alt='image' />
                                                        <figcaption>
                                                            <p>Listening</p>
                                                        </figcaption>
                                                    </figure>
                                                </a>
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