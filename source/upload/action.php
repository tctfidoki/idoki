<?php
	 header('Content-Type: text/html; charset=utf-8');
	//实现文件上传
	// include './connsql.php';
	include './function.php';

	$result = myupload('pic','idolslib');

	//var_dump($result);
	//拼接路径
	// if($result){
	// 	//上传成功返回数组
		$path=$result['path'].'/'.$result['name'];
	// 	//调用图片缩放
	// 	chumn($path,50,50);
	// }
        //上传文件的存储路径存入当前idol的数据库表,调用路劲存储函数
       
        savefilepath('ZhaiXiaowen',$result['name'],$path);

?>
	



	



