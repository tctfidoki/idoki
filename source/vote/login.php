<?php
    header("Content-Type: text/html; charset=utf8");

    include('database.php');//链接数据库
    $name = $_POST['account'];//post获得用户名表单值
    $password = $_POST['password'];//post获得用户密码单值
    
    
    if ($name && $password){//如果用户名和密码都不为空
            
             $sql = "select id,password,vote_time from User where username = '$name'";
             $result = mysqli_query($con,$sql);
             $row = mysqli_fetch_array($result);
             $hash = $row['password'];
             $uid = $row['id'];
             $time = $row['vote_time'];
             $now = date('Y-m-d', time());
            
             if($hash){
                $result2 = password_verify($password,$hash);
                
                if($result2){//登录成功s
                    if (strtotime($now)>strtotime($time)){ //修改当日投票次数为0
                        $sql = "update User set like_day=0 where username = '$name'";
                        $result = mysqli_query($con,$sql);
                     }
        
                    setcookie("uid",$uid);
                    echo "2";
                    
                }else{//密码错误
                    echo "1";
                }
             }else{// 没有该用户
                echo "3";
             }


    }
    mysqli_close();//关闭数据库
?>