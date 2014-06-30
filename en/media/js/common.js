//On Page LOAD ###################################

var x = 168;
var window_size = $(window).height();
if (window_size > 600) {
    x = x + Math.ceil(window_size - 600)/2;
}
x = x + "px";


$(function(){
	calculateWhitespace();
	stickNavigation();
   $(window).scrollTop(0);
	$(window).resize(function() {
		calculateWhitespace();
		stickNavigation();
	});
	tooltipVisibility();

	var scrollTop = 0;
	var content = $("#facebook");
	var recruitment = $(".recruitment_wrapper");
	var myScrollDown,myScrollUp;
	clearAllInterval = function() { 	
		clearInterval(myScrollDown); 
		clearInterval(myScrollUp); 
	},
	$("#facebook-stream .up_down .btn_down").mousedown(function(){
		myScrollDown = setInterval(function(){content.scrollTop(content.scrollTop()+15);},100);
	})
	$("#facebook-stream .up_down .btn_down").mouseup(clearAllInterval)
	$("#facebook-stream .up_down .btn_down").click(function(){
		content.scrollTop(content.scrollTop()+15);
	})
	$("#facebook-stream .up_down .btn_up").mousedown(function(){
		myScrollUp = setInterval(function(){ content.scrollTop(content.scrollTop()-15);},100);
	})
	$("#facebook-stream .up_down .btn_up").mouseup(clearAllInterval)
	$("#facebook-stream .up_down .btn_up").click(function(){
		content.scrollTop(content.scrollTop()-15);
	})
	/*contact us*/
	$("#recruitment .recruitment_down").mousedown(function(){
		myScrollDown = setInterval(function(){recruitment.scrollTop(recruitment.scrollTop()+15);},100);
	})
	$("#recruitment .recruitment_down").mouseup(clearAllInterval)
	$("#recruitment .recruitment_down").click(function(){
		recruitment.scrollTop(recruitment.scrollTop()+15);
	})
	$("#recruitment .recruitment_up").mousedown(function(){
		myScrollUp = setInterval(function(){ recruitment.scrollTop(recruitment.scrollTop()-15);},100);
	})
	$("#recruitment .recruitment_up").mouseup(clearAllInterval)
	$("#recruitment .recruitment_up").click(function(){
		recruitment.scrollTop(recruitment.scrollTop()-15);
	})
	
	$(".nav_item:not('.jFlowActive')").live('mouseover',function(){
		$(this).addClass("jFlowHover");
	}).live('mouseout',function(){
		$(this).removeClass("jFlowHover");
	});
	$("#lineOfInteraction:not('.up_icon')").live('click',function(){
		$(".contactus_recruitment").hide();
		
		var x = $(this).offset().top; // 100 provides buffer in viewport
		$('html,body').animate({scrollTop: x}, 100);
		$("#goto_contactus").removeClass("jFlowActive");
		$(".facebook_team").fadeIn();
		$(this).addClass("up_icon");
	 });
	 $("#lineOfInteraction.up_icon").live('click',function(){
		$("#goto_home").trigger("click");
		$(this).removeClass("up_icon");
	 });
	 $("#goto_contactus").live('click',function(){
		$(".facebook_team").hide();
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive");
		var x = $(this).offset().top; // 100 provides buffer in viewport
		$('html,body').animate({scrollTop: x}, 100);
		$(".contactus_recruitment").fadeIn();
		$("#lineOfInteraction").addClass("up_icon")
	 });
	 
	index();
	survey();
	contact_us();
	$(".index_item61").click(function(){
		$(".video-code").each(function(){
			$(this).html($(this).html());
		})
	})
			
});

function contact_us(){
	$('.contact_submit').click(function(){
		var name = $('.contact_name').val().trim();
		var company = $('.contact_company').val().trim();
		var email = $('.contact_email').val().trim();
		var phone = $('.contact_phone').val().trim();
		var comments = $('.contact_comments').val().trim();
		if(name!==''&&company!==''&&isNum(phone)&&checkEmail(email)){
			var json = JSON.stringify({'name':name,'company':company,'email':email,'phone':phone,'comments':comments});	
			$.ajax({
					type:'POST',
					url:'/en/hongri/contactus_post',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						alert('Submit success!');
					}
			})
		}
		else{
            alert("Please write the true information, thank you!");
		}
	})
	$('.contact_cancel').click(function(){
		var name = $('.contact_name').val('');
		var company = $('.contact_company').val('');
		var email = $('.contact_email').val('');
		var phone = $('.contact_phone').val('');
		var comments = $('.contact_comments').val('');
	})
}

String.prototype.trim = function(){    
    return this.replace(/(^\s*)|(\s*$)/g, "");  
}

function isNum(num)
{
	var reg = new RegExp("^[0-9]+$");
	return (reg.test(num));
} 

