<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/class18_tp/Public/Admin/css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/jquery.min.js"></script> 
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/jquery-ui.min.js"></script> 
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/uniform.min.js"></script> 
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/main.js"></script>
  <script type="text/javascript" src="/class18_tp/Public/Admin/js/custom.js"></script> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/class18_tp/Public/Admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="login.html" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
          <a href="index.html"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>

        <li class="active"> <a href="#sideEight" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li><a href="#sideEight-sub" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-record"></span>科技<span class="caret"></span></a>
              <ul class="nav sub-nav" id="sideEight-sub" style="">
                <li class="active"><a href="article_list.html"><span class="glyphicons glyphicon-minus"></span> 互联网</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 数码</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> IT</a></li>
                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 电信</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicons glyphicon-record"></span> 文化</a></li>
            <li><a href="#"><span class="glyphicons glyphicon-record"></span> 生活</a></li>
          </ul>
        </li>
        <li>
          <a href="cate_list.html"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
        </li>
        <li>
          <a href="user_list.html"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End: Sidebar -->   


  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">资讯管理</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">资讯列表</div>
                  <a href="article_add.html" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加文章</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">互联网</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>标题</th>
                        <th>添加时间</th>
                        <th width="200">操作</th>
                      </tr>
                    	<tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
		                      <div class="btn-group">
		                        <a href="article_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        
                        </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="article_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td>再谈互联网给传统金融带来的颠覆</td>
                        <td>2015-01-10</td>
                        <td>
                          <div class="btn-group">
                            <a href="article_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  
                  <div class="pull-right">
                    <ul class="pagination" id="paginator-example">
                      <li><a href="#">&lt;</a></li>
                      <li><a href="#">&lt;&lt;</a></li>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&gt;</a></li>
                      <li><a href="#">&gt;&gt;</a></li>
                    </ul>
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