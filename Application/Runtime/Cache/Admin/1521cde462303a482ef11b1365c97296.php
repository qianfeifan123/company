<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>后台管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script type="text/javascript" charset="utf-8" src="/erongchuang/Public/Admin/baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/erongchuang/Public/Admin/baidu/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/erongchuang/Public/Admin/baidu/lang/zh-cn/zh-cn.js"></script>
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/glyphicons.min.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Admin/css/custom.css">
  <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
  <link href="/erongchuang/Public/Admin/css/css/froala_editor.min.css" rel="stylesheet" type="text/css"> 
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/jquery.min.js"></script> 
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/jquery-ui.min.js"></script> 
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/uniform.min.js"></script> 
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/main.js"></script>
  <script type="text/javascript" src="/erongchuang/Public/Admin/js/custom.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color:#41494e;">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/erongchuang/Public/Admin/images/logo.png" alt="logo" style="width:150%;"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span><?php echo $_SESSION['username'];?></a>
    <a href="<?php echo U("Login/logout");?>" class="btn btn-default btn-gradient"style="background:#14abd8;color:#f9f9f9;" type="button">退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		<div class="sidebar-toggle"><div style="width:100%;margin:auto;"><img width="80%"src="/erongchuang/Public/Admin/images/icon_06.png"></div></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li> 
          <a  class="back" href="<?php echo U("Index/index"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_03.png" style="margin-top:15px;"></div></span><span class="sidebar-title">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</span></a>
        </li>
        <li>
          <a class="back" href="<?php echo U("Nav/index"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_10.png" style="margin-top:15px;"></div></span><span class="sidebar-title">顶部导航</span></a>
        </li>
        <li>
          <a class="back" href="<?php echo U("Service/index"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_10.png" style="margin-top:15px;"></div></span><span class="sidebar-title">企业服务</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Index/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_10.png" style="margin-top:15px;"></div></span><span class="sidebar-title">合作企业</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Lunbo/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_10.png" style="margin-top:15px;"></div></span><span class="sidebar-title">轮播图片</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Xiangmu/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_12.png" style="margin-top:15px;"></div></span><span class="sidebar-title">市场需求</span></a>
        </li>
        <li>
          <a class="back" href="<?php echo U("Force/index"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_12.png" style="margin-top:15px;"></div></span><span class="sidebar-title">核心能力</span></a>
        </li>
        <li>
          <a class="back" href="<?php echo U("Anli/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_14.png" style="margin-top:15px;"></div></span><span class="sidebar-title">案例展示</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Fuwu/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_16.png" style="margin-top:15px;"></div></span><span class="sidebar-title">服务内容</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Xinwen/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_18.png" style="margin-top:15px;"></div></span><span class="sidebar-title">新闻中心</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Guanyu/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_20.png" style="margin-top:15px;"></div></span><span class="sidebar-title">关于我们</span></a>
        </li>
		    <li>
          <a class="back" href="<?php echo U("Lianxi/class_list"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_22.png" style="margin-top:15px;"></div></span><span class="sidebar-title">联系我们</span></a>
        </li>
        <li>
          <a class="back" href="<?php echo U("Company/index"); ?>"><span class="glyphicons"><div style="width:50%;margin:auto;"><img width="100%"src="/erongchuang/Public/Admin/images/icon_22.png" style="margin-top:15px;"></div></span><span class="sidebar-title">公司信息</span></a>
        </li>
		<script>
		    $('.back').hover(function(){
			  $(this).css("background","#1ed9f5");
			},function(){
			  $(this).css("background","#42485b");
			});
		</script>
      </ul>
    </div>
  </aside>
  <!-- End: Sidebar -->  
  <!-- End: Sidebar -->  
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="<?php echo U("Force/index");?>"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">编辑</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="<?php echo U("Force/index");?>"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <!-- <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="" id="standard-list1" class="form-control">
                                                <option>请选择</option>
                                                <option>科技</option>
                                                <option>文化</option>
                                                <option>生活</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="<?php echo $sql["title"];?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">图片</span>
                                           <input type="file" name="tupian" value="" class="form-control">
                                           <img src="/erongchuang/Uploads/<?php echo ($sql["img"]); ?>" width="100px" height="100px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">内容</span>
                                            <input type="text" name="content" value="<?php echo $sql["content"];?>"
                                                   class="form-control">
                                        </div>
                                    </div>
       
                                    
                                    
                                   
                                </div>
                               
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue" name="dosubmit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->


</body>

</html>