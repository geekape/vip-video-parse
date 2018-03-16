<?php include ('data.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
	<meta name="description" content="<?php echo $aik['description'];?>" />
	<title><?php echo $aik['title'];?></title>

	<link rel="stylesheet" href="css/head.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<?php include ('head.php');?>

		<div class="main">
			<!-- https://www.jqaaa.com/jq3/index.php?url=http://v.youku.com/v_show/id_XMTY1Njc5MTgwOA==.html -->
			<div class="tv-title">
				<span>正在播放:</span>
				<h1 id="video-title">感谢您使用猿梦VIP视频解析服务,已自动为你播放一个MV</h1>
			</div>
			<div class="video">
				<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency frameborder="0" scrolling="no" width="100%" height="600" ></iframe>
			</div>
			<div class="parse">
				
				<input id="url" class="import" type="text" placeholder="请粘贴视频网址>ㅂ<ﾉ ☆" title="请复制你想要看的视频网址，粘贴到此处点击播放即可！">
				<select name="" id="jk">
					<option value="<?php echo $aik['jiekou1'];?>" selected>
								<?php echo $aik['jiekou1name'];?>
							</option>
							<option value="<?php echo $aik['jiekou2'];?>">
								<?php echo $aik['jiekou2name'];?>
							</option>
							<option value="<?php echo $aik['jiekou3'];?>">
								<?php echo $aik['jiekou3name'];?>
							</option>
							<option value="<?php echo $aik['jiekou4'];?>">
								<?php echo $aik['jiekou4name'];?>
							</option>
							<option value="<?php echo $aik['jiekou5'];?>">
								<?php echo $aik['jiekou5name'];?>
							</option>
							<option value="<?php echo $aik['jiekou6'];?>">
								<?php echo $aik['jiekou6name'];?>
							</option>
							<option value="<?php echo $aik['jiekou7'];?>">
								<?php echo $aik['jiekou7name'];?>
							</option>
							<option value="<?php echo $aik['jiekou8'];?>">
								<?php echo $aik['jiekou8name'];?>
							</option>
							<option value="<?php echo $aik['jiekou9'];?>">
								<?php echo $aik['jiekou9name'];?>
							</option>
							<option value="<?php echo $aik['jiekou10'];?>">
								<?php echo $aik['jiekou10name'];?>
							</option>
				</select>
				
				<input class="btn" onclick="play()" type="submit" value="VIP解析">
				
			</div>
			<a class="notice" href="<?php echo $aik['gonggao-url'];?>"><?php echo $aik['gonggao'];?></a>
			<div class="website">
				<h2>支持网站</h2>
				<div class="weblogo-list">
					<div class="row">
						<div class="box">
							<a href="http://film.qq.com/"><img src="img/qqlogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://vip.youku.com/"><img src="img/youkulogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://vip.iqiyi.com/"><img src="img/iqiyilogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://www.yinyuetai.com/"><img src="img/yinyuetailogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://vip.tudou.com/"><img src="img/tudoulogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://yuanxian.le.com/"><img src="img/letvlogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://www.56.com/"><img src="img/56logo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://www.acfun.cn/"><img src="img/acfun.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://www.bilibili.com/"><img src="img/bilibili.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://www.mgtv.com/vip/"><img src="img/hunantvlogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="http://video.sina.com.cn/"><img src="img/sinalogo.png" alt=""></a>
						</div>
						<div class="box">
							<a href="https://film.sohu.com/"><img src="img/sohulogo.png" alt=""></a>
						</div>
					</div>
					<div class="row">
						
					</div>
				</div>
			</div>
			<div id="comment" class="comment">
				<h2>评论有奖</h2>
				<!-- 畅言统计代码 -->
				<div id="SOHUCS" ></div> 
				<script type="text/javascript"> 
				(function(){ 
				var appid = 'cytldWogj'; 
				var conf = 'prod_61b9af6128987f756defa65fecfeb4f5'; 
				var width = window.innerWidth || document.documentElement.clientWidth; 
				if (width < 960) { 
				window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
			</div>
		</div>
		<div class="footer">
			<div class="box">
				<p>Copyright © 2018- 2050 . 赣ICP备17015743号 .<a href="http://www.zcbboke.com">极客猿梦博客</a>  <?php echo $aik['tongji'];?></p>

			</div>
			
		</div>
		<ul class="sidebar">
			<li><a href="#" class="feedback"><i class="icon-svg"></i>反馈</a></li>
			<li><a href="#comment" class="comment-btn"><i class="icon-svg"></i>评论</a></li>
			<li><a href="#" class="go-top"><i class="icon-svg"></i>顶部</a></li>
		</ul>
	</div>

	
	<script src="js/jquery.js"></script>
	<script src="js/tv-yuanmeng.js"></script>
	<script>	
		console.log("%c%cVIP视频解析github项目地址：https://github.com/geekape/vip-video-parse", "line-height:28px;", "line-height:28px;padding:4px 0px;color:#fff;font-size:16px;background-image:-webkit-gradient(linear,left top,right top,color-stop(0,#ff22ff),color-stop(1,#5500ff));color:transparent;-webkit-background-clip:text;");
	</script>
	
</html>