function home_page(){
	$("#home_page .client_login").toggle(function(){
		$("#home_page .client_login_list").slideDown();
	},function(){
		$("#home_page .client_login_list").slideUp();
	})
}
function survey(){ 
	var selector = $("#survey .faq_content .faq_ul");
	var myScrollDown,myScrollUp;
	clearAllInterval = function() { 	
		clearInterval(myScrollDown); 
		clearInterval(myScrollUp); 
	},
	$("#survey .faq_content .next").mousedown(function(){
		myScrollDown = setInterval(function(){selector.scrollTop(selector.scrollTop()+15);},100);
	})
	$("#survey .faq_content .next").mouseup(clearAllInterval)
	$("#survey .faq_content .next").click(function(){
		selector.scrollTop(selector.scrollTop()+15);
	})
	$("#survey .faq_content .prev").mousedown(function(){
		myScrollUp = setInterval(function(){ selector.scrollTop(selector.scrollTop()-15);},100);
	})
	$("#survey .faq_content .prev").mouseup(clearAllInterval)
	$("#survey .faq_content .prev").click(function(){
		selector.scrollTop(selector.scrollTop()-15);
	})
	$("#client_tips").click(function(event){
		$("#survey .newsletter_content").hide();
		$("#survey .share_content").hide();
		$("#survey .faq_content").hide();
		$("#survey .client_content").fadeIn();
		$(this).addClass("current").siblings().removeClass("current");
		event.stopPropagation();
	})
	$("#faq_tips").click(function(event){
		$("#survey .newsletter_content").hide();
		$("#survey .share_content").hide();
		$("#survey .faq_content").fadeIn();
		$(this).addClass("current").siblings().removeClass("current");
		event.stopPropagation();
	})
	$("#newsletter").click(function(event){
		$("#survey .faq_content").hide();
		$("#survey .share_content").hide();
		$("#survey .newsletter_content").fadeIn();
		$(this).addClass("current").siblings().removeClass("current");
		event.stopPropagation();
	})
	$("#newsletter .close").click(function(event){
		$("#survey .newsletter_content").fadeOut();
		$("#newsletter").removeClass("current");
		event.stopPropagation();
	})
	$("#share_tips").click(function(event){
		$("#survey .faq_content").hide();
		$("#survey .newsletter_content").hide();
		$("#survey .share_content").fadeIn();
		$(this).addClass("current").siblings().removeClass("current");
		event.stopPropagation();
	})
	$("body").click(function(){
		$("#survey .faq_content").fadeOut();
		$("#survey .newsletter_content").fadeOut();
		$("#survey .share_content").fadeOut();
		$("#survey .client_content").fadeOut();
		$("#faq_tips").removeClass("current");
		$("#newsletter").removeClass("current");
		$("#share_tips").removeClass("current");
	})
	$('.email_ul .submit_li').click(function(event){
		var email = $('.email_ul .input_li input').val().trim();
		if(checkEmail(email)){
			var json = JSON.stringify({'email':email});	
			$.ajax({
					type:'POST',
					url:'/en/hongri/news_post',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						alert('Submit success!');
						$("#survey .newsletter_content").fadeOut();
						$("#newsletter").removeClass("current");
					}
			})
		}
		else{
            alert("Please write the true Email, thank you!");
		}
		event.stopPropagation();
	})
}
function meet_eggshellers(){
	$("#about_us .container_box .box > img:not('.firstImg')").click(function(){
			$(this).hide();
			$(this).next().fadeIn();
			$(this).parent().siblings().find(".box_detail").hide();
			$(this).parent().siblings().find("img").fadeIn();
			//$(this).parent().siblings().css({width:"75px"});
			$('#about_us .container_box').masonry({
			  itemSelector: '.box'
			});
	})
	$("#about_us .container_box .firstImg").click(function(){
		$("#container .box > img:eq(1)").trigger('click');
	})
	$("#about_us .container_box .box_close").click(function(){
		$(this).parent().hide();
		$(this).parent().prev().fadeIn();
		$('#about_us .container_box').masonry({
		  itemSelector: '.box'
		});
	})											
}
function clients(){
	$('#clients #slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif'
	});
	stickNavigation();
}
function home_detail(){
	$('#slides_one').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		animationComplete:function(){
			$(".home_detail_cases .current_page").html($("#slides_one .pagination .current").index()+1);
		}
	});
	$('#slides_two').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		animationComplete:function(){
			$(".home_detail_videos .current_page").html($("#slides_two .pagination .current").index()+1);
		}
	});
	$('#slides_three').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		animationComplete:function(){
			$(".home_detail_how .current_page").html($("#slides_three .pagination .current").index()+1);
		}
	});
	$('#slides_four').slides({
		preloadImage: 'media/images/loading_30.gif',
		play: 100,
		slideSpeed: 15000,
		pause: 1000,
		hoverPause: true
	});
	$('#slides_five').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		animationComplete:function(){
			$(".home_detail_strategic .current_page").html($("#slides_five .pagination .current").index()+1);
		}
	});
	$('#slides_six').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		animationComplete:function(){
			$(".home_detail_advisor .current_page").html($("#slides_six .pagination .current").index()+1);
		}
	});
	$('#slides_seven').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0
	});
	$('#slides_eight').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,animationComplete:function(){
			$(".home_detail_brand_shop .current_page").html($("#slides_eight .pagination .current").index()+1);
		}
	});
	$('#slides_nine').slides({
		generateNextPrev: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,animationComplete:function(){
			$(".home_detail_client .current_page").html($("#slides_nine .pagination .current").index()+1);
		}
	});
	//cases
	$("#home_detail .home_detail_cases .prev_span").click(function(){
		$("#slides_one .prev").trigger('click');
	})
	$("#home_detail .home_detail_cases .next_span").click(function(){
		$("#slides_one .next").trigger('click');
	})
	$(".home_detail_cases .current_page").html($("#slides_one .pagination .current").index()+1);
	$(".home_detail_cases .totle_page").html($("#slides_one .pagination li").length);
	//movie
	$("#home_detail .home_detail_videos .prev_span").click(function(){
		$("#slides_two .prev").trigger('click');
	})
	$("#home_detail .home_detail_videos .next_span").click(function(){
		$("#slides_two .next").trigger('click');
	})
	$(".home_detail_videos .current_page").html($("#slides_two .pagination .current").index()+1);
	$(".home_detail_videos .totle_page").html($("#slides_two .pagination li").length);
	//how
	$("#home_detail .home_detail_how .prev_span").click(function(){
		$("#slides_three .prev").trigger('click');
	})
	$("#home_detail .home_detail_how .next_span").click(function(){
		$("#slides_three .next").trigger('click');
	})
	$(".home_detail_how .current_page").html($("#slides_three .pagination .current").index()+1);
	$(".home_detail_how .totle_page").html($("#slides_three .pagination li").length);
	//client
	$("#home_detail .home_detail_client .prev_span").click(function(){
		$("#slides_nine .prev").trigger('click');
	})
	$("#home_detail .home_detail_client .next_span").click(function(){
		$("#slides_nine .next").trigger('click');
	})
	$(".home_detail_client .current_page").html($("#slides_nine .pagination .current").index()+1);
	$(".home_detail_client .totle_page").html($("#slides_nine .pagination li").length);
	//brand_shop
	$("#home_detail .home_detail_brand_shop .prev_span").click(function(){
		$("#slides_eight .prev").trigger('click');
	})
	$("#home_detail .home_detail_brand_shop .next_span").click(function(){
		$("#slides_eight .next").trigger('click');
	})
	$(".home_detail_brand_shop .current_page").html($("#slides_eight .pagination .current").index()+1);
	$(".home_detail_brand_shop .totle_page").html($("#slides_eight .pagination li").length);
	//stategic
	$("#home_detail .home_detail_strategic .prev_span").click(function(){
		$("#slides_five .prev").trigger('click');
	})
	$("#home_detail .home_detail_strategic .next_span").click(function(){
		$("#slides_five .next").trigger('click');
	})
	$(".home_detail_strategic .current_page").html($("#slides_five .pagination .current").index()+1);
	$(".home_detail_strategic .totle_page").html($("#slides_five .pagination li").length);
	//advisor
	$("#home_detail .home_detail_advisor .prev_span").click(function(){
		$("#slides_six .prev").trigger('click');
	})
	$("#home_detail .home_detail_advisor .next_span").click(function(){
		$("#slides_six .next").trigger('click');
	})
	$(".home_detail_advisor .current_page").html($("#slides_six .pagination .current").index()+1);
	$(".home_detail_advisor .totle_page").html($("#slides_six .pagination li").length);
	
	$(".home_detail_strategic img.imagePop").parent().parent().click(function(event){
		var index = $(".strategic_advisor img.imagePop").index($(this).find('img'));
		$(".strategic_advisor .strategic_popup").fadeIn();
		$("#home_detail #slides_seven .pagination li:eq("+index+") a").trigger('click');
		event.stopPropagation();
	})
	$(".home_detail_advisor img.imagePop").click(function(event){
		var index = $(".home_detail_advisor img.imagePop").index($(this))+$(".home_detail_strategic img.imagePop").size();
		$(".strategic_advisor .strategic_popup").fadeIn();
		$("#home_detail #slides_seven .pagination li:eq("+index+") a").trigger('click');
		event.stopPropagation();
	})
	$(".home_detail_advisor img.imagePop").parent().next().click(function(event){
		var index = $(".home_detail_advisor img.imagePop").index($(this).prev().find('img'))+$(".home_detail_strategic img.imagePop").size();
		$(".strategic_advisor .strategic_popup").fadeIn();
		$("#home_detail #slides_seven .pagination li:eq("+index+") a").trigger('click');
		event.stopPropagation();
	})

	$("#home_detail .close_strategic").click(function(event){
		$(".strategic_advisor .strategic_popup").fadeOut();
		event.stopPropagation();
	})
	$(".strategic_advisor .strategic_popup").click(function(event){
		$(".strategic_advisor .strategic_popup").fadeIn();
		event.stopPropagation();
	})
	$("#home_detail").click(function(){
		$(".strategic_advisor .strategic_popup").fadeOut();
	})
	$("#home_detail .strategic_advisor .next_strategic").click(function(){
		$("#slides_seven .next").trigger('click');
	})
	
	//more
	$(".home_detail_aboutus .aboutus_more").click(function(){
		$("#goto_aboutus").trigger('click');
	})
	$(".home_detail_client .client_more").click(function(){
		$("#slides_nine .next").trigger('click');
	})
	$(".home_detail_brand_shop .brand_shop_more").click(function(){
		$("#slides_eight .next").trigger('click');
	})
	
	if($(".advisor_page .current_page").html()==0)
		$(".advisor_page .current_page").html("1");
	if($(".advisor_page .totle_page").html()==0)
		$(".advisor_page .totle_page").html("1");
	if($(".home_detail_strategic .current_page").html()==0)
		$(".home_detail_strategic .current_page").html("1");
	if($(".home_detail_strategic .totle_page").html()==0)
		$(".home_detail_strategic .totle_page").html("1");
	if($(".home_detail_client .current_page").html()==0)
		$(".home_detail_client .current_page").html("1");
	if($(".home_detail_client .totle_page").html()==0)
		$(".home_detail_client .totle_page").html("1");
	if($(".home_detail_brand_shop .totle_page").html()==0)
		$(".home_detail_brand_shop .totle_page").html("1");
	if($(".home_detail_brand_shop .current_page").html()==0)
		$(".home_detail_brand_shop .current_page").html("1");
}

