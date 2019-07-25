                                       
<?php

  //include './selectsql.php';
   include './popularcontent.php';
   include './urlconf.php';
 if(isset($_GET['id'])) //如果存在参数“id”
 {
   $idolcontent = $_GET['id']; //将id值赋给变量idolid
   $idolidsave = $_GET['id'];
 } 
 //从url获得idolid
  $idolid=idurl();

  if($idolid<0 or $idolid>11){
   $alert_msg="该页面不存在";
       echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
   die;
} 
 //$idolid=$idolid-1;
 $path = "images/idols/";
 //名字简写：0周震南、1何洛洛、2焉栩嘉、3夏之光、4姚琛、5翟潇闻、6张颜齐、7刘也、8任豪、9赵磊、10赵让、11肖战
 $namest =  array('zzn','hll','yxj','xzg','yc','zxw','zyq','ly','rh','zl','zr','xz');

//姓名与主页介绍链接
 $idolprofilehref = array();
 $name = array();

 $name[0] = "Zhou Zhennan";
 $idolprofilehref[0] = "https://baike.baidu.com/item/%E5%91%A8%E9%9C%87%E5%8D%97/22045893?fr=aladdin";
 $name[1] = "He Luoluo";
 $idolprofilehref[1] = "https://baike.baidu.com/item/%E4%BD%95%E6%B4%9B%E6%B4%9B/22404835?fr=aladdin";
 $name[2] = "Yan Xujia";
 $idolprofilehref[2] = "https://baike.baidu.com/item/%E7%84%89%E6%A0%A9%E5%98%89/4792762?fr=aladdin";
 $name[3] = "Xia Zhiguang";
 $idolprofilehref[3] = "https://baike.baidu.com/item/%E5%A4%8F%E4%B9%8B%E5%85%89/18866897?fr=aladdin";
 $name[4] = "Yao Chen";
 $idolprofilehref[4] = "https://baike.baidu.com/item/%E5%A7%9A%E7%90%9B/23460512?fr=aladdin";
 $name[5] = "Zhai Xiaowen";
 $idolprofilehref[5] = "https://baike.baidu.com/item/%E7%BF%9F%E6%BD%87%E9%97%BB/23410824";
 $name[6] = "Zhang Yanqi";
 $idolprofilehref[6] = "https://baike.baidu.com/item/%E5%BC%A0%E9%A2%9C%E9%BD%90/23415018";
 $name[7] = "Liu Ye";
 $idolprofilehref[7] = "https://baike.baidu.com/item/%E5%88%98%E4%B9%9F/10320867?fr=aladdin";
 $name[8] = "Ren Hao";
 $idolprofilehref[8] = "https://baike.baidu.com/item/%E4%BB%BB%E8%B1%AA/19525301?fr=aladdin";
 $name[9] = "Zhao Lei";
 $idolprofilehref[9] = "https://baike.baidu.com/item/%E8%B5%B5%E7%A3%8A/19326043?fr=aladdin";
 $name[10] = "Zhao Rang";
 $idolprofilehref[10] = "https://baike.baidu.com/item/%E8%B5%B5%E8%AE%A9/23412526?fr=aladdin";
 $name[11] = "Xiao Zhan";
 $idolprofilehref[11] = "https://baike.baidu.com/item/%E8%82%96%E6%88%98/18866899?fr=aladdin";
 
 $snum = array('_1','_2','_3','_4','_5','_6','_7','_8','_9','_10','_11','_12');

 $suffix = array();
 $suffix['png'] = 'png';
 $suffix['jpg'] = 'jpg';
 $suffix['gif'] = 'gif';
 $suffix['bmp'] = 'bmp';

 //生成主页显示idol照片路径
 $filepath = array();
 for ($x = 0 ; $x < 12 ; $x++){
    // echo "$x \n";
     $filepath[ $x ] = $path.$namest[$idolid].$snum[ $x ].'.'.$suffix['png'];
     //echo "$filepath[$x] <br>";
}

  $homehref='./welfareclub.php'.'?id='.$idolcontent;
  $myfile = fopen("./homehref.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $homehref);

  //生成主页显示偶像热点新闻、热门视频
  $popularcontentitem = array();
  $popularcontent = array();
  $popularcontenthref = array();
  $popularvideoitem = array();
  $popularvideohref = array();
  
  for($x = 0 ; $x < 4 ; $x++ )
  {   
      $index = $idolid*4+$x;
      $popularcontentitem[
$x] = $idolpopularcontentitem[ $index];
      $popularcontent[$x] = $idolpopularcontent[$index] ;
      $popularcontenthref[$x] = $idolpopularcontenthref[$index];
      $popularvideoitem[$x] = $idolpopularvideoitem[$index];
      $popularvideohref[$x] =  $idolpopularvideohref[$index];
  }


 
   //调用数据库
  //for ($i = 0  ; $i < 4 ; $i++){
  //$idolpopularcontentitem[$i] = selectpopularcontentitem($name[$idolid],$i);
  //$idolpopularcontent[$i] = selectpopularcontent($name[$idolid],$i);
  //$idolpopularcontenthref[$i] = selectpopularcontenthref($name[$idolid],$i);
 // $idolpopularvideoitem[$i] = selectpopularvideoitem($name[$idolid],$i);
 // $idolpopularvideohref[$i] = selectpopularvideohref($name[$idolid],$i);
  //}

?>

