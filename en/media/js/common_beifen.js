//On Page LOAD ###################################

var x = 168;
var window_size = $(window).height();
if (window_size > 600) {
    x = x + Math.ceil(window_size - 600)/2;
}
x = x + "px";


$(function(){
	//navInit();
	calculateWhitespace();
	stickNavigation();
	/*var sudoSlider = $(".top_content").sudoSlider(
	{
		prevNext: false,
		controlsShow: false,
		startSlide: 1,
		moveCount: 1
	});
	var swipeOptions=
	{
		swipe: swipe,
		threshold: 50
	}
	$(".slide").swipe( swipeOptions );
	
	function swipe(event, direction)
	{
		if (direction == "left") {
			sudoSlider.goToSlide("next");
		}
		else if (direction == "right") {
			sudoSlider.goToSlide("prev");
		}
		var slideNumber = sudoSlider.getValue('currentSlide');
		arrowSlider(slideNumber);
		setLinkActive(slideNumber);
		scrollToTop();
		$("#tooltip").hide();
	}
	
	slideController(sudoSlider);*/
	$(window).resize(function() {
		calculateWhitespace();
		stickNavigation();
		navInit();
	});
	tooltipVisibility();
	/*$(".authors_list .author").colorbox({
		inline: true,
		transition: "none",
	});*/
	var scrollTop = 0;
	var content = $("#facebook");
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
	
	//$(".nav_item:not('.jFlowActive')").css( {backgroundPosition: "0 0"} ).live('mouseover',function(){
//		$(this).stop().animate({backgroundPosition:"(0 -50px)"},300);
//	}).live('mouseout',function(){
//		$(this).stop().animate({backgroundPosition:"(0 0)"},300);
//	});
	$("#lineOfInteraction").click(function(){
		 var x = $(this).offset().top; // 100 provides buffer in viewport
		 $('html,body').animate({scrollTop: x}, 500);
		 $(this).addClass("jFlowActive").siblings().removeClass("jFlowActive").css( {backgroundPosition: "0 0px"} );
	  });
	validateForm();
/*	$('#facebook').fbWall({ id:'205466809481126',accessToken:'206158599425293|27d50c0c31590498f5d8b655.1-100000886472972|pCl4MNevfLHTXvu2nR-jugDCtTE',showComments:true});
*/
	
	/*var gotoWidth = $("#slider #about1").width()+50;
	var curIndex = 1;
	$("#about1").html($(".slider1").html());
	$("#about2").html($(".slider2").html());
	$("li#goto_1").live('click',function(){
		var thisIndex = parseInt($(this).attr("id").substring(5,6));
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive").css( {backgroundPosition: "0 0"} );
		$("#arrow").stop().animate({left:"50px"},800);
		scrollToTop();	
		$("#slider").css({"margin-left":-gotoWidth});
		$("#about1").html($(".slider1").html());
		$("#slider").stop().animate({marginLeft:0},800);
		curIndex = 1;
	})
	$("li#goto_7").live('click',function(){
		var thisIndex = parseInt($(this).attr("id").substring(5,6));		
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive").css( {backgroundPosition: "0 0"} );
		$("#arrow").stop().animate({left:"180px"},800);
		scrollToTop();
		if(thisIndex > curIndex){
			$("#slider").css({"margin-left":"0px"});
			$("#about1").html($(".slider"+curIndex).html());
			$("#about2").html($(".slider7").html());
			$("#slider").stop().animate({marginLeft:-gotoWidth},800);
		}
		else{
			$("#slider").css({"margin-left":-gotoWidth});
			$("#about2").html($(".slider"+curIndex).html());
			$("#about1").html($(".slider7").html());
			$("#slider").stop().animate({marginLeft:0},800);
		}
		curIndex = 7;
	})
	$("li#goto_8").live('click',function(){
		var thisIndex = parseInt($(this).attr("id").substring(5,6));		
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive").css( {backgroundPosition: "0 0"} );
		$("#arrow").stop().animate({left:"335px"},800);
		scrollToTop();
		if(thisIndex > curIndex){
			$("#slider").css({"margin-left":"0px"});
			$("#about1").html($(".slider"+curIndex).html());
			$("#about2").html($(".slider8").html());
			$("#slider").stop().animate({marginLeft:-gotoWidth},800);
		}
		else{
			$("#slider").css({"margin-left":-gotoWidth});
			$("#about2").html($(".slider"+curIndex).html());
			$("#about1").html($(".slider8").html());
			$("#slider").stop().animate({marginLeft:0},800);
		}
		curIndex = 8;
	})
	$("li#goto_9").live('click',function(){
		var thisIndex = parseInt($(this).attr("id").substring(5,6));
		$("#slider").css({"margin-left":"0px"});
		$(this).addClass("jFlowActive").siblings().removeClass("jFlowActive").css( {backgroundPosition: "0 0"} );
		$("#arrow").stop().animate({left:"480px"},800);
		scrollToTop();
		if(thisIndex > curIndex){
			$("#slider").css({"margin-left":"0px"});
			$("#about1").html($(".slider"+curIndex).html());
			$("#about2").html($(".slider9").html());
			$("#slider").stop().animate({marginLeft:-gotoWidth},800);
		}
		else{
			$("#slider").css({"margin-left":-gotoWidth});
			$("#about2").html($(".slider"+curIndex).html());
			$("#about1").html($(".slider9").html());
			$("#slider").stop().animate({marginLeft:0},800);
		}
		curIndex = 9;
	})
	var homeNav;//获取home页选择导航的flag
	$("#goto_5").live('click',function(){
		curIndex = 5;
		homeNav = 3;
		$("#slider").css({"margin-left":"0px"});
		scrollToTop();
		$("#slider").css({"margin-left":-gotoWidth});
		$("#about1").html($(".slider1").html());
		$("#about2").html($(".slider5").html());
		$("#slider").css({"margin-left":0});
		$("#slider").stop().animate({marginLeft:-gotoWidth},800);
	})

	$(".press_nav li").live('click',function(){
		$(this).addClass("current").siblings().removeClass("current");
	})
	$("#home .home_nav").live('mouseover',function(){
		$(this).addClass("cur").siblings().removeClass("cur");
	})
	
	$(".goback1").live("click",function(){
		$("li#goto_1").trigger("click");
		$(".home_nav"+homeNav).addClass("cur").siblings().removeClass("cur");
	})
*/	
	//$("#pikame").PikaChoose({carousel:true});
});

