<?php
include_once "database.php";
function showbl($id){
    $sql="select * from comment where idsp=".$id." order by id desc";
    return query($sql);
}
function thembl($iduser,$noidung,$name,$idsp){
    $sql = "INSERT INTO comment (name, noidung, idsp, iduser)
    VALUES ('$name', '$noidung', '$idsp', '$iduser')";
    $conn=getConnection();
    $conn->exec($sql);
}?>