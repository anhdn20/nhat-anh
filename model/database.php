<?php
    function getConnection(){
        $host ='localhost';
        $username='root';
        $password='';
        $options= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        //tao doi tuong lop PDO
        $DBH = new PDO('mysql:host='.$host.';dbname=hoarient',$username,$password,$options);
        return $DBH;
    }
    function query($sql){
        $conn=getConnection();
        $result=$conn->query($sql);
        return $result;
    }
    function queryOne($sql){
        $conn=getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt-> fetch(); //lấy ra 1
    }
    function execute($sql){
        $conn=getConnection();
        $result=$conn->exec($sql);
        return $result;
    }


    function executeReturnID($sql)
    {
        $connect=getConnection();
        $connect->exec($sql);
        return $connect->lastInsertId();
    }

    // $conn=connect();
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // return $stmt-> fetch(); //lấy ra 1
?>