function access(){
	$('#assess_your_own_brand #slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0
	});
	$("#assess_your_own_brand .slide_item1 .goNext").click(function(){
		var flag1 = 1;
		var arr = new Array();
		$(".slide_item1 .has_input").each(function(index,element){
			var flag2 = 0;
			var str = $(this).find('.list_id').html().trim()+':';
			$(this).find("input").each(function(i,e){
				if($(this).attr('checked')=='checked'){
					flag2 = 1;
					str += $(this).attr('class');
					return;
				}					
			})
			if(flag2==0){
				flag1 = 0;
				return;
			}
			arr.push(str);			
		})
		var result = arr.join(',');
		var json = JSON.stringify({"result":result});	
		if(flag1)
		{	
			$.ajax({
					type:'POST',
					url:'/en/home/assessment_result_post',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						$("#assess_your_own_brand a.next").trigger('click');	
					}
			})			
		}
		else{
			alert('Please choose the assessment, then you can get the score!');
		}		
	})
	$("#assess_your_own_brand .slide_item2 .goNext").click(function(){
		var flag1 = 1;
		var arr = new Array();
		$(".slide_item2 .has_input").each(function(index,element){
			var flag2 = 0;
			var str = $(this).find('.list_id').html().trim()+':';
			$(this).find("input").each(function(i,e){
				if($(this).attr('checked')=='checked'){
					flag2 = 1;
					str += $(this).attr('class');
					return;
				}					
			})
			if(flag2==0){
				flag1 = 0;
				return;
			}
			arr.push(str);			
		})
		var result = arr.join(',');
		var json = JSON.stringify({"result":result});	
		if(flag1)
		{	
			$.ajax({
					type:'POST',
					url:'/en/home/assessment_result_post',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						$("#assess_your_own_brand a.next").trigger('click');	
					}
			})			
		}
		else{
			alert('Please choose the assessment, then you can get the score!');
		}		
	})

	$("#assess_your_own_brand .get_score").click(function(){
		var arr = new Array();
		var score = 0;
		$(".has_input").each(function(index,element){
			var str = $(this).find('.list_id').html().trim()+':';
			$(this).find("input").each(function(i,e){
				if($(this).attr('checked')=='checked'){
				    score = score + parseInt($(this).attr('score'));
					str += $(this).attr('class');
					return;
				}					
			})
			arr.push(str);
		})
		var result = arr.join(',');	
		var name = $('.input_name').val().trim();
		var email = $('.input_email').val().trim();
		var company = $('.input_company').val().trim();	
		var json = JSON.stringify({"name":name,"company":company,"email":email,"result":result,"score":score});	
		if(name!==''&&company!==''&&checkEmail(email))
		{	
			$.ajax({
					type:'POST',
					url:'/en/home/assessment_post',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('Please enter the ture infomation, thanks!');
		}
	})
}

function index(){
	$('#content_slides .index_item11').load("./home");
	$('#content_slides .index_item12').load("./home/home_detail");
	$('#content_slides .index_item13').load("./home/assess_brand");
	$('#content_slides .index_item14').load("./posibility");
	$('#content_slides .index_item21').load("./about");
	$('#content_slides .index_item31').load("./how_we_work");
	$('#content_slides .index_item41').load("./cases");
	$('#content_slides .index_item51').load("./clients");
	$('#content_slides .index_item61').load("./press");
	$('#content_slides .index_item71').load("./home/brand_shop");
	$('#content_slides .index_item81').load("./home/come_soon");
	//$('#content_slides .index_item82').load("./home/come_soon");
	
	$('#content_slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif',
		paginationClass: 'index_pagination',
		play: 0
	});
	$("#backToHome").click(function(){
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive");
		scrollToTop(function(){
			$("#arrow").stop().animate({left:"40px"},100);			
			$("#content_slides > .index_pagination li:eq(0) a").trigger("click");
		});
	})
	$("#goto_home").click(function(){
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive");
		scrollToTop(function(){
			$("#arrow").stop().animate({left:"40px"},100);			
			$("#content_slides > .index_pagination li:eq(0) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$(".one_minute_tour").live('click',function(){
		scrollToTop(function(){
			$("#content_slides > .index_pagination li:eq(1) a").trigger("click");
		});
	})
	$(".check_health").live('click',function(){
		$(this).addClass("current");
		$(".brand_shop").removeClass("current");
		scrollToTop(function(){
			$("#content_slides > .index_pagination li:eq(2) a").trigger("click");
		});
	})
	$(".brand_shop").live('click',function(){
		$(this).addClass("current");
		$(".check_health").removeClass("current");
		scrollToTop(function(){
			$("#content_slides > .index_pagination li:eq(3) a").trigger("click");
		});
	})
	$("#goto_aboutus").click(function(){
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive");
		scrollToTop(function(){
			$("#arrow").stop().animate({left:"160px"},100);
			$("#content_slides > .index_pagination li:eq(4) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	
	$("#goto_howwework").click(function(){
		$("#arrow").stop().animate({left:"320px"},100);
		scrollToTop(function(){
			$("#goto_howwework").addClass("jFlowActive").siblings().removeClass("jFlowActive");
			$("#content_slides > .index_pagination li:eq(5) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$("#goto_case").click(function(){
		$("#arrow").stop().animate({left:"455px"},100);
		scrollToTop(function(){
			$("#goto_case").addClass("jFlowActive").siblings().removeClass("jFlowActive");
			$("#content_slides > .index_pagination li:eq(6) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$("#goto_client").click(function(){
		$("#arrow").stop().animate({left:"560px"},100);
		scrollToTop(function(){
			$("#goto_client").addClass("jFlowActive").siblings().removeClass("jFlowActive");
			$("#content_slides > .index_pagination li:eq(7) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$("#goto_press").click(function(){
		$("#arrow").stop().animate({left:"740px"},100);
		scrollToTop(function(){
			$("#goto_press").addClass("jFlowActive").siblings().removeClass("jFlowActive");
			$("#content_slides > .index_pagination li:eq(8) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$("#goto_posibilities").click(function(){
		$("#arrow").stop().animate({left:"885px"},100);
		scrollToTop(function(){
			$("#goto_posibilities").addClass("jFlowActive").siblings().removeClass("jFlowActive");
			$("#content_slides > .index_pagination li:eq(9) a").trigger("click");
		});
		$("#lineOfInteraction").removeClass("up_icon")
	})
	$("#come_soon .ch").click(function(){
		scrollToTop(function(){
			$("#content_slides > .index_pagination li:eq(10) a").trigger("click");
		});
	})
	$("#come_soon .ch-hk").click(function(){
		scrollToTop(function(){
			$("#content_slides > .index_pagination li:eq(11) a").trigger("click");
		});
	})
	$(".sitemap_table th:eq(1)").click(function(){
		$("#goto_home").trigger('click');
	})
	$(".sitemap_table th:eq(2)").click(function(){
		$("#goto_aboutus").trigger('click');
	})
	$(".sitemap_table th:eq(3)").click(function(){
		$("#goto_howwework").trigger('click');
	})
	$(".sitemap_table th:eq(4)").click(function(){
		$("#goto_case").trigger('click');
	})
	$(".sitemap_table th:eq(5)").click(function(){
		$("#goto_client").trigger('click');
	})
	$(".sitemap_table th:eq(6)").click(function(){
		$("#goto_press").trigger('click');
	})	
	$(".sitemap_table th:eq(7)").click(function(){
		$("#goto_posibilities").trigger('click');
	})
	$(".sitemap_table th:eq(8)").click(function(){
		$("#goto_contactus").trigger('click');
	})
	$(".sitemap_table .aboutus_1").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_1").trigger('click');
	})
	$(".sitemap_table .aboutus_2").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_2").trigger('click');
	})
	$(".sitemap_table .aboutus_3").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_3").trigger('click');
	})
	$(".sitemap_table .aboutus_6").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_5").trigger('click');
	})
	$(".sitemap_table .aboutus_7").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_6").trigger('click');
	})
	$(".sitemap_table .aboutus_8").click(function(){
		$("#goto_aboutus").trigger('click');
		$(".aboutus_nav_ul .about_7").trigger('click');
	})
	$(".sitemap_table .howwedo_1").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item1 .konwMore").trigger('click');
	})
	$(".sitemap_table .howwedo_2").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item2 .konwMore").trigger('click');
	})
	$(".sitemap_table .howwedo_3").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item3 .konwMore").trigger('click');
	})
	$(".sitemap_table .howwedo_4").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item4 .konwMore").trigger('click');
	})
	$(".sitemap_table .howwedo_5").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item5 .konwMore").trigger('click');
	})
	$(".sitemap_table .howwedo_6").click(function(){
		$("#how_we_do .title_click .title").trigger('click');
		$("#goto_howwework").trigger('click');
		$("#how_we_do .li_item6 .konwMore").trigger('click');
	})
	$(".sitemap_table .press_1").click(function(){
		$("#goto_press").trigger('click');
		$("#press .press_nav_ul .press_1").trigger('click');
	})
	$(".sitemap_table .press_2").click(function(){
		$("#goto_press").trigger('click');
		$("#press .press_nav_ul .press_2").trigger('click');
	})
	$(".sitemap_table .press_3").click(function(){
		$("#goto_press").trigger('click');
		$("#press .press_nav_ul .press_3").trigger('click');
	})
}

