<?php
    if(!is_array($prodetail)){
        echo 'No information';
    }else{
        $name=$prodetail['name'];
        $lin1="index.php?ctrl=cart&page=addcart&idsp=".$prodetail['id'];
        $priold=$prodetail['price'];
        $priold1=formatMoney($priold);
        $dis=$prodetail['discount'];
        $prireduce=($dis*$priold)/100;
        $prinew=$priold-$prireduce;
        $prinew1=formatMoney($prinew);
        $sl=$prodetail['amount'];
        $link="index.php?ctrl=cart&page=addcart&idsp=".$prodetail['id'];
        if($sl==0) $tt="Hết hàng";
        else $tt="Còn hàng";
        $img="view/images/".$prodetail['image_link'];
        if(is_file($img)){
            $img='<img src="'.$img.'" >';
        }else $img='';
    }
?>
<div class="container ">
    <div class="row p-0 ">
        <div class="col-md-4 mt-5">
            <div class="pro_detail_img">
                <div class="pro_detail_img_main">
                    <?=$img;?>
                </div>
                <div class="pro_detail_img_more">
                    <?php
                    $img_detail=getimgdetail($id);
                    foreach ($img_detail as $img) {
                        $img1=$img['img1'];
                        $img2=$img['img2'];
                        $img3=$img['img3'];
                        $imgall1="view/images/".$img1;
                        $imgall2="view/images/".$img2;
                        $imgall3="view/images/".$img3;
                        if(is_file($imgall1)){
                            $imgall1 = '<img src="'.$imgall1.'" >';
                        }else{
                            $imgall1="";
                        }
                        if(is_file($imgall2)){
                            $imgall2 = '<img src="'.$imgall2.'" >';
                        }else{
                            $imgall2="";
                        }
                        if(is_file($imgall3)){
                            $imgall3 = '<img src="'.$imgall3.'" >';
                        }else{
                            $imgall3="";
                        }
                        echo $imgall1; 
                        echo $imgall2; 
                        echo $imgall3;                  
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-5" id="pro_detail">
            <form action="<?=$lin1?>" method="post">
                <div class="row">

                    <div class="col-md-12">
                        <h5>
                            <?=$name;?>
                        </h5>
                    </div>
                    <div class="col-md-12 mb-2">
                        Số lượng: <?=$tt;?>
                    </div>
                    <div class="col-md-12">
                        <p><?=$prinew1;?>đ <span><?=$priold1;?>đ</span></p>
                    </div>

                    <div class="col-md-12 mt-2 mb-0">
                        <div class="pro_detail_amount">
                            <div class="dec" id="dec">-</div>
                            <input type="text" name="quantity" value="1" id="quantity">
                            <div class="inc" id="inc">+</div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="boxdiscount p-2">
                            <p>* Hàng chính hãng, có tem chống giả</p>
                            <p>* Sản phẩm chất lượng tốt</p>
                            <p>* Được nhiều khách hàng tin dùng</p>
                            <p>* Giảm ngay 10% khi mua 5 sản phẩm</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn_detail">Buy Now</button>
                        <button type="submit" class="btn_detail" name="add" value="add">Add Cart</button>
                    </div>
            </form>
        </div>
    </div>
    <div class="col-md-3 mt-5">
        <div class="formdelivery">
            <div class="row p-2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <p>Form of Delivery</p>
                        </div>
                        <div class="col-md-3"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="20px"
                                height="20px" viewBox="0 0 24 24" aria-labelledby="errorIconTitle" stroke="#a88e3f"
                                stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#a88e3f">
                                <title id="errorIconTitle">Error</title>
                                <path d="M12 8L12 13" />
                                <line x1="12" y1="16" x2="12" y2="16" />
                                <circle cx="12" cy="12" r="10" />
                            </svg></div>
                    </div>

                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="row">
                        <div class="col-md-2"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="20px"
                                height="20px" viewBox="0 0 24 24" aria-labelledby="locationIconTitle" stroke="#a88e3f"
                                stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#a88e3f">
                                <title id="locationIconTitle">Location</title>
                                <path
                                    d="M12,21 C16,16.8 18,12.8 18,9 C18,5.6862915 15.3137085,3 12,3 C8.6862915,3 6,5.6862915 6,9 C6,12.8 8,16.8 12,21 Z" />
                                <circle cx="12" cy="9" r="1" />
                            </svg></div>
                        <div class="col-md-6">
                            <p>HCM city</p>
                        </div>
                        <div class="col-md-4">
                            <p>thay đổi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="row">

                        <div class="col-md-2"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-labelledby="transportIconTitle" stroke="#a88e3f"
                                stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter"
                                color="#a88e3f">
                                <title id="transportIconTitle">Transport</title>
                                <path d="M4 17H2V7H15V17H8" />
                                <path d="M20 17H22V12.5556L20 9H15V17H16" />
                                <circle cx="6" cy="17" r="2" />
                                <circle cx="18" cy="17" r="2" />
                            </svg></div>
                        <div class="col-md-6">
                            <p>Priority GH</p>
                        </div>
                        <div class="col-md-4">
                            <p> 9.900đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="28px"
                                height="28px" viewBox="0 0 24 24" aria-labelledby="dolarIconTitle" stroke="#a88e3f"
                                stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#a88e3f">
                                <title id="dolarIconTitle">Dolar</title>
                                <path
                                    d="M12 4L12 6M12 18L12 20M15.5 8C15.1666667 6.66666667 14 6 12 6 9 6 8.5 7.95652174 8.5 9 8.5 13.140327 15.5 10.9649412 15.5 15 15.5 16.0434783 15 18 12 18 10 18 8.83333333 17.3333333 8.5 16" />
                            </svg></div>
                        <div class="col-md-10">
                            <p>Thanh toán khi nhận hàng.(Không được đồng kiểm)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <p>Đổi trả và bảo hành</p>
                        </div>
                        <div class="col-md-3"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="20px"
                                height="20px" viewBox="0 0 24 24" aria-labelledby="errorIconTitle" stroke="#a88e3f"
                                stroke-width="0.8571428571428571" stroke-linecap="square" stroke-linejoin="miter"
                                fill="none" color="#a88e3f">
                                <title id="errorIconTitle">Error</title>
                                <path d="M12 8L12 13" />
                                <line x1="12" y1="16" x2="12" y2="16" />
                                <circle cx="12" cy="12" r="10" />
                            </svg></div>
                    </div>

                </div>
                <div class="col-md-12">
                    <p>» GIAO HÀNG MIỄN PHÍ TOÀN QUỐC</p>
                    <p>» ĐỔI HÀNG TRONG VÒNG 30 NGÀY</p>
                    <p>» HOTLINE BÁN HÀNG 1234 567 890</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row10">
    <div class="detail">
        <div class="mota" id="mt">Mô tả</div>
        <div class="danhgia" id="dg">Đánh Giá</div>
        <div class="comment" id="cmt">Comment</div>
    </div>
    <div class="boxmota" id="boxmt"></div>
    <div class="boxdanhgia" id="boxdg"></div>
    <div class="boxcomment" id="boxcmt">
        <iframe src="controller/binhluan.php?idsp=<?=$_GET['idsp']?>" width="100%" height="400px" frameborder="0"
            border=0></iframe>
    </div>
</div>
</div>