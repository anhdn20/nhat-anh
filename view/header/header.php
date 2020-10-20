<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhatanhcute</title>
    <link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <header>
        <div class="menu1"></div>
        <div class="menu" id="menu_top">
            <div class="menu_logo">
                <a href="index.php"><img src="view/images/logo.webp" alt=""></a>
            </div>
            <div class="menu_mid" >
                <ul>
                <?php $ctrl = "home"; ?>
                    <?php
                        $dm1=getcataloglevel1();
                        
                        foreach ($dm1 as $dm1) {
                            $iddm1=$dm1['id'];
                            $dm2=getcataloglevel2($iddm1);
                            $link1="index.php?ctrl=".$dm1['ctrl']."&page=".$dm1['ctrl']."&idcatalog=".$dm1['id'];
                            if(isset($_GET['ctrl']) && ($_GET['ctrl'])){
                                $ctrl=$_GET['ctrl'];
                            }
                            if($ctrl==$dm1['ctrl']){
                                echo '<li class="active1">';
                            }else{
                                echo '<li>';
                            }
                            echo    '<a href="'.$link1.'">'.$dm1['name'].'</a>
                                    <ul>';
                                    foreach ($dm2 as $dm2) {
                                        $link2="index.php?ctrl=".$dm1['ctrl']."&page=".$dm1['ctrl']."&idcatalog=".$dm2['id'];
                                        echo '<li><a href="'.$link2.'">'.$dm2['name'].'</a></li>';
                                    }
                            echo '</ul></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="menu_last">
                <div class="infor_user">
                    <a href="index.php?ctrl=cart&page=cart"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" aria-labelledby="bagIconTitle" stroke="#a88e3f" stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#a88e3f"> <title id="bagIconTitle">Bag</title> <rect width="14" height="12" x="5" y="7"/> <path d="M8 7a4 4 0 1 1 8 0"/> </svg></a>
                        <?php if (isset($_SESSION['sid']) && $_SESSION['sid'] > 0) {
                            $user = $_SESSION['suser']; ?>
                            <div class="ifuser">
                                <div class="hovfucn arrowup"></div>
                                <div class="hovfucn thoat inout">
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                        <div class="col-md-12 mt-3"><h5 class="text-center"><?= $user ?></h5>
                                        <hr>
                                    </div>
                                        
                                        <div class="col-md-12">
                                            <a href="">Personal Profile</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">My Order</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Payment History</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="index.php?ctrl=formuser&page=user&thoat=1">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php
                        } else {
                             ?>
                            <div id="U">
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" aria-labelledby="peopleIconTitle" stroke="#a88e3f" stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#a88e3f"> <title id="peopleIconTitle">People</title> <path d="M1 18C1 15.75 4 15.75 5.5 14.25 6.25 13.5 4 13.5 4 9.75 4 7.25025 4.99975 6 7 6 9.00025 6 10 7.25025 10 9.75 10 13.5 7.75 13.5 8.5 14.25 10 15.75 13 15.75 13 18M12.7918114 15.7266684C13.2840551 15.548266 13.6874862 15.3832994 14.0021045 15.2317685 14.552776 14.9665463 15.0840574 14.6659426 15.5 14.25 16.25 13.5 14 13.5 14 9.75 14 7.25025 14.99975 6 17 6 19.00025 6 20 7.25025 20 9.75 20 13.5 17.75 13.5 18.5 14.25 20 15.75 23 15.75 23 18"/> <path stroke-linecap="round" d="M12,16 C12.3662741,15.8763472 12.6302112,15.7852366 12.7918114,15.7266684"/> </svg>
                                <div class="hovfucn arrowup"></div>
                                <div class="hovfucn dangnhap inout">
                                <a href="index.php?ctrl=formuser&page=login" ><svg role="img" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" aria-labelledby="entranceIconTitle" stroke="#a88e3f" stroke-width="1.2" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#a88e3f"> <title id="entranceIconTitle">Entrance</title> <path d="M11 15l3-3-3-3"/> <path d="M4.5 12H13"/> <path stroke-linecap="round" d="M14 12h-1"/> <path d="M18 4v16H7V4z"/> </svg> Sign in</a>
                                        <a href="index.php?ctrl=formuser&page=register"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" aria-labelledby="peopleIconTitle" stroke="#a88e3f" stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#a88e3f"> <title id="peopleIconTitle">People</title> <path d="M1 18C1 15.75 4 15.75 5.5 14.25 6.25 13.5 4 13.5 4 9.75 4 7.25025 4.99975 6 7 6 9.00025 6 10 7.25025 10 9.75 10 13.5 7.75 13.5 8.5 14.25 10 15.75 13 15.75 13 18M12.7918114 15.7266684C13.2840551 15.548266 13.6874862 15.3832994 14.0021045 15.2317685 14.552776 14.9665463 15.0840574 14.6659426 15.5 14.25 16.25 13.5 14 13.5 14 9.75 14 7.25025 14.99975 6 17 6 19.00025 6 20 7.25025 20 9.75 20 13.5 17.75 13.5 18.5 14.25 20 15.75 23 15.75 23 18"/> <path stroke-linecap="round" d="M12,16 C12.3662741,15.8763472 12.6302112,15.7852366 12.7918114,15.7266684"/> </svg>Sign up</a>
                                </div>
                            </div>
                        <?php
                        } ?>
                </div>
                <div class="search_box">
                <form action="index.php" method="get">
                    <a href=""><svg role="img" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" aria-labelledby="searchIconTitle" stroke="#a88e3f" stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#a88e3f"> <title id="searchIconTitle">Search</title> <path d="M14.4121122,14.4121122 L20,20"/> <circle cx="10" cy="10" r="6"/> </svg></a>
                    <input type="text" name="search" id="" placeholder="What do you find ?">
                    <input type="hidden" value="product" name="ctrl" >
                    <input type="hidden" value="search" name="page" >
                </form>
                    

                </div>
            </div>
        </div>
    </header>
    <?php if (isset($_GET['page']) && ($_GET['page'] == "login" || $_GET['page'] == "register" || $_GET['page'] == "product-detail" || $_GET['page'] == "search" || $_GET['ctrl'] == "cart") ) { ?>
     <?php } else { ?>
        
        <div class="slider">
            
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="slider_title slpo1">
                                <h2 class="text-left" id="slpo1-1">CocoChanel</h2>
                                
                                <h4 class="text-center" id="slpo1-2">Phụ nữ mà không dùng nước hoa thì không có tương lai</h4>
                            </div>
                            <img src="view/images/banner1.jpg" class="d-block "  alt="...">
                        </div>
                        <div class="carousel-item">
                            <div class="slider_title slpo2">
                                <h2 class="text-center" id="slpo2-1">Garden</h2>
                                <h5 class="text-right" id="slpo2-2">Of</h5>
                                <h3 class="text-right" id="slpo2-3">The Muse</h3>
                            </div>
                            <img src="view/images/banner2.jpeg" class="d-block "  alt="...">
                        </div>
                        <div class="carousel-item">
                            <div class="slider_title slpo3" >
                                <h5 class="text-right" id="slpo3-1">Ladies, a man will never remember your handbag, but he will remember your perfume</h5>
                            </div>
                            <img src="view/images/banner3.jpeg" class="d-block "  alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>