function posibility_video(){
	$('#posibility_video #slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif',
		effect: 'slide, fade',
		crossfade: true,
		slideSpeed: 350,
		fadeSpeed: 500
	});
	var selector = $("#posibility_video .posibility_video_ul");
	$("#posibility_video .left2 .next").click(function(){
		selector.scrollTop(selector.scrollTop()+90);
	})
	$("#posibility_video .left2 .prev").click(function(){
		selector.scrollTop(selector.scrollTop()-90);
	})
	stickNavigation();
}
function posibility_ecards(){
	$('#posibility_ecard #slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0
	});
	stickNavigation();
}
function meet_eggshellers_strategic(){
	$('.meet_eggshellers_strategic_3 #slides').slides({
		preload: true,
		preloadImage: 'images/loading_30.gif',
		play: 0
	});
	$('.meet_eggshellers_strategic_1 #slides').slides({
		preload: true,
		preloadImage: 'images/loading_30.gif',
		play: 0
	});
	stickNavigation();
	$(".meet_eggshellers .content_right li.center").click(function(){
		$(".eggshellers_pagination li:eq(1) a").trigger('click');
		$('#container').masonry({
			itemSelector: '.box'
		});
		$(".meet_eggshellers .content_right ul").find("li").removeClass("current");
		$(this).addClass("current");
	})
	$(".meet_eggshellers .content_right li..stragegic_team_1").click(function(){
		$(".eggshellers_pagination li:eq(0) a").trigger('click');
		$(".meet_eggshellers .content_right ul").find("li").removeClass("current");
		$(this).addClass("current");
	})
	
}
function brand_shop(){
	$('#brand_shop .brand_slide1 #slides').slides({
		preload: true,
		preloadImage: 'images/loading_30.gif',
		generatePagination: false,
		paginationClass: 'brandshop1_pagination',
		play: 0
	});
	$('#brand_shop .brand_slide2 #slides').slides({
		preload: true,
		preloadImage: 'images/loading_30.gif',
		play: 0
	});
	stickNavigation();
}
function how_we_do(){
	$('#how_we_do #slides').slides({
		preload: true,
		generatePagination: false,
		preloadImage: 'media/images/loading_30.gif',
		play: 0
	});
					
}
function cases(){
	$('#case #slides').slides({
		preload: true,
		preloadImage: 'media/images/loading_30.gif',
		play: 0,
		pause: 3000,
		hoverPause: true
	});
	$("#case #slides .slide_item img").live('click',function(event){
		$("#case .case_pop").fadeIn();
		$("#case .case_pop_content").fadeIn();
		event.stopPropagation();
	})
	$("#case .case_pop_content").click(function(event){
		event.stopPropagation();
	})
	var myScrollDown,myScrollUp;
	clearAllInterval = function() { 	
		clearInterval(myScrollDown); 
		clearInterval(myScrollUp); 
	}
	var cases = $(".case_detail_div");
	var search_box1 = $("#case .select2 .select_2_1");
	var search_box2 = $("#case .select2 .select_2_2");
	$("#case .case_pop_content .down-icon").mousedown(function(){
		myScrollDown = setInterval(function(){cases.scrollTop(cases.scrollTop()+15);},100);
	})
	$("#case .case_pop_content .down-icon").mouseup(clearAllInterval)
	$("#case .case_pop_content .down-icon").click(function(){
		cases.scrollTop(cases.scrollTop()+15);
	})
	$("#case .case_pop_content .up-icon").mousedown(function(){
		myScrollUp = setInterval(function(){ cases.scrollTop(cases.scrollTop()-15);},100);
	})
	$("#case .case_pop_content .up-icon").mouseup(clearAllInterval)
	$("#case .case_pop_content .up-icon").click(function(){
		cases.scrollTop(cases.scrollTop()-15);
	})
	
	$("#case .client_project .down-icon").mousedown(function(){
		myScrollDown = setInterval(function(){search_box1.scrollTop(search_box1.scrollTop()+15);},100);
	})
	$("#case .client_project .down-icon").mouseup(clearAllInterval)
	$("#case .client_project .down-icon").click(function(){
		search_box1.scrollTop(search_box1.scrollTop()+15);
	})
	$("#case .client_project .up-icon").mousedown(function(){
		myScrollUp = setInterval(function(){ search_box1.scrollTop(search_box1.scrollTop()-15);},100);
	})
	$("#case .client_project .up-icon").mouseup(clearAllInterval)
	$("#case .client_project .up-icon").click(function(){
		search_box1.scrollTop(search_box1.scrollTop()-15);
	})
	
	$("#case .experimental_project .down-icon").mousedown(function(){
		myScrollDown = setInterval(function(){search_box2.scrollTop(search_box2.scrollTop()+15);},100);
	})
	$("#case .experimental_project .down-icon").mouseup(clearAllInterval)
	$("#case .experimental_project .down-icon").click(function(){
		search_box2.scrollTop(search_box2.scrollTop()+15);
	})
	$("#case .experimental_project .up-icon").mousedown(function(){
		myScrollUp = setInterval(function(){ search_box2.scrollTop(search_box2.scrollTop()-15);},100);
	})
	$("#case .experimental_project .up-icon").mouseup(clearAllInterval)
	$("#case .experimental_project .up-icon").click(function(){
		search_box2.scrollTop(search_box2.scrollTop()-15);
	})
	
	
	/*$("#case .checkbox li:not(cur)").live('click',function(){
		$(this).addClass("cur");
	})
	$("#case .checkbox li.cur").live('click',function(){
		$(this).removeClass("cur");
	})*/
}
function press(){
			$('.press_newspaper #slides').slides({
				preload: true,
				generatePagination: false,
				preloadImage: 'media/images/loading_30.gif',
				animationStart: function(current){
					$('.press_newspaper .caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.press_newspaper .caption').animate({
						bottom:0
					},200);
					//$("#press .content_right li:eq("+(current-1)+")").addClass("current").siblings().removeClass("current");
				},
				slidesLoaded: function() {
					$('.press_newspaper .caption').animate({
						bottom:0
					},200);
				}
			});
			$('.press_events #slides').slides({
				preload: true,
				generatePagination: false,
				preloadImage: 'media/images/loading_30.gif',
				play: 0,
				pause: 0,
				hoverPause: true,
				animationStart: function(current){
					$('.press_events .caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.press_events .caption').animate({
						bottom:0
					},200);
					//$("#press .content_right li:eq("+(current-1)+")").addClass("current").siblings().removeClass("current");
				},
				slidesLoaded: function() {
					$('.press_events .caption').animate({
						bottom:0
					},200);
				}
			});
			$('.press_magazine #slides').slides({
				preload: true,
				generatePagination: false,
				preloadImage: 'media/images/loading_30.gif',
				play: 0,
				pause: 0,
				hoverPause: true,
				animationStart: function(current){
					$('.press_magazine .caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.press_magazine .caption').animate({
						bottom:0
					},200);
					//$("#press .content_right li:eq("+(current-1)+")").addClass("current").siblings().removeClass("current");
				},
				slidesLoaded: function() {
					$('.press_magazine .caption').animate({
						bottom:0
					},200);
				}
			});
			$('.press_video #slides').slides({
				preload: true,
				preloadImage: 'media/images/loading_30.gif',
				play: 0,
				pause: 0,
				hoverPause: true,
				animationStart: function(current){
					$('.press_video .caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.press_video .caption').animate({
						bottom:0
					},200);
					//$("#press .content_right li:eq("+(current-1)+")").addClass("current").siblings().removeClass("current");
				},
				slidesLoaded: function() {
					$('.press_video .caption').animate({
						bottom:0
					},200);
				}
			});
	/*$("#press .content_right li:not('current')").live('click',function(){
		$(this).addClass("current").siblings().removeClass("current");
		var index = $(this).index();
		$("#press .pagination li:eq("+index+") a").trigger("click");
	})*/
	$("#press .content_right li:not('current')").live('click',function(){
		$(this).addClass("current").siblings().removeClass("current");
		var index = $(this).index();
		$(".press_content .press_item:eq("+index+")").fadeIn().siblings().hide();
	})
	
}
// Scroll to Top of the window, animated
function scrollToTop(f) {
	var time;
	if($(window).scrollTop()==0){
		time = 0;
	}
	else{ 
		time= 200;
	}
   $('html,body').animate({scrollTop: 0},time,f);
}

