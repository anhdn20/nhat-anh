<?php
    include_once 'database.php';
    function getthongkebycataid(){
        $sql="SELECT catalog.name, COUNT(product.id)
              as tongso
              FROM catalog, product
              WHERE catalog.id=product.catalog_id
              GROUP BY catalog.name";
        return query($sql);
    }

?>