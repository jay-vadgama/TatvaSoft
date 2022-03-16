<!-- Login-Modal Starts -->
<section class="Login-Modal">

    <!-- The Modal -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <h3 class="title">Login to your account</h3>
                    <button type="button" class="btn close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form action="loginCheck.php" method="post">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" value="" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" value="" name="pass" placeholder="Password">
                                </div>
                                <div class="after-form">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Remember me</label>
                                    </div>
                                    <div class="forgot">
                                        <a href="" data-toggle="modal" data-target="#ForgotModal" data-dismiss="modal" class="forgot-pass"><p>Forgot Password?</p></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-login" name="login">Login</button>
                                </div>
                                <div class="after-btn">
                                    <p>Don't have an account?<a href="Customer-Registration.php"> Create an account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login-Modal Ends -->


<!-- Forgot-Modal Starts -->
<section class="Forgot-Modal">
    
    <!-- The Modal -->
    <div class="modal fade" id="ForgotModal">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <h3 class="title">Forgot password</h3>
                    <button type="button" class="btn close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form action="forgotPass.php" method="post">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-send" type="submit" name="send">Send</button>
                                </div>
                                <div class="after-btn">
                                    <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal"><p>Login Now!</p></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Forgot-Modal Ends -->