//Everything related to the Arrow
function arrowSlider(targetSlide) {
	var current = targetSlide;
    var x_offset = 0;
    var offsets = new Array(50, 180, 335, 480);
    if(current >= 1 && current <= 10) {
      x_offset = offsets[current - 1];
    }
    $('#arrow').animate({left: x_offset}, 200);
}

//calculate Whitespace on Top of Content and right-value for stripes
function calculateWhitespace(){

	var browserHeight = $(window).height();
	var browserWidth = $(window).width();
	if(browserWidth<1420){
		browserWidth = 1420;
	}
	$(".slides_container div.index_item").css({height:browserHeight-90,width:browserWidth});
	$("#content_slides > .slides_container").css({height:browserHeight-90,width:browserWidth});
	var whiteSpace = browserHeight - 690;
	if (whiteSpace > 0) {
		whiteSpace = whiteSpace / 2;
		SCROLLVALUE = whiteSpace;
		$('.main_height').css('padding-top', whiteSpace+'px');
		$('.main_height').css('padding-bottom', whiteSpace+'px');
	}

	var whiteSpace = browserHeight - 1048;
	if (whiteSpace > 0) {
		SCROLLVALUE = whiteSpace;
		$('.contactus_recruitment').css('padding-bottom', whiteSpace+'px');
		$('.facebook_team').css('padding-bottom', whiteSpace+'px');
	}
}


