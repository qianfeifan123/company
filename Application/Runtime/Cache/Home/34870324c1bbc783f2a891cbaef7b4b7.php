<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
	    <title>
		    艺融创科技有限公司
	    </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0.5,maximum-scale=2.0,user-scalable=yes"/>
		<link rel="stylesheet" type="text/css" href="/erongchuang/Public/Home/css/erongchuang.css">
		<script type="text/javascript" src="/erongchuang/Public/Home/js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="/erongchuang/Public/Home/js/jquery1.42.min.js"></script>
		<script type="text/javascript" src="/erongchuang/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
    </head>
	<body>
	<!--头部开始-->
	    <div class="index_head">
	        <div class="index_head_left">
			    <img src="/erongchuang/Public/Home/images/logo1.png">
				<div class="clear"></div>
		    </div>
			<div class="index_head_center">
			    <ul class="daohang">
				    <a href="<?php echo U('Index/index');?>"><li class="daohang_li"><strong>首&nbsp;&nbsp;&nbsp;页</strong></li></a>
				    <a href="<?php echo U('Index/guanyu');?>"><li class="daohang_li"><strong>关于我们</strong></li></a>
				    <a href="<?php echo U('Index/fuwu');?>"><li class="daohang_li"><strong>服务内容</strong></li></a>
				    <a href="<?php echo U('Index/anli');?>"><li class="daohang_li"><strong>案例展示</strong></li></a>
				    <a href="<?php echo U('Index/xinwen');?>"><li class="daohang_li"><strong>新闻中心</strong></li></a>
				    <a href="<?php echo U('Index/lianxi');?>"><li class="daohang_li"><strong>联系我们</strong></li></a>
<script type="text/javascript">
		$(".daohang_li").click(function(){
		$(this).css("color","red");
		$(this).parent("a").siblings("a").children("li").css("color","black");})
</script>
			    </ul>
		    </div>
			<div class="index_head_right">
			      <div id="ymd"></div>
                  <div id="his"></div>
<script type="text/javascript">
    setInterval(time,1000);
    function time(){
	  var shijian=new Date();
	  var zhuanhua=shijian.toLocaleString(); 
	  var e=shijian.getFullYear();
	  var f=shijian.getMonth()+1;
	  var g=shijian.getDate();
	  var h=shijian.getHours();
	  var i=shijian.getMinutes();
	  var j=shijian.getSeconds();
	  var m=shijian.getDay();
	  switch(m){
	  case 0:
	  var m='天';
	  break;
	  case 1:
	  var m='一';
	  break;
	  case 2:
	  var m='二';
	  break;
	  case 3:
	  var m='三';
	  break;
	  case 4:
	  var m='四';
	  break;
	  case 5:
	  var m='五';
	  break;
	  case 6:
	  var m='六';
	  break;
	  default:
	  break;
	 };
   if(j<10){
       var j="0"+j;
   }
   if(i<10){
       var i="0"+i;
   }
   if(h<10){
       var h="0"+h;
   }
   if(f<10){
       var f="0"+f;
   }
   if(g<10){
       var g="0"+g;
   }
  // var p='下午好：'+e+'年'+f+'月'+g+'日'+'&nbsp;'+h+'时'+i+'分'+j+'秒'+'星期'+m;
   if(h<=12 && h>=0){
  var his='A.M：'+'&nbsp;'+h+':'+i+':'+j;
   var ymd=e+'年'+f+'月'+g+'日'+'&nbsp;'+'&nbsp;'+'星期'+m;
  }else{ 
  var his='P.M：'+'&nbsp;'+h+':'+i+':'+j;
  var ymd=e+'年'+f+'月'+g+'日'+'&nbsp;'+'&nbsp;'+'星期'+m;
  }
     document.getElementById('ymd').innerHTML=ymd;
     document.getElementById('his').innerHTML=his;
    }
</script>
		    </div>
			<div class="clear"></div>
		</div>
	<!--头部结束-->
	<!--尾部开始-->
	<div class="index_o">
	 <ul class="index_orve">
	    <li class="index_orver">
		    <div class="index_orver_box">
			    <img src="/erongchuang/Public/Home/images/in.gif"/>
                 <div class="index_orver_box_1">
                    <span>艺融创</span>				 
                    <p>软件设计解决方案</p>				 
			     </div>
				 <div class="clear"></div>
			</div>
		</li>
		<li class="index_orver">
		     <div class="index_orver_2">
		    <strong>联系我们</strong>
			<span>电话：18025352799(谢生)</span>
			<span>地址：深圳市宝安区前进二路华盛辉B座西307</span>
			<span>QQ：445299018</span>
		    </div>
		</li>
		<li class="index_orver_3">
		   <div class="index_orver_ev">
		        <img src="/erongchuang/Public/Home/images/atten3.jpg">
				<p>扫一扫，关注我们！</p>
		   </div>
		</li>
	    <div class="clear"></div>
	 </ul>
	</div>
	<div class="end">
	    <p>Copyright &copy; 2009-2016 erongchuang. 深圳市艺融创科技有限公司 版权所有 粤ICP备15037018号</p>
	</div>
	<!--尾部结束-->
	</body>
</html>