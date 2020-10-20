
<div class="login bglogin ">
                <div class="boxlogin">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 m-0 p-0">
                                <div class="loginimg "><img src="view/images/login.jpg" alt=""></div>
                            </div>
                            <div class="col-md-6 m-0 p-0">
                            <form action="index.php?ctrl=formuser&page=register" method="post">
                                <div class="formlogin">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h5 class="display-4 text-center mt-5 mb-5">Đăng Kí</h5>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="act" id="" placeholder="Account">
                                            <span class="ml-5 text-danger"><?php if(isset($cbtk) && $cbtk!="") echo $cbtk; ?></span>
                                        </div>
                                        <div class="col-md-12">
                                        <input type="password" name="pass" id="" placeholder="Password">
                                        <span class="ml-5 text-danger"><?php if(isset($checkmk) && $checkmk!="") echo $checkmk; ?></span>
                                        <span class="ml-5 text-danger"><?php if(isset($cbdd) && $cbdd!="") echo $cbdd; ?></span>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="email" id="" placeholder="Email">
                                            <span class="ml-5 text-danger"><?php if(isset($checkm) && $checkm!="") echo $checkm; ?></span>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="phone" id="" placeholder="Phone number">
                                            <span class="ml-5 text-danger"><?php if(isset($cbnull) && $cbnull!="") echo $cbnull; ?></span>
                                        </div>
                                        <div class="col-md-12">
                                        
                                            <button type="submit" name="res" value="res" class="btn btn-warning">Sign up</button>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <a href="index.php?ctrl=formuser&page=login"> * Sign in now * </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        