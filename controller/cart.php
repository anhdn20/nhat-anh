<?php
        include_once "model/cart.php";

ob_start();
    
    $page="cart";
    if(isset($_GET['page'])){
        $page=$_GET['page'];

        switch ($page) {
            case 'cart':
                
                include_once "view/cart/cart.php";
            break;
            case 'addcart':
                if(isset($_POST['add']) && $_POST['add']){
                    $sl=$_POST['quantity'];
                }
                if(isset($_GET['sl']) && $_GET['sl']){
                    $sl=$_GET['sl'];              
               } 
                if(isset($_GET['idsp']) && $_GET['idsp']){
                    $id=$_GET['idsp'];
                    addToCart($id,$sl);               
               }    
                include_once "view/cart/cart.php";
            break;
            case 'delcart':
                // if(isset($_GET['idsp'])){
                   unset($_SESSION['carts'][$_GET['idsp']]);
                    // echo "<pre>"; 
                    // print_r(var_dump($_SESSION['carts'])); 
                    // echo "</pre>"; 
                // }
                include_once "view/cart/cart.php";
            break;
            case 'order':
                    if(isset($_POST['order']) && $_POST['order']){
                        if(isset($_SESSION['total'])){
                            $total=$_SESSION['total'];

                        }
                        $fname=$_POST['fullname'];
                        $add=$_POST['address'];
                        $note=$_POST['notes'];
                        $phone=$_POST['phone'];
                        $ngay=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
                        $madh=addToOrder($fname,$add,$note,$phone,$total,$ngay);
                        //luu chi tiet don hang
                        addToOrderDetail($madh);
                        unset($_SESSION['total']);
                        unset($_SESSION['carts']);//xoa gio hang
                       echo '<script type="text/javascript">
                                alert("Cám ơn bạn đã mua sản phẩm :)")
                            </script>';
                        echo '<script  type="text/javascript">
                                    window.location="index.php";
                            </script>';

                    }
                    include_once "view/cart/cart.php";
                break;
            default:
            include_once "view/cart/cart.php";
        break;
        }
    }
    
?>