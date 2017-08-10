$(function(){
	showBox();
	navSlide();
	zhiding();
	if(device.desktop()){
		addBor();
		changeBg();
	}
	btnActive();
	flWindow();
	addActives();
	showList();
	searchLong();
	mapChange();
	secondNav();
	addBgs();
	addPlaymenu();
	banNav();
	addDlact();

    //20160118
	scrollHei();
	// showSides();
})



$(function(){
	$('.best-fill').imageScale()
})

function  zhiding(){

	$(".gotop").click(function () {
        $('body,html').animate({ scrollTop: 0 }, 500);
     })
}
function showBox(){
	$(".icons-float i").mouseover(function(){
			$(this).siblings(".mapbox").fadeIn();
		})
	$(".icons-float i").mouseleave(function(){
			$(this).siblings(".mapbox").fadeOut();
		})
}
function navSlide(){
	$(".res-nav a.nav-btn").click(function(){
			$(".res-list").slideToggle();
		})
	
	$(".res-list-fr i").click(function(){
			if($(this).siblings(".a-01").hasClass("active")){
					$(this).siblings(".a-01").removeClass("active");
					$(this).siblings(".inset-list").slideUp();
				}else{
			$(this).siblings(".a-01").addClass("active")
			$(this).parents().siblings().children(".a-01").removeClass("active");
			$(this).siblings(".inset-list").slideDown();
			$(this).siblings(".inset-list").parent(".res-list-fr").siblings().children(".inset-list").slideUp();
				}
		})
}
function addBor(){
	$(".picBoxs ul li").mouseover(function(){
			$(this).addClass("active").siblings().removeClass("active");
			$(this).children("img").stop().animate({right:'3px'},300)
		})	
	$(".picBoxs ul li").mouseleave(function(){
			$(this).removeClass("active");
			$(this).children("img").stop().animate({right:0},300)
		})
}
function changeBg(){
	$(".changeBgs ul li").mouseover(function(){
			$(this).children(".f01").hide();
			$(this).children(".f02").show();
		})
	$(".changeBgs ul li").mouseleave(function(){
			$(this).children(".f01").show();
			$(this).children(".f02").hide();
		})
}
function btnActive(){
	$(".m-l-colm div.subBtns").mouseover(function(){
			$(this).addClass("active");
		})
	$(".m-l-colm div.subBtns").mouseleave(function(){
			$(this).removeClass("active");
		})
}
	// 弹窗js
