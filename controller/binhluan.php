<?php
    session_start();
    include_once "../model/binhluan.php";
    include_once "../view/admin/global.php";
    include_once "../model/user.php";
    if(isset($_SESSION['sid']) && ($_SESSION['sid']>0)){
        if(isset($_SESSION['sid']) && ($_SESSION['sid']!="")){
            $user=$_SESSION['suser'];
        }else $user="";
        if(isset($_POST['sent']) && ($_POST['sent'])){
            $iduser=$_SESSION['sid'];
            $idsp=$_POST['idsp'];
            $name=$_POST['name'];
            $noidung=$_POST['cmt'];
            thembl($iduser,$noidung,$name,$idsp);
            
        }
        if(isset($_GET['idsp']) && ($_GET['idsp'])>0){
            $bl=showbl($_GET['idsp']);
        }
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
</head>
<body>              

                    <div class="boxuser"><?=$user;?></div>
                    <div class="boxcmt">  
                        <form action="binhluan.php?idsp=<?=$_GET['idsp'];?>" method="post">
                        <textarea name="cmt" id="" cols="120" rows="3" placeholder="comment đi bạn êi"></textarea>
                        <input type="hidden" name="name" value="<?=$user;?>">
                        <input type="hidden" name="idsp" value="<?=$_GET['idsp'];?>">
                        <input type="submit" value="Gửi đi" name="sent">
                        </form>
                    </div>
                    <div class="ten">
                    <?php    
                            foreach ($bl as $bl) {
                                $nd=$bl['noidung'];
                                $u=showuser($bl['iduser']);
                                foreach ($u as $u) {
                                    $img=$path.$u['img'];
                                    if(is_file($img)){
                                        $img="<img src=".$img." width='100%'>";
                                    }else{
                                        $img="";
                                    }
                                }
                                
                                echo '<div class="user-circle">'.$img.'</div>
                                <div class="cmt-show">
                                <p>'.$nd.'</p>
                                </div>   
                                ';
                            }
                        ?>
                        </div>
                    
                    
</body>
</html>
<?php         
    }else{
        echo "<p>Bạn vui lòng đăng nhập để comment!</p>";
    }
    ?>  