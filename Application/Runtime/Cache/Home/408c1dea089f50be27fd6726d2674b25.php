<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/qianhai/Public/Home/css/guanyuwomen.css" />
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
   <div class="tu"><img src="/qianhai/Uploads/<?php echo $sql[0]['img'];?>" style="width:100%;"/></div>
   <!-- 内容 -->
   <div class="neirong">
   <div class="nei_tou">
   <a>首页    >     关于宝源    >     公司简介  </a>
   </div>
      <div class="left">
	  <div class="left_tu"><img src="/qianhai/Uploads/<?php echo $sql[1]['img'];?>" ></div>
	  <h2><?php echo $sql[1]['name'];?></h2>
	  <ul>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>公司简介</li>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>公司架构</li>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>公司文化</li>
	  <li><img src="/qianhai/Public/Home/images/gh.gif"/>企业愿景</li>
	  </ul>
	  </div>
	  <div class="right">
	   <h1><?php echo $sql[2]['name'];?><h1>
	   <p><?php echo html_entity_decode($sql[2]['content']);?></p>
	   <p><?php echo html_entity_decode($sql[3]['content']);?></p>
	   <p><?php echo html_entity_decode($sql[4]['content']);?></p>
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