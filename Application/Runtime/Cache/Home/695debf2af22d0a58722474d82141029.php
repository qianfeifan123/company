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
          <?php if(is_array($nav)): foreach($nav as $key=>$list): ?><a href="<?php echo U('Home/'.$list['link']);?>" target="_blank"><?php echo ($list["title"]); ?></a><?php endforeach; endif; ?>
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

     <div class="containers1">
        <div class="breadBox">
            <!--<div class="breadBox-l">
                <a href="#2">战略理念</a>
                <a href="#2">端到端解决方案</a>
                <a href="#2" class="active">业务覆盖</a>
            </div>-->
            


<div class="breadBox-r">
                <a href="javascript:;">当前位置</a><span>:</span>
        <a href="in_1069.html" Layout="None" class="dqwz_am">关于我们</a> <span>></span> <a href="../gsjj/index_18.html" Layout="None" class="dqwz_am">公司简介</a>
            </div>

<script type="text/javascript">
    $(".dqwz_am:last").addClass("active");
</script>
        </div>
    </div>
    <div class="containers">
        <div class="about-colm01 paddingLR100">
        
            <?php if(is_array($navs1)): foreach($navs1 as $key=>$list): ?><p><?php echo ($list['content']); ?></p><?php endforeach; endif; ?> 
        
        </div>
        <div class="about-colm02">
        	<div class="about-colm02-title">
                <p><span>洞察 前所未见</span></p>
            	
            </div>
        </div>
        

        <div class="vPlayBox width100">
    	<h5></h5>
        <div id="a1">
        	<img src="../upload/images/20168/2016830159264855878.jpg" class="firstImgs" onclick="createplayer()"/>
            <img src="../upload/images/20168/20168282146462383122.jpg" class="lastImgs" style="display:none;" onclick="createplayer()" />
            <i onclick="createplayer()"></i>
        </div>
        <script type="text/javascript" src="../scripts/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
        <script type="text/javascript">
            function createplayer() {
                var submitData = {
                    note: "简介",
                    type: "AddSee",
                    siteid: 1
                };
                $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                     function (data) {
                     }, "json")
                    var flashvars = {
                        f: '/upload/accessory/20168/p1aqugclpv4hrt5bbnc1kc0m2m4.mp4',
                        c: 0,
                        loaded: 'loadedHandler',
                        p: 1
                    };

                  var video = ['/upload/accessory/20168/p1aqugclpv4hrt5bbnc1kc0m2m4.mp4', '/upload/accessory/20168/p1aqugvbu41j0d16rsdep19051pnl4.mp4', ''];

                    CKobject.embed('../scripts/ckplayer/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '100%', '230', false, flashvars, video);

                    if(!device.desktop()){
                        if( $('#a1 video').length > 0){
                            $('#a1 video').get(0).play()
                        }
                       
                    }
                }
        </script>
	</div>


        <!-- <div class="service-cont width100 noBgs gsjjNomag">
            <h2>主要业务板块
				</h2>
            <ul>
                <li class="lil">
                    <img type="Photo2" siteid="1" src="/upload/images/201510/2015101092882919816.jpg" tagtype="Channel" layout="None" channelindex="智慧业务" /><h5>智慧业务</h5><a href="/zhjhy/index_15.html" Layout="None">查看更多&nbsp;&nbsp;&gt;&gt;</a>
                </li>
                <li>
                    <img type="Photo2" siteid="1" src="/upload/images/201510/20151010936432929167.jpg" tagtype="Channel" layout="None" channelindex="信息技术" /><h5>信息技术服务</h5><a href="/xxjhy/index_16.html" Layout="None">查看更多&nbsp;&nbsp;&gt;&gt;</a>
                </li>
            </ul>
            <div class="service-colm03">
                <span class="span011">创新驱动</span>
                <dl><dt><a href="/conleft/ind_100.html"><span><img type="Photo2" siteid="1" channel="yestem.webplug.TemplateEngine.DataProvider.ChannelInfo" tagtype="a" channelid="100" src="/upload/images/201510/2015109100297281387.png" isreplaceinnerhtml="false" /></span></a></dt><dd>乐业战略</dd></dl><dl><dt><a href="/conleft/ind_98.html"><span><img type="Photo2" siteid="1" channel="yestem.webplug.TemplateEngine.DataProvider.ChannelInfo" tagtype="a" channelid="98" src="/upload/images/201510/2015109101124572247.png" isreplaceinnerhtml="false" /></span></a></dt><dd>大数据业务</dd></dl><dl><dt><a href="/conleft/ind_99.html"><span><img type="Photo2" siteid="1" channel="yestem.webplug.TemplateEngine.DataProvider.ChannelInfo" tagtype="a" channelid="99" src="/upload/images/201510/2015109102169457.png" isreplaceinnerhtml="false" /></span></a></dt><dd>通云平台</dd></dl>
            </div>
        </div>  -->

    </div>
        

<link type="text/css" rel="stylesheet" href="../styles/jquery.mCustomScrollbar.css" media="screen" />
    <script type="text/javascript" src="../scripts/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../scripts/fancybox/fancybox.js"></script>
     <link rel="stylesheet" href="../scripts/fancybox/fancybox.css" media="screen">
<style>
    input{outline:none;}
