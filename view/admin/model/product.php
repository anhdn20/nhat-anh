<?php
    include_once 'database.php';
    function getAllproduct(){
        $sql="SELECT * from product order by id";
        return query($sql);
    }
    function getOneproduct($id){
        $sql="SELECT * from product where 1 AND id=".$id;
        return queryOne($sql);

    }
    function addNewproduct($catalogId,$name,$price,$img){
        $sql = "INSERT INTO product (catalog_id, name, price, image_link)
        VALUES ('$catalogId', '$name', '$price','$img')";
        return query($sql);
    }
    function updatepro($id,$name,$price, $discount,$img,$view){
        if($img!=""){
            $sql = "UPDATE product SET name='$name',image_link='$img',price='$price',discount='$discount',view='$view' where id=".$id;
        }
        else{
            $sql = "UPDATE product name='$name',price='$price',discount='$discount',view='$view' where id=".$id;
        }
        return execute($sql);
    }
   
    function removepro($id){
        $sql="DELETE from product where id=".$id;
        $conn=getConnection();
        $conn->exec($sql);
    }
?>