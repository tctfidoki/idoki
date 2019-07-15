<?php
    header("Content-Type: text/html; charset=utf8");
    $server="localhost";
    $db_username="root";
    $db_password="123";
    $db_database="doki";
    
    $con = mysqli_connect($server,$db_username,$db_password,$db_database);//连接数据库
    
    if(!$con){
        die("database can't connect".mysql_connect_error());//如果链接失败输出错误
    }
    else{
    }
     
     
?>

