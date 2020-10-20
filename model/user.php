<?php
    include_once 'database.php';
    function checkexistuser($user){
        $sql="select * from admin where name in ('".$user."')";
        
        return queryOne($sql);
    }
    function checkpassword($pass){
        $sql="select * from admin where password='".$pass."'";
        echo $sql;
        return queryOne($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from admin where name='".$user."' and password='".$pass."'";
        return queryOne($sql);
    }
    
    function showuser($id){
        $sql="select * from admin where id=".$id;
        return query($sql);
    }
    function register($account,$pass,$email,$phone){ 
        $sql=" INSERT INTO admin (name, password, email,phone)
        VALUES ('$account', '$pass', '$email', '$phone')";
        $conn=getConnection();
        $conn->exec($sql);
        
        
    }

?>