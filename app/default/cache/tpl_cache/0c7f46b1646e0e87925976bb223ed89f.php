<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>联系我们-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,126,126,1,res013" />
<meta name="description" content="某某科技有限责任公司地址： XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX电话： 00000000000邮编： 000000传真： 00000000000-0000" />
<meta name="keywords" content="科技公司网站模板|科技公司企业网站模板" />
<link href="/public/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel='stylesheet' href='/public/default/css/metinfo.css'>
</head>
<body>
<!--[if lte IE 8]>
	<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
	<p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
	</div>
<![endif]-->
<?php if (!defined('BASE_PATH')) exit;?><link href="/public/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel='stylesheet' href='/public/default/css/metinfo.css'>

<nav class="navbar navbar-default met-nav " role="navigation">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
				data-target="#navbar-default-collapse" data-toggle="collapse"> <span class="sr-only">Toggle navigation</span> <span class="hamburger-bar"></span> </button>
				<a href="index" class="navbar-brand navbar-logo vertical-align" title="科技公司">
				<h1 class='hide'>科技公司</h1>
				<div class="vertical-align-middle"><img src="/public/default/upload/201605/1464062976.png" alt="科技公司" title="科技公司" /></div>
				</a>
				<h2 class='hide'></h2>
			</div>
			<div class="collapse navbar-collapse navbar-collapse-toolbar nav-shop" id="navbar-default-collapse">
				<div class="navbar-right vertical-align text-center animation-slide-top met-nav-login">
					<div class="vertical-align-middle margin-right-10"><a href="register_include" class="btn btn-squared btn-success">注册</a></div>
					<div class="vertical-align-middle"><a href="login" class="btn btn-squared btn-primary btn-outline">登录</a></div>
				</div>
				<ul class="nav navbar-nav navbar-right navlist">
					<li><a href="/index" title="首页" class="link
					<?php if(explode('/',$_SERVER['PHP_SELF'])[2] == index) { ?>active<?php } ?>">首页</a></li>
					<li class="dropdown margin-left-40"> <a
							class="dropdown-toggle link <?php if(explode('/',$_SERVER['PHP_SELF'])[2] == product) { ?>active<?php } ?>"
							data-toggle="dropdown"
							data-hover="dropdown"
							href="product"
							aria-expanded="false"
							title="产品"
						>产品 <span class="caret"></span></a>
						<ul class="dropdown-menu dropdown-menu-right animate">
							<li class='nav-parent visible-xs'><a href="product"  title="全部">全部</a></li>
							<?php foreach($product_item as $k=>$v) { ?>
							<li><a href="<?php echo $v['href']; ?>" class=""  title="<?php echo $v['name']; ?>"><?php echo $v['name']; ?></a></li>
							<?php } ?>
						</ul>
					</li>
					<?php foreach($top_nav as $k=>$v) { ?>
					<li class="margin-left-40"><a href="<?php echo $v['content']; ?>"  title="<?php echo $v['name']; ?>" class="link <?php if(explode('/',$_SERVER['PHP_SELF'])[2] == explode('/',$v['content'])[1]) { ?>active<?php } ?>"><?php echo $v['name']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="met-banner-ny vertical-align text-center" style=''>
	<h2 class="vertical-align-middle">关于</h2>
</div>

		<div class="met-column-nav ">
			<div class="container">
				<div class="row">

					<div class="sidebar-tile">
				<ul class="met-column-nav-ul invisible-xs">
				<?php foreach($nav as $k =>$v) { ?>
					<li> <a href="<?php echo $v['href']; ?>" title="<?php echo $v['name']; ?>" class="link <?php if(explode('/',$_SERVER['PHP_SELF'])[2] == explode('/',$v['href'])[1]) { ?>active<?php } ?>"><?php echo $v['name']; ?></a> </li>
				<?php } ?>
				</ul>
					</div>
				</div>
			</div>
		</div>

<section class="met-show animsition">
	<div class="container">
		<div class="row">
			<div class="met-editor lazyload clearfix">
				<div><p style="text-align: center;"><img class="" height="200" data-original="http://show.91mb.com.cn/muban/res013/323/upload/201605/1464077148677664.png" title="1464077148677664.png" alt="QQ截图20160524160529.png" style="line-height: 1.42857; display: inline;" src="/public/default/images/map.png"><span style="font-weight: 700;"></span></p><hr/><p style="white-space: normal;"><span style="font-weight: 700;"></span><span style="font-weight: 700; line-height: 1.42857;">某某科技有限责任公司</span></p><p style="white-space: normal;">地址： XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p><p style="white-space: normal;">电话： 00000000000</p><p style="white-space: normal;">邮编： 000000</p><p style="white-space: normal;">传真： 00000000000-0000</p></div>
			</div>
		</div>
	</div>
</section>


{inclode foot.html}
</body>
</html>