// Set the current (target)-Slide "active"
// and slide the stripes
// aaaand set breadcrumb
// aaaaaaaand active separator
function setLinkActive(targetSlide) {
	var current = targetSlide;

	$('#navigation li').removeClass('jFlowActive jFlowActiveGreen').css( {backgroundPosition: "0 0"} );
	$("#lineOfInteraction").removeClass('jFlowActive').css( {backgroundPosition: "0 0"} );
	if (current > 7) {
		$('#goto_'+current).addClass('jFlowActiveGreen').css( {backgroundPosition: "0 -50px"} );
	}
	else {
		//blue stripes
		$('#goto_'+current).addClass('jFlowActive').css( {backgroundPosition: "0 -50px"} );
	}
	//slide Stripes
	$('#stripes').animate({marginTop:-120}, 100);
	$('#stripes').delay(300).animate({marginTop:0}, 100);

	//set Breadcrumb
	if (current < 7) {
		$('#newToThisBreadcrumb').removeClass('invisible');
		$('#newToThisBreadcrumb').removeClass('noDisplay');
		$('#serviceDesignerBreadcrumb').addClass('invisible');
		$('#separator_arrows').attr('src','img/separator_left_active.jpg');
	}
  else if (current > 7){
	  $('#newToThisBreadcrumb').addClass('invisible');
	  $('#newToThisBreadcrumb').addClass('noDisplay');
		$('#serviceDesignerBreadcrumb').removeClass('invisible');
		$('#separator_arrows').attr('src','img/separator_right_active.jpg');
	}
  else if (current == 7) {
		$('#newToThisBreadcrumb').addClass('invisible');
	  $('#serviceDesignerBreadcrumb').addClass('invisible');
	  $('#separator_arrows').attr('src','img/lower_seperator.jpg');
	}
}

