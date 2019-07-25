<?php
  function selectpopularcontentitem($name,$num){
   $servername = "localhost";
   $username = "root";
   $password = "password";
   $dbname = "doki";
 
   // 创建连接
   $conn = new mysqli($servername, $username, $password);
   // 检测连接
   if ($conn->connect_error) {
       die("connect fail: " . $conn->connect_error);
   }

   mysqli_select_db( $conn,$dbname );
   $sql=""SELECT newsitem FROM popularnews WHERE name = $name and newsnum=$num";";
   $popularcontentitem = mysqli_query( $conn, $sql );
   if($popularcontentitem)
   {    echo "$popularcontentitem";
        return $popularcontentitem;
   }
   else
   { 
        echo "fail";
   }
   //5.释放结果集(仅针对select)
    mysqli_free_result($result);
   //6.关闭数据库连接
    mysqli_close($db);
}

function selectpopularcontent($name,$num){
   $servername = "localhost";
   $username = "root";
   $password = "password";
   $dbname = "doki";
 
   // 创建连接
   $conn = new mysqli($servername, $username, $password);
   // 检测连接
   if ($conn->connect_error) {
       die("connect fail: " . $conn->connect_error);
   }

   mysqli_select_db( $conn,$dbname );
   $sql=""SELECT newscontent FROM popularnews WHERE name = $name and newsnum=$num";";
   $popularcontent = mysqli_query( $conn, $sql );
   if($popularcontent)
   {    echo "$popularcontent";
        return $popularcontent;
   }
   else
   { 
        echo "fail";
   }
    //5.释放结果集(仅针对select)
    mysqli_free_result($result);
   //6.关闭数据库连接
    mysqli_close($db);

}

function selectpopularcontenthref($name,$num){
   $servername = "localhost";
   $username = "root";
   $password = "password";
   $dbname = "doki";
 
   // 创建连接
   $conn = new mysqli($servername, $username, $password);
   // 检测连接
   if ($conn->connect_error) {
       die("连接失败: " . $conn->connect_error);
   }

   mysqli_select_db( $conn,$dbname );
   $sql=""SELECT newshref FROM popularnews WHERE name = $name and newsnum=$num";";
   $popularcontenthref = mysqli_query( $conn, $sql );
   if($popularcontenthref)
   {    echo "$popularcontenthref";
        return $popularcontenthref;
   }
   else
   { 
        echo "fail";
   }
    //5.释放结果集(仅针对select)
    mysqli_free_result($result);
   //6.关闭数据库连接
    mysqli_close($db);

}

function selectpopularvideoitem($name,$num){
   $servername = "localhost";
   $username = "root";
   $password = "password";
   $dbname = "doki";
 
   // 创建连接
   $conn = new mysqli($servername, $username, $password);
   // 检测连接
   if ($conn->connect_error) {
       die("连接失败: " . $conn->connect_error);
   }

   mysqli_select_db( $conn,$dbname );
   $sql=""SELECT videoitem FROM popularvideos WHERE name = $name and newsnum=$num";";
   $popularvideoitem = mysqli_query( $conn, $sql );
   if($popularvideoitem)
   {    echo "$popularvideoitem";
        return $popularvideoitem;
   }
   else
   { 
        echo "fail";
   }
  //5.释放结果集(仅针对select)
    mysqli_free_result($result);
   //6.关闭数据库连接
    mysqli_close($db);

}

function selectpopularvideohref($name,$num){

   $servername = "localhost";
   $username = "root";
   $password = "password";
   $dbname = "doki";
 
   // 创建连接
   $conn = new mysqli($servername, $username, $password);
   // 检测连接
   if ($conn->connect_error) {
       die("连接失败: " . $conn->connect_error);
   }

   mysqli_select_db( $conn,$dbname );
   $sql=""SELECT videohref FROM popularvideos WHERE name = $name and newsnum=$num";";
   $popularvideohref = mysqli_query( $conn, $sql );
   if($popularvideohref)
   {    echo "$popularvideohref";
        return $popularvideohref;
   }
   else
   { 
        echo "fail";
   }
   //5.释放结果集(仅针对select)
    mysqli_free_result($result);
   //6.关闭数据库连接
    $conn->close();
    //mysqli_close($db);

}
?>
