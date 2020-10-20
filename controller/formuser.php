<?php
    ob_start();
        include_once "model/user.php";
        $page="login";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'login':
                    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                        $user=$_POST['user-name'];
                        $pass=$_POST['pass'];
                        if(empty($user) || empty($pass)){
                            $cbnull="Vui lòng nhập đầy đủ thông tin";
                        }else{
                            $cbnull="";
                            $checktk=checkexistuser($user);
                            if($checktk){
                                $tk= "";
                                $checkpass=checkpassword($pass);
                                if($checkpass){
                                    $cbpass="";
                                    $checkuser=checkuser($user,$pass);
                                    if($checkuser){
                                        $_SESSION['sid']=$checkuser['id'];
                                        $_SESSION['suser']=$checkuser['name'];
                                        if($checkuser['role']==1) header("location: view/admin/index.php");
                                        else header('location: index.php');
                                    }
                                }else{
                                    $cbpass="Mật khẩu bạn nhập không đúng";
                                }
                            }else{
                                $tk= "Tài khoản của bạn không tồn tại";
                            }
                            
                        }
                        
                        
                        //cảnh báo 
                        
                    }
                    // $dm = getAllcatalog();
                    include_once "view/formuser/login.php";
                    break;
                case 'register':
                    if(isset($_POST['res']) && $_POST['res']){
                        $account=$_POST['act'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        if(empty($account) || empty($pass) || empty($email) || empty($phone) ){
                            $cbnull="Vui lòng nhập đủ thông tin";
                        }else{ 
                            
                            $checkmail='/[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}/';
                            if (preg_match($checkmail, $email)){
                                $checkm="";
                            }else{
                                $checkm="Email bạn nhập không hợp lệ";
                                
                            }
                            $cbnull="";
                            $checktk=checkexistuser($account);
                            if($checktk){
                                $cbtk="Tài khoản bạn nhập đã được đăng kí";
                            }else{
                                $cbtk="";
                                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                                if(strlen($pass) < 8 || strlen($pass) > 20 ){
                                    $cbdd="Mật khẩu không ít hơn 8 và không quá 20";
                                }else{
                                    $cbdd="";
                                    if (preg_match($pattern, $pass)){
                                        $checkmk="Mật khẩu không được có kí tự đặc biệt";
                                    }else{
                                        $checkmk="";
                                        
                                        register($account,$pass,$email,$phone);
                                        echo '<script>
                                            alert("Thank You Your Visit :) ");
                                        </script>';
                                    }
                                }
                                
                            }
                            
                        }
                    }             
                    include_once "view/formuser/register.php";
                    break;
                case 'user':
                    if(isset($_GET['thoat']) && ($_GET['thoat']==1)){
                        unset($_SESSION['sid']);
                        unset($_SESSION['suser']);
                        header('location: index.php');
                    }
                    // include_once "../view/login.php";
                    break;
                default:
                    include_once "view/formuser/login.php";
                    break;
            }
        }
        
?>