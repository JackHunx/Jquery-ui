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
		
</head>

<body>
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
					  <div class="pull-right span4 show-grid">
					  	<a href="#" class="pull-right"><button class="btn btn-mini">分享</button></a>
						<a href="#" class="pull-right"><button class="btn btn-mini">登录</button></a>
						<a href="#" class="pull-right"><button class="btn btn-mini">免费注册</button></a>
						
						
						
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
				<!-- user dropdown ends -->
		</div>
	</div>
	
	
	
	<div class="headertabnav"><ul><li class="l cursor on"><a href="http://www.ppdai.com/"><span class="l center">首页</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/lend/"><span class="l center">我要借出</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/borrow/"><span class="l center">我要借入</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/account1/"><span class="l center">我的账户</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://help.ppdai.com/"><span class="l center">帮助</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://group.ppdai.com/"><span class="l center">论坛</span></a><span class="r vertical"></span></li><li class="l cursor"><a href="http://www.ppdai.com/bjbz/cxbz.html"><span class="l center">本金保障</span></a><span class="r vertical"></span></li><li class="r yahei" style="width:230px;display:none;">咨询电话：400-1181-081</li></ul></div>
	<div class="headertabbottom"><ul><li class="l cursor on"><a href="http://www.ppdai.com/">欢迎</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/how_it_works.htm">工作原理</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/law.htm">法律政策</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/fees.htm">资费说明</a></li><li class="l cursor"><a href="http://www.ppdai.com/help/aboutus.htm">关于我们</a></li><li class="l cursor"><a href="http://group.ppdai.com/forum.php?mod=announcement">最新公告</a></li></ul></div>
		<!--- user guid ---
		<div class="row-fluid span7 show-grid">
			<p class="btn-group green ">
			<button class="btn btn-large btn-primary">首页</button>
			<button class="btn btn-large btn-primary">我要投资</button>
			<button class="btn btn-large btn-primary">我要贷款</button>
			<button class="btn btn-large btn-primary">我的账号</button>
			<button class="btn btn-large btn-primary">工具箱</button>
			<button class="btn btn-large btn-primary">客服中心</button>
			<button class="btn btn-large btn-primary">借贷论坛</button>
			</p>
		</div>
		<!--- end guid --->
	
	
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
