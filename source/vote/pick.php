<?php

   require('login.php');
   include('database.php');
   $pdo = new PDO('mysql:host=localhost;dbname=doki', 'root', '123');

   session_start();
   $uid = $_COOKIE['uid'];
   $idolid = $_POST['idolid'];
   $like_num = 1;


   if(!$uid){
       echo '3';
   }
   else{
    $weak_sql = "select like_day from User where id=$uid";

    $stmt = $pdo->prepare($weak_sql);                                                                                                       
    $stmt->execute(); 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $like_day = intval($result["like_day"]);

    if((empty($like_day) || $like_day < 2)) {
        $like_day = $like_day+$like_num;
        $sql="update User set like_day=$like_day where id=$uid";     
        $result=mysqli_query($con,$sql);
        $now = date('Y-m-d', time());
        $sql = "update User set vote_time='$now' where id=$uid";
        $result = mysqli_query($con,$sql);
    
        $sql = "select like_total,idolname from Idol where id=$idolid";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $like_total = $row['like_total'];
        $like_total = $like_total+$like_num;
        $sql="update Idol set like_total=$like_total where id=$idolid";
        $result=mysqli_query($con,$sql);
       
        //$idolname=$row['idolname'];
        $_SESSION['idolid'] = $idolid;
        $pdo = new PDO('mysql:host=localhost;dbname=doki', 'root', '123');
        $sql = "select * from Pickidol where userid=:uid and idolid=$idolid;";
        $stmt = $pdo->prepare($sql);                                                                                               
        $stmt->bindParam(':uid', $uid);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $like_total=intval($result["like_total"]);
        //var_dump($like_total);

        
        if (!isset($result['like_total'])){
            //var_dump("nonono");
            $pdo = new PDO('mysql:host=localhost;dbname=doki', 'root', '123');
            $sql = "insert into Pickidol(userid,idolid,like_total) values (:uid,:idolid,1);";
            $stmt = $pdo->prepare($sql);                                                                                               
            $stmt->bindParam(':uid', $uid);
            $stmt->bindParam(':idolid', $idolid);                                                                                   
            $ft = $stmt->execute();
               
        }
        else{
            //var_dump("okokok");
            $like_total=1+$like_total;
            $pdo = new PDO('mysql:host=localhost;dbname=doki', 'root', '123');
            $sql="update Pickidol set like_total=$like_total where userid=:uid and idolid='$idolid';";
            $stmt = $pdo->prepare($sql);                                                                                                 
            $stmt->bindParam(':uid', $uid);                                                                                         
            $stmt->execute();  
        }
        include('transfer.php');

    }
    else{
        echo "1"; //you can't 
    }

   }

   
    mysqli_close();//关闭数据库

?>



