<?php
        include_once "model/catalog.php";
        // include "../model/danhmuc.php";
        // include "../model/sanpham.php";
        $page="index";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'index':
                    if(isset($_GET['iddel']) && ($_GET['iddel']>0)){
                        $id=$_GET['iddel'];
                        remove($id);
                    }
                    $dm = getAllcatalog();
                    include_once "view/catalog/index.php";
                    break;
                case 'addnew':
                    if(isset($_POST['them']) && ($_POST['them'])){
                        $namedm=$_POST['nameCata'];
                        if($namedm!=""){
                            themsp($namedm);
                            echo "bạn đã thêm sản phẩm mới thành công";
                        }else{
                            echo "bạn chưa điền thông tin";
                        }
                    }
                    include_once "view/catalog/addnew.php";
                    break;
                case 'edit':
                    if(isset($_GET['idedit']) && ($_GET['idedit']>0)){
                        $spedit=getOnecatalog($_GET['idedit']);
                    }
                    if(isset($_POST['update']) && ($_POST['update'])){
                        $id=$_POST['id'];
                        $name=$_POST['nameCata'];
                        update($id,$name);
                        $spedit=getOnecatalog($id);
                    }
                    include_once "view/catalog/edit.php";
                     break;
                case 'add-product':
                    include_once "view/catalog/add-product.php";
                    break;
                default:
                    include_once "view/home/index.php";
                    break;
            }
        }
?>