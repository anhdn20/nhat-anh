<?php
    include_once 'database.php';
    include_once 'catalog.php';
    function getAllProduct(){
        $sql="SELECT * from product order by id";
        return query($sql);
    }
    function getOneProduct($id){
        $sql="SELECT * from product where 1 AND id=".$id;
        return queryOne($sql);

    }
    function gethotProduct(){
        $sql="SELECT * from product where view>20 order by id";
        return query($sql);
    }
    function getLimitProduct(){
        $sql="SELECT * from product where amount<10 order by id";
        return query($sql);
    }
    function getelesProduct(){
        $sql="SELECT * from product where buyed>0 order by id";
        return query($sql);
    }
    function showproduct($idcat,$offset){
        $par=getOnecatalog($idcat);
        $pa=$par['parent'];
        if($pa==0 && $idcat==2 || $pa==2){
            $sql = "select * 
            from catalog dm inner join product sp
            on dm.id= sp.catalog_id";
        }else{
            $sql = "select * 
            from catalog dm inner join product sp
            on dm.id= sp.id_trademark";
        }
        if($pa==0){
            $sql.=" where dm.parent =".$idcat;
        }
         if($pa==2){
            $sql.=" where sp.catalog_id=".$idcat;
        }
        if($pa==3){
            $sql.=" where sp.id_trademark=".$idcat;
        }   
        $sql.=" ORDER BY sp.id ASC LIMIT 9 offset ".$offset;
        return query($sql);
   
    }
    function countproduct(){
        $sql="SELECT count(id) as tong from product";
        return query($sql);
    }
    function getSearchProduct($keyword){
        $sql = "select * from product where name like '%".$keyword."%'";
        return query($sql);
    }
    function getimgdetail($id){
        $sql="SELECT * from product, img_detail
            where product.image_id=img_detail.id AND product.id=".$id;
            return query($sql);
    }
?>