// Stick navigation to the top when you scroll down
function stickNavigation() {
  var n_offset = $("#navigation").offset().top;

  /*$(window).scroll(function(){
    var w_scroll = $(window).scrollTop();

    if(w_scroll > n_offset) {
      $("#navigation").addClass("sticky");
      $('.interaction').css('padding-top', '78px');
    }
    else {
      $("#navigation").removeClass("sticky");
      $('.interaction').css('padding-top', '0px');
     }
  });
*/
  $(window).scroll(function(){
    var w_scroll = $(window).scrollTop();

    if(w_scroll >= n_offset) {
      $("#lineOfInteraction").addClass("up_icon")
      //$('.interaction').css('padding-top', '78px');
    }
    else {
      $("#lineOfInteraction").removeClass("up_icon")
     // $('.interaction').css('padding-top', '0px');
     }
  });
}


/* Create the tooltips for the authors */
function authorTooltip(author) {
  var personName = author.attr('title');
  var jobDescription = author.attr('alt');

  var offSet = author.offset();
  var leftInt = offSet.left;
  var topInt = offSet.top;

  var tooltip = $('#tooltip');

  var tooltip_markup = '';
  tooltip_markup = '<div class="name">' +
                      personName +
                   '</div><div class="jobDescription">' +
                      jobDescription +
                    '</div>';

  tooltip.html(tooltip_markup);
	tooltip.css({ left: leftInt - 60,
                top: topInt + 40,
                display: 'block',
                cursor: 'pointer'
  });
}

