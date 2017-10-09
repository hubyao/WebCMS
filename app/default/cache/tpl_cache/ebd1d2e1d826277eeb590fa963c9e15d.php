<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>Oculus在伦敦组建VR团队-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,122,51,2,res013" />
<meta name="description" content="自从2014年斥资20亿美元收购Oculus以来，Facebook作为社交平台巨头一直在VR发展的前沿。而随着市场发展，VR在美国和中国等地刮起狂潮。由此，Facebook准备扩大疆域，向英国瞄准。根据外媒《每日电讯报》报道，Facebook近日在英国伦敦设立一个VR开发中心，成为旗下Oculus在欧洲的首个基地。据了解，Oculus英国团队的负责人是谷歌前高级工程师Mike LeBeau，是谷歌" />
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
<section class="met-shownews animsition">
	<div class="container">
		<div class="row">
			<div class="col-md-9 met-shownews-body">
				<div class="row">
					<div class="met-shownews-header">
						<h1><?php echo $list['title']; ?></h1>
						<div class="info">
							<span><?php echo date('Y-m-d H:i:s',$list['add_time']);?></span>
							<span>admin</span>
							<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i><?php echo $list['view']; ?></span>
						</div>
					</div>
					<div class="met-editor lazyload clearfix">
						<div>
						<img class="imgloading" height="200" data-original="<?php echo $list['image']; ?>" alt="1464075489148330.jpg" scr="<?php echo $list['image']; ?>"/>
						<?php foreach($list['details'] as $k=>$v) { ?>
							<p><?php echo $v; ?></p>
						<?php } ?>
						<div id="metinfo_additional"></div></div>

					</div>
					<div class="met-shownews-footer">
						<ul class="pager pager-round">
							<li class="previous <?php echo $title[$title_id-1]?'':'disabled'; ?>">
								<a href="<?php if($title[$title_id-1]) { ?><?php echo $this->url('blog/blog_news',['id'=>$title[$title_id-1]['id']]);?><?php } else { ?>'#'<?php } ?>" title="<?php echo $title[$title_id-1]?$title[$title_id-1]['title']:''; ?>">
									上一篇
									<span aria-hidden="true" class='hidden-xs'>:<?php echo $title[$title_id-1]?$title[$title_id-1]['title']:'没有了'; ?></span>
								</a>
							</li>
							<li class="next <?php echo $title[$title_id+1]?'':'disabled'; ?>">
								<a href="<?php if($title[$title_id+1]) { ?><?php echo $this->url('blog/blog_news',['id'=>$title[$title_id+1]['id']]);?><?php } else { ?>'#'<?php } ?>" title="<?php echo $title[$title_id-1]?$title[$title_id-1]['title']:''; ?>">
									下一篇
									<span aria-hidden="true" class='hidden-xs'>：<?php echo $title[$title_id+1]?$title[$title_id+1]['title']:'没有了'; ?></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">

					<div class="met-news-bar">

                        <form method='get' action="../search/search.htm">
                            <input type='hidden' name='lang' value='cn' />
                            <input type='hidden' name='class1' value='108' />
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

								<?php foreach($list_hot as $k=>$v) { ?>
								<li class="list-group-item"><a href="<?php echo $this->url('blog/blog_news',['id'=>$v['id']]);?>" title="<?php echo $v['title']; ?>" target='_self'><?php echo $v['title']; ?></a></li>
								<?php } ?>

							</ul>
						</div>

                        <ul class="column">
                            <li><a href="/blog" title="所有文章" target='_self'>所有文章</a></li>

                            <li><a href="/blog" class="active" title="产品资讯">产品资讯</a></li>

                            <li><a href="/blog"  title="行业动态">行业动态</a></li>

                            <li><a href="/blog"  title="国际资讯">国际资讯</a></li>

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