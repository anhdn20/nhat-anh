<?php
    include_once "model/catalog.php";
    include_once "model/product.php";
    
    $page="product";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'product':
                    if (isset($_GET['idcatalog']) && ($_GET['idcatalog']>0)) {
                        $iddm=$_GET['idcatalog'];
                    }else{
                        $iddm=0;
                    }
                    $name1=getAllcatalogbyid($iddm);
                    include_once "view/product/product.php";
                    break;
                case 'product-detail':
                    if(isset($_GET['idsp'])&&($_GET['idsp'])){
                        $id=$_GET['idsp'];
                    }
                    
                    $prodetail=getOneProduct($id);
                    
                    include_once "view/product/product-detail.php";
                    break;
                case 'search':
                    if(isset($_GET['search'])){
                        $tu=$_GET['search'];
                        getSearchProduct($tu);  
                    }
                    $search=getSearchProduct($tu); 
                    include_once "view/search/search.php";
                    break;
                default:
                    include_once "view/product/product.php";
                    break;
            }
        }
                
?>