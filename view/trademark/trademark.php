<!-- name catalog danh mục -->
<div class="namedd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                        if (isset($_GET['ctrl']) && ($_GET['ctrl'])) {
                            $namecata=$_GET['ctrl'];
                            
                        }else{
                            
                            $namecata="";
                        }
                        $namecata1=ucfirst($namecata);
                        // $name1=getAllcatalogbyid($iddm);
                        echo '<p>Home / '.$namecata1.'';
                        
                        foreach ($name1 as $name1) {
                            $name=$name1['name'];
                            if(isset($name)){
                                $namee=$name1['name'];
                            }else{
                                $namee="";
                            }
                            echo " / ".$namee."</p>";
                        }
                   
                   
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-12 pro-filter">
            <ul>
                <h6>THƯƠNG HIỆU - </h6>
                <?php
                $TH=getcataloglevel2(3);
                $i=0;
                    foreach ($TH as $TH) {
                        $i+=1;
                        $link="index.php?ctrl=trademark&page=trademark&idcatalog=".$TH['id'];
                        echo '<li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Check'.$i.'" />
                                        <label class="form-check-label" for="Check'.$i.'">
                                        <a href="'.$link.'">  '.$TH['name'].'</a>  
                                        </label>
                                    </div>      
                            </li>';
                    }
                ?>
            </ul>
            <ul>
                <h6>SẢN PHẨM - </h6>
                <?php
                $TH=getcataloglevel2(2);
                $i=0;
                    foreach ($TH as $TH) {
                        $i+=1;
                        $link="index.php?ctrl=product&page=product&idcatalog=".$TH['id'];
                        echo '<li>
                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Checksp'.$i.'" />
                                        <label class="form-check-label" for="Checksp'.$i.'">
                                        <a href="'.$link.'">'.$TH['name'].'</a>  
                                        </label>
                                    </div>
                                       
                            </li>';
                    }
                ?>
            </ul>
            <ul>
                <h6>GIÁ SẢN PHẨM - </h6>
                <li>
                    <a href="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Checkg1" />
                            <label class="form-check-label" for="Checkg1">
                                Dưới 500.000đ
                            </label>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Checkg2" />
                            <label class="form-check-label" for="Checkg2">
                                500.000đ - 1.000.000đ
                            </label>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Checkg3" />
                            <label class="form-check-label" for="Checkg3">
                                1.000.000đ - 1.500.000đ
                            </label>
                        </div>
                    </a>

                </li>
                <li>
                    <a href="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Checkg4" />
                            <label class="form-check-label" for="Checkg4">
                                1.500.000đ - 2.000.000đ
                            </label>
                        </div>
                    </a>

                </li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="row mb40">
                <div class="col-md-9">
                    <h4>Tất cả sản phẩm</h4>
                </div>
                <div class="col-md-3">
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mới Nhất
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Bán chạy nhất</a>
                        <a class="dropdown-item" href="#">Giá thấp nhất</a>
                        <a class="dropdown-item" href="#">Giá cao nhất</a>
                    </div>
                    </div>
                
                </div>
            </div>
            <div class="row">
            <?php
              if(isset($_GET['trang'])&&($_GET['trang'])){
                $current_page=$_GET['trang'];
            }else{
                $current_page=1;
            }
            $countproduct=countproduct();
            foreach ($countproduct as $totalpro) {
                $totalproduct=$totalpro['tong'];
                // echo $totalproduct;
            }
             
            
            $totalpage=ceil($totalproduct/9);
            $offset=($current_page - 1) *9;
            // $propage=pagination($offset);
            $product=showproduct($iddm,$offset);
            foreach ($product as $pro) {
                $oldprice=$pro['price'];
                $oldprice1=formatMoney($oldprice);
                $disc=$pro['discount'];
                $reduceprice=($disc*$oldprice)/100;
                $newprice=$oldprice-$reduceprice;
                $newprice1=formatMoney($newprice);
                $lin1="index.php?ctrl=cart&page=addcart&sl=1&idsp=".$pro['id'];
                $link="index.php?ctrl=product&page=product-detail&idsp=".$pro['id'];
                echo '<div class="col-md-4 col-sm-6">   
                    <div class="product_box">
                        <div class="product_img">
                            <img src="view/images/'.$pro['image_link'].'" alt="" />
                        </div>
                        <div class="product_inf">
                            <h6>'.$pro['name'].'</h6>
                            <p>'.$newprice1.'đ <span> '.$oldprice1.'đ</span></p>
                        </div>
                        <div class="product_inf1 inf1_1 ">
                            <a href="'.$link.'"> Xem chi tiết</a>
                        </div>
                        <div class="product_inf1 inf1_2">
                            <a href="'.$lin1.'"> Thêm giỏ hàng</a>
                        </div>
                    </div>                   
                </div>';
            }
        ?>
        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination">
                <?php
                    $page=1;
                    for ($i=1; $i < $totalpage+1; $i++) { 
                        if(isset($_GET['trang']) && ($_GET['trang'])){
                            $page=$_GET['trang'];
                        }
                        if($i==$page){
                            echo '<a href="index.php?ctrl=trademark&page=trademark&idcatalog='.$iddm.'&trang='.$i.'" class="active">'.$i.'</a>';
                        }else{
                            echo '<a href="index.php?ctrl=trademark&page=trademark&idcatalog='.$iddm.'&trang='.$i.'">'.$i.'</a>';
                        }
                        
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>