function flWindow(){
    //Open window	

    $(".findPsd").click(function () {
        OpenWindow(name)
        $(".tc-box").show();
        $(".tc-box").children(".lgBox").hide();
        $(".tc-box").children(".findBox").show();
    })

	$(".top-r-search a.login").click(function() {
		OpenWindow(name)
		$(".tc-box").show();
		$(".tc-box").children(".lgBox").show();
    });
	$(".top-r-search a.register").click(function() {
		OpenWindow(name)
		$(".tc-box").show();
		$(".tc-box").children(".rgBox").show();
    });
	
	$(".wszlBtns").click(function() {
		OpenWindow(name)
		$(".datas").show();
    });
	
		
	function OpenWindow(name){
		var shade="<div id='shade'  style='display:none;'></div>"	
		$(document.body).append(shade)
		$("#shade").show();
		$("#shade").fadeTo(1000, 0.6);
		$(name).show();
	}
			
    // Close window

		$(".tc-box a.close").click(function() {
			$(".tc-box").hide();
			$(".tc-box").children(".lgBox").hide();
			$(".tc-box").children(".rgBox").hide();
			$(".tc-box").children(".findBox").hide();

			$(".datas").hide();
			$("#shade").hide();
			});
		$(".datas .close").click(function(){
			$("#shade").hide();
			$(".datas").hide();
			})
}
function addActives(){
	$(".m-l-colm p input").mouseover(function(){
			$(this).addClass("active");
		})
	$(".m-l-colm p input").mouseleave(function(){
			$(this).removeClass("active");
		})
}
function showList(){
	
		
	var timer = null;
	var aNav = $(".nav ul li");
	var listNav = $('.list-nav');
	
	var currentActive = aNav.filter('.activell').index();
		
	aNav.each(function(index,elements){
		
		$(elements).mouseenter(function(){
			$(this).addClass("active").siblings().removeClass("active");
			$(this).siblings().removeClass("activell");
			$(".list-s0"+ (index+1) +"").stop(true,true).slideDown();
			$(".list-s0"+ (index+1) +"").siblings(".list-nav").stop(true,true).slideUp();
		});
		
		$(elements).mouseleave(function(){
			listNav.eq(index).delay(700).slideUp();
		})
		
		listNav.eq(index).mouseenter(function(){
			$(this).stop(true);
		});
		
		listNav.eq(index).mouseleave(function(){
			$(this).slideUp();
			aNav.removeClass("active");
			aNav.eq(currentActive).addClass('active')
		})
	});
	
	
}
function searchLong(){
	$(".top-r-search span").click(function(){
			$(this).stop().animate({width:'185px'})
		})	
	
		// 收起列表

		$(document).bind('click',function(e){
			var e = e || window.event;
			var elem = e.target || e.srcElement;
			while (elem) {
				if (elem.className && elem.className == 'top-r-search') {
					return;
				}
				elem = elem.parentNode;
			}
	
			$('.top-r-search').children("span").stop().animate({width:'102px'});
		});

/*	$(".top-r-search input").mouseleave(function(){
			$(this).removeClass("active");
		})*/
}
function mapChange(){
	$("#iconImg02 img.img01").css({"border":0,"padding":0})
	$("#iconImg01 img.img01").css("width",154)
	$("#iconImg01").click(function(){
			$(this).animate({"width":0,"height":0,"border":0});
			$("#iconImg02").animate({"width":160,"height":88,"padding":2});
			$("#iconImg02").children(".img01").css({"border":1,"border-color":"#fff","border-style":"solid"})
			$("#fadeImg01").animate({"width":0,"height":0});
			$("#fadeImg01").children(".icons-float").children("i").hide();
			$("#fadeImg01").children(".img02").css('opacity',0)

			$("#fadeImg02").animate({"width":826,"height":525});
			$("#fadeImg02").children(".icons-float").children("i").show();
			$("#fadeImg02").children(".img02").css('opacity',1)
		})
	$("#iconImg02").click(function(){
			$(this).animate({"width":0,"height":0,"border":0});
			$("#iconImg01").animate({"width":160,"height":88});
			$("#fadeImg02").animate({"width":0,"height":0});
			$("#fadeImg02").children(".icons-float").children("i").hide();
			$("#fadeImg02").children(".img02").css('opacity',0)
			$("#fadeImg01").animate({"width":632,"height":525});
			$("#fadeImg01").children(".icons-float").children("i").show();
			$("#fadeImg01").children(".img02").css('opacity',1)
		})
}
function secondNav(){
	$(".inset-list i").click(function(){
			if($(this).siblings(".a-03").hasClass("active")){
					$(this).siblings(".a-03").removeClass("active");
					$(this).siblings(".three-link").slideUp();
				}else{
			$(this).siblings(".a-03").addClass("active")
			$(this).siblings(".three-link").slideDown();
			$(this).parents("li").siblings().children(".a-03").removeClass("active");
			$(this).parents("li").siblings().children(".three-link").slideUp();	
				}
		})	
}
function addBgs(){
	$(".floatDiv02").mouseover(function(){
			$(this).children(".floatDiv02-bg").fadeIn();
		})
	$(".floatDiv02").mouseleave(function(){
			$(this).children(".floatDiv02-bg").fadeOut();
		})
}
function addPlaymenu(){
	$("#a1").mouseover(function(){
		$(this).children("i").addClass("active");
	})
	$("#a1").mouseleave(function(){
		$(this).children("i").removeClass("active");	
	})
}
function banNav(){
Number.prototype.toPercent = function(){
		return (Math.round(this * 10000)/100).toFixed(2) + '%';
		}
	var ulWidth = $(".banner ul").width()
	var liNum = $(".banner ul li").size()
	var perWidth = (ulWidth / liNum)
	var perPoint = ((perWidth / ulWidth) - 0.001)
	$(".banner ul li").width(perPoint.toPercent());

	$(window).load(function(){
			$('#sliders').carouFredSel({
			height:'varible',
			responsive:true,
			items: {
				width: 1000,
				height: 'varible',
				visible: 1
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true,
				onAfter: function(data) {
					data.items.visible.find('.num02-pic').stop().fadeIn();
					data.items.old.find('.num02-pic').stop().fadeOut();
				}
			},
			pagination:'.slidePot'
		});
		
		$('#sliders li').eq(0).find('.num02-pic').show();
		
	
	$('.pad-lunbo .bd').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:false,
			items: {
				width: 260,
				height: 'varible',
				visible: 3
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})

	$(window).resize(function(){
		$('.lunbo-cont .bd').each(function(index,ele){
			$(ele).carouFredSel({
				height:'varible',
				auto:false,
				items: {
					width: 333,
					height: 'varible',
					visible: 3
				},
				scroll: {
					items: 1,
					duration: 800,
					timeoutDuration : 3000,
					pauseOnHover:true
				},
				next:$(this).parent().find('.next'),
				prev:$(this).parent().find('.prev')
				
			});
		})
	}).resize()
	
	$('.devs-slide-cont .bd').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 960,
				height: 'varible',
				visible: 1
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	
	$('.pad-slide-cont .bd').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 750,
				height: 'varible',
				visible: 1
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	
	$('.bannerBox02-cont .bd').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 240,
				height: 'varible',
				visible: 4
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	
	$('.pads-cont .bd').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 231,
				height: 'varible',
				visible: 3
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	
	$('.zhyw-lunbo .bd ul').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 350,
				height: 'varible',
				visible: 3
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	
	$('.zhywPads-lunbo .bd ul').each(function(index,ele){
		$(ele).carouFredSel({
			height:'varible',
			auto:true,
			items: {
				width: 250,
				height: 'varible',
				visible: 3
			},
			scroll: {
				items: 1,
				duration: 800,
				timeoutDuration : 3000,
				pauseOnHover:true
			},
			next:$(this).parent().find('.next'),
			prev:$(this).parent().find('.prev')
			
		});
	})
	})
}
function addDlact(){
	$(".footer-nav dl:first").addClass("first");
}
$(document).ready(function() {
    var banUlwidth = $(".banner ul.slides li").length
	var totleWid = (banUlwidth*44 + banUlwidth*22);
	$(".slidePot").css("margin-left",-(totleWid/2));
});






//20160118
function scrollHei() {
    var winHei = $(window).height();
    var withHei01 = $(".top").height();
    var withHei02 = $(".nav").height();
    var withHei03 = $(".cB-d").height();
    var needHei = (winHei - (withHei01 + withHei02 + withHei03));
    var mainHei = (needHei - 36 - 54);
    $(".scrollBoxs").height(mainHei);
}
// function showSides() {
//     $(".sideSlide").click(function () {
//         $(this).stop().animate({ right: '-42px' }, 900);
//         $(".chatBox").stop().animate({ right: 0 });
//     })
//     $(".cB-title .closes").click(function () {
//         $(".chatBox").stop().animate({ right: '-380px' });
//         $(".sideSlide").stop().animate({ right: 0 }, 700);
//     })
//     $(".gotop").click(function () {
//         $('body,html').animate({ scrollTop: 0 }, 500);
//     })
// }







































   