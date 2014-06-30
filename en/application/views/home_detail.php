	<script type="text/javascript">
    	$(document).ready(function(){
			calculateWhitespace();
			stickNavigation();
			home_detail();
			$("#backToHome").click(function(){
				$("#goto_home").trigger("click");	
			})
			$("#home_detail .how_close").click(function(){
				$("#home_detail #slides_three").hide();
				$("#home_detail .home_detail_how .case_page").hide();
				$("#home_detail .how_6").fadeIn();
			})
			$("#home_detail .how_6_ul .list").live('click',function(){
				$("#home_detail .how_6").hide();
				var index = $(this).index();
				$("#home_detail #slides_three .pagination li:eq("+index+") a").trigger('click');
				$("#home_detail #slides_three").fadeIn();	
				$("#home_detail .home_detail_how .case_page").show();			
			})
			
			var myScrollDown,myScrollUp,how_scroll;
			clearAllInterval = function() { 	
				clearInterval(myScrollDown); 
				clearInterval(myScrollUp); 
			}
			$(".strategic_popup .icon-down").mousedown(function(){
				how_scroll = $(this).next();
				myScrollDown = setInterval(function(){how_scroll.scrollTop(how_scroll.scrollTop()+10);},100);
			})
			$(".strategic_popup .icon-down").mouseup(clearAllInterval)
			$(".strategic_popup .icon-down").click(function(){
				how_scroll = $(this).next();
				how_scroll.scrollTop(how_scroll.scrollTop()+10);
			})
			$(".strategic_popup .icon-up").mousedown(function(){
				how_scroll = $(this).next().next();
				myScrollUp = setInterval(function(){ how_scroll.scrollTop(how_scroll.scrollTop()-10);},100);
			})
			$(".strategic_popup .icon-up").mouseup(clearAllInterval)
			$(".strategic_popup .icon-up").click(function(){
				how_scroll = $(this).next().next();
				how_scroll.scrollTop(how_scroll.scrollTop()-10);
			})
			
			$(".scroll-down").mousedown(function(){
				how_scroll = $(this).next();
				myScrollDown = setInterval(function(){how_scroll.scrollTop(how_scroll.scrollTop()+10);},100);
			})
			$(".scroll-down").mouseup(clearAllInterval)
			$(".scroll-down").click(function(){
				how_scroll = $(this).next();
				how_scroll.scrollTop(how_scroll.scrollTop()+10);
			})
			$(".scroll-up").mousedown(function(){
				how_scroll = $(this).next().next();
				myScrollUp = setInterval(function(){ how_scroll.scrollTop(how_scroll.scrollTop()-10);},100);
			})
			$(".scroll-up").mouseup(clearAllInterval)
			$(".scroll-up").click(function(){
				how_scroll = $(this).next().next();
				how_scroll.scrollTop(how_scroll.scrollTop()-10);
			})
			$(".home_detail_videos .video_page").click(function(){
				$(".home_detail_videos .home-video").each(function(){
					$(this).html($(this).html());
				})
			})
			$("#navigation > ul").click(function(){
				$(".home_detail_videos .home-video").each(function(){
					$(this).html($(this).html());
				})
				$("#home_detail .found-scroll").scrollTop(0);
				$("#home_detail .client-scroll").scrollTop(0);
				$("#home_detail .strategic_scroll").scrollTop(0);
			})
			$("#home_detail .next_strategic").click(function(){
				$("#home_detail .strategic_scroll").scrollTop(0);
			})
			$("#slides_five table tr").click(function(){
				$("#home_detail .strategic_scroll").scrollTop(0);
			})
		})
    </script>
    <div class="page_bg_common">
    	<div id="backToHome"></div>
        <div id="content">
    	<div class="wrapper_content">
                    <div id="home_detail">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                            	<div class="left home_detail_founder">
                                	<div class="font19 black family_bold"><?=$oneminute_1?></div>
                                    <div class="founder_content mt5">
                                    	<div class="founder_title"></div>
                                        		<style>
                                                	.scroll-up{
														background:url(<?php echo MEDIA_PATH; ?>images/66.gif) no-repeat 0 0px;
														display:inline-block;
														width:20px;
														height:20px;
														top:8px;
														right:0px;
														position:absolute;
														cursor:pointer;
													}
													.scroll-down{
    													background:url(<?php echo MEDIA_PATH; ?>images/66.gif) no-repeat 0 -42px;
														display:inline-block;
														width:20px;
														height:20px;
														top:30px;
														right:0px;
														position:absolute;
														cursor:pointer;
													}
													.aboutus_content .scroll-up{
													}
													.aboutus_content .scroll-down{
													}
                                                </style>
                                        <span class="scroll-up"></span>
                                        <span class="scroll-down"></span>
                                        <div class="found-scroll" style="width:235px;height:120px;margin-top:20px;overflow:hidden;">
                                        	<div class="founder_bg black font22 family_bold">
												<?=$oneminute_10?>
                                                <br />
                                                <span class="font16 family_normal fontItalic"><?=$oneminute_11?></span> 
                                            </div>
                                            <div class="font16 family_normal black" style="margin-top:5px">
                                                - <?=$oneminute_12?><br />
                                                - <?=$oneminute_13?><br />
                                                - <?=$oneminute_20?><br />
                                                - <?=$oneminute_21?><br />
                                                - <?=$oneminute_22?><br />
                                                <?=$oneminute_25?>
                                            </div>
                                        </div>
                                        <!--<span class="font14 founder_more cursor family_normal"><?=$home_16?> >></span> -->
                                    </div>
                                </div>
                                <div class="left home_detail_cases marginLeft10">
                                	<div class="font19 black family_bold"><?=$oneminute_2?></div>
                                    <div class="cases_content mt5 positionRelative">
                                    	<div class="case_page fontItalic gray"><span class="cursor prev_span">Previous</span> / <span class="cursor next_span">Next</span> ( <span class="current_page"></span> of <span class="totle_page"></span> )</div>
                                        <div id="slides_one">
											<div class="slides_container">
                                                <?php foreach($case_picture as $key => $value): ?>
                                            	<div>
                                        		  <img src="<?php echo ROOT_PATH.'upload/'.$value['images']; ?>" width="381" height="185" />
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="left home_detail_videos marginLeft10">
                                	<div class="font19 black family_bold"><?=$oneminute_3?></div>
                                    <div class="mt5 positionRelative">
                                    	<div class="video_page fontItalic gray"><span class="cursor prev_span">Previous</span> / <span class="cursor next_span">Next</span> ( <span class="current_page"></span> of <span class="totle_page"></span> )</div>
                                        <div id="slides_two">
											<div class="slides_container">
                                                <?php foreach($video as $key => $value): ?>
                                            	<div class="home-video" style="height:185px; width:315px;">
                                        			<?php echo $value['description'];?>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left home_detail_how marginLeft10" style="width:318px;">
                                	<div class="font19 black family_bold"><?=$oneminute_4?></div>
                                    <div class="mt5 positionRelative">
                                    	<div class="case_page fontItalic gray hide"><span class="cursor prev_span">Previous</span> / <span class="cursor next_span">Next</span> ( <span class="current_page"></span> of <span class="totle_page"></span> )</div>
                                        <div id="slides_three" class="hide" style="width:318px;">
											<div class="slides_container">
                                            	<div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_1?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_11?><br />
                                                        -<?=$howwedo_12?><br />
                                                        -<?=$howwedo_13?><br />
                                                        -<?=$howwedo_14?><br />
                                                        -<?=$howwedo_15?><br />
                                                        -<?=$howwedo_16?> 
                                                    </p>
                                                    <span class="number_big">1</span>
                                                    <span class="how_close"></span>
                                              	</div>
                                                <div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_2?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_21?><br />
                                                        -<?=$howwedo_22?><br />
                                                        -<?=$howwedo_23?><br />
                                                        -<?=$howwedo_24?>
                                                    </p>
                                                    <span class="number_big">2</span>
                                                    <span class="how_close"></span>
                                                </div>
                                                <div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_3?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_28?><br />
                                                        -<?=$howwedo_29?><br />
                                                        -<?=$howwedo_30?><br />
                                                        -<?=$howwedo_31?><br />
                                                        -<?=$howwedo_32?><br />
                                                        -<?=$howwedo_33?> 
                                                    </p>
                                                    <span class="number_big">3</span>
                                                    <span class="how_close"></span>
                                                </div>
                                                <div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_4?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_34?><br />
                                                        -<?=$howwedo_35?><br />
                                                        -<?=$howwedo_36?><br />
                                                        -<?=$howwedo_37?><br />
                                                        -<?=$howwedo_38?>
                                                    </p>
                                                    <span class="number_big">4</span>
                                                    <span class="how_close"></span>
                                                </div>
                                                <div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_5?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_39?><br />
                                                        -<?=$howwedo_40?><br />
                                                        -<?=$howwedo_41?><br />
                                                        -<?=$howwedo_42?><br />
                                                        -<?=$howwedo_43?><br />
                                                        -<?=$howwedo_44?> 
                                                    </p>
                                                    <span class="number_big">5</span>
                                                    <span class="how_close"></span>
                                                </div>
                                                <div>
                                                    <p class="left left1 font16 strong"><?=$howwedo_6?></p>
                                                    <p class="left left2 font16 lineHeight26 family_cond">
                                                        -<?=$howwedo_45?><br />
                                                        -<?=$howwedo_46?><br />
                                                        -<?=$howwedo_47?><br />
                                                        -<?=$howwedo_48?><br />
                                                        -<?=$howwedo_49?><br />
                                                        -<?=$howwedo_50?> 
                                                    </p>
                                                    <span class="number_big">6</span>
                                                    <span class="how_close"></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="how_6">
                                        	<ul class="how_6_ul">
                                            	<li class="list1 list"><?=$howwedo_1?></li>
                                                <li class="list2 list"><?=$howwedo_2?></li>
                                                <li class="list3 list"><?=$howwedo_3?></li>
                                                <li class="list4 list"><?=$howwedo_4?></li>
                                                <li class="list5 list"><?=$howwedo_5?></li>
                                                <li class="list6 list"><?=$howwedo_6?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="left home_detail_aboutus mt15">
                                	<div class="font19 black family_bold"><?=$oneminute_5?></div>
                                    <div class="aboutus_content positionRelative mt5">
                                        <span class="scroll-up"></span>
                                        <span class="scroll-down"></span>
                                        <div class="about-scroll" style="width:300px;height:198px; overflow:hidden;">
                                        	<div class="aboutus_bg black font22 family_bold">
                                                <span class="lineHeight40">___</span><br />
                                                <?=$oneminute_14?><br />
                                                <span class="font16 family_normal fontItalic"><?=$oneminute_15?></span> 
                                            </div>
                                            <div class="font16 family_normal black" style="margin-top:5px;">
                                                - <?=$oneminute_16?><br />
                                                - <?=$oneminute_17?><br />
                                                - <?=$oneminute_18?>
                                            </div>
                                        </div>
                                        <!-- <span class="font14 aboutus_more cursor family_normal"><?=$home_16?> >></span> -->
                                    </div>
                                </div>
                                <div class="left home_detail_client marginLeft10 mt15">
                                	<div class="font19 black family_bold"><?=$oneminute_19?></div>
                                    <div class="clearfix mt5">
                                        <div class="left left1 font16 strong"></div>
                                        <div class="left left2 font16 lineHeight26">
                                        	<div class="left2_top positionRelative">
                                            	<div class="strategic_page fontItalic gray font14" style="top:-28px;"><span class="cursor prev_span">Previous</span>/<span class="cursor next_span">Next</span>(<span class="current_page"></span> of <span class="totle_page"></span>)</div>

                                                <div id="slides_nine">
                                                    <div class="slides_container">
                                                        <div>
                                                        	<span class="scroll-up"></span>
                                                			<span class="scroll-down"></span>
                                                            <div class="client-scroll" style="width:320px;height:85px;margin-top:5px;overflow:hidden;line-height: 22px;">
                                                                <div>
                                                                     <?=$oneminute_26?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                        	<span class="scroll-up"></span>
                                                			<span class="scroll-down"></span>
                                                            <div class="client-scroll" style="width:320px;height:85px;margin-top:5px;overflow:hidden;line-height: 22px;">
                                                                <div>
                                                                     <?=$oneminute_27?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                        	<span class="scroll-up"></span>
                                                			<span class="scroll-down"></span>
                                                            <div class="client-scroll" style="width:320px;height:85px;margin-top:5px;overflow:hidden;line-height: 22px;">
                                                                <div>
                                                                     <?=$oneminute_28?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                        	<span class="scroll-up"></span>
                                                			<span class="scroll-down"></span>
                                                            <div class="client-scroll" style="width:320px;height:85px;margin-top:5px;overflow:hidden;line-height: 22px;">
                                                                <div>
                                                                     <?=$oneminute_29?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                        	<span class="scroll-up"></span>
                                                			<span class="scroll-down"></span>
                                                            <div class="client-scroll" style="width:320px;height:85px;margin-top:5px;overflow:hidden;line-height: 22px;">
                                                                <div>
                                                                     <?=$oneminute_30?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <span class="client_more hide cursor family_normal font14">Next >></span>
                                            </div>
                                            <div class="left2_bottom">
                                            	<div id="slides_four">
                                                    <div class="slides_container">
                                                        <?php foreach($client_picture as $key => $value): ?>
                                                        <div style="text-align:center;">
                                                           <img src="<?php echo ROOT_PATH.'upload/'.$value['images']; ?>" width="373" height="104"/>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left home_detail_brand_shop marginLeft10 mt15">
                                	<div class="font19 black family_bold"><?=$oneminute_6?></div>
                                    <div class="brand_shop_content mt5">
                                    	<div class="strategic_page fontItalic gray"><span class="cursor prev_span">Previous</span>/<span class="cursor next_span">Next</span>(<span class="current_page"></span> of <span class="totle_page"></span>)</div>
                                    	<div id="slides_eight">
                                            <div class="slides_container">
                                            	<?php foreach($brandshop as $key => $value): ?>
                                            	<div>
                                                    <div class="black font16"><?=$value['title']?> / <strong><?=$value['subtitle']?></strong></div>
                                                    <div class="gray font14">>> <?=$oneminute_9?></div>
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div> 
                                        <span class="brand_shop_more hide cursor family_normal font14">Next >></span>
                                    </div>
                                </div>
                                <div class="left strategic_advisor positionRelative marginLeft10" style="width:280px;">
                                    <div class="home_detail_strategic mt15">
                                        <div class="font19 black family_bold"><?=$oneminute_7?></div>
                                        <div class="mt5 strategic_content positionRelative">
                                            <div class="strategic_page fontItalic gray"><span class="cursor prev_span">Previous</span> / <span class="cursor next_span">Next</span> ( <span class="current_page"></span> of <span class="totle_page"></span> )</div>
                                            <div id="slides_five">
                                                <div class="slides_container">
                                                	<?php for($i = 0;$i<ceil(count($eggsheller_strategic)/3);$i++):?>                                                
                                                    <div>
                                                        <table>
                                                            <colgroup>
                                                                <col width="20%">
                                                                <col width="80%">
                                                            </colgroup>
                                                            <?php for($j = $i * 3; $j < min(($i + 1)* 3,count($eggsheller_strategic)); $j ++):?>
                                                            <tr>
                                                                <td class="bgGray"><img src="<?php echo ROOT_PATH.'upload/'.$eggsheller_strategic[$j]['photo']; ?>" width="46" height="46" class="imagePop" style="border-width:0"/></td>
                                                                <td class="bgGray"><span class="lineHeight18 font16"><?php echo $eggsheller_strategic[$j]['email']; ?></span></td>
                                                            </tr>
                                                            <?php endfor; ?>
                                                        </table>
                                                     </div>
                                                     <?php endfor;?>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="home_detail_advisor mt5">
                                        <div class="font19 black family_bold"><?=$oneminute_8?></div>
                                        <div class="advisor_content positionRelative">
                                            <div class="advisor_page fontItalic gray"><span class="cursor prev_span">Previous</span> / <span class="cursor next_span">Next</span> ( <span class="current_page"></span> of <span class="totle_page"></span> )</div>
                                            <div id="slides_six">
                                                <div class="slides_container">
                                                	<?php for($i = 0;$i<ceil(count($eggsheller_advisor)/2);$i++):?>                                                
                                                    <div>
                                                        <table>
                                                            <colgroup>
                                                                <col width="18%">
                                                                <col width="32%">
                                                                <col width="18%">
                                                                <col width="32%">
                                                            </colgroup> 
                                                            <tr>
                                                            <?php for($j = $i * 2; $j < min(($i + 1)* 2,count($eggsheller_advisor)); $j ++):?>
                                                                <td class="bgGray"><img src="<?php echo ROOT_PATH.'upload/'.$eggsheller_advisor[$j]['photo']; ?>" width="46" height="46" class="imagePop" style="border-width:0"/></td>
                                                                <td class="bgGray"><span class="lineHeight18 font16"><?php echo $eggsheller_advisor[$j]['name']; ?></span></td>
                                                            <?php endfor; ?>
                                                            </tr>
                                                        </table>
                                                     </div>
                                                     <?php endfor;?>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="strategic_popup">
                                    	<div id="slides_seven">
                                            <div class="slides_container">
                                            		<?php foreach($eggsheller_strategic as $key => $value): ?>
                                                    <div>
                                                        <div class="left" style="width:50px; margin:5px 5px 0 5px;">
                                                            <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" width="46" height="46" style="border-width:0"/>
                                                        </div>
                                                        <div class="left" style="width:200px; margin:5px;">
                                                        	<p style="border-bottom:1px solid #fff; line-height:18px; padding-bottom:5px;">
                                                                <span class="font16 white"><?=$value['name']?></span><br />
                                                                <span class="fontItalic font14 white"><?=$value['email']?></span>
                                                            </p>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <span class="icon-up"></span>
                                                        <span class="icon-down"></span>
                                                        <div class="strategic_scroll" style="height:150px; width:250px;overflow:hidden;">
                                                        	<div>
                                                            	<div style="width:225px; margin-left:25px;">
                                                                	<p class="strategic_popup_strength font14 white"><?=$oneminute_23?></p>
                                                                    <p style="padding-left:25px; font-size:12px; color:#fff; line-height:19px;"><?=$value['content']?></p>
                                                                </div>
                                                                <div style="width:225px; margin-left:25px;">
                                                                	<p class="strategic_popup_experience font14 white"><?=$oneminute_24?></p>
                                                                	<p style="padding-left:25px; font-size:12px; color:#fff; line-height:19px;"><?=$value['interview']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php foreach($eggsheller_advisor as $key => $value): ?>
                                                    <div>
                                                        <div class="left" style="width:50px; margin:5px 5px 0 5px;">
                                                            <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" width="46" height="46"  style="border-width:0"/>
                                                        </div>
                                                        <div class="left" style="width:200px; margin:5px;">
                                                        	<p style="border-bottom:1px solid #fff; line-height:18px; padding-bottom:5px;">
                                                                <span class="font16 white"><?=$value['name']?></span><br />
                                                                <span class="fontItalic font14 white"><?=$value['email']?></span>
                                                            </p>
                                                        </div>
                                                        <div class="clear"></div>
                                                 <style>
                                                	.strategic_popup .icon-up{
														background: url("<?php echo MEDIA_PATH; ?>images/2.png") no-repeat scroll 4px -28px transparent;
														display:inline-block;
														width:20px;
														height:20px;
														top:60px;
														right:10px;
														position:absolute;
														cursor:pointer;
													}
													.strategic_popup .icon-down{
    													background: url("<?php echo MEDIA_PATH; ?>images/2.png") no-repeat scroll 4px -53px transparent;
														display:inline-block;
														width:20px;
														height:20px;
														top:80px;
														right:9px;
														position:absolute;
														cursor:pointer;
													}
                                                </style>
                                                        <span class="icon-up"></span>
                                                        <span class="icon-down"></span>
                                                        <div class="strategic_scroll" style="height:150px; width:250px; overflow:hidden;">
                                                        	<div>
                                                            	<div style="width:225px; margin-left:25px;">
                                                                	<p class="strategic_popup_strength font14 white"><?=$oneminute_23?></p>
                                                                    <p style="padding-left:25px; font-size:12px; color:#fff; line-height:19px;"><?=$value['content']?></p>
                                                                </div>
                                                                <div style="width:225px; margin-left:25px;">
                                                                	<p class="strategic_popup_experience font14 white"><?=$oneminute_24?></p>
                                                                	<p style="padding-left:25px; font-size:12px; color:#fff; line-height:19px;"><?=$value['interview']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <?php endforeach; ?>
                                           </div>
                                       </div>
                                       	<span class="next_strategic"></span>
                                        <span class="close_strategic"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div> 
    </div>  
   
