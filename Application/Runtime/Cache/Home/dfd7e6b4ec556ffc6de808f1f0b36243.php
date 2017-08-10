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
			    <a href="<?php echo U("Jituanjieshao/jituanjieshao");?>"><li class="li">集团介绍</li></a>
			    <a href="<?php echo U("Fenzhijigou/fenzhijigou");?>"><li class="li">分支机构</li></a>
			    <a href="<?php echo U("Xinxizhongxin/xinxizhongxin");?>"><li class="li">信息中心</li></a>
			    <a href="<?php echo U("Jituanjiaoyan/jituanjiaoyan");?>"><li class="li">集团教研</li></a>
			    <a href="<?php echo U("Jiazhangshalong/jiazhangshalong");?>"><li class="li">家校沙龙</li></a>
			    <a href="<?php echo U("Lianxiwomen/lianxiwomen");?>"><li class="li">家长沙龙</li></a>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
	   </div>
	</div>
    <!-- 图片 -->
    <div class="lx_img">
	    <img src="/biye/Public/Home/images/lx_1.png">
	</div>
   <!-- 内容 -->
  <div class="lx_content">
      <p>联系我们</p>
  </div>
  <div class="lx_content_top">
         <div class="lx_content_top_left">
		    <p><span>联·</span>联系我们</p>
			<h6>[Contact US]</h6>
         </div>
         <div class="lx_content_top_right">
		    <ul>
			   <li>地址：深圳市宝安区松岗街道燕川社区朝阳路7号</li>
			   <li>联系电话：0755-81766642 / 81765577</li>
			   <li>公交路线： 655广田深亚油站，B775大华飞捷科技园站。</li>
			   <li>自驾路线：龙大高速公路松岗出口，沿广田路到广田深亚油站右转朝阳路200米；107国道转广田路约3公里到广田深亚油站左转朝阳路200米。</li>
			   <li>公交站： 延安中路陕西北路-公交车站</li>
			   <li></li>
		    </ul>
         </div>
         <div class="clear"></div>   
  </div>
  <div class="lx_content_bottom">
    <div class="lx_content_bottom_left">
	    <div class="lx_content_bottom_left_box">
		    <a href="#"><img src="/biye/Public/Home/images/lx_2.png"></a>
		    <p>info@szjieren.com</p>
		</div>
		 <div class="lx_content_bottom_left_box">
		    <a href="#"><img src="/biye/Public/Home/images/lx_3.png"></a>
		    <p>0755-81766642</p>
		</div>
		 <div class="lx_content_bottom_left_box">
		    <a href="#"><img src="/biye/Public/Home/images/lx_4.png"></a>
		    <p>0755-81765577</p>
		</div>
	</div>
	<div class="lx_content_bottom_right">
	     <img src="/biye/Public/Home/images/lx_5.png">
	</div>
    <div class="clear"></div>     
  </div>
		 <div class="jwdh">
		 <div class="jwdh_box">
		    <div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_12.png">
					集团介绍
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="#">集团概况</a></div>
			    <div class="l2"><a href="#">集团文化</a></div>
			    <div class="l2"><a href="#">集团团队</a></div>
			    <div class="l2"><a href="#">集团风貌</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_13.png">
					信息中心
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="#">最新动态</a></div>
			    <div class="l2"><a href="#">图片视频</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_14.png">
					集团教研
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="#">教育咨询</a></div>
			    <div class="l2"><a href="#">学术交流</a></div>
			    <div class="l2"><a href="#">精编文集</a></div>
			</div>
			<div class="jd">
			    <div class="l1">
				    <img src="/biye/Public/Home/images/sy_15.png">
					家长沙龙
					<div class="clear"></div>
				</div>
			    <div class="l2"><a href="#">家长沙龙</a></div>
			</div>
			<div class="jd">
			   <img  class="ewm" src="/biye/Public/Home/images/sy_16.png">
			</div>
			<div class="clear"></div>
		 </div>
		 </div>
   </div>
 <!--尾部-->
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