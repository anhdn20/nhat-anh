<?php
        include_once "model/thongke.php";
        $page="index";
        if(isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page) {
                case 'index':
                    // if(isset($_GET['iddel']) && ($_GET['iddel']>0)){
                    //     $id=$_GET['iddel'];
                    //     remove($id);
                    // }
                    // $dm = getAllcatalog();
                    $solieu=getthongkebycataid();
                    include_once "view/thongke/index.php";
                    break;
               case 'chart':
                    $items=getthongkebycataid();
                    include_once "view/thongke/chart.php";
                break;
                default:
                    include_once "view/thongke/index.php";
                    break;
            }
        }
?>