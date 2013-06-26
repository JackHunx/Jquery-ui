<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	
	<style type="text/css">
	
	#ie6-warning{ background:rgb(255,255,225) url("/upload/201006/20100628012515690.gif") no-repeat scroll 8px center; position:absolute; top:0; left:0; phperz~com font-size:12px; color:#333; width:97%; padding: 2px 15px 2px 23px; text-align:left; } 
	#ie6-warning a { text-decoration:none; } 
	
/* nav */
#nav{
background:url(./img/img.png) 0 0 no-repeat;
_background:url(./img/img.gif) 0 0 no-repeat;
background-position:0 -99px;
	background-repeat:repeat-x;

	position:relative;width:960px;height:34px;margin:5px auto 30px 0px;background-color:#43a1da;}
#nav ul{margin:0 0 9px 1px; *display:inline-block;height:35px;}
#nav li{vertical-align:bottom;height:35px;width:110px;float:left;list-style:none;text-align:center;font-size:13px;}
#nav li .vertical{display:block;width:2px;height:30px;background:url('./img/wage_earners.png') 0 0 no-repeat;
	_background:url('./img/wage_earners.png') 0 0 no-repeat;background-position: -152px -62px;}
#nav li .v a{font-weight:bold;width:100px;height:14px;line-height:33px;display:block;color:#FFF;float:left;font-family:Arial,Verdana,Tahoma,"宋体";}
#nav li .v a:hover,#nav li .v .sele{background:url('./img/wage_earners.png') 0 0 no-repeat;
	_background:url('./img/wage_earners.png') 0 0 no-repeat; background-position: -152px -62px;width:105px; text-decoration:none;height:33px;line-height:33px;font-size:15px;padding-left:0px;}
