<?php
 include './getcontent.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> </html><![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> </html><![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width,initial-scale=0.8" />

	<link rel="stylesheet" href="./css/style.css" />
	<link href='http//fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css' />
	<script src="http//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="./js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<!-- scripts-->
	<script src="./js/plugins.js"></script>
	<script src="./js/script.js"></script>
	<!-- end scripts-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="homepage">
<div id="container">
	<div id="header">
		<div id="menuswrap" class="grid960">
			<div id="logo"><a href= "<?php echo $homehref;?>"><h2 class="widgettitle">WELFARE CLUB<br><?php echo $name[$idolid];?></h2></a></div>
			<ul id="menus" class="default">
				<li class="current"><a href= "<?php echo $homehref;?>"><span>Home</span><span>Hello..</span></a></li>
				<li><a href= "<?php echo $idolprofilehref[$idolid];?>"><span>IDOL PROFILE
				</span><span><?php echo $name[$idolid];?></span></a></li>
				<li><a href="http://v.qq.com/detail/8/81768.html"><span>More</span><span>Find more..</span></a></li>
				<li><a href="#"><span>Contact</span><span>Get in touch..</span></a></li>
			</ul>
		</div>
	</div>

	<!--! 偶像照片展示 -->
	<div id="entertainerwrap">
		<ul id="collage" class="gridinfinity">
			<li data-img= "<?php echo $filepath[0];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[1];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[2];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[3];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[4];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[5];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[6];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[7];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[8];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[9];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[10];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
			<li data-img= "<?php echo $filepath[11];?>" data-description="<?php echo $name[$idolid];?>"><a href=""></a></li>
		</ul>
	</div>

	<div id="mainwrap">
		<div id="main" class="grid960" role="main">
			<div class="sloganbox gs_12">
				<div class="thedash"></div>
				<h2> To upload files for your favorite idols！ <br /></h2>
				<div id="uploadfile" style="height: 100%;text-align: center">
		                   <form action="action.php" enctype="multipart/form-data" method="post">

				     <input type="file" name="pic" id="upload" accept=".dwg,.dxf,.gif,.jpe,.jp2,.jpeg,.jpg,.png,.svf,.tif,.mpg,,mpeg,.mp4"value="upload file" titile="upload file">
                                    <input type="submit" name="submit" id="submit1" value="上传"  >

				   </form>
				<p><small> *We have the ability to show more！</small></p>
				</div>
			</div>
			<div class="gs_3 alpha"><h3><a href="<?php echo $popularcontenthref[0];?>"><?php echo $popularcontentitem[0];?></a></h3>
				<p><img src="./images/icons/dortmund32x32/cost.png" alt="" class="alignleft" /> <?php echo $popularcontent[0];?></p>
				<p><a href="<?php echo $popularcontenthref[0];?>">read more...</a></p></div>

			<div class="gs_3"><h3><a href="<?php echo $popularcontenthref[1];?>"><?php echo $popularcontentitem[1];?></a></h3>
				<p><img src="./images/icons/dortmund32x32/settings.png" alt="" class="alignleft" /><?php echo $popularcontent[1];?></p>
				<p><a href="<?php echo $popularcontenthref[1];?>">read more..</a></p></div>

			<div class="gs_3"><h3><a href="<?php echo $popularcontenthref[2];?>"><?php echo $popularcontentitem[2];?></a></h3>
				<p><img src="./images/icons/dortmund32x32/publish.png" alt="" class="alignleft" /><?php echo $popularcontent[2];?>.</p>
				<p><a href="<?php echo $popularcontenthref[2];?>">read more..</a></p></div>

			<div class="gs_3"><h3><a href="<?php echo $popularcontenthref[3];?>"><?php echo $popularcontentitem[3];?></a></h3>
				<p><img src="./images/icons/dortmund32x32/brainstorming.png" alt="" class="alignleft" /><?php echo $popularcontent[3];?></p>
				<p><a href="<?php echo $popularcontenthref[3];?>">read more..</a></p></div>
			
		</div>
	</div>
	<div id="footerwrap">
		<div id="footer" class="grid960">
           <!--联系方式-->
			<div class="gs_3 widget">
				<h2 class="widgettitle">Connect with us!</h2>
				<p>Got some questions? Need advice? Get in touch with us!</p>
				<p><strong>Our adress:</strong><br />CUC .BeijinG <br />11111111@threebears.com</p>
				<ul class="icons">
					<li><a href="#"><img src="./images/icons/twitter.png" alt="Twitter" /></a></li>
					<li><a href="#"><img src="./images/icons/facebook.png" alt="FaceBook" /></a></li>
					<li><a href="#"><img src="./images/icons/rss.png" alt="RSS" /></a></li>
					<li><a href="#"><img src="./images/icons/mail.png" alt="Mail" /></a></li>
				</ul>
			</div>
            <!--注：偶像送花积分-->
			<div class="gs_4 widget">
				<h2 class="widgettitle">Notes</h2>
				<p>To always get quick info on releases of our new themes, or updates to your favorite idol.</p>
				<p>Please come back often.Please upload more pictures, videos, etc. of your favorite idol.</p>
				<p>Please remember to send a flower score for your favorite idol every day.</p>

			</div>
           <!--偶像热门视频连接-->
			<div class="gs_3 widget">
				<h2 class="widgettitle">Popular Videos</h2>
				<ul>
					<li><a href="<?php echo $popularvideohref[0];?>">
						<?php echo $popularvideoitem[0];?></a></li>
					<li><a href="<?php echo $popularvideohref[1];?>">
						<?php echo $popularvideoitem[1];?></a></li>
					<li><a href="<?php echo $popularvideohref[2];?>">
						<?php echo $popularvideoitem[2];?></a></li>
					<li><a href="<?php echo $popularvideohref[3];?>">
						<?php echo $popularvideoitem[3];?></a></li>
				</ul>
			</div>
           <!--合作伙伴-->
			<div class="gs_2 widget">
				<h2 class="widgettitle">Our Partners</h2>
				<ul>
					<li><a href="#">JHC</a></li>
					<li><a href="#">IDOLS</a></li>
					<li><a href="#">ZJC</a></li>
					<li><a href="#">HFF</a></li>
					<li><a href="#">CLL</a></li>

				</ul>
			</div>
		</div>
		<div class="copyrights">
			<div class="copywrap">
				<p>Copyrights &copy; <a href="http//www.designsentry.com/">designSentry</a> 2011-2012</p>
			</div>
		</div>
	</div>
	
</div> <!--! end of #container -->
<!--异步上传-->
//<script src="./js/ajaxupload.js"></script>
</body>
</html>


