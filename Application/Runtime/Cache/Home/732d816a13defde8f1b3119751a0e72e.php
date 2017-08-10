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
         <a href="index-2.html" id="nav_A4" target="_blank" class="logo"><img alt="" src="/erongchuang/Public/Home/images/logo1.png" width="200" height="60" /></a>

        <ul id="nav">
          <?php if(is_array($ser)): $i = 0; $__LIST__ = $ser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="mainlevel">
				<a href="" onClick="return false;"><?php echo ($list["title"]); ?></a>
				<ul class="childul">
                  <?php $_result=pidType($list['id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Xinwen/index/id/'.$list['id']);?>"><?php echo ($list["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        
        
    </div>
</div>



<script type="text/javascript">

$(".mainlevel").mouseover(function(){
		$(this).find(".childul").slideDown("slow");
        $(this).siblings().find(".childul").hide();
        $('#banner').animate({"top":"320px"},200);
     	   	  
	});
$('.childul').hover(function(){
        $('#banner').animate({"top":"320px"},200);		
	},function(){
        $(this).fadeOut('slow');
        $('#banner').animate({"top":"120px"},200);       
    });

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
<!--内容开始-->
    <div class="anli_img">
	    <img src="/erongchuang/Public/Home/images/xe.png">
	</div>
	<div class="anli_content">
	    <div class="anli_content_top">
		    <p><span>新.</span>新闻中心</p>
		</div> 
		<hr color="#ccc"/>
		<div style="width:100%;" class="index_about">
		 <?php if(is_array($sql)): foreach($sql as $key=>$value): ?><div style="width:100%;"class="index_about_content_xinwen">  
			   <img src="/erongchuang/Uploads/<?php echo ($value["img"]); ?>">
				<strong><?php echo ($value["name"]); ?></strong>
				<p style="font-size:14px;color:#666;font-family:宋体;"><?php echo date("Y-m-d",$value['times']);?></p>
				<p><?php echo str_cut(html_entity_decode($value['content']),0,150,'utf8','...');?></p>
				<div class="box1"><a href="<?php echo U('Xinwen/xinwens',array('id'=>$value['id']));?>" id="xiangqing">详情 >></a></div>
				<div class="clear"></div>
		    </div><?php endforeach; endif; ?>
		</div>
    </div>
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
                   <a href="<?php echo U('Xinwen/index/id/'.$list['id']);?>"><?php echo ($list["title"]); ?></a>
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
	&copy; 2016 版权所有 软通动力信息技术（集团）有限公司 京ICP备11019727号
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