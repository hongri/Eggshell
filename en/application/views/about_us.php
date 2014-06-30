    <script src="<?php echo MEDIA_PATH; ?>js/jquery.masonry.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
			calculateWhitespace();
				$('.aboutus_socail #slides').slides({
					preload: true,
					preloadImage: 'images/loading_30.gif',
					animationStart: function(current){
						$('.aboutus_socail .caption').animate({
							bottom:-35
						},100);
					},
					animationComplete: function(current){
						$('.aboutus_socail .caption').animate({
							bottom:0
						},200);
						//$("#press .content_right li:eq("+(current-1)+")").addClass("current").siblings().removeClass("current");
					},
					slidesLoaded: function() {
						$('.aboutus_socail .caption').animate({
							bottom:0
						},200);
					}
				});
			meet_eggshellers();
			meet_eggshellers_strategic();
			$("#about_us .aboutus_nav_ul li").click(function(){
				$(this).addClass("current").siblings().removeClass("current");
			})
			$("#about_us .about_1").click(function(){
				$("#about_us .aboutus_item:eq(0)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").addClass("egg_bg1").removeClass("egg_bg2").removeClass("page_bg_left");
				$("#about_us").addClass("about_us").removeClass("social_responsibility").removeClass("about_us_vision").removeClass("meet_eggshellers");
				$("#about_us .about_5").hide();
				$("#about_us .about_6").hide();
				$("#about_us .about_7").hide();
			})
			$("#about_us .about_2").click(function(){
				$("#about_us .aboutus_item:eq(1)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").addClass("egg_bg2").removeClass("egg_bg1").removeClass("page_bg_left");
				$("#about_us").addClass("about_us_vision").removeClass("social_responsibility").removeClass("about_us").removeClass("meet_eggshellers");
				$("#about_us .about_5").hide();
				$("#about_us .about_6").hide();
				$("#about_us .about_7").hide();
			})
			$("#about_us .about_3").click(function(){
				$("#about_us .aboutus_item:eq(2)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").removeClass("egg_bg1").removeClass("egg_bg2").addClass("page_bg_left");
				$("#about_us").addClass("social_responsibility").removeClass("about_us_vision").removeClass("about_us").removeClass("meet_eggshellers");
				$("#about_us .about_5").hide();
				$("#about_us .about_6").hide();
				$("#about_us .about_7").hide();
			})
			$("#about_us .about_4").click(function(){
				$("#about_us .about_5").fadeIn();
				$("#about_us .about_6").fadeIn();
				$("#about_us .about_7").fadeIn();
				$("#about_us .about_5").trigger("click");
			})
			$("#about_us .about_5").click(function(){
				$("#about_us .aboutus_item:eq(3)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").removeClass("egg_bg1").removeClass("egg_bg2").addClass("page_bg_left");
				$("#about_us").addClass("meet_eggshellers").removeClass("about_us_vision").removeClass("about_us").removeClass("social_responsibility");
			})
			$("#about_us .about_6").click(function(){
				$("#about_us .aboutus_item:eq(4)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").removeClass("egg_bg1").removeClass("egg_bg2").addClass("page_bg_left");
				$("#about_us").addClass("meet_eggshellers").removeClass("about_us_vision").removeClass("about_us").removeClass("social_responsibility");
				$('#container').masonry({
                     itemSelector: '.box'
                });
			})
			$("#about_us .about_7").click(function(){
				$("#about_us .aboutus_item:eq(5)").fadeIn().siblings().hide();
				$(".aboutus_wrapper").removeClass("egg_bg1").removeClass("egg_bg2").addClass("page_bg_left");
				$("#about_us").addClass("meet_eggshellers").removeClass("about_us_vision").removeClass("about_us").removeClass("social_responsibility");
			})
			$('#about_us .container_box').masonry({
              itemSelector: '.box'
            });
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
                $(this).parent().next().find("img").trigger('click');
            })
            $("#about_us .container_box .box_close").click(function(){
                $(this).parent().hide();
                $(this).parent().prev().fadeIn();
                $('#about_us .container_box').masonry({
                  itemSelector: '.box'
                });
            })
			$("#about_us .content_left_left li").click(function(){
				var index = $(this).index();
				$(this).addClass("cur").siblings().removeClass("cur");
				$("#about_us .content_left_right .container_box:eq("+index+")").fadeIn().siblings().hide();
				$("#about_us .container_box:eq("+index+")").masonry({
                    itemSelector: '.box'
               	});
			})
			
			$("#about_us .goto_press").click(function(){
				$("#goto_press").trigger('click');
			})
			
			$("#about_us .goto_contactus").click(function(){
				$("#goto_contactus").trigger('click');
			})
		})
    </script>
    <div class="egg_bg1 aboutus_wrapper">
        <div id="content">
            <div class="wrapper_content">
                <div class="slider1">
                    <div class="slide-content">
                        <div id="about_us">
                            <div class="main_height">
                                <div class="content_center clearfix">
                                	<div class="content_left left font18 family_normal black lineHeight40">
                                        <div class="aboutus_content">
                                            <div class="aboutus_item font14 lineHeight22">
                                            	<?=$company_background_text;?>
                                            </div>
                                            <div class="aboutus_item font14 lineHeight22 hide">
                                                <?=$vision_text?>
                                            </div>
                                            <div class="aboutus_item aboutus_socail hide">
                                                <div id="slides">
                                                    <div class="slides_container">
                                                    	<?php foreach($social_posibility as $key => $value ):?>
                                                        <div class="slide_item">
                                                            <img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="800px" />
                                                            <div class="caption" style="top:340px;">
                                                                <p class="lineHeight30">
                                                                    <?=$aboutus_9?>: <?=$value['date']?>
                                                                    <br />
                                                                    <?=$value['description']?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                    <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                                </div>
                                            </div>
                                            <div class="aboutus_item meet_eggshellers_strategic_1 hide">
                                                	<div id="slides">
                                                            <div class="slides_container">
                                                            	<?php foreach($eggsheller_strategic as $key => $value ):?>
                                                                <div class="slide_item clearfix">
                                                                    <div class="left left_1" style="width:240px;">
                                                                        <img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="200" height="290" alt="Slide 1">
                                                                        <ul class="strategic_ul strong font16 black lineHeight30 mt15">
                                                                            <li class="current"><a style="color:#333;" href="<?=$value['pinterest']?>" target="_blank">Visit my <img src="<?php echo MEDIA_PATH; ?>images/32.gif" /> page</a></li>
                                                                            <li class="goto_press" style="cursor:pointer;"><?=$aboutus_10?></li>
                                                                            <li class="goto_contactus" style="cursor:pointer;"><?=$aboutus_11?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="left left_2" style="width:500px;">
                                                                        <div class="font24 family_bold"><?=$value['name']?></div>
                                                                        <div class="fontItalic font20 black mt10"><?=$value['email']?></div>
                                                                        <div class="black font14 mt10" style="line-height:22px;text-align:justify;text-justify:inter-ideograph;height:360px;overflow:auto;"><?=$value['detail']?></div>
                                                                    </div>                                                        
                                                                </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                            <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                            <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                                        </div>                                        
                                            </div>
                                            <div class="aboutus_item hide">
                                                <div>
                                                        <div class="left content_left_left">
                                                            <ul class="strong font16 lineHeight40">
                                                                <li class="cur">All</li>
                                                                <?php
																	$array_type = array();
																	foreach($eggsheller_designer as $key => $value)
																    {
																		foreach(explode(',',$value['content']) as $item)
																		{
																			$array_type[] = trim($item);	
																		}
																	}
																
																?>
                                                                <?php foreach(array_unique($array_type) as $key => $value): ?>
                                                                <li><?php echo $value;?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <div class="left content_left_right">
                                                            <div id="container" class="clearfix container_box">
                                                                <div class="box col1">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1.gif" class="firstImg" />
                                                                    <div class="box_detail hide">
                                                                        <div class="box_detail_content clearfix">
                                                                            <div class="left" style="width:80px;"></div>
                                                                            <div class="left mt15" style="width:75px;height:105px;">
                                                                                <span class="white font16">JOE LEE</span><br />
                                                                                <span class="white font12 lineHeight18">Senior Designer</span>
                                                                            </div>
                                                                            <div class="font16 white" style="padding:0 5px;">Good Design is obvious. Great design is transparent.</div>
                                                                        </div>
                                                                        <span class="box_close"></span>
                                                                        <!--<a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>-->
                                                                    </div>
                                                                </div>  
                                                                <?php foreach($eggsheller_designer as $key => $value):?>
                                                                <div class="box col1">
                                                                    <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>"/>
                                                                    <div class="box_detail hide">
                                                                        <div class="box_detail_content clearfix">
                                                                            <div class="left" style="width:80px;"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" /></div>
                                                                            <div class="left mt15" style="width:75px;height:105px;">
                                                                                <span class="white font16"><?=$value['name']?></span><br />
                                                                                <span class="white font12 lineHeight18"><?=$value['email']?></span>
                                                                            </div>
                                                                            <div class="font16 white" style="padding:0 5px;"><?=$value['interview']?></div>
                                                                        </div>
                                                                        <span class="box_close"></span>
                                                                        <!--<a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>-->
                                                                    </div>
                                                                </div>   
                                                                <?php endforeach; ?>                                                           
                                                            </div>
                                                            <?php foreach(array_unique($array_type) as $k => $v): ?>
                                                            <div id="container" class="clearfix container_box hide">
                                                                <div class="box col1">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1.gif" class="firstImg" />
                                                                    <div class="box_detail hide">
                                                                        <div class="box_detail_content clearfix">
                                                                            <div class="left" style="width:80px;"></div>
                                                                            <div class="left mt15" style="width:75px;height:105px;">
                                                                                <span class="white font16">JOE LEE</span><br />
                                                                                <span class="white font12 lineHeight18">Senior Designer</span>
                                                                            </div>
                                                                            <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                        </div>
                                                                        <span class="box_close"></span>
                                                                        <!--<a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>-->
                                                                    </div>
                                                                </div>  
                                                                <?php foreach($eggsheller_designer as $key => $value):?>
                                                                <?php
																	$pos = strpos($value['content'], $v);
																 	if($pos === false) continue;
																 ?>
                                                                <div class="box col1">
                                                                    <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>"/>
                                                                    <div class="box_detail hide">
                                                                        <div class="box_detail_content clearfix">
                                                                            <div class="left" style="width:80px;"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" /></div>
                                                                            <div class="left mt15" style="width:75px;height:105px;">
                                                                                <span class="white font16"><?=$value['name']?></span><br />
                                                                                <span class="white font12 lineHeight18"><?=$value['email']?></span>
                                                                            </div>
                                                                            <div class="font16 white" style="padding:0 5px;">" <?=$value['interview']?> "</div>
                                                                        </div>
                                                                        <span class="box_close"></span>
                                                                        <!--<a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>-->
                                                                    </div>
                                                                </div>   
                                                                <?php endforeach; ?>                                                           
                                                            </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="aboutus_item meet_eggshellers_strategic_1 hide">
                                                <div id="slides">
                                                    <div class="slides_container">
                                                    	<?php for($i = 0; $i<count($eggsheller_advisor); $i=$i+2):?>
                                                        <div class="slide_item clearfix">
                                                            <div class="left left_1" style="width:140px;">
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$eggsheller_advisor[$i]['image']; ?>" width="130" alt="Slide 1">
                                                            </div>
                                                            <div class="left left_2" style="width:230px; margin-right:10px;">
                                                                <div class="font24 family_bold"><?=$eggsheller_advisor[$i]['name']?></div>
                                                                <div class="fontItalic font20 black mt10"><?=$eggsheller_advisor[$i]['email']?></div>
                                                                <div class="black font14 mt10" style="line-height:22px;text-align:justify;text-justify:inter-ideograph;height:350px; overflow: auto;padding-right:20px;"><?=$eggsheller_advisor[$i]['detail']?></div>
                                                            </div>   
                                                            <?php if(($i+1)<count($eggsheller_advisor)):?>
                                                            <div class="left left_1" style="width:140px;">
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$eggsheller_advisor[$i+1]['image']; ?>" width="130" alt="Slide 1">
                                                            </div>
                                                            <div class="left left_2" style="width:230px;">
                                                                <div class="font24 family_bold"><?=$eggsheller_advisor[$i+1]['name']?></div>
                                                                <div class="fontItalic font20 black mt10"><?=$eggsheller_advisor[$i+1]['email']?></div>
                                                                <div class="black font14 mt10" style="line-height:22px;text-align:justify;text-justify:inter-ideograph;height:350px; overflow: auto;padding-right:20px;"><?=$eggsheller_advisor[$i+1]['detail']?></div>
                                                            </div> 
                                                            <?php endif; ?>                                                
                                                        </div>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                    <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                                </div>                                        
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="content_right left font18 family_normal black lineHeight30">
                                        <div class="title">
                                        </div>
                                        <div class="quto gray">
                                            ____<br />
                                            <?=$aboutus_5?><br />
                                        </div>
                                        <ul class="mt20 lineHeight40 aboutus_nav_ul">
                                            <li class="current about_1"><?=$aboutus_1?></li>
                                            <li class="about_2"><?=$aboutus_2?></li>
                                            <li class="about_3"><?=$aboutus_3?></li>
                                            <li class="about_4"><?=$aboutus_4?></li>
                                            <li class="about_5 hide" style="margin-left:0px;"><?=$aboutus_6?></li>
                                            <li class="about_7 hide" style="margin-left:0px;"><?=$aboutus_8?></li>
                                            <li class="about_6 hide" style="margin-left:0px;"><?=$aboutus_7?></li>
                                        </ul>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>  