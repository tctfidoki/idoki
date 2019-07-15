<?php 
    header("Content-Type: text/html; charset=utf8");

    include('database.php');//链接数据库
    $name=$_POST['account'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password   

    $sql = "select * from User where username = '$name'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if ($row<1){
        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $now = date('Y-m-d', time());

        $q="insert into User(id,username,password,like_limit,like_day,vote_time) values (null,'$name','$password_hash',2,0,'$now')";//向数据库插入表单传来的值的sql
        $reslut=mysqli_query($con,$q);//执行sql

        if (!$reslut){
            die('Error: ' . mysql_error());//如果sql执行失败输出错误
        }else{
            echo "2";//成功输出注册成功
        }
    }else{//用户名已存在
        echo "1";
    }

    mysqli_close($con);//关闭数据库

?>