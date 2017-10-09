<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<title>加入我们-关于-科技公司</title>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="91mb 5.3.16"  data-variable="http://show.91mb.com.cn/muban/res013/323/,cn,127,,6,res013" />
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
	<h1 class="vertical-align-middle">关于</h1>
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

<section class="met-job animsition">
	<div class="container">
		<div class="row">
			<div class="met-job-list met-page-ajax">

<div class="widget widget-article widget-shadow">
	<div class="widget-body">
		<h3 class="widget-title">
			iOS应用开发高级工程师
		</h3>
		<p class="widget-metas">
			<span>2016-05-24</span>
			<span><i class="icon wb-map margin-right-5" aria-hidden="true"></i>北京</span>
			<span><i class="icon wb-user margin-right-5" aria-hidden="true"></i>若干</span>
			<span><i class="icon wb-payment margin-right-5" aria-hidden="true"></i>面议</span>
		</p>
		<hr>
		<div class="met-editor lazyload clearfix"><p>工作职责：<span class="Apple-tab-span" style="white-space: pre;">	</span></p><ol class=" list-paddingleft-2" style="list-style-type: decimal;"><li><p>负责产品和业务iOS平台软件的研发和维护</p></li><li><p>参与产品和业务相关技术研究、架构制定</p></li></ol><p>工作要求：<span class="Apple-tab-span" style="white-space:pre">	</span></p><ol class=" list-paddingleft-2" style="list-style-type: decimal;"><li><p>精通Objective-C/SWIFT/C/C++等语言和面向对象编程思想，熟练掌握常用的设计模式；</p></li><li><p>硕士或以上学历，计算机、通信、电子等相关专业毕业；</p></li><li><p>具备2年以上iOS开发经验，参与过中型以上项目开发，并承担关键工作；</p></li><li><p>对数据结构、基本算法熟练掌握，并具备基本的算法设计能力；</p></li><li><p>思维敏捷，思路清晰，工作积极主动，能够承受较大工作压力。</p></li></ol></div>
		<hr>
		<div class="widget-body-footer margin-top-0">
			<a class="btn btn-outline btn-squared btn-primary met-job-cvbtn" href="javascript:void(0)" data-jobid="27" data-cvurl="cv.php?lang=cn&selected">在线应聘</a>
		</div>
	</div>
</div>

<div class="widget widget-article widget-shadow">
	<div class="widget-body">
		<h3 class="widget-title">
			数据产品运营
		</h3>
		<p class="widget-metas">
			<span>2016-05-24</span>
			<span><i class="icon wb-map margin-right-5" aria-hidden="true"></i>北京</span>
			<span><i class="icon wb-user margin-right-5" aria-hidden="true"></i>若干</span>
			<span><i class="icon wb-payment margin-right-5" aria-hidden="true"></i>面议</span>
		</p>
		<hr>
		<div class="met-editor lazyload clearfix"><p><strong>工作职责：</strong><span class="Apple-tab-span" style="white-space: pre;"></span></p><ul class=" list-paddingleft-2" style="list-style-type: disc;"><li><p>负责数据类产品的运营及品牌市场推广工作，提升产品知名度</p></li><li><p>定期发布行业报告，提升数据产品的行业影响力</p></li><li><p>熟悉当前流行的微信、知乎等新媒体的传播规则，制定运营策略</p></li><li><p>负责跨内外产品合作，媒体合作等，协调可用资源，协同推进项目整体规划</p></li><li><p>对运营数据进行分析，并以此为依据不断优化运营手段</p></li></ul><p><strong>工作要求：</strong><span class="Apple-tab-span" style="white-space:pre"></span></p><ul class=" list-paddingleft-2" style="list-style-type: disc;"><li><p>熟悉互联网行业，1年以上产品运营工作经验</p></li><li><p>能够理解数据产品的商业模式和产业生态</p></li><li><p>有较强的市场活动策划能力，文案、阐述能力优秀、创意能力突出，思维活跃，熟悉创新媒体的营销方式</p></li><li><p>具有良好的沟通能力、推动能力、协调能力，拥有强烈的责任心和团队合作精神</p></li><li><p>有数据统计类、大数据相关领域产品的运营、推广经验者优先</p></li></ul></div>
		<hr>
		<div class="widget-body-footer margin-top-0">
			<a class="btn btn-outline btn-squared btn-primary met-job-cvbtn" href="javascript:void(0)" data-jobid="26" data-cvurl="cv.php?lang=cn&selected">在线应聘</a>
		</div>
	</div>
</div>

			</div>

<div class="hidden-xs">
		    <div class='met_pager'>
			<span class='PreSpan'>上一页</span><a href="job.html" class='Ahover'>1</a><span class='NextSpan'>下一页</span>
			    <span class='PageText'>转至第</span>
			    <input type='text' id='metPageT' data-pageurl='job.php?lang=cn&page=||1' value='1' />
			    <input type='button' id='metPageB' value='页' />
		    </div>
		</div>
<div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
	<button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="/muban/res013/323/job/?lang=cn&class1=127&class2=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>加载更多</button>
</div>

		</div>
	</div>
</section>

<div class="modal fade modal-primary" id="met-job-cv" aria-hidden="true" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method='POST' class="met-form"  enctype="multipart/form-data" action='save.htm'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">在线应聘</h4>
                </div>
                <div class="modal-body padding-bottom-0">
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" class="btn btn-primary btn-squared">提交</button>
                    <button type="button" class="btn btn-default btn-squared" data-dismiss="modal">取消</button>
                </div>
            </form>
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