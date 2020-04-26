<?php
if (isset($_SESSION["message"])){
    $message=$_SESSION["message"];
}
else{
    $message="";
}
echo "<div class='container-fluid'>
    <div class='container-fluid page-body-wrapper full-page-wrapper'>
        <div class='content-wrapper d-flex align-items-stretch auth auth-img-bg'>
            <div class='row flex-grow'>
                <div class='col-lg-6 d-flex align-items-center justify-content-center'>
                    <div class='auth-form-transparent text-left p-3'>
                        <div class='brand-logo'>
                            <img src='../images/logo1.png' alt='logo' />
                        </div>
                        <h6 style='color:red' class='font-weight-light'>{$message}</h6>
                        <form action='controller/loginController.php' method='post' class='pt-3'>
                            <div class='form-group'>
                                <label for='exampleInputEmail'>Username</label>
                                <div class='input-group'>
                                    <div class='input-group-prepend bg-transparent'>
                                        <span class='input-group-text bg-transparent border-right-0'>
                                            <i class='mdi mdi-account-outline text-primary'></i>
                                        </span>
                                    </div>
                                    <input name='username' type='text' class='form-control form-control-lg border-left-0'
                                        id='exampleInputEmail' placeholder='Username' required/>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputPassword'>Password</label>
                                <div class='input-group'>
                                    <div class='input-group-prepend bg-transparent'>
                                        <span class='input-group-text bg-transparent border-right-0'>
                                            <i class='mdi mdi-lock-outline text-primary'></i>
                                        </span>
                                    </div>
                                    <input name='password' type='password' class='form-control form-control-lg border-left-0'
                                        id='exampleInputPassword' placeholder='Password' required/>
                                </div>
                            </div>
                            <div class='my-2 d-flex justify-content-between align-items-center'>
                                <div class='form-check'>
                                    <label class='form-check-label text-muted'>
                                        <input type='checkbox' class='form-check-input' />
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href='#' class='auth-link text-black'>Forgot password?</a>
                            </div>
                            <div class='my-3'>
                                <button type='submit' class='btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn'>LOGIN</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class='col-lg-6 login-half-bg d-flex flex-row'>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>";
?>