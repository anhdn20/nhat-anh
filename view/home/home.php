<div class="container">
        <div class="row mb">
            <div class="col-md-12 col-sm-12">
                <div class="product" id="best_sp">
                    <h3 class="display-4">HOT PRODUCTS</h3>
                    <button type="button" class="btn btn-outline-secondary">See More</button>
                </div>
                <hr>
                <div class="sld-pro-layout" id="best_sp_box">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $hotproduct=gethotProduct();
                            foreach ($hotproduct as $hot) {
                                $oldprice=$hot['price'];
                                $oldprice1=formatMoney($oldprice);
                                $disc=$hot['discount'];
                                $reduceprice=($disc*$oldprice)/100;
                                $newprice=$oldprice-$reduceprice;
                                $newprice1=formatMoney($newprice);
                                $link="index.php?ctrl=product&page=product-detail&idsp=".$hot['id'];
                                echo '<a href="'.$link.'">
                                <div class="item">
                                <div class="img_sp">
                                    <img src="view/images/'.$hot['image_link'].'" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="ml-2">'.$hot['name'].'</h5>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-7">
                                        <p class="ml-2">'.$newprice1.'đ <span>'.$oldprice1.'đ</span></p>
                                    </div>
                                    <div class="col-md-5">
                                        <button type="button" class="btn btn-outline-warning">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-outline-danger">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                                </a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb">
            <div class="col-md-12 col-sm-12">
                <div class="product" id="deal">
                    <h3 class="display-4">DEAL ĐỘC QUYỀN - SỐ LƯỢNG CÓ HẠN</h3>
                    <button type="button" class="btn btn-outline-secondary">See More</button>
                </div>
                <hr>
                <div class="sld-pro-layout" id="deal1">
                    <div class="owl-carousel owl-theme">
                    <?php
                        $limitproduct=getLimitProduct();
                            foreach ($limitproduct as $limit) {
                                $oldprice=$limit['price'];
                                $oldprice1=formatMoney($oldprice);
                                $disc=$limit['discount'];
                                $reduceprice=($disc*$oldprice)/100;
                                $newprice=$oldprice-$reduceprice;
                                $newprice1=formatMoney($newprice);
                                $link="index.php?ctrl=product&page=product-detail&idsp=".$limit['id'];
                                echo '<a href="'.$link.'">
                                        <div class="item">
                                        <div class="img_sp">
                                        <img src="view/images/'.$limit['image_link'].'" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="ml-2">'.$limit['name'].'</h5>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-md-7">
                                    <p class="ml-2">'.$newprice1.'đ <span>'.$oldprice1.'đ</span></p>
                                        </div>
                                        <div class="col-md-5">
                                            <button type="button" class="btn btn-outline-warning">
                                                <i class="fas fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-outline-danger">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                    </a>';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb">
            <div class="col-md-12 col-sm-12">
                <hr>
                <div class="sld-pro-layout" id="deal2">
                    <div class="owl-carousel owl-theme">
                    <?php
                        $elseproduct=getelesProduct();
                            foreach ($elseproduct as $else) {
                                $oldprice=$else['price'];
                                $oldprice1=formatMoney($oldprice);
                                $disc=$else['discount'];
                                $reduceprice=($disc*$oldprice)/100;
                                $newprice=$oldprice-$reduceprice;
                                $newprice1=formatMoney($newprice);
                                $link="index.php?ctrl=product&page=product-detail&idsp=".$else['id'];
                                echo '<a href="'.$link.'">
                                <div class="item">
                                <div class="img_sp">
                                <img src="view/images/'.$else['image_link'].'" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="ml-2">'.$else['name'].'</h5>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-md-7">
                            <p class="ml-2">'.$newprice1.'đ <span>'.$oldprice1.'đ</span></p>
                                </div>
                                <div class="col-md-5">
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div></a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb">
            <div class="col-lg-6" id="about">
                <h1 class="display-4 about">ABOUT US</h1>
                <p>Dưới con mắt đại chúng, Phương Đông là vùng đất kỳ vĩ, hữu tình và còn là cái nôi của nền văn minh nhân loại, chứa đựng những thăng trầm văn hóa, lịch sử lâu đời và cả những huyền bí ngàn năm khó giải. Phương Đông nồng nàn mà kỳ bí, sang
                    trọng mà chân phương Có nhiều cách để vẩy lên những vệt màu của bức tranh Phương Đông, một trong số đó là việc gợi những nốt hương đầy tinh tế mô tả dấu ấn Phương Đông, để bất kỳ ai ngửi qua đều có thể vẽ bức tranh bằng cảm xúc của
                    riêng mình. Phải yêu lắm vùng đất này, người ta mới tạo được những mùi hương nước hoa đặc trưng cho nó mà không ít trong số đó đã trở thành bất hủ trong lòng giới mộ điệu mùi hương. Và ngay tại Việt Nam cũng có một đội ngũ mà phải
                    yêu lắm vùng đất này mới tâm huyết tạo nên một nơi để gửi gắm những mùi hương Phương Đông đầy lôi cuốn – đặt tên là HOARIENT. Tại HOARIENT, chúng tôi cung cấp các sản phẩm làm đẹp chất lượng cao với mùi hương mang đặc trưng phương
                    Đông, nhắm đến những trải nghiệm và mong muốn tạo dấu ấn riêng của người dùng.</p>
                <button type="button" class="btn btn-dark">Xem Thêm</button>
            </div>
            <div class="col-lg-6 about" id="about1">
                <img src="view/images/about.webp" alt="">
            </div>
        </div>
        <div class="row mb">
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card" id="post1">
                        <img src="view/images/card1.webp" class="card-img-top" alt="...">
                        <div class="card-body" >
                            <h5 class="card-title">DEAL ĐỘC QUYỀN CHỈ 149k!</h5>
                            <p class="card-text">Aromalink, Dòng sản phẩm lấy cảm hứng từ thiên nhiên, dòng nước hoa Aroma Link - Nature’s Breath bao gồm 5 hương thơm là sự dung hòa giữa trời và...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card" id="post2">
                        <img src="view/images/card2.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ƯU ĐÃI THÁNG 8</h5>
                            <p class="card-text">Tháng 8 đến rồi và lại là nhà Hoarient với chuỗi ưu đãi đây! Khoan đã! Chuyện là gần đây có...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card" id="post3">
                        <img src="view/images/card3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SIÊU SALE GIỮA NĂM</h5>
                            <p class="card-text">SALE UP TO 46% - QUÀ TẶNG 2 TRIỆU - FREESHIP TOÀN QUỐCÁp dụng cho tất cả đơn...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider brand dk bgdk">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <h3 class="display-4">SIGN UP</h3>
                <p>Đăng ký để luôn cập nhật những sản phẩm mới, các thông tin ưu đãi đặc biệt nhất dành cho bạn!</p>
                <div class="boxemail">
                    <div class="text_email"><input type="text" name="" id=""></div>
                    <div class="text_submit"><button type="button" class="btn btn-dark">Send</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row brand">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="view/images/fa-1-girls-night-out_9c97fbe27601452089db12d5337f7f59.jpg" alt="">
                </div>
                <div class="item">
                    <img src="view/images/fa-2-lady-in-red_2f024e9952c745009de2e54926076bea.jpg" alt="">
                </div>
                <div class="item">
                    <img src="view/images/fa-3-fahionista_e02fdd3600d046458f90096615a1bd88.jpg" alt="">
                </div>
                <div class="item">
                    <img src="view/images/fa-4-breath-talking_904748eef1094f31babf3ac723a9c97b.webp" alt="">
                </div>
                <div class="item">
                    <img src="view/images/fa-5-perfect-kiss_4ba826422853471295f13f57a6df36ef.jpg" alt="">
                </div>
                <div class="item">
                    <img src="view/images/a10_-_brand_27153b94f3e24ca8b0fe953a5b18150a.webp" alt="">
                </div>
                <div class="item"><img src="view/images/a10_-_brand_2_ad5b28be92d2493592059d9d6b1f80eb.webp" alt=""></div>
                <div class="item"><img src="view/images/a10_-_lab_2_1a4c6e1b7fc84e1596d493044acf7a42.jpg" alt=""></div>
                <div class="item"><img src="view/images/a10_-_lab_52cb7f41c3c64eaabd162c28ba5f960c.webp" alt=""></div>
                <div class="item"><img src="view/images/a10_-_nom_2_d86472b36d284829b611e2a9b02be22e.webp" alt=""></div>
            </div>
        </div>
    </div>