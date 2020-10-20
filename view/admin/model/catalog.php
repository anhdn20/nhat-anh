<?php
    include_once 'database.php';
    function getAllcatalog(){
        $sql="SELECT * from catalog order by id";
        return query($sql);
    }
    function getOnecatalog($id){
        $sql="SELECT * from catalog where 1 AND id=".$id;
        return queryOne($sql);

    }
    function addNewCatalog($name){
        $sql="insert into catalog(name) values(".$name.")";
        echo $sql;
        return query($sql);
    }
    function update($id,$name){
        $sql = "UPDATE catalog SET name='$name' where id=".$id;
        return execute($sql);
    }

    function remove($id){
        $sql="DELETE from catalog where id=".$id;
        $conn=getConnection();
        $conn->exec($sql);
    }

    function themsp($name){
        $sql = "INSERT INTO catalog (name)
        VALUES ('$name')";
        $conn=getConnection();
        $conn->exec($sql);
    }
?>