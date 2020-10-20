<?php
        include_once "model/product.php";
        include_once "model/catalog.php";
        include_once "global.php";
        $page="index";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'index':
                    
                    include_once "view/catalog/index.php";
                    break;
                case 'add-product':
                     // thêm sản phẩm mới 
                    if(isset($_POST['them']) && ($_POST['them'])){
                        //lay du lieu tu form
                        $catalogId=$_POST['nameCataID'];
                        $price=$_POST['productPrice'];
                        $name=$_POST['productName'];
                        $img=$_FILES['productImage']['name'];
                        //upload hinh
                        $target_file = $path . basename($img);
                        if(move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)){
                         $err_upload="tải lên thành công";
                        }else{
                         $err_upload="failed";
                        }
                        addNewproduct($catalogId,$name,$price,$img);
                        // if($namedm!=""){
                        //     themsp($namedm);
                        //     echo "bạn đã thêm sản phẩm mới thành công";
                        // }else{
                        //     echo "bạn chưa điền thông tin";
                        // }
                    }

                    $dm=getAllcatalog();
                    include_once "view/product/add-product.php";
                    break;
                case 'manager-product':
                    if(isset($_GET['iddel']) && ($_GET['iddel']>0)){
                        $id=$_GET['iddel'];
                        removepro($id);
                    }
                    // xóa những mục được chọn
                    
                    if(isset($_POST['xoa']) && ($_POST['xoa'])){
                        $sp=$_POST['acs'];
                        $sp1=count($sp);
                        for ($i=0; $i < $sp1 ; $i++) { 
                            removepro($sp[$i]);
                        }
                    }
                    $dm=getAllproduct();
                    include_once "view/product/manager-product.php";
                    break;
                case 'edit-product':
                    if(isset($_GET['idedit']) && ($_GET['idedit']>0)){
                        $spedit=getOneproduct($_GET['idedit']);
                    }
                    if(isset($_POST['update']) && ($_POST['update'])){
                        $id=$_POST['id'];
                        $name=$_POST['nameCata'];
                        $price=$_POST['price'];
                        $discount=$_POST['discount'];
                        $img=$_POST['img'];
                        $view=$_POST['view'];
                        updatepro($id,$name,$price, $discount,$img,$view);
                        $spedit=getOneproduct($id);
                    }
                    
                    include_once "view/product/edit-product.php";
                     break;
                    break;
                default:
                    include_once "view/home/index.php";
                    break;
            }
        }
?>