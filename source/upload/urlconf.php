
<?php
 function idurl(){
  //从url获得idolid
 if(isset($_GET['id'])) //如果存在参数“id”
 {
   $idolcontent = $_GET['id']; //将id值赋给变量idolid
   $idolidsave = $_GET['id'];
 } 
 $id_url=array(
  "zdss23g234kjhfwuer987342",
  "werw9842739yhudf8w7e6wu3",
  "nvc028742i3rowe87erBer58",
  "87592ih4ruweyr876234h2iu",
  "jhlsdkfhoiur08342ior8978",
  "gw09857iurhowie7658475rw",
  "wo54798475wjerhw8eyrw736",
  "2837irjoiwer098w2342owe0",
  "387523ijroiweu878rtfyero",
  "iwu547534rkweriwer987w3r",
  "ow589745wejhfiwuery8w763",
  "jnk5893475wierjwueyifsd",
  );

for($x=0;$x<12;$x++)
{
    if ($id_url[$x] == $idolcontent)
    {
        $idolid=$x;
        
    }
}
  return $idolid;
}
?>
