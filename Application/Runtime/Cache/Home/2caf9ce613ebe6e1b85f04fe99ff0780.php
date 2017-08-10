<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/qianhai/Public/Home/css/xinwenzixun.css" />
<script  src="/qianhai/Public/Home/jq/jquery-1.12.2.min.js" ></script>
</head>
<body>
       <!-- 头部 -->
<div class="head">
   <div class="head_zhong">
        <div class="head_tu"><img src="/qianhai/Public/Home/images/bb.gif"/></div>
		<div class="head_lanmu">
		     <ul>
			    <li style="width:40px;">
				    <a href="<?php echo U('Index/index');?>">首页</a></li>
				<li>
				   <a href="<?php echo U('Guanyuwomen/guanyuwomen');?>">关于宝源</a></li>
				<li>
				   <a href="<?php echo U("Zhuyingyewu/zhuyingyewu");?>">主营业务</a></li>
				<li>
				   <a href="<?php echo U("Anliefenxiang/anliefenxiang");?>">案例分享</a></li>
				<li>
				   <a href="<?php echo U("Chengyaojiameng/chengyaojiameng");?>">诚邀加盟</a></li>
				<li>
				   <a href="<?php echo U("Xinwenzixun/xinwenzixun");?>">新闻资讯</a></li>
				<li>
				   <a href="<?php echo U("Lianxiwomen/lianxiwomen");?>">联系我们</a></li>
				<div class="clear"></div>
			</ul>
		</div>	
   </div>
</div>



    <!-- 图片 -->
   <div class="tu"><img src="/qianhai/Public/Home/images/aa.gif" style="width:100%;"/></div>
   <!-- 内容 -->
   <div class="neirong">
   <div class="nei_tou">
   <a>首页    >     新闻资讯    >     行业资讯  </a>
   </div>
      <div class="left">
	  <div class="left_tu"><img src="/qianhai/Public/Home/images/ff.gif" ></div>
	  <h2>新闻资讯</h2>
	  <ul>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>行业资讯</li>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>公司动态</li>
	
	 
	  </ul>
	  </div>
	  <div class="right">
	   <h1><?php echo $sql[0]['name'];?><h1>
	   <ul>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[0]['content']);?> <a>2014-12-25 </a></li>
	   <li><?php echo html_entity_decode($sql[1]['content']);?> <a>2014-12-24  </a></li>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[2]['content']);?> <a>2014-12-18 </a></li>
	   <li><?php echo html_entity_decode($sql[3]['content']);?>  <a>2014-12-15 </a></li>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[4]['content']);?>  <a>2014-12-12   </a></li>
	   <li><?php echo html_entity_decode($sql[5]['content']);?>  <a>2014-12-09 </a></li>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[6]['content']);?>   <a>2014-12-03  </a></li>
	   <li><?php echo html_entity_decode($sql[7]['content']);?>   <a>2014-11-27 </a></li>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[8]['content']);?>  <a>2014-11-07 </a></li>
	   <li><?php echo html_entity_decode($sql[9]['content']);?>  <a>2014-11-05 </a></li>
	   <li style="background-color:#f3f3f3;"><?php echo html_entity_decode($sql[10]['content']);?>   <a>2014-10-24 </a></li>
	   </ul>
	   <div class="yema">
	   <div class="ye"><img src="/qianhai/Public/Home/images/cv.gif"/><img src="/qianhai/Public/Home/images/cv.gif"/></div>
	   <div class="ye_er"><img src="/qianhai/Public/Home/images/cv.gif"/></div>
	   <div class="ye_zi">1/1</div>
	   <div class="ye"><img src="/qianhai/Public/Home/images/gh.gif"/><img src="/qianhai/Public/Home/images/gh.gif"/></div>
	   <div class="ye_er"><img src="/qianhai/Public/Home/images/gh.gif"/></div>
	   <div class="clear"></div>
	   </div>
	
	  
	  
	  </div>  
	 
	  
	
	
       <div class="weibu">
	   <div class="red"></div>
	   <div class="yanse"></div>
	   <div class="wei_neirong">
	   <a>©  2015 前海宝源资产管理有限公司 版权所有 </a>
	   <span>加入我们  丨 免责声明 丨 联系我们</span>
	   </div>
	   </div>
	  <div class="clear"></div>
   </div>
   




</body>
<script>

   
</script>
</html>