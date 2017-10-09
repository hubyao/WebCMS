<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>相关下载-支持-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,131,,4,res013" />
<meta name="description" content="网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。" />
<meta name="keywords" content="科技公司网站模板|科技公司企业网站模板" />
<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel='stylesheet' href='../templates/res013/cache/metinfo.css'>
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
	<h1 class="vertical-align-middle">支持</h1>
</div>

		<div class="met-column-nav ">
			<div class="container">
				<div class="row">

					<div class="sidebar-tile">
						<ul class="met-column-nav-ul invisible-xs">


							<li>

								<a href="../service/show.htm" title="售后政策" class="link ">售后政策</a>

							</li>

							<li>

								<a href="download.html" title="相关下载" class="link active">相关下载</a>

							</li>

						</ul>
					</div>


				</div>
			</div>
		</div>

<section class="met-download animsition">
	<div class="container">
		<div class="row">
			<div class="col-md-9 met-download-body">
				<div class="row">
					<div class="met-download-list">
						<ul class="list-group list-group-dividered list-group-full met-page-ajax">


	<li class="list-group-item">
		<div class="media">
			<div class="media-left">
				<a href="showdownload.htm" title="产品使用说明">
					<i class="icon fa-file-archive-o" aria-hidden="true"></i>
				</a>
			</div>
			<div class="media-body">
				<div class="pull-right">
					<a class="btn btn-outline btn-primary btn-squared" href="download.html" title="产品使用说明">立即下载</a>
				</div>
				<h4 class="media-heading">
					<a class="name" href="showdownload.htm" title="产品使用说明" target='_self'>
						产品使用说明
					</a>
				</h4>
				<small>
					<span>1.17Mb</span>
					<span class="margin-left-10">2017-01-14</span>
				</small>
			</div>
        </div>
	</li>

	<li class="list-group-item">
		<div class="media">
			<div class="media-left">
				<a href="showdownload_2.htm" title="手机APP下载- Android">
					<i class="icon fa-file-archive-o" aria-hidden="true"></i>
				</a>
			</div>
			<div class="media-body">
				<div class="pull-right">
					<a class="btn btn-outline btn-primary btn-squared" href="download.html" title="手机APP下载- Android">立即下载</a>
				</div>
				<h4 class="media-heading">
					<a class="name" href="showdownload_2.htm" title="手机APP下载- Android" target='_self'>
						手机APP下载- Android
					</a>
				</h4>
				<small>
					<span>15.62Mb</span>
					<span class="margin-left-10">2016-05-27</span>
				</small>
			</div>
        </div>
	</li>

	<li class="list-group-item">
		<div class="media">
			<div class="media-left">
				<a href="showdownload_3.htm" title="手机APP下载-iphone">
					<i class="icon fa-file-archive-o" aria-hidden="true"></i>
				</a>
			</div>
			<div class="media-body">
				<div class="pull-right">
					<a class="btn btn-outline btn-primary btn-squared" href="download.html" title="手机APP下载-iphone">立即下载</a>
				</div>
				<h4 class="media-heading">
					<a class="name" href="showdownload_3.htm" title="手机APP下载-iphone" target='_self'>
						手机APP下载-iphone
					</a>
				</h4>
				<small>
					<span>12.70Mb</span>
					<span class="margin-left-10">2016-05-27</span>
				</small>
			</div>
        </div>
	</li>
 

						</ul>

<div class="hidden-xs">
		    <div class='met_pager'>
			<span class='PreSpan'>上一页</span><a href="download.html" class='Ahover'>1</a><span class='NextSpan'>下一页</span>
			    <span class='PageText'>转至第</span>
			    <input type='text' id='metPageT' data-pageurl='download.php?lang=cn&class1=131&page=||1' value='1' />
			    <input type='button' id='metPageB' value='页' />
		    </div>
		</div>
<div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
	<button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="/muban/res013/323/download/?lang=cn&class1=131&class2=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>加载更多</button>
</div>

					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">

                    <div class="met-news-bar">

                        <form method='get' action="../search/search.htm">
                            <input type='hidden' name='lang' value='cn' />
                            <input type='hidden' name='class1' value='131' />
                            <div class="form-group">
                                <div class="input-search">
                                    <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                                    <input type="text" class="form-control" name="searchword" placeholder="Search">
                                </div>
                            </div>
                        </form>

						<div class="recommend news-list-md">
							<h3>为您推荐</h3>
							<ul class="list-group list-group-bordered">

								<li class="list-group-item"><a href="showdownload.htm" title="产品使用说明" target='_self'>产品使用说明</a></li>

								<li class="list-group-item"><a href="showdownload_2.htm" title="手机APP下载- Android" target='_self'>手机APP下载- Android</a></li>

								<li class="list-group-item"><a href="showdownload_3.htm" title="手机APP下载-iphone" target='_self'>手机APP下载-iphone</a></li>

							</ul>
						</div>

                        <ul class="column">
                            <li><a href="../service/show.htm" title="全部" target='_self'>全部</a></li>

                            <li><a href="../service/show.htm"  title="售后政策">售后政策</a></li>

                            <li><a href="download.html" class="active" title="相关下载">相关下载</a></li>

                        </ul>

                    </div>

				</div>
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