<?php if (!defined('BASE_PATH')) exit;?><!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>同学录</title>
<link rel="stylesheet" href="<?php echo $public_root; ?>style.css">
<script src="<?php echo $public_root; ?>jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $public_root; ?>js.js"></script>

</head>
<body>


<div class="body">

<div class="heard">
    <?php if($is_login) { ?>
    <a href='#'>欢迎<?php echo $name; ?>同学</a>&nbsp;&nbsp;&nbsp; <a href='<?php echo $this->url('login/login');?>'>登陆</a> <a href='<?php echo $this->url('login/exitlogin');?>'>退出登陆</a>
    <!-- <a href="#">账号<?php echo $name; ?>账号<?php echo $sName; ?>密码<?php echo $sPwd; ?> 密码<?php echo $pwd; ?></a> -->
    <?php } else { ?>
    <a href='#'>欢迎xxx同学</a>&nbsp;&nbsp;&nbsp; <a href='<?php echo $this->url('login/login');?>'>登陆</a>
    <?php } ?>

</div>
    <div class="left">
        <form action="<?php echo $this->url('index/save');?>" method="post" id="form1">
            <h1>留言</h1>
            <p>请仔细填写留言内容，并请留下您的联系方式</p>
            <?php if($pwd != $sPwd && $sName != $name && $name!="") { ?>
            <div class="jilianContainer"></div>

           <input type="button" value="请选择留言分区" id="saves"></input>

            <?php } ?>
            <input type="text" name="u_name" id="u_name" placeholder="姓名" />
            <input type="text" name="u_tel" id="u_tel" placeholder="电话号码" />
            <input type="text" name="u_qq" id="u_qq" placeholder="QQ" />
            <input type="text" name="u_email" id="u_email" placeholder="电子邮件" />
            <textarea name="u_content" id="u_content" placeholder="留言内容"></textarea>
            <?php if($is_login) { ?>
            <input type="submit" value="提交留言" id="submit_btn" />

            <?php } ?>
        </form>
        <?php if($pwd == $sPwd && $sName == $name && $name!="") { ?>
            <div class="manage">
                <p class="filp">管理员权限</p>
                <div class="panel">
                <a href="#">广告管理</a><br />
                <a href="#">分类管理</a><br />
                <div class="jilianContainer"></div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="list">
        <div class="book_title"><?php echo $title; ?>留言本</div>
        <div class="message">
             <!-- 判断是否有用户登录 -->
              <!--   <?php foreach($list as $k =>$v) { ?>
                    <dl>
                        <dt>
                        <a href='#'><?php echo $v['u_name']; ?></a>
                        于<?php echo date('Y-m-d H:i:s',$v['time']);?> 发表
                        <?php if($pwd == $sPwd && $sName==$name && $name!="") { ?>
                        <a href="<?php echo $this->url('index/del',['id'=>$v['id']]);?>" class='del'>删除</a>
                        <?php } else { ?>
                        <a href="<?php echo $this->url('index/delfail');?>" class='del'>删除</a>
                        <?php } ?>
                        </dt>
                        <dd><?php echo $v['u_content']; ?></dd>
                    </dl>
                <?php } ?>  -->
        </div>
        </div>
    </div>
<div class="clear"></div>
<script type="text/javascript">

$(document).ready(function(){
    $("#saves").click(function(){

        // alert("清空数据");
        $('.message').html("");
        var list = [];
        $(".selection").each(function(){
            $name=$(this).val();
            if($name!=""){
                list.push($.trim($(this).val()));
            }
        });
        var sid = list[list.length-1];
            $.ajax({
                type:'post',
                url:'index/selectshow',
                data:{'list':list,'sid':sid},
                dataType:'json',
                success:function(data){
                    var htmls="";
                    var htmlOne = "";
                    var htmlTwo = "";
                    var htmlThree = "";
                    <?php foreach($list as $k =>$v) { ?>
                          // $v['id'];
                        htmlOne = "<dl><dt><a href='#'><?php echo $v['u_name']; ?></a>于<?php echo date('Y-m-d H:i:s',$v['time']);?> 发表";
                        <?php if($pwd == $sPwd && $sName==$name && $name!="") { ?>
                            htmlTwo = "<a href='<?php echo $this->url('index/del',['id'=>$v['id']]);?>' class='del'>删除</a>";
                        <?php } else { ?>
                            htmlTwo = "<a href='<?php echo $this->url('index/delfail');?>' class='del'>删除</a>";
                        <?php } ?>
                        htmlThree = "</dt><dd><?php echo $v['u_content']; ?></dd></dl>";
                        htmls += htmlOne + htmlTwo + htmlThree;
                    <?php } ?>
                    alert('刷新一下');
                    $('.message').html(htmls);
                   

                    // location.reload();
                }
            })
    });
});
</script>
<script>
    

    $(function(){
        // 三级联动
    var getData = function(obj){
        $.ajax({
            url:'content/select',
            type:'POST',
            data:{"pid":obj.val()},
            dataType:'json',
            async:false,
            success:function(data){
                if($(".selection").length){
                    $(".selection:gt("+$(obj).index()+")").remove();    //移除后面所有子级下拉菜单
                    $(".selection:last").after(data);                   //添加子级下拉菜单
                }else {
                    $(".jilianContainer").append(data);                 //初始加载情况
                }
                //所有下拉响应
                $(".selection").unbind().change(function(){
                    getData($(this));
                });
            },
            error:function(msg){
                console.log(msg);
            }
        });
    }
    //Init
    getData($(this));
    });
</script>
</body>
</html>