/* Show or hide tooltip when needed */
function tooltipVisibility(){
  $(".author img").hover(
  function(){
    authorTooltip($(this));
  },
  function(){
    $("#tooltip").hide();
  });
  $("#tooltip").hover(
  function(){
    $(this).show();
  },
  function(){
    $(this).hide();
  });
}

/* Set up the slide to display */
function showSlide(slider,slideNumber) {
  arrowSlider(slideNumber);
  setLinkActive(slideNumber);
  scrollToTop();
  slider.goToSlide(slideNumber);
}

function slideController(slider){
  $("#navigation li.nav_slider").click(function(){
    var li_id = $(this).attr("id");
    // id of element is #goto_x

    var slide_id = li_id.split("_")[1];
    showSlide(slider, slide_id);
  });

  $("#newToThis").click(function(){
    showSlide(slider, 1);
  });

  $("#knowAbout").click(function(){
    showSlide(slider, 8);
  });

  $("#newToThisBreadcrumb, #serviceDesignerBreadcrumb").click(function(){
    showSlide(slider, 7);
  });

  
}

function checkEmail(inputvalue) {
  var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
  if(pattern.test(inputvalue)) {
		return true;
  }
  else {
		return false;
  }
}

function preloader(offset) {
  $("#teaser-loader").css({"margin-top": offset});
  $(window).load(function(){
    $("#preloader").fadeOut(300, function(){
      $("#preloader").remove();
    });
  });
}


