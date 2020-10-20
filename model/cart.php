<?php
       include_once 'product.php';
       function addToCart($id,$sl){
       //lay thong tin san pham can them vao gio hang
       $product=getOneProduct($id);
       $bool=false;
       $i=0;
       if(!isset($_SESSION['carts']))
       {
           $_SESSION['carts']=array( ''.$id.''=> array("id"=>$id,"name"=> $product['name'],  "price"=> $product['price'],"image"=> $product['image_link'],"quantity"=>1));
       }
       else 
       {
         foreach ($_SESSION['carts'] as $item) {
           if($item['id']==$id){
             array_splice($_SESSION['carts'],$i,1,array(array("id"=>$id,"name"=> $product['name'], "price"=> $product['price'],"image"=> $product['image_link'],"quantity"=>$item['quantity']+1)));
             $bool=true;
           }
           $i++;
         }
         if($bool==false){
           array_push($_SESSION['carts'],array("id"=>$id,"name"=> $product['name'],  "price"=> $product['price'],"image"=> $product['image_link'],"quantity"=>$sl));
         }
       }
    }
    // function del($id){
      
    //     array_splice($_SESSION['cart'][$id],1);
    // }
    function addToOrder($fname,$add,$note,$phone,$total,$ngay)
    {
      $query="insert into donhang(name,address,phone,note,total,ngaydat)
      values('$fname','$add','$phone','$note','$total','$ngay')";
      $lastId = executeReturnID($query);
      return $lastId;//tra ve ma don hang moi vua them
    }
    function addToOrderDetail($madh)
    {
      foreach ($_SESSION['carts'] as $item) 
      {
        $masp=$item['id'];
        $sl=$item['quantity'];
        $price=$item['price'];
        $query="insert into donhangchitiet(donhang_id,product_id,quantity,price)
        values('$madh','$masp','$sl','$price')";
        $STH = execute($query);
      }
    }
?>