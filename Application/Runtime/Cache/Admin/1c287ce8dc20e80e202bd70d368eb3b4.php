<?php if (!defined('THINK_PATH')) exit();?>﻿4<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script type="text/javascript" charset="utf-8" src="/qianhai/Public/Admin/baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/qianhai/Public/Admin/baidu/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/qianhai/Public/Admin/baidu/lang/zh-cn/zh-cn.js"></script>
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/qianhai/Public/Admin/css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/qianhai/Public/Admin/js/jquery.min.js"></script> 
  <script type="text/javascript" src="/qianhai/Public/Admin/js/jquery-ui.min.js"></script> 
  <script type="text/javascript" src="/qianhai/Public/Admin/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="/qianhai/Public/Admin/js/uniform.min.js"></script> 
  <script type="text/javascript" src="/qianhai/Public/Admin/js/main.js"></script>
  <script type="text/javascript" src="/qianhai/Public/Admin/js/custom.js"></script> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/qianhai/Public/Admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span><?php echo $_SESSION['username'];?></a>
    <a href="<?php echo U("Login/logout");?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		<div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="<?php echo U("Index/index"); ?>"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
		<li>
          <a href="<?php echo U("Index/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">前海首页</span></a>
        </li>
        <li>
          <a href="<?php echo U("Anli/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">案例分享</span></a>
        </li>
		<li>
          <a href="<?php echo U("Jamen/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">诚邀加盟</span></a>
        </li>
		<li>
          <a href="<?php echo U("Guanyu/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">关于我们</span></a>
        </li>
		<li>
          <a href="<?php echo U("Lianxi/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">联系我们</span></a>
        </li>
		<li>
          <a href="<?php echo U("Zhuying/class_list"); ?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">主营业务</span></a>
        </li>
        <li class="active"> <a href="#sideEight" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">新闻资讯</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <!-- <li><a href="#sideEight-sub" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-record"></span>科技<span class="caret"></span></a>
              <ul class="nav sub-nav" id="sideEight-sub" style="">
                <li class="active"><a href="article_list.html"><span class="glyphicons glyphicon-minus"></span> 互联网</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 数码</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> IT</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 电信</a></li>
              </ul>
			  </li> -->
            <li><a href="<?php echo U("Xinwen/class_list"); ?>"><span class="glyphicons glyphicon-record"></span> 新闻资讯</a></li>
            <li><a href="<?php echo U("Xinwens/class_list"); ?>"><span class="glyphicons glyphicon-record"></span> 新闻资讯详情</a></li>
          </ul>
        </li>
       <!--  <li>
          <a href="cate_list.html"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
        </li>
        <li>
          <a href="user_list.html"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
        </li> -->
      </ul>
    </div>
  </aside>
  <!-- End: Sidebar -->  
  <!-- End: Sidebar -->  
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="<?php echo U("Zhuying/index"); ?>"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">联系我们</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">联系我们</div>
                  <a href="<?php echo U("Zhuying/add"); ?>" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加文章</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">首页</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>编号</th>
                        <th>用户名</th>
                        <th>内容</th>
                        <th>图片</th>
                        <th>更改时间</th>
                        <th width="200">操作</th>
                      </tr>
					  <?php if(is_array($list)): foreach($list as $key=>$value): ?><tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo ($value["id"]); ?></td>
                        <td><?php echo ($value["name"]); ?></td>
                        <td><?php echo ($value["content"]); ?></td>
                        <td><img src="/qianhai/Uploads/<?php echo ($value["img"]); ?>" width="100px" height="100px"></td>
                        <td><?php echo date("Y-m-d h:i:s",$value['times']);?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="<?php echo U('Zhuying/edit',array('id'=>$value['id']));?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href=" <?php echo U('Zhuying/del',array('id'=>$value['id']));?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        
                        </td>
                      </tr><?php endforeach; endif; ?>
                    	
                     
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  
                  <div class="pull-right">
                     <style>
					.current{color:red;margin-right:5px; font-weight:600;}
					.num{color:blue; margin-right:5px;}
					.next{color:blue;}
					.prev{color:blue; margin-right:5px;}
				  </style>
                  <div class="pull-right">
                    <?php echo $page; ?>
                  </div>
                  </div>
                  
                </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html>