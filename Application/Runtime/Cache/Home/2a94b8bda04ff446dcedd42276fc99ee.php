<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
	    <title>
		    艺融创科技有限公司
	    </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0.5,maximum-scale=2.0,user-scalable=yes"/>
		<link rel="stylesheet" href="/erongchuang/Public/Home/css/scripts/fancybox/fancybox.css" media="screen" />
	    <link type="text/css" rel="stylesheet" href="/erongchuang/Public/Home/css/styles/reset_html5.css" media="screen" />
	    <link type="text/css" rel="stylesheet" href="/erongchuang/Public/Home/css/styles/bootstrap.css" media="screen" />
	    <link type="text/css" rel="stylesheet" href="/erongchuang/Public/Home/css/styles/mediaBase.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/erongchuang/Public/Home/css/styles/util.css" media="screen">
		<link rel="stylesheet" type="text/css" href="/erongchuang/Public/Home/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/erongchuang/Public/Home/css/swiper-3.4.2.min.css">
		<script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/device.min.js"></script>
	    <!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/modernizr.2.7.1.js"></script>   -->
	    <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/jquery.carouFredSel-6.2.0-packed.js"></script>
	    <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/image-scale.min.js"></script>
	    <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/bootstrap.min.js"></script>
	    <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/util.js"></script>
	    <!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/ckplayer/ckplayer/ckplayer.js"></script> -->
	    <script type="text/javascript" src="/erongchuang/Public/Home/js/scripts/fancybox/fancybox.js"></script>
        <script type="text/javascript" src="/erongchuang/Public/Home/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="/erongchuang/Public/Home/js/swiper-3.4.2.min.js"></script>
        <script type="text/javascript" src="/erongchuang/Public/Home/js/unslider.min.js"></script>
	    <!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/easySlider.js"></script> -->
		<!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/jquery-1.12.2.min.js"></script> -->
		<!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/jquery1.42.min.js"></script> -->
		<!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script> -->
		<!-- <script type="text/javascript" src="/erongchuang/Public/Home/js/jia.js"></script> -->
    </head>
	<body>

<div class="top">
    <div class="container">
        <div class="top-l">
          <a href="<?php echo U('Index/index');?>">首&nbsp;&nbsp;页</a>
          <?php if(is_array($nav)): foreach($nav as $key=>$list): ?><a href="<?php echo U('Home/'.$list['link'].'/id/'.$list['id']);?>" target="_blank"><?php echo ($list["title"]); ?></a><?php endforeach; endif; ?>
        </div>
        <!-- <div class="top-r">
            <div class="top-r-search">
                <input type="text" style="display:none;" />
                    <span>
                        <input type="text" id="searchkey"  name="">
                        <i class="ilefts"></i>
                        <i class="irights"></i>
                    </span>
                <a href="javascript:void(0)" onclick="Search();" class="seaarchBtn"></a>
                <div class="topBox">
                    <a href="javascript:void(0)" class="login">登录</a>
                    <a href="javascript:void(0)" class="register">注册</a>
                </div>
                
                <a href="javascript:;" class="llhyn" style="color: #fff;">欢迎您！</a>&nbsp;&nbsp;&nbsp;<a style="color: #fff;" class="llhyn" href="index-2.html">退出</a>
                <a href="#2" class="top-a-line" style="display:none;">&nbsp;</a>
                <a href="en/index.html" class="enLinks">English</a>
            </div>
            <div class="shares">
                <div class="jiathis_style_32x32">
                    <a class="jiathis_button_weixin" ></a>
                    <a class="jiathis_button_tsina"></a>
                </div>
                <div class="clear"></div>
                <script type="text/javascript" src="/erongchuang/Public/Home/js/jia.js" charset="utf-8"></script>
            </div>
        </div> -->
    </div>
