<?php
    foreach($admin as $admin){
        $_SESSION["image"]=$admin->image;
    echo"
    <div class='main-panel'>
        <div class='content-wrapper'>
            <div class='row'>
                <div class='col-12'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class='border-bottom text-center pb-4'>
                                        <img src='{$admin->image}' alt='profile' class='img-lg rounded-circle mb-3' />
                                    </div>
                                    <div class='d-block d-md-flex justify-content-between mt-4 mt-md-0'>
                                        <div>
                                            <h3 class='text-center text-md-left'>{$admin->fullname}</h3>
                                        </div>
                                        <div class='text-center mt-4 mt-md-0'>
                                        </div>
                                    </div>
                                    <div class='py-4'>
                                        <p class='clearfix'>
                                            <span class='float-left'>
                                                Số điện thoại:
                                            </span>
                                            <span class='float-right text-muted'>
                                                {$admin->phone}
                                            </span>
                                        </p>
                                        <p class='clearfix'>
                                            <span class='float-left'>
                                                Ngày sinh:
                                            </span>
                                            <span class='float-right text-muted'>
                                                22/09/2001
                                            </span>
                                        </p>
                                        <p class='clearfix'>
                                            <span class='float-left'>
                                                School:
                                            </span>
                                            <span class='float-right text-muted'>
                                                <a target='blank' href='https://www.facebook.com/uogvietnam/'>{$admin->address}</a>
                                            </span>
                                        </p>
                                        <p class='clearfix'>
                                            <span class='float-left'>
                                                Mail:
                                            </span>
                                            <span class='float-right text-muted'>
                                                SangTNTGCS190019@fpt.edu.vn
                                            </span>
                                        </p>
                                        <p class='clearfix'>
                                            <span class='float-left'>
                                                Facebook:
                                            </span>
                                            <span class='float-right text-muted'>
                                                <a target='blank' href='https://www.facebook.com/tansang.trannguyen.1'>Nguyễn Trần Tấn Sang</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }
?>