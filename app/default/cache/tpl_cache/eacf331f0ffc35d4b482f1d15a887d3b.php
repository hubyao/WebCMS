<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>科技公司网站模板|科技公司企业网站模板-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,10001,,10001,res013" />
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
<div class="met-banner" data-height='' style=''>
<?php foreach($banner as $k=>$v) { ?>
	<div class="slick-slide"> 
	<img class="cover-image" src="<?php echo $v['images']; ?>"  sizes="(max-width: 767px) 767px" alt="Know You More">
		<div class="banner-text p-1">
			<div class='container'>
				<div class='banner-text-con'>
					<div>
						<h4 class="animation-slide-top"><?php echo $v['slide_top']; ?></h4>
						<p class="animation-slide-bottom animation-delay-300"><?php echo $v['slide_bottom']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

</div>
<div class="met-index-service met-index-body">
	<div class="container">
		<h2 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">科技改变生活</h2>
		<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">科技正用你无法想象的速度在改变世界，改变人们的生活</p>
		<ul class="blocks-2 blocks-sm-2 blocks-md-4 blocks-xlg-4 " data-plugin="matchHeight">
			<li class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"> <i class="icon fa-automobile" aria-hidden="true"></i>
				<h3>无人驾驶</h3>
				<p>无人驾驶车将改变人们的出行方式。据估计，无人驾驶车可将每年因交通事故死亡的人数（120万）削减一半。</p>
			</li>
			<li class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"> <i class="icon fa-eye" aria-hidden="true"></i>
				<h3>虚拟现实</h3>
				<p>简称VR，创建和体验虚拟世界，有一天你也会有专属自己的虚拟人生。</p>
			</li>
			<li class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"> <i class="icon fa-android" aria-hidden="true"></i>
				<h3>机器人</h3>
				<p>未来将会有更多给人们生活带来改变的机器人，甚至机器人会有自己的情感。</p>
			</li>
			<li class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"> <i class="icon fa-fighter-jet" aria-hidden="true"></i>
				<h3>无人机</h3>
				<p>人们已经在利用无人机寻找等待救援的远足者和滑雪者，拍摄房屋航空图像，以及调查考古遗址。</p>
			</li>
		</ul>
	</div>
</div>
<div class="met-index-product met-index-body">
	<div class="container">
		<h2 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">科技产品</h2>
		<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">我们致力于让科技改善人们的生活</p>
		<div class='invisible' data-plugin="appear" data-animate="fade" data-repeat="false">
			<ul class="nav nav-tabs">
				<li class="active"> <a href="323.html#indexprolist" title="全部" data-toggle="tab" data-num='8' data-filter="*">
					<h3>全部</h3>
					</a> </li>
				<?php foreach($type as $k =>$v) { ?>
				<li> <a href="323.html#indexprolist" title="<?php echo $v['type']; ?>" data-toggle="tab" data-filter="list_<?php echo $v['fid']; ?>">
					<h3><?php echo $v['type']; ?></h3>
					</a> </li>
				<?php } ?>
			</ul>
		</div>
		<ul class="blocks-2 blocks-sm-2 blocks-md-4 blocks-xlg-4 no-space" id='indexprolist' data-scale='1'>
		<?php foreach($product as $k =>$v) { ?>
			<li data-type="list_<?php echo $v['fid']; ?>">
				<div class="widget widget-shadow invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">
					<figure class="widget-header cover"> <a href="product/showproduct.htm" title="<?php echo $v['name']; ?>" target='_self'> <img class="cover-image" data-original="<?php echo $v['image']; ?>&x=400&y=400" style='height:300px;' alt="<?php echo $v['name']; ?>" src="<?php echo $v['image']; ?>"> </a> </figure>
					<h4 class="widget-title"> <a href="product/showproduct.htm" title="<?php echo $v['name']; ?>" target='_self'><?php echo $v['name']; ?></a>
						<p class='margin-bottom-0 margin-top-5 red-600'><?php echo $v['money']; ?></p>
					</h4>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>

<div class="met-index-news met-index-body">
	<div class="container">
		<h2 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">博客资讯</h2>
		<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">分享最新科技资讯，关注智能硬件</p>
		<ul class="blocks-2" data-scale='0.75'>
			<?php foreach($blog as $k=>$v) { ?>
			<li class="invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
				<div class="media media-lg">
					<div class="media-left"> <a href="<?php echo $this->url('blog/blog_news',['id'=>$v['id']]);?>" title="<?php echo $v['title']; ?>" target='_self'> <img class="media-object" data-original="include/thumb.php?dir=upload/201605/1464075489148330.jpg&x=200&y=150" style='height:80px;' alt="<?php echo $v['title']; ?>" src="<?php echo $v['image']; ?>"> </a> </div>
					<div class="media-body">
						<h4 class="media-heading"> <a href="<?php echo $this->url('blog/blog_news',['id'=>$v['id']]);?>" title="<?php echo $v['title']; ?>" target='_self'> <?php echo $v['title']; ?> </a> </h4>
						<p class="des"><?php echo $v['content']; ?></p>
						<p class="info"> <span><?php echo date('Y-m-d H:i:s',$v['add_time']);?></span> <span class="margin-left-10">admin</span> <span class="margin-left-10"><i class="icon wb-eye margin-right-5" aria-hidden="true"></i><?php echo $v['view']; ?></span> </p>
					</div>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="met-index-about met-index-body">
	<div class="container">
		<h2 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">关于我们</h2>
		<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">我们致力于让科技改善人们的生活</p>
		<div class="met-editor no-gallery lazyload clearfix invisible" data-plugin="appear" data-animate="slide-bottom10" data-repeat="false">
			<p><img class="imgloading" height="200" data-original="<?php echo $about['image']; ?>" /></p>
			<hr/>
			<?php foreach($about['content'] as $k => $v) { ?>
			<p><?php echo $v; ?></p>
			<?php } ?>
		</div>
	</div>
</div>


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