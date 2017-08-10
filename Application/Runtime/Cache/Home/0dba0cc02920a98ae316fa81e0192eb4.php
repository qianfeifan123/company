<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="/biye/Public/Home/css/index.css" />
<script  src="/biye/Public/Home/jq/jquery-1.12.2.min.js" ></script>
</head>
<body>
       <!-- 头部 -->
    <div class="head">
       <div class="head_box">
	        <img src="/biye/Public/Home/images/sy_20.png">
			<ul class="ul_1">
			   <a href="<?php echo U("Index/index");?>"><li class="li">首　页</li></a>
			    <li class="li">集团介绍
				      <ul class="ul_ul">
					    <a href="<?php echo U("Jituangaikuang/jituangaikuang");?>"><li class="li_li">集团概况</li></a>
					    <a href="<?php echo U("Jituanfengmao/jituanfengmao");?>"><li class="li_li">集团风貌</li></a>
					    <a href="<?php echo U("Jituantuandui/jituantuandui");?>"><li class="li_li">集团团队</li></a>
					    <a href="<?php echo U("Jituanwenhua/jituanwenhua");?>"><li>集团文化</li></a>
					</ul>
				</li>
			    <li class="li">分支机构
				      <ul class="ul_ul">
					    <a href="<?php echo U("Jituangaikuang/jituangaikuang");?>"><li class="li_li">集团概况</li></a>
					    <a href="<?php echo U("Jituanfengmao/jituanfengmao");?>"><li class="li_li">集团风貌</li></a>
					    <a href="<?php echo U("Jituantuandui/jituantuandui");?>"><li class="li_li">集团团队</li></a>
					    <a href="<?php echo U("Jituanwenhua/jituanwenhua");?>"><li>集团文化</li></a>
					</ul>
				</li>
			    <li class="li">信息中心
				      <ul class="ul_ul">
					    <a href="<?php echo U("Zuixindongtai/zuixindongtai");?>"><li class="li_li">最新动态</li></a>
					    <a href="<?php echo U("Tupianshiping/tupianshiping");?>"><li>图片视频</li></a>
					</ul>
				</li>
			    <li class="li">集团教研
				    <ul class="ul_ul">
					    <a href="<?php echo U("Jiaoyuzixun/jiaoyuzixun");?>"><li class="li_li">教育咨讯</li></a>
					    <a href="<?php echo U("Xueshujiaoliu/xueshujiaoliu");?>"><li class="li_li">学术交流</li></a>
					    <a href="<?php echo U("Jingbianwenji/jingbianwenji");?>"><li>精编文集</li></a>
					</ul>
				</li>
			    <a href="<?php echo U("Jiaxiaoshalong/jiaxiaoshalong");?>"><li class="li">家校沙龙</li></a>
				<a href="<?php echo U("Lianxiwomen/lianxiwomen");?>"><li class="li">联系我们</li></a>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
	   </div>
	</div>
    <!-- 图片 -->
    <div class="lx_img">
	    <img src="/biye/Public/Home/images/sl_1.png">
	</div>
   <!-- 内容 -->
  <div class="lx_content1">
   <div class="lx_content_tou">
    <a href="<?php echo U("Tupianshiping/tupianshiping");?>"><p class="dao2">图片视频</p></a>
     <a href="<?php echo U("Zuixindongtai/zuixindongtai");?>"> <p class="dao2">最新动态</p></a>
	  <div class="clear"></div>
   </div>
  </div>
   <div class="shiping">
        <div class="shiping_cong">
             <div class="shiping_cong_1">
		        <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			 <div class="clear"></div>
        </div>
		<div class="shiping_cong">
             <div class="shiping_cong_1">
		        <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		        <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			 <div class="clear"></div>
        </div>
		<div class="shiping_cong">
             <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			  <div class="shiping_cong_1">
		         <img src="/biye/Uploads/<?php echo $sql[0]['img']?>">
				<p><?php echo $sql[0]['name']?></p>
             </div>
			 <div class="clear"></div>
        </div>
   </div>
   <div class="fenye">
        <div class="fenye_2">
		    <a href="#">«</a>
		    <a href="#">1</a>
		    <a href="#">2</a>
		    <a href="#">3</a>
		    <a href="#">»</a>
			<div class="clear"></div>
		</div>
   </div>
   <!--尾部-->
		 <div class="jwdh">
		 <div class="jwdh_box">
		    <div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_12.png">
					集团介绍
					<div class="clear"></div>
				</div>
			     <div class="l2"><a href="<?php echo U("Jituangaikuang/jituangaikuang");?>">集团概况</a></div>
			    <div class="l2"><a href="<?php echo U("Jituanwenhua/jituanwenhua");?>">集团文化</a></div>
			    <div class="l2"><a href="<?php echo U("Jituantuandui/jituantuandui");?>">集团团队</a></div>
			    <div class="l2"><a href="<?php echo U("Jituanfengmao/jituanfengmao");?>">集团风貌</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_13.png">
					信息中心
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="<?php echo U("Zuixindongtai/zuixindongtai");?>">最新动态</a></div>
			    <div class="l2"><a href="<?php echo U("Tupianshiping/tupianshiping");?>">图片视频</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_14.png">
					集团教研
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="<?php echo U("Jiaoyuzixun/jiaoyuzixun");?>">教育咨询</a></div>
			    <div class="l2"><a href="<?php echo U("Xueshujiaoliu/xueshujiaoliu");?>">学术交流</a></div>
			    <div class="l2"><a href="<?php echo U("Jingbianwenji/jingbianwenji");?>">精编文集</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_15.png">
					家长沙龙
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="<?php echo U("Jiaxiaoshalong/jiaxiaoshalong");?>">家长沙龙</a></div>
			</div>
			<div class="jd">
			   <img  class="ewm" src="/biye/Public/Home/images/sy_16.png">
			</div>
			<div class="clear"></div>
		 </div>
		 </div>
   </div>
 
    <div class="weibu">
	COPYRIGHT (C) 2016 杰仁（马氏）国际教育集团   ALL RIGHTS RESERVED
	</div>
	<script type="text/javascript">
                var i = 0;
                var clone = $(".banner .img li").first().clone();//克隆第一张图片
                $(".banner .img").append(clone);//复制到列表最后
                  var size = $(".banner .img li").size();
				$('.banner .img').css('width',1440*size+"px");
                for (var j = 0; j < size-1; j++) {
                    $(".banner .num").append("<li></li>");
                }

                $(".banner .num li").first().addClass("on");

                /*自动轮播*/

                var t = setInterval(function () { i++; move();},2000);

                /*鼠标悬停事件*/

                $(".banner").hover(function () {
                    clearInterval(t);//鼠标悬停时清除定时器
                }, function () {
                    t = setInterval(function () { i++; move(); }, 2000); //鼠标移出时清除定时器
                });




                /*鼠标滑入圆点事件*/

                $(".banner .num li").hover(function () {

                    var index = $(this).index();//获取当前索引值
                    i = index;
                    $(".banner .img").stop().animate({ left: -index * 1440 }, 1440);
                    $(this).addClass("on").siblings().removeClass("on");
                });



                /*向左按钮*/
                $(".banner .btn_l").click(function () {
                    i++;
                    move();
                })

                
                /*向右按钮*/
                $(".banner .btn_r").click(function () {
                    i--;
                    move();
                })

                /*移动事件*/
                function move() {
                    if (i == size) {
                        $(".banner .img").css({ left: 0 });
                        i = 1;
                    }
                    if (i == -1) {
                        $(".banner .img").css({ left: -(size - 1) * 1440 });
                        i = size - 2;
                    }
                    $(".banner .img").stop().animate({ left: -i * 1440 }, 1440);

                    if (i == size - 1) {
                        $(".banner .num li").eq(0).addClass("on").siblings().removeClass("on");
                    } else {
                        $(".banner .num li").eq(i).addClass("on").siblings().removeClass("on");
                    }
                };
			
			
			
 </script>
</body>
</html>