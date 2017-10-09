<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>意见反馈-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,128,128,8,res013" />
<meta name="description" content="网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。" />
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

<section class="met-feedback animsition">
	<div class="container">
		<div class="row">
			<div class="met-feedback-body">
				<form method='POST' class="met-form met-form-validation"  enctype="multipart/form-data"  action='http://show.91mb.com.cn/muban/res013/323/feedback/index.php?action=add'>
				<input type='hidden' name='lang' value='cn' />
				<input type='hidden' name='fdtitle' value='意见反馈' />
				<input type='hidden' name='ip' value='222.240.227.26' />
				<input type='hidden' name='id' value='128' />
				<input type='hidden' name='fid_url' value='0' />


				<div class="form-group">

					<label class="control-label">反馈类型</label>

					<div>
						
								<div class="radio-custom radio-primary">
									<input
										name='para165'
										type="radio"
										checked
										value='产品建议'
										id="para165_1"
									>
									<label for="para165_1">产品建议</label>
								</div>
								<div class="radio-custom radio-primary">
									<input
										name='para165'
										type="radio"
										
										value='网站设计'
										id="para165_2"
									>
									<label for="para165_2">网站设计</label>
								</div>
								<div class="radio-custom radio-primary">
									<input
										name='para165'
										type="radio"
										
										value='文章内容'
										id="para165_3"
									>
									<label for="para165_3">文章内容</label>
								</div>
								<div class="radio-custom radio-primary">
									<input
										name='para165'
										type="radio"
										
										value='其它'
										id="para165_4"
									>
									<label for="para165_4">其它</label>
								</div><span class="help-block"> </span>
					</div>
				</div>

				<div class="form-group">

					<div>
						<textarea name='para166' class='form-control' data-fv-notempty="true" data-fv-message="不能为空" placeholder='反馈内容 ' rows='5'></textarea>
					</div>
				</div>

				<div class="form-group">

					<div>
						<input name='para167' class='form-control' type='text' placeholder='您的邮箱 ' data-fv-notempty="true" data-fv-message="不能为空" />
					</div>
				</div>


				<div class="form-group">

					<div class="input-group input-group-icon">
						<input
							name='code'
							type="text"
							class="form-control"
							placeholder = "验证码"
							data-fv-notempty = "true"
							data-fv-message = "不能为空"
						>
						<span class="input-group-addon">
							<img
								src="../member/ajax.png"
								data-url="http://show.91mb.com.cn/muban/res013/323/member/ajax.php?action=code"
								class="met-form-codeimg"
								alt="看不清？点击更换验证码"
								title="看不清？点击更换验证码"
								onclick='codeimgRefresh();'
							/>
						</span>
					</div>
				</div>


					<div class="form-group margin-bottom-0">
						<button type="submit" class="btn btn-primary btn-lg btn-block btn-squared">提交</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php if (!defined('BASE_PATH')) exit;?><div class="met-footnav text-center">
	<div class="container">
		<div class="row mob-masonry">
		<?php foreach($foot_nav as $k=>$v) { ?>
			<div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
				<h4><a href="<?php echo $v['content']; ?>"  title="产品"><?php echo $v['name']; ?></a></h4>
				<ul>
					<?php foreach($foot_nav[$k][data] as $k=>$v) { ?>
					<li><a href="<?php echo $v['href']; ?>"  title="<?php echo $v['name']; ?>"><?php echo $v['name']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<div class="col-md-3 col-ms-12 col-xs-12 info masonry-item"> <em><a href="tel:400-000-000" title="400-000-000">400-000-000</a></em>
				<p>周一至周五 08:30~17:30</p>
				<a id="met-weixin"><i class="fa fa-weixin light-green-700" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='top' data-width='160' data-padding='0' data-content="<img src='upload/201605/1464081530.jpg' alt='科技公司网站模板|科技公司企业网站模板-科技公司' style='width: 150px;display:block;margin:auto;'>"></i></a> <a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" rel="nofollow" target="_blank"> <i class="fa fa-qq"></i> </a> <a href="323.html" rel="nofollow" target="_blank"><i class="fa fa-weibo red-600"></i></a> </div>
		</div>
	</div>
</div>
<footer>
	<div class="container text-center">
		<p>科技公司 版权所有 © 2008-2016 湘ICP备8888888 </p>
		<p>本页面内容为网站演示数据，前台页面内容都可以在后台修改。</p>
		<div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="../../../www_91mb_com_default.html#copyright" target="_blank" title="企业网站管理系统">91mb</a>&nbsp;5.3.16</div>
	</div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>
<script>
var jsonurl='http://show.91mb.com.cn/muban/res013/323/shop/cart.php?a=dojson_cart_list&lang=cn',totalurl='http://show.91mb.com.cn/muban/res013/323/shop/cart.php?a=domodify&lang=cn',delurl='http://show.91mb.com.cn/muban/res013/323/shop/cart.php?a=dodel&lang=cn',lang_emptycart='购物车中还没有商品，赶紧选购吧！';
</script>
<script src="/public/default/js/metinfo.js"></script>
</body>
</html>