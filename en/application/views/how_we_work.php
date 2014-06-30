    
    <script type="text/javascript">
    	$(document).ready(function(){
			how_we_do();
            var cases = JSON.parse('<?php echo addslashes(json_encode($case)); ?>');
            var clicktoclose = '<?=$howwedo_10?>';
            var clickmore = '<?=$howwedo_9?>';
            var how_audit = JSON.parse('<?php echo addslashes(json_encode($howwedo_Audit)); ?>');
            var how_strategy = JSON.parse('<?php echo addslashes(json_encode($howwedo_Strategic)); ?>');
            var how_identity = JSON.parse('<?php echo addslashes(json_encode($howwedo_Identity)); ?>');
            var how_management = JSON.parse('<?php echo addslashes(json_encode($howwedo_Management)); ?>');
            var how_experience = JSON.parse('<?php echo addslashes(json_encode($howwedo_Experience)); ?>');
            var how_retain = JSON.parse('<?php echo addslashes(json_encode($howwedo_Retain)); ?>');
            var case_audit = JSON.parse('<?php echo addslashes(json_encode($case_Audit)); ?>');
            var case_strategy = JSON.parse('<?php echo addslashes(json_encode($case_Strategic)); ?>');
            var case_identity = JSON.parse('<?php echo addslashes(json_encode($case_Identity)); ?>');
            var case_management = JSON.parse('<?php echo addslashes(json_encode($case_Management)); ?>');
            var case_experience = JSON.parse('<?php echo addslashes(json_encode($case_Experience)); ?>');
            var case_retain = JSON.parse('<?php echo addslashes(json_encode($case_Retain)); ?>');

      $("#how_we_do .content_center .title_click").click(function(){
      $("#how_we_do .li_item1_hover").trigger('click');
      $("#how_we_do .li_item2_hover").trigger('click');
      $("#how_we_do .li_item3_hover").trigger('click');
      $("#how_we_do .li_item4_hover").trigger('click');
      $("#how_we_do .li_item5_hover").trigger('click');
      $("#how_we_do .li_item6_hover").trigger('click');
      })
	  $("#how_we_do .how_we_do_cover").click(function(){
      $("#how_we_do .li_item1_hover").trigger('click');
      $("#how_we_do .li_item2_hover").trigger('click');
      $("#how_we_do .li_item3_hover").trigger('click');
      $("#how_we_do .li_item4_hover").trigger('click');
      $("#how_we_do .li_item5_hover").trigger('click');
      $("#how_we_do .li_item6_hover").trigger('click');
      })

      $("#how_we_do .li_item1").live("click",function(){
      $("#how_we_do .li_item2").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","223px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","995px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_19)))?>");
      $("#how_we_do li.Audit").removeClass("hide").parent().find('li:not(.Audit)').addClass("hide");
      $("#how_we_do .slide_audit").show().siblings().hide();
      $(this).addClass("li_item1_hover");
      })
      $("#how_we_do .li_item1_hover").live("click",function(){
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item2").stop().animate({marginLeft:"0px"},400);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item1_hover");
      })
      $("#how_we_do .li_item2").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"-255px"},500);
      $("#how_we_do .li_item3").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","440px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","1212px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_20)))?>");
      $("#how_we_do .Strategic").removeClass("hide").parent().find('li:not(.Strategic)').addClass("hide");
      $("#how_we_do .slide_strategic").show().siblings().hide();
      $(this).addClass("li_item2_hover");
      })
      $("#how_we_do .li_item2_hover").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"0px"},500);
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item3").stop().animate({marginLeft:"0px"},500);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item2_hover");
      })
      $("#how_we_do .li_item3").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"-479px"},500);
      $("#how_we_do .li_item4").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","674px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","1446px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_51)))?>");
      $("#how_we_do .Identity").removeClass("hide").parent().find('li:not(.Identity)').addClass("hide");
      $("#how_we_do .slide_Indetity").show().siblings().hide();
      $(this).addClass("li_item3_hover");
      })
      $("#how_we_do .li_item3_hover").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"0px"},500);
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item4").stop().animate({marginLeft:"0px"},500);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item3_hover");
      })
      $("#how_we_do .li_item4").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"-713px"},500);
      $("#how_we_do .li_item5").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","913px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","1685px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_52)))?>");
      $("#how_we_do .Management").removeClass("hide").parent().find('li:not(.Management)').addClass("hide");
      $("#how_we_do .slide_management").show().siblings().hide();
      $(this).addClass("li_item4_hover");
      })
      $("#how_we_do .li_item4_hover").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"0px"},500);
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item5").stop().animate({marginLeft:"0px"},500);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item4_hover");
      })
      $("#how_we_do .li_item5").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"-515px"},500);
      $("#how_we_do .li_item5").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","913px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","313px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_55)))?>");
      $("#how_we_do .Experience").removeClass("hide").parent().find('li:not(.Experience)').addClass("hide");
      $("#how_we_do .slide_experience").show().siblings().hide();
      $(this).addClass("li_item5_hover");
      })
      $("#how_we_do .li_item5_hover").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"0px"},500);
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item5").stop().animate({marginLeft:"0px"},600);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item5_hover");
      })
      $("#how_we_do .li_item6").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"-760px"},500);
      $("#how_we_do .li_item6").stop().animate({marginLeft:"760px"},500);
      $("#how_we_do .ul_item li.how_pop").fadeIn().css("left","1146px");
      $(this).find(".konwMore").html(clicktoclose).addClass("close_pop").removeClass("konwMore");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeIn().css("left","546px");
      $("#how_we_do .howwedo_description").html("<?=addslashes(implode(explode("\n",$howwedo_56)))?>");
      $("#how_we_do .Retain").removeClass("hide").parent().find('li:not(.Retain)').addClass("hide");
      $("#how_we_do .slide_retain").show().siblings().hide();
      $(this).addClass("li_item6_hover");
      })
      $("#how_we_do .li_item6_hover").live("click",function(){
      $("#how_we_do .ul_item").stop().animate({marginLeft:"0px"},500);
      $("#how_we_do .ul_item li.how_pop").hide();
      $("#how_we_do .li_item6").stop().animate({marginLeft:"0px"},600);
      $(this).find(".close_pop").html(clickmore).addClass("konwMore").removeClass("close_pop");
      $("#how_we_do .ul_item li.how_we_do_cover").fadeOut();
      $('#how_we_do .how_pop .how_pop_video').hide().find("div").html('');
      $(this).removeClass("li_item6_hover");
      })
      $("#how_we_do .how_pop .Audit").each(function(index,element){
		  $(this).click(function(){
			if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_audit[index].image+"' width='640' height='320' />");
			else
		  		$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_audit[index].video);
		  })
      })
      $("#how_we_do .how_pop .Strategic").each(function(index,element){
		  $(this).click(function(){
			if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_strategy[index].image+"' width='640' height='320' />");
			else
		  		$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_strategy[index].video);
		  })
      })
      $("#how_we_do .how_pop .Identity").each(function(index,element){
		  $(this).click(function(){
			if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_identity[index].image+"' width='640' height='320' />");
			else
		  		$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_identity[index].video);
		  })
      })
      $("#how_we_do .how_pop .Management").each(function(index,element){
		  $(this).click(function(){
			 if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_management[index].image+"' width='640' height='320' />");
			else
		 	 	$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_management[index].video);
		  })
      })
      $("#how_we_do .how_pop .Experience").each(function(index,element){
		  $(this).click(function(){
			  if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_experience[index].image+"' width='640' height='320' />");
			  else
		  		$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_experience[index].video);
		  })
      })
      $("#how_we_do .how_pop .Retain").each(function(index,element){
		  $(this).click(function(){
			  if(how_audit[index].video=='')
				$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html("<img src='<?php echo ROOT_PATH; ?>upload/"+how_retain[index].image+"' width='640' height='320' />");
			  else
		  		$('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(how_retain[index].video);
		  })
      })
	  $("#how_we_do li.open_video").each(function(index,element){
		  $(this).click(function(){
				$("#goto_case").trigger('click');
				var id = $(this).attr("data");
				$("#case .image_"+id).trigger('click');
		  })
      })
      /*$("#how_we_do .slide_audit .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_audit[index].video);
		  })
      })
      $("#how_we_do .slide_strategic .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_strategy[index].video);
		  })
      })
      $("#how_we_do .slide_Indetity .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_identity[index].video);
		  })
      })
      $("#how_we_do .slide_management .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_management[index].video);
		  })
      })
      $("#how_we_do .slide_experience .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_experience[index].video);
		  })
      })
      $("#how_we_do .slide_retain .open_video").each(function(index,element){
		  $(this).click(function(){
		  $('#how_we_do .how_pop .how_pop_video').fadeIn().find("div").html(case_retain[index].video);
		  })
      })*/
      $("#how_we_do .how_pop .close_video").click(function(){
      $('#how_we_do .how_pop .how_pop_video').fadeOut().find("div").html('');
      })
	  	var how_scroll = $(".scroll-div");
		var myScrollDown,myScrollUp;
		clearAllInterval = function() { 	
			clearInterval(myScrollDown); 
			clearInterval(myScrollUp); 
		}
		$(".how_pop_content .icon-down").mousedown(function(){
			myScrollDown = setInterval(function(){how_scroll.scrollTop(how_scroll.scrollTop()+15);},100);
		})
		$(".how_pop_content .icon-down").mouseup(clearAllInterval)
		$(".how_pop_content .icon-down").click(function(){
			how_scroll.scrollTop(how_scroll.scrollTop()+15);
		})
		$(".how_pop_content .icon-up").mousedown(function(){
			myScrollUp = setInterval(function(){ how_scroll.scrollTop(how_scroll.scrollTop()-15);},100);
		})
		$(".how_pop_content .icon-up").mouseup(clearAllInterval)
		$(".how_pop_content .icon-up").click(function(){
			how_scroll.scrollTop(how_scroll.scrollTop()-15);
		})
		$("#how_we_do .ul_item li:not('.how_pop')").live("click",function(){
      		$(".scroll-div").scrollTop(0);
      	})
		$("#navigation > ul").click(function(){
			  $("#how_we_do .li_item1_hover").trigger('click');
			  $("#how_we_do .li_item2_hover").trigger('click');
			  $("#how_we_do .li_item3_hover").trigger('click');
			  $("#how_we_do .li_item4_hover").trigger('click');
			  $("#how_we_do .li_item5_hover").trigger('click');
			  $("#how_we_do .li_item6_hover").trigger('click');
		})
      })
    </script>
    
    <div class="body_how">
    	<div id="content">
            <div class="wrapper_content">
                <div class="slider1">
                    <div class="slide-content">
                        <div id="how_we_do">
                            <div class="main_height">
                                <div class="content_center">
                                    <div class="title_click">
                                      <div class="title">
                                      </div>
                                      <div class="font24 strong mt40">
                                        <?=$howwedo_7?>
                                      </div>
                                    </div>
                                    <ul class="ul_item mt30 clearfix">
                                        <li class="li_item1">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_1?></p>
                                                            <p>-<?=$howwedo_11?></p>
                                                            <p>-<?=$howwedo_12?></p>
                                                            <p>-<?=$howwedo_13?></p>
                                                            <p>-<?=$howwedo_14?></p>
                                                            <p>-<?=$howwedo_15?></p>
                                                            <p>-<?=$howwedo_16?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_8?></p>
                                                            <p><?=$howwedo_17?></p>
                                                            <p><?=$howwedo_18?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">1</span>
                                        </li>
                                        <li class="li_item2">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_2?></p>
                                                            <p>-<?=$howwedo_21?></p>
                                                            <p>-<?=$howwedo_22?></p>
                                                            <p>-<?=$howwedo_23?></p>
                                                            <p>-<?=$howwedo_24?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_8?></p>
                                                            <p><?=$howwedo_25?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">2</span>
                                        </li>
                                        <li class="li_item3">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_3?></p>
                                                            <p>-<?=$howwedo_28?></p>
                                                            <p>-<?=$howwedo_29?></p>
                                                            <p>-<?=$howwedo_30?></p>
                                                            <p>-<?=$howwedo_31?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_8?></p>
                                                            <p><?=$howwedo_32?></p>
                                                            <p><?=$howwedo_33?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">3</span>
                                        </li>
                                        <li class="li_item4">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_4?></p>
                                                            <p>-<?=$howwedo_34?></p>
                                                            <p>-<?=$howwedo_35?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_8?></p>
                                                            <p><?=$howwedo_36?></p>
                                                            <p><?=$howwedo_37?></p>
                                                            <p><?=$howwedo_38?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">4</span>
                                        </li>
                                        <li class="li_item5">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_5?></p>
                                                            <p>-<?=$howwedo_39?></p>
                                                            <p>-<?=$howwedo_40?></p>
                                                            <p>-<?=$howwedo_41?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_8?></p>
                                                            <p><?=$howwedo_42?></p>
                                                            <p><?=$howwedo_43?></p>
                                                            <p><?=$howwedo_44?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">5</span>
                                        </li>
                                        <li class="li_item6">
                                            <table>
                                                <tr class="tr1">
                                                    <td>
                                                        <div class="table_top">
                                                            <p class="table_title"><?=$howwedo_6?></p>
                                                            <p>-<?=$howwedo_45?></p>
                                                            <p>-<?=$howwedo_46?></p>
                                                            <p>-<?=$howwedo_47?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr2">
                                                    <td>
                                                        <div class="table_center">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr3">
                                                    <td>
                                                        <div class="table_bottom">
                                                            <p class="table_title"><?=$howwedo_9?></p>
                                                            <p><?=$howwedo_48?></p>
                                                            <p><?=$howwedo_49?></p>
                                                            <p><?=$howwedo_50?></p>
                                                            <p class="konwMore"><?=$howwedo_9?></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <span class="number_big">6</span>
                                        </li>
                                        <li class="how_pop">
                                            <div style="width:710px; height:357px; background-color:#000; position:absolute; top:0; left:40px; display:none; z-index:1000;" class="how_pop_video">
                                                <div class="video-code" style="width:640px;height:320px; margin:18px 35px;"></div>
                                                <span class="close_video"></span>
                                            </div>
                                            <div class="left how_pop_left"></div>
                                            <div class="left how_pop_content">
                                                <div class="scroll-div" style="height:110px; overflow:hidden; width:600px;">
                                                    <div class="gray font16 howwedo_description">
                                                        <?=$howwedo_19?>
                                                    </div>
                                                </div>
                                                <span class="icon-up"></span>
                                                <span class="icon-down"></span>
                                                <style>
                                                	.how_pop_content .icon-up{
														background:url(<?php echo MEDIA_PATH; ?>images/65.gif) no-repeat 0 0;
														display:inline-block;
														width:15px;
														height:15px;
														top:25px;
														right:50px;
														position:absolute;
													}
													.how_pop_content .icon-down{
														background:url(<?php echo MEDIA_PATH; ?>images/65.gif) no-repeat 0 -42px;
														display:inline-block;
														width:15px;
														height:15px;
														top:50px;
														right:50px;
														position:absolute;
													}
                                                </style>
                                                <div class="watch_video family_bold gray font14 mt5 fontItalic"><?=$howwedo_53?></div>
                                                <ul class="li_video mt5 clearfix">
                                                    <?foreach ($howwedo_Audit as $key => $value):?>
                                                        <li class="Audit hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                    <?foreach ($howwedo_Strategic as $key => $value):?>
                                                        <li class="Strategic hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                    <?foreach ($howwedo_Identity as $key => $value):?>
                                                        <li class="Identity hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                    <?foreach ($howwedo_Management as $key => $value):?>
                                                        <li class="Management hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                    <?foreach ($howwedo_Experience as $key => $value):?>
                                                        <li class="Experience hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                    <?foreach ($howwedo_Retain as $key => $value):?>
                                                        <li class="Retain hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></li>
                                                    <? endforeach; ?>
                                                </ul>
                                                <div class="family_bold black font18 mt15"><?=$howwedo_54?></div>
                                                <div>
                                                <div id="slides" class="mt10 slide_audit hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Audit)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Audit)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Audit[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Audit[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Audit[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                <div id="slides" class="mt10 slide_strategic hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Strategic)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Strategic)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Strategic[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Strategic[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Strategic[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                <div id="slides" class="mt10 slide_Indetity hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Identity)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Identity)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Identity[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Identity[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Identity[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                <div id="slides" class="mt10 slide_management hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Management)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Management)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Management[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Management[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Management[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                <div id="slides" class="mt10 slide_experience hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Experience)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Experience)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Experience[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Experience[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Experience[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                <div id="slides" class="mt10 slide_retain hide">
                                                    <div class="slides_container">
                                                        <?php for($i = 0;$i<ceil(count($case_Retain)/3);$i++):?>                                                
                                                            <div class="slide_item hide">
                                                                <ul>
                                                                <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($case_Retain)); $j ++):?>
                                                                    <li class="font18 black open_video" data="<?php echo $case_Retain[$j]['id'];?>">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$case_Retain[$j]['image']; ?>" width="70" height="70" style="float:left;margin-right:10px;" />
                                                                        <div>
                                                                            <br>
                                                                            <?php echo $case_Retain[$j]['name'];?>
                                                                         <br /><a href="javascript:;" class="font14 black fontItalic open_video"><?=$howwedo_57?> >></a>
                                                                        </div>
                                                                     </li>
                                                                <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endfor;?>
                                                    </div>
                                                    <a href="javascript:;" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/49.gif" width="13" alt="Arrow Prev"></a>
                                                    <a href="javascript:;" class="next"><img src="<?php echo MEDIA_PATH; ?>images/50.gif" width="13" alt="Arrow Next"></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="left how_pop_right"></div>
                                        </li>
                                        <li class="how_we_do_cover"></li>
                                    </ul>
                                    <div class="title_click" style="height:100px;">
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>   
    
