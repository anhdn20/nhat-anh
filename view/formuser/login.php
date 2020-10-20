<form action="index.php?ctrl=formuser&page=login" method="post">
        <div class="login bglogin">
                <div class="boxlogin">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 m-0 p-0">
                                <div class="loginimg "><img src="view/images/login.jpg" alt=""></div>
                            </div>
                            <div class="col-md-6 m-0 p-0">
                                <div class="formlogin">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="display-4 text-center mt-4 mb-4">Đăng Nhập</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="user-name" id="" placeholder="Account">
                                                <span class="ml-5 text-danger"><?php if(isset($tk) && $tk!="") echo $tk; ?></span>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="password" name="pass" id="" placeholder="Password">
                                                    <span class="ml-5 text-danger"><?php if(isset($cbnull) && $cbnull!="") echo $cbnull; ?></span>
                                                    <span class="ml-5 text-danger"><?php if(isset($cbpass) && $cbpass!="") echo $cbpass; ?></span>                                      
                                                </div>                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-warning" name="dangnhap" value="dangnhap">Sign in</button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text-center">or</div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit " class="btn btn-primary">Facebook</button>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit " class="btn btn-danger">Gmail</button>
                                            </div>
                                            <div class="col-md-12">
                                                    <a href="" class="ml-5">Forgot the password ?</a>         
                                            </div>
                                            <div class="col-md-12 mt-5 ml-5">
                                                Don't Have an account? <a href="index.php?ctrl=formuser&page=register">Creat One</a>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
        