function navInit(){
	var window_width = $(window).width();
	if (window_width < 1420) {
		window_width = 1420;
	}
	$("#navigation ul").css("width",window_width-20);
	$(".container_24").css("width",window_width);
	$(".top_content").css("width",window_width-50);
	$("#slider > li").css("width",window_width-100);
	$(".left_disclaimer").css("width",window_width-400);
	$(".pressItem1").css("width",window_width-610);
	$(".pressDetail").css("width",window_width-610);
}
// Scroll to Top of the window, animated
function scrollToTop() {
  $('html,body').animate({scrollTop: 0}, 700);
}

//Everything related to the Arrow
function arrowSlider(targetSlide) {
	var current = targetSlide;
  var x_offset = 0;
  var offsets = new Array(50, 180, 335, 480);
  if(current >= 1 && current <= 10) {
    x_offset = offsets[current - 1];
  }
  $('#arrow').animate({left: x_offset}, 500);
}

//calculate Whitespace on Top of Content and right-value for stripes
function calculateWhitespace(){

	// desired height of seen navigation = 165 px
	// height of main container = 470 px

	var browserHeight = $(window).height();

	var whiteSpace = browserHeight - 678;
	if (whiteSpace > 0) {
		whiteSpace = whiteSpace / 2;
		SCROLLVALUE = whiteSpace;
		$('#content').css('padding-top', whiteSpace+'px');
		$('#content').css('padding-bottom', whiteSpace+'px');
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
	$('#stripes').animate({marginTop:-120}, 300);
	$('#stripes').delay(300).animate({marginTop:0}, 300);

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

  $(window).scroll(function(){
    var w_scroll = $(window).scrollTop();

    if(w_scroll >= n_offset) {
      $("#navigation").addClass("sticky");
      $('.interaction').css('padding-top', '50px');
    }
    else {
      $("#navigation").removeClass("sticky");
      $('.interaction').css('padding-top', '0px');
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


function validateForm() {
  var emailVal = $('#email').val();
  $('.error').hide();
  $('.message').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('#email').focus(function(){
    if ($('#email').val() == emailVal) {
      $('#email').val('');
    }
  });
  $('#email').blur(function(){
    if ($('#email').val() == '') {
    	$('#email').val(emailVal);
    };
  });

  $(".button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();

		var email = $("input#email").val();
		if (email == emailVal) {
      $(".error").show();
      $("input#email").focus();
      return false;
    }
    if (checkEmail(email) == false){
      $(".error").show();
      $("input#email").focus();
      return false;
    }

    var dataString = 'email=' + email;
    $.ajax({
      type: "POST",
      url: "http://www.tisdt.com/bin/email.php",
      data: dataString,
      success: function() {
        $('.message').html("Thank you! We will get in touch as soon as the app is available.").show();
      },
      error: function() {
        $('.message').html("Something didn't work out as meant to. Please try again.");
      }
    });
    return false;
	});
}


function preloader(offset) {
  $("#teaser-loader").css({"margin-top": offset});
  $(window).load(function(){
    $("#preloader").fadeOut(300, function(){
      $("#preloader").remove();
    });
  });
}


