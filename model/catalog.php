<?php
    include_once 'database.php';
    function getAllcatalog(){
        $sql="SELECT * from catalog order by id";
        return query($sql);
    }
    function getAllcatalogbyid($id){
        $sql="SELECT * from catalog where id=".$id." AND parent!=0";
        return query($sql);
    }
    function getOnecatalog($id){
        $sql="SELECT * from catalog where 1 AND id=".$id;
        return queryOne($sql);

    }
    function getcataloglevel1(){
        $sql="SELECT * from catalog where parent=0";
        return query($sql);
    }
    function getcataloglevel2($id_parent){
        $sql="SELECT * from catalog where parent=".$id_parent;
        return query($sql);
    }
    function formatMoney($number, $fractional=false) {  
        if ($fractional) {  
            $number = sprintf('%.2f', $number);  
        }  
        while (true) {  
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
            if ($replaced != $number) {  
                $number = $replaced;  
            } else {  
                break;  
            }  
        }  
        return $number;  
    }
?>