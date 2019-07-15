<?php
	//文件上传
    //文件上传,限制大小500MB,只能上传常见格式的图片与视频
    function myupload($pic,$path='./upload/',$size=500*1024*1024,
                      $type=array('image/jpeg','image/gif','image/png','application/x-MS-bmp','image/tiff',
                                  'image/ief','image/j2k','image/x-quicktime','image/vnd','image/svg-xml',
                                  'video/3gpp','video/mp4','video/x-msvideo','video/mpeg','video/x-pv-pvx',
                                  'video/vdo','video/vivo','video/x-ms-wm','video/wavelet','video/x-ms-wvx')){
                          
        $myfile = fopen("./homehref.txt", "r") or die("Unable to open file!");
        $homehref = fread($myfile, filesize ("./homehref.txt"));
        fclose($myfile);
        //获取URL中id
        $ids= strrchr($homehref, "=");
        $id = ltrim($ids,"="  );
		//1.赋值上传的变量
		$file=$_FILES[$pic];
		//2.判断错误号
		if($file['error']>0){
			switch($file['error']){
				case 1:
                    $alert_msg = "上传文件超过了PHP配置文件设置";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
                case 2:
                    $alert_msg = "上传文件超过了表单中设置的最大值";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
                case 3:
                    $alert_msg = "部分文件被上传";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
                case 4:
                    $alert_msg = "没有文件上传";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
                case 6:
                    $alert_msg = "找不到临时目录";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
                default:
                    $alert_msg = "未知错误";
                    echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                    die;
			}
		}
		//3.判断大小
		if($file['size']>$size){
            $alert_msg = "上传文件过大";
            echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
            die;
            
        }
		//4.判断类型
		if(!in_array($file['type'],$type)){
            $alert_msg = "文件类型不符合";
            echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
            die;
            
        }
            //对图片类型getimagesize校验
             $picarray=array('image/jpeg','image/gif','image/png','application/x-MS-bmp','image/tiff','image/ief','image/j2k','image/x-quicktime','image/vnd','image/svg-xml');     
             $filetmpname=$file['tmp_name'];
             $filetype=$file['type'];
             //echo "$filetype <br>";
            if(in_array($file['type'],$picarray))
             {
                if(!getimagesize($filetmpname))
              {
                 $alert_msg = "文件类型不符合图片类型";
                 echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                 die;
                 }
             }

		//5.给文件重命名
	        //1.获取文件后缀名
	        $hz=strrchr($file['name'],'.');
                 
               //2.获取文件名字
                $fn=rtrim($file['name'],$hz);
               //3.起不重复的名,加盐MD5
                //$newName=md5(time().uniqid().mt_rand(1,999)).$hz;
                $salt=mt_rand(1,999);
                $newName=md5($fn.$salt).$hz;
		//6.判断上传文件目录是否存在
			if(!file_exists($path)){
				mkdir($path);
			}
			//拼接新路径以及文件名
			//无论是否有结束的/ 都删除 然后在重新拼接
			$path=rtrim($path,'/');
			$p=$path.'/'.$newName;
				//./upload//asdfasdfasd.jpg;
		//7.移动文件
			//定义一个用于返回的数组
			$info=array();
			if(move_uploaded_file($file['tmp_name'],$p)){
				//成功返回一个数组
				$info['path']=$path;
				$info['name']=$newName;
                
                 $alert_msg="文件上传成功";
                echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";       echo "<div id=\"\" style=\"display: none\" >$p</div>";
                return $info;
			}else{
                $alert_msg = "文件上传失败";
                echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');parent.location.href='$homehref';</SCRIPT>";
                return '文件上传失败';
                
            }
	}



	//文件缩放
	function chumn($back,$width=100,$height=100,$pre='s_'){
		//获取原图的大小
		list($s_w,$s_h)=getimagesize($back);
		//算出缩放的比例
		$gs = $s_w/$s_h;

		if ($width/$height > $gs) {
		   $width = $height*$gs;
		} else {
		   $height = $width/$gs;
		}

		//打开原图片
			//1.获取图片的后缀
			$hz=ltrim(strrchr($back,'.'),'.');
			if($hz=='jpg'){
				$hz='jpeg';
			}
			//制作变量函数
			$img_back='imagecreatefrom'.$hz;
			$src_img=$img_back($back);

			//创建一个新的图片
			$img=imagecreatetruecolor($width,$height);

			//执行等比例缩放
			imagecopyresampled($img,$src_img,0,0,0,0,$width,$height,$s_w,$s_h);


			//获取原图片名称
			$path=pathinfo($back);
			//拼接路径并且将前缀加到文件名中
			$newPath=$path['dirname'].'/'.$pre.$width.$height.$path['basename'];

			//保存图片
			$str='image'.$hz;
			$result = $str($img,$newPath);

			imagedestroy($img);
			imagedestroy($src_img);

			//var_dump($newPath);
			return $newPath;


	}
