<div class="container">
    <div class="row ">
        <div class="col-md-12 mt-5">
            <h5 class="text-center">
                Are these products you are looking for ...
            </h5>
        </div>
        <div class="col-md-12 mb-5">
            <p class="text-center">
            <script>
                $(document).ready(function () {
                    var count =  $(".product_box").length;
                    $("#count_product").text(count);
                    
                });
            </script>
            <?php
                if(null != $_GET['search']){
                    $keyword=$_GET['search'];
                }
            ?>
                There are <span id="count_product"></span> products found with "<?=$keyword;?>"
            </p>
        </div>
    </div>
    <div class="row">
        <?php
            foreach ($search as $sr) {
                $oldprice=$sr['price'];
                    $oldprice1=formatMoney($oldprice);
                    $disc=$sr['discount'];
                    $reduceprice=($disc*$oldprice)/100;
                    $newprice=$oldprice-$reduceprice;
                    $newprice1=formatMoney($newprice);
                    $link="index.php?ctrl=product&page=product-detail&idsp=".$sr['id'];
                echo '<div class="col-md-3">
                <a href="'.$link.'">
                    <div class="product_box">
                        <div class="product_img">
                            <img src="view/images/'.$sr['image_link'].'" alt="" />
                        </div>
                        <div class="product_inf">
                            <h6>'.$sr['name'].'</h6>
                            <p>'.$newprice1.'<span> '.$oldprice1.'</span></p>
                        </div>
                        <div class="product_inf1">
                            <button type="button" class="btn btn-outline-secondary">Mua</button>
                            <button type="button" class="btn btn-outline-warning">Giỏ hàng</button>
                        </div>
                    </div>
                </a>
            </div>';
            }
        
        ?>
    </div>
</div>