#nav .kind_menu{top:35px;height:17px;*height:16px;line-height:20px;vertical-align:middle;position:absolute;left:2px;width:880px;text-align:left;display:none;color:#000;font-size:12px;}
#nav .kind_menu a{color:#000;float:left;text-align:center;width:80px;font-family:Arial,Verdana,Tahoma,"宋体";font-size:12px;}
#nav .kind_menu a:hover{color:#000;border-bottom:2px #369bd7 solid;}
#nav .kind_menu span{font-size:15px;color:#000;line-height:30px;*line-height:26px;float:left }	
#nav .btn{padding:none;margin:0xp 0px 0px 0px;}
.guid{margin-left:10px;}
/* slider */
#slider_nav{margin:5px auto;width:620px;height:200px;border:1px solid #ccc;position:relative;overflow:hidden;}
.conbox{position:absolute;/*必要元素*/}
.switcher{position:absolute;bottom:10px;right:10px;float:right;z-index:99;}
.switcher a{background:#666666;cursor:pointer;float:left;font-family:arial;height:14px;line-height:14px;width:14px;margin:4px;text-align:center;color:white;}
.switcher a.cur,.switcher a:hover{background:#666666;border:1px solid #666666;height:18px;line-height:18px;width:18px;margin:0 2px;color:white;font-weight:800;}

#slider_nav .conbox{width:9999em;}
#slider_nav .conbox div{width:620px;height:250px;overflow:hidden;float:left;}


</style>
		
</head>

<body>

<!--[if lte IE 6]>
        <script type="text/javascript">
         alert('您的浏览器版本太低了');
        window.opener=null;
        window.open('http://localhost/Jquery-ui/zxUI/ieerror.html','_self','');
</script><![endif]-->

	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="container-fluid">
			<a href="#" class="pull-left logo">
			<img class="logo" src="http://www.1891d.com/themes/61dai/images/logo.gif" alt="log"/>
			</a>
			<!-- top view info
			
			<div class="pull-left span3">众兴投资理财</div>
			
			<!--- end top view -->
			<!-- user dropdown starts -->
			<!---not login --->
					  <div class="pull-right span4">
					  	<p class="pull-right"><a class="guid" href="#" >分享 </a></p>
						<p class="pull-right"><a class="guid" href="#" >登录 </a></p>
						<p class="pull-right"><a class="guid" href="#" >免费注册 </a></p>
						
						
						
					  </div>
					<!---end login -->
					 
			
				<div class="btn-group pull-right" >
					
					<!-- login 
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">用户中心</a></li>
						<li class="divider"></li>
						<li><a href="login.html">登出</a></li>
					</ul>
					<!--- end login --->
				</div>
		</div>
	</div>
<!-- end navbar -->
	
	
	<!--
	<div class="headertabnav"><ul><li class="l cursor on"><a href="http://www.ppdai.com/"><span class="l center">首页</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/lend/"><span class="l center">我要借出</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/borrow/"><span class="l center">我要借入</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/account1/"><span class="l center">我的账户</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://help.ppdai.com/"><span class="l center">帮助</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://group.ppdai.com/"><span class="l center">论坛</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/bjbz/cxbz.html"><span class="l center">本金保障</span></a><span class="r vertical"></span></li><li class="r yahei" style="width:230px;display:none;">咨询电话：400-1181-081</li></ul></div>
	<div class="headertabbottom"><ul><li class="l cursor on"><a href="http://www.ppdai.com/">欢迎</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/how_it_works.htm">工作原理</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/law.htm">法律政策</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/fees.htm">资费说明</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/aboutus.htm">关于我们</a></li><li class="l cursor"><a href="http://group.ppdai.com/forum.php?mod=announcement">最新公告</a></li></ul></div>
		--><!--- user guid ---
		<div id="slide" class="row-fluid span7 show-grid">
			<p class="btn-group green ">
			<ul class="dashboard-list">
			<li class="pull-left"><button class="btn btn-large btn-primary"><a class="white" href="#">首页</a></button>
				<p class="btn-group green">
					<button class="btn btn-primary">test1</button>
					<button class="btn">test2</button>
				</p>
			</li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我要投资</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我要贷款</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">我的账号</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">工具箱</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">客服中心</button></li>
			<li class="pull-left"><button class="btn btn-large btn-primary">借贷论坛</button></li>
			</ul>
			</p>
		</div>
		<!--- end guid --->
		
		<!---- test --->
		
		<div id="nav">
		
		
		
		<ul class="c">
		
			<li class="nav_lishw" id="">
				<span class="v"><a class="white" href="http://www.17sucai.com/" target="_blank" class="sele">首页</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: block;">
					<a href="">欢迎</a>
					<a href="http://www.17sucai.com/">关于我们</a>
					<a href="http://www.17sucai.com/">法律政策</a>
					<a href="http://www.17sucai.com/">资费说明</a>
					<a href="http://www.17sucai.com/">公司证件</a>
					<a href="http://www.17sucai.com/">工作原理</a>
					<a href="http://www.17sucai.com/">人才招聘</a>
					<a href="http://www.17sucai.com/">新闻动态</a>
				
				<!---
				
				-->
				</div>
			</li>
		
			
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">我要投资</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style="display: none;">
				
					<a href="http://www.17sucai.com/">正在投标</a>
			
					<a href="http://www.17sucai.com/">正在担保</a>
					<a href="http://www.17sucai.com/">等待复审</a>
					<a href="http://www.17sucai.com/">成功借款</a>
					<a href="http://www.17sucai.com/">逾期借款</a>
					
					
					</p>
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">我要贷款</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				
				<!-- befor login-->
					<a href="http://www.17sucai.com/">如何借入</a>
					<a href="http://www.17sucai.com/">利息计算器</a>
					<a href="http://www.17sucai.com/">客服咨询</a>
					<!-- after login --
					<a href="http://www.17sucai.com/">借款管理</a>
					<a href="http://www.17sucai.com/">额度管理</a>
					<a href="http://www.17sucai.com/">已满额</a>
				<!-- end -->
					</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">我的账户</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				<!--- before login -->
				<div>欢迎来到众兴投资</div>
				<!-- after login--
				<p class="btn-group">
					<a href="http://www.17sucai.com/">我是借入者</a>
					<a href="http://www.17sucai.com/">我是借出者</a>
					
					
					</p>
				<!--- end login-->
				</div>
			</li>
			<li class="" id="">
				<span class="v"><a class="whiete" href="http://www.17sucai.com/" class="">工具箱</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
				
					<a href="http://www.17sucai.com/">利息计算</a>
					<a href="http://www.17sucai.com/">手机号码查询</a>
					<a href="http://www.17sucai.com/">ip地址查询</a>
					
					
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">帮助</a><span class="vertical pull-right"></span></span> 
				<div class="kind_menu" style=" display: none;">
					<a href="http://www.17sucai.com/">帮助中心</a>
					<a href="http://www.17sucai.com/">客服中心</a>
					
					
				</div>
			</li>
			<li class="" id="">
				<span class="v"> <a class="whiete" href="http://www.17sucai.com/" class="">借贷论坛</a></span> 
				<div class="kind_menu" style=" display: none;">
					<a href="http://www.17sucai.com/">进入论坛</a>
				</div>
			</li>
			
		</ul>
		
	</div>
	<!--nav-->






		<!--- test end --->
 		
	

  
	
	
	
	
	<!-- topbar ends -->
	<?php } ?>
	<div>
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content">
			<!-- content starts -->
			<?php } ?>