</style>

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
<div id="guanfang_weixin">
    <h3>官方微信</h3>
    <a href="javascript:;" id="closeBTN">×</a>
    <div class="Img_guanfang">
        <img src="../upload/images/20167/20167131751302123270.jpg" />
				
    </div>
</div>
<div class="tc-box" style="display: none;">
    <a href="javascript:void(0)" class="close"></a>
    <div class="lgBox" style="display: none;">
        <div class="tc-title">
            <p>用户登录</p>
        </div>
        <div class="tc-cont">
            <ul>
                <li>
                    <label>用户名</label>
                    <div class="tc-cont-r">
                        <input name="foot:dlusername" type="text" id="foot_dlusername" class="dlusername" placeholder="邮箱" onblur="checkusrnamezc();" />
                        <i>
                            <img src="../images/tc-icon03.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">用户名错误</span>
                    </div>
                </li>
                <li>
                    <label>密&nbsp;&nbsp;&nbsp;码</label>
                    <div class="tc-cont-r">
                        <input name="foot:dlpwd" type="password" id="foot_dlpwd" class="dlpwd" onblur="checkpasszc();" onkeydown="searchEnter(event);" />
                        <i>
                            <img src="../images/tc-icon04.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">密码错误</span>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <p>还没有账户？&nbsp;&nbsp;<a href="javascript:void(0)" class="qzc">请注册</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="findPsd">忘记密码</a></p>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <div name="" onclick="dl();" class="loginBt">登&nbsp;&nbsp;录</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="rgBox" style="display: none;">
        <div class="tc-title">
            <p>注册用户</p>
        </div>
        <div class="tc-cont">
            <ul>
                <li>
                    <label>用户名</label>
                    <div class="tc-cont-r">
                        <input name="foot:zcusername" type="text" id="foot_zcusername" placeholder="使用邮箱注册" onblur="checkusrname($.trim($(this).val()));" class="zcusername" />
                        <i>
                            <img src="../images/tc-icon03.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">用户名已注册</span>
                    </div>
                </li>
                <li>
                    <label>手机号</label>
                    <div class="tc-cont-r">
                        <input name="foot:zctel" type="text" id="foot_zctel" class="zctel" onblur="checktel($.trim($(this).val()));" />
                        <i>
                            <img src="../images/tc-icon05.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">请输入正确的手机号</span>
                    </div>
                </li>
                <li>
                    <label>密&nbsp;&nbsp;&nbsp;码</label>
                    <div class="tc-cont-r">
                        <input name="foot:zcpasword" type="password" id="foot_zcpasword" class="zcpasword" />
                        <i>
                            <img src="../images/tc-icon04.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        
                    </div>
                </li>
                <li>
                    <label>确认密码</label>
                    <div class="tc-cont-r">
                        <input name="foot:zcpaswrd" type="password" id="foot_zcpaswrd" class="zcpaswrd" onblur="checkpwd($.trim($(this).val()));" />
                        <i>
                            <img src="../images/tc-icon04.png" alt="" /></i>
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">密码错误</span>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <input type="text" name="" id="tbValidateCode" class="tbValidateCode" onblur="checkcode();" style="width: 80px;">
                        <a href="javascript:;">
                            <img src="../include/validatecode.html" style="cursor: pointer; width: 62px; height: 26px;" onclick="this.src='/include/validatecode.aspx?time='+new Date().getTime()" id="codeImg" class="fleft" /></a>
                      
                        <span class="wran-right" style="display: none;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">验证码错误</span>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <p>
                            <input type="checkbox" name="check" class="checks">已阅读服务条款和隐私政策&nbsp;&nbsp;<a href="../content/index_350.html" id="foot_A1" target="_blank">服务条款</a>
                        </p>


                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <div onclick="zc();" class="loginBt">注&nbsp;&nbsp;册</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="findBox" style="display: none;">
        <div class="tc-title">
            <p>通过邮箱找回密码</p>
        </div>
        <div class="tc-cont">
            <ul>
                <li>
                    <label>用户名</label>
                    <div class="tc-cont-r">
                        <input type="text" name="" class="gpemail " placeholder="请输入邮箱号">
                        <a href="javascript:void(0)" class="hqyzm gphqyzm">获取验证码</a>
                    </div>
                </li>
                <li>
                    <label>验证码</label>
                    <div class="tc-cont-r">
                        <input type="password" class="gtcode " name="">
                        <span class="wran-right" style="display: block;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">验证码错误</span>
                    </div>
                </li>
                <li>
                    <label>新密码</label>
                    <div class="tc-cont-r">
                        <input type="password" class="gtpass " name="">
                        <span class="wran-right" style="display: block;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">密码不能为空</span>
                    </div>
                </li>
                <li>
                    <label>确认密码</label>
                    <div class="tc-cont-r">
                        <input type="password" class="gtpasscon " name="">
                        <span class="wran-right" style="display: block;">&nbsp;</span>
                        <span class="wran-wrong" style="display: none;">请再次输入正确的密码</span>
                    </div>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <div class="tc-cont-r">
                        <input type="button" name="" class="loginBt modifypass" value="发送验证信息">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="datas" style="display: none; position: absolute; top: 20%; left: 50%; margin-left: -320px; z-index: 999999; background: #fff; width: 640px;">
    <div class="tc-title" style="overflow: hidden;">
        <p>完善资料</p>
        <a href="javascript:void(0)" class="close"></a>
    </div>
    <div class="tc-cont">
        <ul style="width: 70%;">
            <li>
                <label>真实姓名</label>
                <div class="tc-cont-r">
                    <input name="foot:realname" type="text" id="foot_realname" class="notnull" wronginfo="真实姓名" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>性别</label>
                <div class="tc-cont-r">
                    <input value="Male" name="foot:sex" type="radio" id="foot_radio1" class="radio1" checked="checked" />男
                        <input value="Female" name="foot:sex" type="radio" id="foot_radio2" class="radio2" />女
                </div>
            </li>
            <li>
                <label>邮箱</label>
                <div class="tc-cont-r">
                    <input name="foot:email" type="text" id="foot_email" class="notnull" wrongtitle="Email" wronginfo="邮箱" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>微信号</label>
                <div class="tc-cont-r">
                    <input name="foot:wxh" type="text" id="foot_wxh" class="notnull" wronginfo="微信号" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>手机号码</label>
                <div class="tc-cont-r">
                    <input name="foot:mobel" type="text" id="foot_mobel" class="notnull" wrongtitle="Mobel" wronginfo="手机号码" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>行业</label>
                <div class="tc-cont-r">
                    <select name="foot:Select1" id="foot_Select1" class="selecthy">
	<option value="高科技">高科技</option>
	<option value="通信">通信</option>