</div>		
<div class="nav">
    <div class="container navhead">
         <a href="index-2.html" id="nav_A4" target="_blank" class="logo"><img alt="" src="/erongchuang/Uploads/<?php echo $company['logo'];?>" width="200" height="60" /></a>

        <ul id="nav">
          <?php if(is_array($ser)): $i = 0; $__LIST__ = $ser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="mainlevel">
				<a href="<?php echo U('Home/Service/services/id/'.$list['id']);?>"><?php echo ($list["title"]); ?></a>
				
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="res-nav" style="display: none;">
            <a href="javascript:void(0)" class="nav-btn"></a>
        </div>
        <div class="res-list" style="display: none;">
            <div class="nav-firstP">
                <a href="conleft/in_1069.html" target="_blank">关于我们</a><a href="conleft/in_1076.html" target="_blank">新闻</a><a href="conleft/in_1087.html" target="_blank">联系我们</a>
                 <a href="en/index.html" class="fright" style="float:right;">EN</a>
            </div>
            <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="res-list-fr"><i></i>
                    <a href="#" class="a-01"><?php echo ($list["title"]); ?></a>
                    <div class="inset-list" style="display: none;">
                      <ul>
                        <?php $_result=pidType($list['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Service/services/id/'.$list['id']);?>" class="allfb"><?php echo ($list["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                     </ul>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        
    </div>
</div>

<div class="list-nav " style="display: none;">
    <div class="container ">
        <div class="list-nav-cont">
            <div class="nav-cont-l">
                <dl>
                    <dt><a href="content/index9c47.html?nodeid=941&amp;page=ContentPage&amp;contentid=5469"><img src="/erongchuang/Uploads/upload/images/20163/20163xiezong.jpg" width="220" height="80" /></a></dt>
                    <dd><?php echo $ser1['content'];?></dd>
                </dl>
            </div>
            <div class="nav-cont-r">
            <ul>
               <?php if(is_array($service1)): $i = 0; $__LIST__ = $service1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i; $_result=pidType($list['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Service/services/id/'.$list1['id']);?>" title=""><?php echo ($list1["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            
            </div>
        </div>
    </div>
</div>
<?php if(is_array($service2)): $i = 0; $__LIST__ = $service2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="list-nav " style="display: none;">
            <div class="container">
                <div class="list-nav-cont">
                   <div class="nav-cont-r">
                   <?php $_result=pidType($list['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list1): $mod = ($i % 2 );++$i;?><ul> 
                             <li class="li01"><a href="<?php echo U('Home/Service/services/id/'.$list1['id']);?>"><span><?php echo ($list1["title"]); ?></span></a></li>
                             <?php $_result=pidType($list1['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list2): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Service/services/id/'.$list2['id']);?>" title=""><?php echo ($list2["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>    
    


<script type="text/javascript">

// $(".mainlevel").mouseover(function(){
// 		$(this).find(".childul").slideDown("slow");
//         $(this).siblings().find(".childul").hide();
//         $('#banner').animate({"top":"320px"},200);
     	   	  
// 	});
// $('.childul').hover(function(){
//         $('#banner').animate({"top":"320px"},200);		
// 	},function(){
//         $(this).fadeOut('slow');
//         $('#banner').animate({"top":"110px"},200);       
//     });

    $(" .list-nav").each(function (index) {
        $(this).addClass("list-s0" + (index + 1));
        $(this).addClass("sames0" + (index + 1));

        if (index > 1) {
            $(this).addClass("Solution_pop");
        }
    });
    $(".list-s04 .zhihui:last").css("margin-right", "0");
    $(".list-s05 .zhihui:last").css("margin-right", "0");
    var isdl = "f";
    if (isdl == "f") {
        $(".llhyn").hide();
    } else {
        $(".login").hide();
        $(".register").hide();
    }


</script>
<script type="text/javascript">

    // document.getElementById('searchkey').onkeypress = function (ev) {

    //     var oEvent = ev || event;
    //     var keycode = oEvent.keyCode || oEvent.which;

    //     if (keycode == 13) {
            
    //         Search();
    //         return false;
    //     }
    //     else {
    //         return true;
    //     }
    // }
    // function Search() {
    //     var url = '/conleft/in.aspx?nodeid=346';
    //     if (document.getElementById('searchkey')) {
    //         var keyword = $.trim($('#searchkey').val());
    //         if (keyword == "" || keyword == "站内搜索") {
    //             alert("请输入搜索关键字！");
    //             document.getElementById('searchkey').focus();
    //             return false;
    //         }
    //         else {
    //             window.location.href = url + "&keyword=" + escape(keyword);
    //         }
    //     }
    // }
</script>		
	<!--头部结束-->
	<!--图片轮播-->
	<style type="text/css">
		/*body{ background:#fff; font:normal 12px/22px 宋体;  }
		img{ border:0;  }
		a{ text-decoration:none; color:#333;  }*/
        
		/* 本例子css */
		.slideBox{ width:100%; height:400px;margin: auto; overflow:hidden; position:relative; }
		.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:40px; bottom:5px; z-index:1; }
		.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
		.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
		.slideBox .hd ul li.on{ background:#f00; color:#fff; }
		.slideBox .bd{ position:relative; height:100%; z-index:0;   }
		.slideBox .bd li{ zoom:1; vertical-align:middle;position:relative; }
		.position_center{position:absolute;left:15%;top:30%;}
		.position_center h1{font-size:40px;color:#fff;font-family:宋体;line-height:40px;}
		.position_center p{font-size:25px;color:#fff;font-family:宋体;line-height:40px;margin-top:10px;}
		.position_center span{font-size:15px;color:#f9f9f9;opacity:0.6;font-family:微软雅黑;line-height:40px;margin-top:10px;}
		.slideBox .bd img{ width:100%; height:400px; display:block;  }
        .position_center_1{font-size:40px;color:#fff;font-family:宋体;font-weight:900;line-height:50px;}
        .position_center_2{font-size:50px;color:#fff;font-family:宋体;font-weight:900;line-height:50px;margin-top:10px;}
        .position_center_3{font-size:20px;color:#fff;font-family:hakuyoxingshu7000;line-height:40px;margin-top:20px;border:2px solid #fff;}
       .position_center_4{font-size:20px;color:#fff;font-family:宋体;line-height:40px;margin-top:30px;border:2px solid #fff;}
		</style>
	

		<div class="banner" id="banner" style="">
            <div class="flexslider">
                <ul class="slides" id="sliders">   
                    <?php if(is_array($sql)): foreach($sql as $key=>$value): ?><li>
						<a href="#" target="_blank">
						    <img class="bannerimg" src="/erongchuang/Uploads/<?php echo ($value["img"]); ?>"/>
						</a>
					</li><?php endforeach; endif; ?>    
                </ul>
                <ul class="slidePot">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="index-news" style="margin-top: 560px;">
            <div class="container">
                <div class="index-news-title" style="display:block!important">
                    <h3>新闻</h3>
                </div>
                
                <div class="lunbo-cont marginbotm30">
                    <a href="javascript:void(0)" class="prev"></a>
                    <a href="javascript:void(0)" class="next"></a>
                    <ul class="bd">
                       <?php if(is_array($xinwen)): $i = 0; $__LIST__ = $xinwen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                            <dl>
                                <dt>
                                    <p><?php echo date("Y-m-d",$list['times']);?></p>
                                        <a href="<?php echo U('Home/Xinwen/xinwens/id/'.$list['id']);?>">
                                          <img src="/erongchuang/Uploads/<?php echo ($list["img"]); ?>" alt="" width="305" height="145" />
                                        </a>
                                </dt>
                                <dd>
                                    <h5><?php echo ($list["name"]); ?></h5>
                                    <p><?php echo html_entity_decode($value['content']);?></p>
                                    </dd>
                            </dl>
                          </li><?php endforeach; endif; else: echo "" ;endif; ?>                    
                    </ul>
                </div>
                <script>
                // var mySwiper = new Swiper ('.swiper-container', {
                //     direction: 'vertical',
                //     loop: true,
                    
                //     // 如果需要分页器
                //     // pagination: '.swiper-pagination',
                    
                //     // 如果需要前进后退按钮
                //     nextButton: '.swiper-button-next',
                //     prevButton: '.swiper-button-prev',
                    
                //     // 如果需要滚动条
                //     scrollbar: '.swiper-scrollbar',
                //   }) 
                </script>
                <!-- <div id="slideBox" class="slideBox">
                    <div class="hd">
                        <ul><li>1</li><li>2</li><li>3</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                        <?php if(is_array($sql)): foreach($sql as $key=>$value): ?><li>
                            
                                <a href="#" target="_blank">
                                    <img src="/erongchuang/Uploads/<?php echo ($value["img"]); ?>"/>
                                </a>
                            </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div> -->

            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="core_nengli">
        <h3>核心能力
                </h3>
        <ul class="core_list hexinnengli">
            <?php if(is_array($force)): foreach($force as $key=>$list): ?><li class="prz">
                    <a href="<?php echo U('Home/Force/force/id/'.$list['id']);?>" class="pic img-container prz">
                      <img class="pic img-container prz" src="/erongchuang/Uploads/<?php echo ($list["img"]); ?>" data-scale="best-fill" />
                    </a>
                    <div class="intro">
                        <h4><?php echo ($list["title"]); ?></h4>
                        <div class="xq"><?php echo ($list["content"]); ?>
                        </div>
                    </div>
                </li><?php endforeach; endif; ?>    
        </ul>
    </div>



<script type="text/javascript">
		// jQuery(".slideBoxs").slide({mainCell:".news ul",effect:"leftLoop",autoPlay:true});
</script>

	<!--尾部开始-->
	<!-- <div class="index_o">
	 <ul class="index_orve">
	    <li class="index_orver">
		    <div class="index_orver_box">
			    <img src="/erongchuang/Public/Home/images/in.gif"/>
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
	</div> -->
	<!--尾部结束-->
	<div class="footer" style="padding:45px 40px">
    <div class="containers" style="width:auto;padding:0 40px;">
        <div class="footer-nav">
          <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><dl>
              <dt>
                 <p><i><img alt="" /></i><?php echo ($list["title"]); ?></p>
              </dt>
              <dd>
                <?php $_result=pidType($list['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><p>
                   <a href="<?php echo U('Home/Service/services/id/'.$list['id']);?>"><?php echo ($list["title"]); ?></a>
                 </p><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php ?> 
              </dd>
            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="footer-down">
    <div id="foot_bo">
        <div class="footer-down-l">
            <p>
	&copy; 2016 版权所有 艺融创软件科技有限公司 京ICP备11019727号
</p>
        </div>
        <div class="footer-down-r">
            <a href="mtyy/index3558.html?nodeid=356">联系我们</a><span>丨</span><a href="conleft/in_820.html">法律声明</a><span>丨</span>
        </div>
                    <div class="shares-footer shares_footer">
                        <a href="javascript:;" id="company_weixin">官方微信</a>
                <div class="jiathis_style_32x32">
                    <a class="jiathis_button_fb"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_twitter"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_linkedin"></a>
                </div>
                <script type="text/javascript" src="../v3.jiathis.com/code/jia.js" charset="utf-8"></script>
            </div>
    </div>
</div>
</body>
</html>