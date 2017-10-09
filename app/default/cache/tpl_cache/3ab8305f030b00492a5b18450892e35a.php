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