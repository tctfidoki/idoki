<?php
   
   session_start();
   include('database.php');
   $array = [
    '1' =>[1,'zzn',"周震南",0],
    '2' =>[2,'hll',"何洛洛",0],
    '3' =>[3,'yxj',"焉栩嘉",0],
    '4' =>[4,'xzg',"夏之光",0],
    '5' =>[5,'yc',"姚琛",0],
    '6' =>[6,'zxw',"翟潇闻",0],
    '7' =>[7,'zyq',"张颜齐",0],
    '8' =>[8,'ly',"刘也",0],
    '9' =>[9,'rh',"任豪",0],
    '10'=>[10,'zl',"赵磊",0],
    '11'=>[11,'zr',"赵让",0],
    '12'=>[12,'xz',"肖战",0],
    'like_total'=>0];

   for ($i=1;$i<=12;$i++)
   {
      $sql="select like_total from Idol where id=$i";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $idol_total = $row['like_total'];
      $array[$i][3]=$idol_total;
   }
   
   $uid = $_COOKIE['uid'];
   $idolid = $_SESSION['idolid'];
   
   $pdo = new PDO('mysql:host=localhost;dbname=doki', 'dokiuser', '123456');
   $sql = "select like_total from Pickidol where userid=:uid and idolid=$idolid;";
   $stmt = $pdo->prepare($sql);                                                                                               
   $stmt->bindParam(':uid', $uid);
   $stmt->execute();
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   $like_total=intval($result["like_total"]);

   if($like_total>=14){
      $array['like_total']=$like_total;
   }
   
   echo json_encode($array);


?>
