	<script type="text/javascript">
		calculateWhitespace();
		posibility_ecards();
		$(document).ready(function(){
			$("#posibility_ecard .content_right li:not('current')").live('click',function(){
				$(this).addClass("current").siblings().removeClass("current");
				var index = $(this).index();
				$(".possibility_content .possibility_item:eq("+index+")").fadeIn().siblings().hide();
                $(".possibility_content .possibility_item:eq("+index+")").find(".slides_container").show();
				$(".possibility_content #backToHome").show();
			})
			$("#backToHome").click(function(){
				$("#goto_home").trigger("click");	
			})
		})
    </script>
    <div class="page_bg_left">
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="posibility_ecard" class="posibility">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                                <div class="content_left left font18 family_normal black lineHeight30">
                                	<div class="possibility_content">
                                    	<div class="possibility_item">
                                    		<div id="slides">
                                            	<div class="slides_container">
                                                    <?php for($i = 0;$i<ceil(count($ecards1)/15);$i++):?>
                                                    <div class="slide_item clearfix">
                                                    	<ul class="posibility_ecard_ul font14 lineHeight22">
                                                            <?php for($j = $i * 15; $j < min(($i + 1)* 15,count($ecards1)); $j ++):?>
                                                        	<li>
                                                            	<a href="<?=$ecards1[$j]['href']?>" target="_blank"><img src="<?php echo ROOT_PATH.'upload/'.$ecards1[$j]['image']; ?>" width="130" height="130" />
                                                                <br />
                                                                <span><?=$ecards1[$j]['content']?></span></a>
                                                            </li>
                                                        <?php endfor; ?>
                                                        </ul>                                           
                                                    </div>
                                                <?php endfor;?>

                                                </div>
                                                <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                            </div>
                                        </div>
                                        <div class="possibility_item hide">
                                    		<div id="slides">
                                            	<div class="slides_container">
                                                    <?php for($i = 0;$i<ceil(count($ecards2)/15);$i++):?>
                                                    <div class="slide_item clearfix">
                                                    	<ul class="posibility_ecard_ul font14 lineHeight22">
                                                            <?php for($j = $i * 15; $j < min(($i + 1)* 15,count($ecards2)); $j ++):?>
                                                        	<li>
                                                            	<a href="<?=$ecards2[$j]['href']?>" target="_blank"><img src="<?php echo ROOT_PATH.'upload/'.$ecards2[$j]['image']; ?>" width="130" height="130" />
                                                                <br />
                                                                <span><?=$ecards2[$j]['content']?></span></a>
                                                            </li>
                                                        <?php endfor; ?>
                                                        </ul>                                           
                                                    </div>
                                                <?php endfor;?>

                                                </div>
                                                <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                            </div>
                                        </div>
                                        <div class="possibility_item hide">
                                    		<div id="slides">
                                            	<div class="slides_container">
                                                    <?php for($i = 0;$i<ceil(count($ecards3)/15);$i++):?>
                                                    <div class="slide_item clearfix">
                                                    	<ul class="posibility_ecard_ul font14 lineHeight22">
                                                            <?php for($j = $i * 15; $j < min(($i + 1)* 15,count($ecards3)); $j ++):?>
                                                        	<li>
                                                            	<a href="<?=$ecards3[$j]['href']?>" target="_blank"><img src="<?php echo ROOT_PATH.'upload/'.$ecards3[$j]['image']; ?>" width="130" height="130" />
                                                                <br />
                                                                <span><?=$ecards3[$j]['content']?></span></a>
                                                            </li>
                                                        <?php endfor; ?>
                                                        </ul>                                           
                                                    </div>
                                                <?php endfor;?>

                                                </div>
                                                <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                            </div>
                                        </div>
                                        <div id="backToHome"></div>
                                    </div>
                                </div>
                                <div class="content_right left font18 family_normal black lineHeight30">
                                	<div class="title">
                                    </div>
                                    <div class="quto gray">
                                    	____<br />
                                        <?php echo $possibility_5; ?><br />
                                    </div>
                                    <ul class="mt20 lineHeight40">
                                    	<li class="current possibility_1"><?php echo $possibility_1; ?><br /></li>
                                        <li><?php echo $possibility_2; ?><br /></li>
                                        <li><?php echo $possibility_3; ?><br /></li>
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
   