</select>
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>公司名称</label>
                <div class="tc-cont-r">
                    <input name="foot:companyname" type="text" id="foot_companyname" class="notnull" wronginfo="公司名称" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>职位</label>
                <div class="tc-cont-r">
                    <input name="foot:job" type="text" id="foot_job" class="notnull" wronginfo="职位" />
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>从事领域</label>
                <div class="tc-cont-r">
                    <select name="foot:Select2" id="foot_Select2" class="selectcsly">
	<option value="高科技">高科技</option>
	<option value="通信">通信</option>
</select>
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li style="position: relative; left: -26px;">
                <label style="width: 86px;">合作意向简述</label>
                <div class="tc-cont-r">
                    <textarea name="foot:summary" id="foot_summary" class="notnull" style="height: 150px;" wronginfo="合作意向简述"></textarea>
                    <span class="wran-right" style="display: none;">&nbsp;</span>
                    <span class="wran-wrong" style="display: none;"></span>
                </div>
            </li>
            <li>
                <label>&nbsp;</label>
                <div class="tc-cont-r">
                    <div class="loginBtPerData" style="width: 214px; height: 32px; color: #fff; background: #e60000; line-height: 32px; text-align: center; cursor: pointer;">提&nbsp;&nbsp;交</div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="chatBox">
    <div class="cB-u">
        <div class="cB-title">
            <span>
                公司简介
            </span>
            <a href="javascript:void(0)" class="closes"></a>
        </div>
        <div class="scrollBoxs">
            <div class="wrans">
                <p>您好，您是否要询问如下问题 :</p>
            </div>
            <div class="cb-list">
                <ul>
                    <li><a href="../gsjj/index_18.html">软通动力简介</a></li><li><a href="../zhyw/index_13.html">智慧业务</a></li>

                </ul>
            </div>
            <div class="overBox">
                <dl>
                    <dt>

                        
                    </dt>
                    <dd>
                        
                    </dd>
                </dl>
            </div>
            <div class="chatParms">
                
            </div>
        </div>
    </div>

    <div class="cB-d">
        <div class="cb-d01 clearfix">
            <p class="fleft clearfix">
                <label class="fleft">
                    <input type="checkbox" name="" checked="checked" />已阅读并同意</label>
                <a href="#2" class="fleft">查阅协议</a>
            </p>
            
            <a href="javascript:;" class="a02 fright"><span>清空记录</span></a>
        </div>
        <div class="cb-d02">
            <textarea placeholder="请输入您的关键词"  onkeydown="searchEnterles(event);" id="procon"></textarea>
            <script>
                var searchEnterles = function (event) {
                    var keycode = event.keyCode || event.which;
                    if (keycode == 13) {
                        $("#sendBtns").click();
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            </script>
        </div>
        <div class="cb-d03">
            <input type="button" name="" value="发送" class="sendBtns" id="sendBtns" />
        </div>
    </div>
</div>

<div style="display:none">
    <div class="In_fancy" id="In_fancy1">
        <h3 style="font-size:18px;color:#555;padding-left:12px">合作垂询</h3>
        <div class="descript" style="font-size:12px;color:#555;line-height:20px;padding-left:12px;">
            软通动力秉承精诚合作、锐意进取的合作理念，愿为更多合作伙伴提供优质服务，携手同行，合作共赢。 欢迎各行业的优秀品牌垂询商谈，如有需求，请填写下方表格，我们将通过您留下的联系方式尽快与您联系。
        </div>
        <div class="ItEm">
            <span></span>
            <input type="text" placeholder="姓名"  class="name Item hezuozhushouname hezuozhushounotnull">
        </div>
        <div class="ItEm">
            <span></span>
            <input type="text" placeholder="职位" class="job Item hezuozhushouzhiwie hezuozhushounotnull">
        </div>
        <div class="ItEm">
            <span></span>
            <input type="text" placeholder="公司" class="company Item hezuozhushougongsi hezuozhushounotnull">
        </div>
        <div class="double">
            <div class="ItEm ItEm1">
                <span></span>
                <select class="prov addone">
                    
                            <option value="1">北京市</option>
                        
                            <option value="2">天津市</option>
                        
                            <option value="3">河北省</option>
                        
                            <option value="4">山西省</option>
                        
                            <option value="5">内蒙古自治区</option>
                        
                            <option value="6">辽宁省</option>
                        
                            <option value="7">吉林省</option>
                        
                            <option value="8">黑龙江省</option>
                        
                            <option value="9">上海市</option>
                        
                            <option value="10">江苏省</option>
                        
                            <option value="11">浙江省</option>
                        
                            <option value="12">安徽省</option>
                        
                            <option value="13">福建省</option>
                        
                            <option value="14">江西省</option>
                        
                            <option value="15">山东省</option>
                        
                            <option value="16">河南省</option>
                        
                            <option value="17">湖北省</option>
                        
                            <option value="18">湖南省</option>
                        
                            <option value="19">广东省</option>
                        
                            <option value="20">广西壮族自治区</option>
                        
                            <option value="21">海南省</option>
                        
                            <option value="22">重庆市</option>
                        
                            <option value="23">四川省</option>
                        
                            <option value="24">贵州省</option>
                        
                            <option value="25">云南省</option>
                        
                            <option value="26">西藏自治区</option>
                        
                            <option value="27">陕西省</option>
                        
                            <option value="28">甘肃省</option>
                        
                            <option value="29">青海省</option>
                        
                            <option value="30">宁夏回族自治区</option>
                        
                            <option value="31">新疆维吾尔自治区</option>
                        
                            <option value="32">台湾省</option>
                        
                            <option value="33">香港特别行政区</option>
                        
                            <option value="34">澳门特别行政区</option>
                        
                            <option value="35">海外</option>
                        
                            <option value="36">其他</option>
                        
                </select>
            </div>
            <div class="ItEm ItEm2">
                <select class="city addtwo">
                    <option value=""></option>
                </select>
                
            </div>
        </div>
         <div class="ItEm">
            <input type="text"  placeholder="其他地址" class=" Item   hezuozhushouqitadiqu"  style="margin-left:10px">
        </div>
        <div class="double">
            
            <div class="ItEm ItEm3">
                <span></span>
                <input type="text" placeholder="邮箱" class="email hezuozhushouemail hezuozhushounotnull">
            </div>
            <div class="ItEm ItEm4">
                <span></span>
                <input type="text" placeholder="电话" class="tel hezuozhushoutel hezuozhushounotnull">
            </div>
        </div>
        <div class="textArea">
            <span></span>
            <textarea placeholder="咨询与反馈内容" class="hezuozhushoucontent hezuozhushounotnull"></textarea>
        </div>
        <div class="Code">
            <i>验证码</i>
            <input type="text" class="code hezuozhushoucode hezuozhushounotnull" id="hezuozhushoucode"  >
            <a href="javascript:;" class="ibox code_pic" style="vertical-align:middle">
                            <img src="../include/validatecode.html" style="cursor: pointer; width: 62px; height: 26px;" onclick="this.src='/include/validatecode.aspx?time='+new Date().getTime()" id="Img1"  /></a>
        </div>
        <a href="javascript:;" class="agreeBtn hezuozhushousub">同意并提交</a>
    </div>
</div>



<a href="#In_fancy1" class="sideSlide newBtns01" style="display:block" ></a>
<a href="../mtyy/index3558.html?nodeid=356" class="sideSlide newBtns02" style="display:none;"></a>
<a href="javascript:void(0)" class="gotop"></a>


<input name="foot:ycy" type="hidden" id="foot_ycy" class="ycy" />
<script src="../js/Utility.js"></script>
<script src="../js/md5.js"></script>




        $('.newBtns01').fancybox({

            padding:0
        })
  
</script>

<script type="text/javascript">
    var domainurl="";
    var re = /^0?(13[0-9]|15[012356789]|18[012356789]|14[57])[0-9]{8}$/;
    var regMail = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
   
    

      $(".footer-down-r span:last").remove();
      $(".footer-nav dl i img").each(function (index) {
          $(this).attr("src", "/images/icon" + (69 + index) + ".png");
        });

   
    //找回密码
    $(".modifypass").click(function () {
        if ($(".gpemail").val() != "" && regMail.test($(".gpemail").val())) {
            $(".gtcode").siblings(".wran-right").show();
            $(".gtcode").siblings(".wran-wrong").hide();
            if ($(".gtcode").val() != "") {
                var submitData = {
                    code: $(".gtcode").val(),
                    type: "gtcode"
                };
                $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                                           function (data) {
                                               if (data.success == true) {
                                                   $(".gtcode").siblings(".wran-right").show();
                                                   $(".gtcode").siblings(".wran-wrong").hide();
                                                   if ($(".gtpass").val() != "") {
                                                       if (chk($(".gtpass").val())) {
                                                           $(".gtpass").siblings(".wran-right").show();
                                                           $(".gtpass").siblings(".wran-wrong").hide();
                                                           if ($(".gtpasscon").val() != "" && $(".gtpasscon").val() == $(".gtpass").val()) {
                                                               $(".gtpasscon").siblings(".wran-right").show();
                                                               $(".gtpasscon").siblings(".wran-wrong").hide();
                                                               var submitData = {
                                                                   username: $(".gpemail").val(),
                                                                   pass: hex_md5(($(".gtpass").val())),
                                                                   type: "modypassg"
                                                               };
                                                               $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                                                                                           function (data) {
                                                                                               data = eval("(" + data + ")");
                                                                                               if (data.success == true) {
                                                                                                   alert("修改成功");
                                                                                                   $(".findBox").hide();
                                                                                                   $("#shade").hide();
                                                                                               } else {
                                                                                                   alert("不存在该用户");
                                                                                               }
                                                                                           });
                                                           } else {
                                                               $(".gtpasscon").siblings(".wran-right").hide();
                                                               $(".gtpasscon").siblings(".wran-wrong").show();
                                                               return;
                                                           }
                                                       } else {
                                                           return;
                                                       }
                                                   } else {
                                                       $(".gtpass").siblings(".wran-right").hide();
                                                       $(".gtpass").siblings(".wran-wrong").show();
                                                       return;
                                                   }
                                               } else {
                                                   $(".gtcode").siblings(".wran-right").hide();
                                                   $(".gtcode").siblings(".wran-wrong").show();
                                                   return;
                                               }
                                           }, "json")
            } else {
                $(".gtcode").siblings(".wran-right").hide();
                $(".gtcode").siblings(".wran-wrong").show();
                return;
            }
        } else {
            alert("请输入有效的邮箱"); return;
        }
    });



    $(".gphqyzm").click(function () {
        if ($(".gpemail").val() != "" && regMail.test($(".gpemail").val())) {
            var submitData = {
                username: $(".gpemail").val(),
                type: "hqyzm"
            };
            $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                                     function (data) {
                                         if (data.success == true) {
                                             alert("邮件已发送");
                                         } else {
                                             alert(data);
                                         }
                                     }, "json")

        } else {
            alert("请输入有效的邮箱");
        }
    })
    $(".gtcode").blur(function () {
        if ($(".gtcode").val() != "") {
            var submitData = {
                code: $(".gtcode").val(),
                type: "gtcode"
            };
            $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                                      function (data) {
                                          if (data.success == true) {
                                              $(".gtcode").siblings(".wran-right").show();
                                              $(".gtcode").siblings(".wran-wrong").hide();
                                          } else {
                                              $(".gtcode").siblings(".wran-right").hide();
                                              $(".gtcode").siblings(".wran-wrong").show();
                                              return;
                                          }
                                      }, "json")
        } else {
            $(this).siblings(".wran-right").hide();
            $(this).siblings(".wran-wrong").show();
            return;
        }
    });



    //登陆
    function checkusrnamezc() {
        if ($(".dlusername").val() != "") {
            $(".dlusername").next().next().next().hide();
            $(".dlusername").next().next().show();
            if (!regMail.test($(".dlusername").val())) {
                $(".dlusername").next().next().hide();
                $(".dlusername").next().next().next().show();
            }
        } else {
            $(".dlusername").next().next().hide();
            $(".dlusername").next().next().next().show();
        }
    }
    function checkpasszc() {
        if ($(".dlpwd").val() != "") {
            $(".dlpwd").next().next().next().hide();
            $(".dlpwd").next().next().show();
        } else {
            $(".dlpwd").next().next().hide();
            $(".dlpwd").next().next().next().show();
        }
    }



    $(".qzc").click(function () {
        $(".lgBox").hide();
        $(".rgBox").show();
    });

    if ("Male" == "Female") {
        $("input:radio[name='foot:sex']").eq(1).attr("checked", "checked");
    }
    $(".loginBtPerData").click(function () {
        if ($("#foot_realname").val() == "") {
            $("#foot_realname").siblings(".wran-right").hide();
            $("#foot_realname").siblings(".wran-wrong").html($("#foot_realname").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            $("#foot_realname").siblings(".wran-right").show();
            $("#foot_realname").siblings(".wran-wrong").hide();
        }
        if ($("#foot_email").val() == "") {
            $("#foot_email").siblings(".wran-right").hide();
            $("#foot_email").siblings(".wran-wrong").html($("#foot_email").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            if (!regMail.test($("#foot_email").val())) {
                $("#foot_email").siblings(".wran-right").hide();
                $("#foot_email").siblings(".wran-wrong").html($("#foot_email").attr("wronginfo") + "输入有误").show();
                return false;
            } else {
                $("#foot_email").siblings(".wran-right").show();
                $("#foot_email").siblings(".wran-wrong").hide();
            }
        }
        if ($("#foot_wxh").val() == "") {
            $("#foot_wxh").siblings(".wran-right").hide();
            $("#foot_wxh").siblings(".wran-wrong").html($("#foot_wxh").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            $("#foot_wxh").siblings(".wran-right").show();
            $("#foot_wxh").siblings(".wran-wrong").hide();
        }

        if ($("#foot_mobel").val() == "") {
            $("#foot_mobel").siblings(".wran-right").hide();
            $("#foot_mobel").siblings(".wran-wrong").html($("#foot_mobel").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            if (!regMobile.test($("#foot_mobel").val())) {
                $("#foot_mobel").siblings(".wran-right").hide();
                $("#foot_mobel").siblings(".wran-wrong").html($("#foot_mobel").attr("wronginfo") + "输入有误").show();
                return false;
            } else {
                $("#foot_mobel").siblings(".wran-right").show();
                $("#foot_mobel").siblings(".wran-wrong").hide();
            }
        }
        if ($("#foot_companyname").val() == "") {
            $("#foot_companyname").siblings(".wran-right").hide();
            $("#foot_companyname").siblings(".wran-wrong").html($("#foot_companyname").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            $("#foot_companyname").siblings(".wran-right").show();
            $("#foot_companyname").siblings(".wran-wrong").hide();
        }
        if ($("#foot_job").val() == "") {
            $("#foot_job").siblings(".wran-right").hide();
            $("#foot_job").siblings(".wran-wrong").html($("#foot_job").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            $("#foot_job").siblings(".wran-right").show();
            $("#foot_job").siblings(".wran-wrong").hide();
        }
        if ($("#foot_summary").val() == "") {
            $("#foot_summary").siblings(".wran-right").hide();
            $("#foot_summary").siblings(".wran-wrong").html($("#foot_summary").attr("wronginfo") + "输入有误").show();
            return false;
        } else {
            $("#summary").siblings(".wran-right").show();
            $("#summary").siblings(".wran-wrong").hide();
        }
        $(".ycy").val("predata");
        form1.submit();
    });
    $(".notnull").blur(function () {
        var regMobile = /^0?(13[0-9]|15[012356789]|18[012356789]|14[57])[0-9]{8}$/;

        if ($(this).val() == "") {
            $(this).siblings(".wran-right").hide();
            $(this).siblings(".wran-wrong").html($(this).attr("wronginfo") + "输入有误").show();
        } else {
            if ($(this).attr("wrongtitle") == "Email") {
                if (!regMail.test($(this).val())) {
                    $(this).siblings(".wran-right").hide();
                    $(this).siblings(".wran-wrong").html($(this).attr("wronginfo") + "输入有误").show();
                } else {
                    $(this).siblings(".wran-wrong").hide();
                    $(this).siblings(".wran-right").show();
                }
            } else if ($(this).attr("wrongtitle") == "Mobel") {
                if (!regMobile.test($(this).val())) {
                    $(this).siblings(".wran-right").hide();
                    $(this).siblings(".wran-wrong").html($(this).attr("wronginfo") + "输入有误").show();
                } else {
                    $(this).siblings(".wran-wrong").hide();
                    $(this).siblings(".wran-right").show();
                }
            } else {
                $(this).siblings(".wran-wrong").hide();
                $(this).siblings(".wran-right").show();
            }
        }
    });
    function searchEnter(event) {
        var keycode = event.keyCode || event.which;
        if (keycode == 13) {
            dl();
            return false;
        }
        else {
            return true;
        }
    }

    function dl() {

        if ($(".dlusername").val() != "") {
            $(".dlusername").next().next().next().hide();
            $(".dlusername").next().next().show();
            if (!regMail.test($(".dlusername").val())) {
                $(".dlusername").next().next().hide();
                $(".dlusername").next().next().next().show();
                return false;
            }
        } else {
            $(".dlusername").next().next().hide();
            $(".dlusernames").next().next().next().show();
            return false;
        }
        if ($(".dlpwd").val() != "") {
            $(".dlpwd").next().next().next().hide();
            $(".dlpwd").next().next().show();

        } else {
            $(".dlpwd").next().next().hide();
            $(".dlpwd").next().next().next().show();
            return false;
        }
        var username = $(".dlusername").val();
        var pwd = $(".dlpwd").val();
        var submitData = {
            username: username,
            pass: hex_md5(pwd),
            type: "Login"
        };
        $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                         function (data) {
                             if (data.success == true) {
                                 location.href = "../hyzx/indexeb91.html?nodeid=30";
                             }
                             else if (data.success == false) {
                                 if (data.error == "mimacuowu") {
                                     $(".dlpwd").next().next().hide();
                                     $(".dlpwd").next().next().next().show();
                                     return false;
                                 } else {
                                     $(".dlusername").next().next().hide();
                                     $(".dlusername").next().next().next().show();
                                     return false;
                                 }
                             }
                         }, "json")




        function zc() {
            var username = $.trim($(".zcusername").val());
            var zctel = $(".zctel").val();
            var zcpasword = $(".zcpasword").val();
            var zcpaswrd = $(".zcpaswrd").val();
            var tbValidateCode = $(".tbValidateCode").val();
            if (username != "" && zctel != "" && zcpasword != "" && tbValidateCode != "") {
                if (regMail.test(username)) {
                    if (re.test(zctel)) {
                        if (chk(zcpasword)) {
                            if (zcpasword != zcpaswrd) {
                                $(".zcpaswrd").next().next().next().show();
                                return false;
                            } else {
                                if (checkValidateCode()) {
                                    var boolCheck = $('input:checkbox[name="check"]').is(":checked");
                                    if (boolCheck) {
                                        $(".ycy").val("zc");
                                        form1.submit();
                                    } else {
                                        alert("请先阅读服务条款");
                                    }

                                } else {
                                    $(".tbValidateCode").next().next().next().show();
                                    return false;
                                }
                            }
                        }
                    } else {
                        $(".zctel").next().next().next().show();
                        return false;
                    }
                } else {
                    $(".zcusername").next().next().next().show().html("必须为邮箱格式");
                    return false;
                }
            }

        }

        function checktel(val) {
            if (re.test(val)) {
                $(".zctel").next().next().next().hide();
                $(".zctel").next().next().show();
            } else {
                $(".zctel").next().next().hide();
                $(".zctel").next().next().next().show();
            }
        }
        function checkpwd(val) {
            if ((val == $.trim($(".zcpasword").val())) && val != "") {
                $(".zcpaswrd").next().next().next().hide();
                $(".zcpaswrd").next().next().show();
            } else {
                $(".zcpaswrd").next().next().hide();
                $(".zcpaswrd").next().next().next().show();
            }
        }
        function checkcode() {
            if (checkValidateCode()) {
                $(".tbValidateCode").next().next().next().hide();
                $(".tbValidateCode").next().next().show();
            } else {
                $(".tbValidateCode").next().next().hide();
                $(".tbValidateCode").next().next().next().show();
            }
        }

        function checkValidateCode() {
            var ValidateCode = decodeURI(decodeURI(ReadCookie("WebPlugValidateCode")));
            var tbValidateCode = document.getElementById("tbValidateCode");
            if (tbValidateCode.value != ValidateCode) {
                var codeImg = document.getElementById("codeImg");
                codeImg.src = "/include/validatecode.aspx?time=" + new Date().getTime();
                //alert("验证码错误，请重新输入！");
                tbValidateCode.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function checkusrname(uname) {
            if (uname != "") {
                if (regMail.test(uname)) {
                    var submitData = {
                        username: uname,
                        type: "CheckUserName"
                    };
                    $.get("/ajax/ajax_register.aspx?time=" + new Date().getTime(), submitData,
                                function (data) {
                                    if (data.success == true) {
                                        $(".zcusername").siblings(".wran-right").show();
                                        //$("#zcusername").next().next().attr("display","block");
                                        $(".zcusername").next().next().next().hide();
                                    }
                                    else if (data.success == false) {
                                        $(".zcusername").next().next().hide();
                                        $(".zcusername").next().next().next().show().html("用户已存在");
                                    }
                                }, "json")
                } else {
                    $(".zcusername").next().next().hide();
                    $(".zcusername").next().next().next().show().html("必须为邮箱格式");
                }
            } else {
                $(".zcusername").next().next().hide();
                $(".zcusername").next().next().next().show().html("用户名不能为空");
            }
        }
        function chk(s) 
            else if (s.length > 12) { alert('长度大于12位'); return false; }
            else if (!s.match(/[0-9]/)) { alert('没有数字'); return false; }
            else if (!s.match(/[a-zA-Z]/)) { alert('没有字母'); return false; }
            else return true;
        }


       





        $(".a02").click(function () {
            $(".chatParms").children().remove();
        });


        $("#sendBtns").click(function () {
            var str = "<div class=\"weCont \" >";
            str += "             <p class=\"p01\">iSoftStone&nbsp;&nbsp;<span>" + new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds() + "</span></p>";
            str += "             <p class=\"p02\">";
            str += "                 <span>您好！很抱歉，您所输入的问题暂未找到相似答案，若您想继续了解相关问题答案，您可以以下选择：<br />";
            str += "                     <a href=\"#2\" class=\"a01\">留下您的联系方式</a>";
            str += " ";
            str += "                     <a href=\"/conleft/in.aspx?nodeid=346&keyword=" + $("#procon").val() + "\">全站搜索</a>";
            str += "                     <i></i>";
            str += "                 </span>";
            str += "             </p>";
            str += "             <div class=\"contectStyle\">";
            str += "                 <ul>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">姓名</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\"  class='qjrname ' placeholder=\"请留下您的姓名\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">城市</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqrcity \" placeholder=\"您所在的城市\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">公司</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqrcompany \" placeholder=\"您所在的公司\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">职位</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqrjob\" placeholder=\"您所在的公司\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">邮箱</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqremail \" placeholder=\"请留下您的邮箱\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">手机</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqrtell \" placeholder=\"请留下您的联系电话\" /></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\">留言</span>";
            str += "                         <span class=\"span02 fleft \"><textarea class=\"jqrmessage \"  ></textarea></span>";
            str += "                     </li>";
            str += "                     <li class=\"clearfix\">";
            str += "                         <span class=\"span01 fleft\" style=\"text-align:left; text-indent:0.3em;\">验证码</span>";
            str += "                         <span class=\"span02 fleft\"><input type=\"text\" name=\"\" class=\"jqrcode \" placeholder=\"\" /></span>";
            str += " <a href=\"javascript:void(0)\" class=\"yzmPic\"><img class='jqryzm'  src=\"/include/validatecode.aspx?time=" + new Date().getTime() + "\" alt=\"看不清，换一张\" /></a>";
            str += "                     </li>";
            str += "                 </ul>";
            str += "                 <a href=\"javascript:void(0)\" class=\"sub jqrsub\" >提交</a>";
            str += "             </div>";
            str += "         </div>";

            if ($("#procon").val() == "请输入您的关键词" && $("#procon").val() == "") {
                alert("请填写内容");
            } else {
                $.get("/ajax/ajax.aspx?dotype=subform&content=" + $("#procon").val(), function (data) {
                    $(".chatParms").append("<div class=\"clientCont\"><p class=\"p01\">我&nbsp;&nbsp;<span>" + new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds() + "</span></p><p class=\"p02\"><span>" + $("#procon").val() + "<i></i></span></p></div>");


                    if (data == "No") {

                        //未找到相似问题
                        $(".chatParms").append(str);

                        $(".scrollBoxs").mCustomScrollbar("scrollTo", $('.weCont').last().position().top);
                        $(".jqryzm:last").click(function () {
                            $(this).attr("src", "/include/validatecode.aspx?time=" + new Date().getTime());
                        });
                        $(".chatParms .jqrsub:last").click(function () {

                            if ($(".chatParms .qjrname:last").val() != "" && $(".chatParms .jqrcity:last").val() != "" && $(".chatParms .jqrcompany:last").val() != "" && $(".chatParms .jqrjob:last").val() != "" && $(".chatParms .jqremail:last").val() != "" && $(".chatParms .jqrtell:last").val() != "" && $(".chatParms .jqrmessage:last").val() != "" && $(".chatParms .jqrcode:last").val() != "") {
                                if (regMail.test($(".chatParms .jqremail:last").val())) {
                                    if (re.test($(".chatParms .jqrtell:last").val())) {
                                        $.get("/ajax/ajax.aspx?dotype=jqrsub&name=" + $(".chatParms .qjrname:last").val() + "&city=" + $(".chatParms .jqrcity:last").val() + "&company=" + $(".chatParms .jqrcompany:last").val() + "&job=" + $(".chatParms .jqrjob:last").val() + "&email=" + $(".chatParms .jqremail:last").val() + "&tell=" + $(".chatParms .jqrtell:last").val() + "&message=" + $(".chatParms .jqrmessage:last").val() + "&code=" + $(".chatParms .jqrcode:last").val(), function (data) {
                                            if (data == "Yes") {
                                                $(".chatParms").append("<div class=\"weCont\"><p class=\"p01\">iSoftStone&nbsp;&nbsp;<span>" + new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds() + "</span></p> <p class=\"p02\"><span>提交成功！我们会尽快与您联系。<i></i> </span> </p> </div>")
                                                form1.reset();

                                            } else if (data == "No") {
                                                alert("验证码错误"); return;
                                            }
                                        });
                                    } else {
                                        alert("手机格式格式错误"); return;
                                    }
                                } else {
                                    alert("邮箱格式错误"); return;
                                }

                            } else {
                                alert("请将内容填写完整"); return;
                            }
                        });
                    } else {
                        //查出来问题答案
                        $(".chatParms").append("<div class=\"weCont\"><p class=\"p01\">iSoftStone&nbsp;&nbsp;<span>" + new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds() + "</span></p> <p class=\"p02\"><span>" + data + "<i></i> </span> </p> </div>");
                        $(".scrollBoxs").mCustomScrollbar("scrollTo", 'bottom');
                    }

                    $("#procon").val("");
                });
            }
        });

    }


</script>
<script src="../js/foot.js"></script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "../../hm.baidu.com/hmffae.js?e5e1889ee1cef86df8447e0c983cb5b5";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

</script>
<script type="text/javascript">
    $(function () {
        $('#pass').keyup(function () {
            var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
            var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
            var enoughRegex = new RegExp("(?=.{6,}).*", "g");

            if (false == enoughRegex.test($(this).val())) {
                $('#level').removeClass('pw-weak');
                $('#level').removeClass('pw-medium');
                $('#level').removeClass('pw-strong');
                $('#level').addClass(' pw-defule');
                //密码小于六位的时候，密码强度图片都为灰色 
            }
            else if (strongRegex.test($(this).val())) {
                $('#level').removeClass('pw-weak');
                $('#level').removeClass('pw-medium');
                $('#level').removeClass('pw-strong');
                $('#level').addClass(' pw-strong');
                //密码为八位及以上并且字母数字特殊字符三项都包括,强度最强 
            }
            else if (mediumRegex.test($(this).val())) {
                $('#level').removeClass('pw-weak');
                $('#level').removeClass('pw-medium');
                $('#level').removeClass('pw-strong');
                $('#level').addClass(' pw-medium');
                //密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是中等 
            }
            else {
                $('#level').removeClass('pw-weak');
                $('#level').removeClass('pw-medium');
                $('#level').removeClass('pw-strong');
                $('#level').addClass('pw-weak');
                //如果密码为6为及以下，就算字母、数字、特殊字符三项都包括，强度也是弱的 
            }
            return true;
        });
    })
</script>
<script>
	(function($){
		
              $(window).load(function(){       
              $.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
			$.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default
			$(".scrollBoxs").mCustomScrollbar({
				theme:"dark",
				mouseWheelPixels:"150px",
				mouseWheel:{
					 preventDefault: true,

				}
			});
		});        
        
		
	})(jQuery);
</script>
<script>
    $('#company_weixin').on('click',function(){

        $('#guanfang_weixin').show();
    })

    $('#closeBTN').on('click',function(){

        $(this).parent().hide()
        })
</script>
         <img class="best-fill" style="display:none" src="../images/logo.png" alt="" />
        <script type="text/javascript" src="../scripts/image-scale.min.js"></script>
        <script type="text/javascript">
            $(".num5 li i:last").remove();
           // $(" .num5 li a:first").parent().remove();
        </script>
    </form>
</body>

<!-- Mirrored from www.isoftstone.com/conleft/in_1069.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Jul 2017 03:21:57 GMT -->
</html>