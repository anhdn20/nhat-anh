<?php
    include_once "model/catalog.php";
    include_once "model/product.php";
   
    $page="trademark";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'trademark':
                    if (isset($_GET['idcatalog']) && ($_GET['idcatalog']>0)) {
                        $iddm=$_GET['idcatalog'];
                        // $namecata=getOnecatalog($iddm);
                    }else{
                        $iddm=0;
                        // $namecata="";
                    }
                    $name1=getAllcatalogbyid($iddm);
                    include_once "view/trademark/trademark.php";
                    break;
                case 'product-detail':
                    if(isset($_GET['idsp'])&&($_GET['idsp'])){
                        $id=$_GET['idsp'];
                    }
                    $prodetail=getOneProduct($id);
                    include_once "view/product/product-detail.php";
                    break;
                
                default:
                    include_once "view/trademark/trademark.php";
                    break;
            }
        }
                
?>