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
				<a href="" onClick="return false;"><?php echo ($list["title"]); ?></a>
				
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
                    <a href="#" class="a-01" onClick="return false;"><?php echo ($list["title"]); ?></a>
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
                    <dd><a href="content/index9c47.html?nodeid=941&amp;page=ContentPage&amp;contentid=5469">刘天文：打造智慧城市需要以人为本贯穿始终</a></dd>
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
<div class="containers1">
    <div class="second-banner">
                <img layout="None" src="/erongchuang/Uploads/<?php echo $banner['img'];?>" class="bannerimg1">
                <div class="containers banNavst">
                    <div class="containers banNavst">
                    <ul class="num5">
                       <?php if(is_array($nav)): foreach($nav as $key=>$list): ?><li><a href="<?php echo U('Home/'.$list['link'].'/id/'.$list['id']);?>" class="<?php echo $id==$list['id']?'active':'';?>"><?php echo ($list["title"]); ?></a><i></i></li><?php endforeach; endif; ?> 
                    </ul>
                </div>
                </div>
    </div>
        <script type="text/javascript">
          $(".mainlevel").mouseover(function(){
        $(this).find(".childul").slideDown("slow");
        $(this).siblings().find(".childul").hide();
        $('.containers1').animate({"margin-top":"0px"},200);
              
    });
$('.childul').hover(function(){
        $('.containers1').animate({"margin-top":"0px"},200);      
    },function(){
        $(this).fadeOut('slow');
        $('.containers1').animate({"margin-top":"-50px"},200);       
    });
        </script>
    <div class="breadBox">
        <div class="breadBox-r">
            <a href="javascript:;">当前位置</a><span>:</span>
            <span></span> <a href="<?php echo U('Home/'.$list['link'].'/id/'.$list['id']);?>" Layout="None" class="dqwz_am"><?php echo $nav1['title'];?></a>
        </div>

    <script type="text/javascript">
        $(".dqwz_am:last").addClass("active");
    </script>
    </div>
</div>
<div class="containers">
        <div class="lasted-cont">
            <div class="lasted-l">
                <div class="lasted-l-box">
                 <img layout="None" src="/erongchuang/Uploads/upload/images/20158/20158262024554723800.jpg" /><div class="lasted-box-01"></div><div class="lasted-box-02"><p>
    <?php echo $company['name'];?>
</p>
<span><?php echo $company['address'];?></span></div>
                </div>
            </div>
            <div class="lasted-r">
                <dl>
                    <dt><img type="Photo2" siteid="1" src="/erongchuang/Uploads/<?php echo $company['logo'];?>" width="180" height="60" tagtype="Channel" layout="None" channelindex="集团总部" /><p><?php echo $company['name'];?></p></dt><dd><p>
    <span style="line-height:1.5;">邮 编： <?php echo $company['mail'];?>&nbsp;</span> 
</p>
<p>
    邮 箱： <?php echo $company['email'];?>
</p>
<p>
    电 话： ＋<?php echo $company['tel'];?>
</p>
<p>
    Q   Q： ＋<?php echo $company['qq'];?>
</p><a href="http://j.map.baidu.com/DX7fL" Layout="None" target="_blank">查看地图&nbsp;&nbsp;&nbsp;&gt;&gt;</a></dd>
                </dl>
            </div>
        </div>
    </div>
	<div class="anli_content" style="width: 1000px; margin: 200px auto;height: 140px;">
	    <!-- <div class="anli_content_top">
		    <p><span>联.</span>联系我们</p>
		</div> 
		<hr color="#ccc"/>
		<div class="lianxi_content">
		 <?php if(is_array($sql)): foreach($sql as $key=>$value): ?><div class="lianxi_content_box">
		       <div class="lianxi_content_box_center">
			       <p class="ppp"><?php echo ($value["name"]); ?></p>
				   <img src="/erongchuang/Uploads/<?php echo ($value["img"]); ?>">
			        <a href="http://weibo.com/5835989675"><span><?php echo html_entity_decode($value['content']);?></span></a>
		       </div>
		    </div><?php endforeach; endif; ?>
			<div class="clear"></div>
		</div>
		<hr color="#ccc"/> -->
		<div class="lianxi_content_from">
		    <h4>预约洽谈</h4>
			<strong>提交您的业务需求，我们的客户经理将及时与您取得联系</strong>
			<p>请填写下面需求表单，或直接邮件联系xsw@erongchuang.com（谢生）</p>
			<p>也可以联系我们的业务咨询电话: 18025352799（谢生）</p>
		</div>
		<form action="" method="post" class="form">
		    <input name="name" type="text" placeholder="姓名*"  class="input_name">
		    <input name="phone" type="text" placeholder="手机号码*" onkeyup="phonehuming(this)" class="input_phone">
		    <input name="em" type="text" onkeyup="youxiang(this)"placeholder="邮件地址*" class="input_em">
		    <input name="hidden" type="hidden" id="hidden" value="">
			<div class="clear"></div>
			手机号码：<span id="phone" name="span" style="color:red; line-height:20px">*</span>
			邮箱：<span id="you" name="span" style="color:red;line-height:20px">*</span>
			<textarea name="need" placeholder="需求信息*" class="input_need"></textarea>
			<input type="submit" name="submit" class="submit" id="submit" value="提交需求">
		</form>
		<script>
		        function youxiang(a){
                         var c=a.value;
                         if(/^[a-z0-9_.-]+@\w+\..{2,}$/i.test(c)){
						 var bb=1;
                         document.getElementById('you').innerHTML="";
						  document.getElementById('hidden').value=1;
                           }else{var bb=0;
                         document.getElementById('you').innerHTML="E-mail格式不正确";
						  document.getElementById('hidden').value='';
                         }
                         }
				function phonehuming(a){
                var c=a.value;
                   if(/[\u4e00-\u9fa5]/.test(c)){
				   var cc=0;
	                 document.getElementById('phone').innerHTML="不能是中文";
					 document.getElementById('hidden').value='';
	                    }else{
	                 if(/[~!@#$%^&*()_+]/.test(c)){
	                document.getElementById('phone').innerHTML="不能是特殊符号"; var cc=0;
				 document.getElementById('hidden').value='';
	                }else{
	                if(/^1[34578][0-9]{9}$/.test(c)){
					  var cc=1;
	                  document.getElementById('phone').innerHTML="";
					  document.getElementById('hidden').value=1;
	                   }else{ document.getElementById('phone').innerHTML="这不是一个手机号";  var cc=0;
					    document.getElementById('hidden').value='';
	   }
	 
	   }
	 }
   } 
 
		</script>
    </div>
<div class="footer2" >
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