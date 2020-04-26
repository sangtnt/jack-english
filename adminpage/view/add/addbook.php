<?php
    if (isset($_SESSION["message"])){
        echo"<script>alert('{$_SESSION["message"]}')</script>";
        unset($_SESSION["message"]);
    }
    echo "
    <div class='main-panel grid-margin stretch-card'>
    <div class='content-wrapper'>
        <div class='card'>
            <div class='card-body'>
                <h4 class='card-title'>Thêm sách</h4>
                <form action='controller/addbookController.php' method='post' class='forms-sample'enctype='multipart/form-data'>
                    <div class='form-group row'>
                        <label for='exampleInputUsername2' class='col-sm-3 col-form-label'>Tên danh mục</label>
                        <div class='col-sm-9'>
                            <input name='namebook' type='text' class='form-control' id='exampleInputUsername2' required/>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label for='exampleInputEmail2' class='col-sm-3 col-form-label'>Hình ảnh</label>
                        <div class='col-sm-4 grid-margin stretch-card'>
                            <div class='card'>
                                <div class='card-body'>
                                  <h4 class='card-title d-flex'>Dropify
                                    <small class='ml-auto align-self-end'>
                                    </small>
                                  </h4>
                                  <input name='file' type='file' class='dropify' required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-primary mr-2'>Thêm</button>
                    <a href='index.php'><button type='button' class='btn btn-danger'>Hủy</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
    ";
?>