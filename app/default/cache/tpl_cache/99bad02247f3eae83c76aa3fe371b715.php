<?php if (!defined('BASE_PATH')) exit;?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>-科技公司</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta name="generator" content="91mb"  data-variable="http://show.91mb.com.cn/muban/res013/323/|cn||||res013" />
<link href="/public/default/images/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="/public/default/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/public/default/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/public/default/css/met_metinfo.css" />
</head>
<style>
.met-member{ background-color:;}
.login_index{ background-color:;  }
</style>
<body>
<div class="container met-head">

			<div class="row">
				<div class="col-xs-6 col-sm-6 logo">
	<ul class="list-none">
		<li><a href="index.html" class="met-logo"><img src="/public/default/upload/201605/1464062976.png" /></a></li>

		<li>会员登录</li>

	</ul>
				</div>

				<div class="col-xs-6 col-sm-6 user-info">
					<ol class="breadcrumb pull-right">

					  <li><a href="index.html" title="返回首页">返回首页</a></li>
					  
					</ol>
				</div>
			</div>

</div>

<div class="login_index met-member">
	<div class="container">
		<form method="post" action="login_2.htm">
			<input type="hidden" name="gourl" value="" />
			<div class="form-group">
				<input type="text" name="username" required class="form-control" placeholder="用户名/邮箱/手机"
				data-bv-notempty="true"
				data-bv-notempty-message="此项不能为空"
				>
			</div>
			<div class="form-group">
				<input type="password" name="password" required class="form-control" placeholder="密码" 
				data-bv-notempty="true"
				data-bv-notempty-message="此项不能为空"
				>
			</div>

			<div class="login_link"><a href="getpassword.htm">忘记密码？</a></div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>


			<a class="btn btn-lg btn-info btn-block" href="register_include.htm">没有账号？现在去注册</a> 
			
		</form>
	</div>
</div>

<footer class="container met-footer">
	<p>科技公司 版权所有 © 2008-2016 湘ICP备8888888 </p>
<p>本页面内容为网站演示数据，前台页面内容都可以在后台修改。</p>

</footer>
<script src="/public/default/js/seajs.js"></script>
<script>
	var pub = 'http://show.91mb.com.cn/muban/res013/323/app/system/include/public/',
		tem = 'http://show.91mb.com.cn/muban/res013/323/app/system/web/user/templates/met/',
		page_type = 'login';
	seajs.config({
	  paths: {
		'pub': pub.substring(0,pub.length-1),
		'tem': tem.substring(0,tem.length-1)
	  },
	  alias: {
		"jquery": "/public/default/jquery_seajs.js"
	  }
	});
	seajs.use("tem/js/own"); //载入入口模块
</script>
</body>
</html>