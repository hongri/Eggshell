	<script type="text/javascript">
		cases();
        $(document).ready(function(){
            var cases = JSON.parse('<?php echo addslashes(json_encode($case)); ?>');
			var cases_picture = JSON.parse('<?php echo addslashes(json_encode($cases_picture)); ?>');
            
            var cases_id = 0;
			var flag = 0;
            $("#case .slide_item img").each(function(index,element){
               // var id = $(this).attr("class").split('_')[1];              
                $(this).click(function(){
					
					$(".case_pop_content .video_cur_num").html("1");
					flag = 0;
                    $('#case .case_pop_content .pop_client_name').html(cases[index].name);
					for(var i = 0; i < cases_picture.length; i++){
						if(cases[index].id==cases_picture[i].case_id){
                    		$('#case #slides_images .slides_container').append('<div class="slide_item"><img src="<?php echo ROOT_PATH.'upload/' ?>'+cases_picture[i].image+'" width="470" height="300" /></div>');
							flag += 1;
						}
					}
					
					if(flag == 0)
					{
						$(".cases_page").hide();
					}
					else{
						$(".cases_page").show();
						$('#case .case_pop_content .video_totle_num').html(flag);
					}
					$('#case .case_pop_content .case_detail').html(cases[index].detail);
                    //$('#case .case_pop_content .video_cur_num').html(index+1);
                    $('#case .case_pop_content li').removeClass('cur');
                    var arr = cases[index].type.trim().split(',');
                    for(var i=0;i<arr.length;i++){
                        $('#case .case_pop_content .'+arr[i]).addClass('cur');
                    } 
                    cases_id = index;  
                })
            })  
			
			/*$("#case .case_pop_content .prev_case").click(function(){
                if(cases_id == 0){
                    cases_id = cases.length-1;
                }
                else
                    cases_id -= 1;
				$('#case #slides_images .slides_container').html("");
                $("#case .slide_item img:eq("+cases_id+")").trigger('click');
            })
			     
            $("#case .case_pop_content .next_case").click(function(){
                if(cases_id == cases.length-1){
                    cases_id = 0;
                }
                else
                    cases_id += 1;
				$('#case #slides_images .slides_container').html("");
                $("#case .slide_item img:eq("+cases_id+")").trigger('click');
            })*/
			
            $("#case .case_pop_content .video_prev").click(function(){
				var cur = $(".case_pop_content .video_cur_num").html()-1;
				if(cur==0){
					cur = flag-1;
				}
				else{
					cur = cur - 1;
				}
				$("#slides_images .slides_container .slide_item:eq("+cur+")").fadeIn(500).siblings().hide();
				$(".case_pop_content .video_cur_num").html(cur+1);
            })
			
            $("#case .case_pop_content .video_next").click(function(){
                var cur = parseInt($(".case_pop_content .video_cur_num").html());
				if(cur==flag){
					cur = 0;
				}
				else{
					cur = cur;
				}
				$("#slides_images .slides_container .slide_item:eq("+cur+")").fadeIn(500).siblings().hide();
				$(".case_pop_content .video_cur_num").html(cur+1);
            })
            $("#case .case_pop_content .close_case").click(function(){
                $("#case .case_pop").fadeOut();
                $("#case .case_pop_content").fadeOut();
				$('#case #slides_images .slides_container').html("");
            })
			
			$("#case .pop_close_div").click(function(){
                $("#case .case_pop").fadeOut();
                $("#case .case_pop_content").fadeOut();
				$('#case #slides_images .slides_container').html("");
            })
			
			$(".case_search .select_result").toggle(
				function(){
					$(".case_search .select1").fadeIn();
				},
				function(){
					$(".case_search .select1").hide();
					$(".case_search .client_project").hide();
					$(".case_search .experimental_project").hide();
				}
			)
			$(".case_search .li_client").toggle(
				function(){
					$(".case_search .client_project").fadeIn();
					$(".case_search .experimental_project").hide();
				},
				function(){
					$(".case_search .client_project").hide();
					$(".case_search .experimental_project").hide();
				}
			)
			$(".case_search .li_experimental").toggle(
				function(){
					$(".case_search .experimental_project").fadeIn();
					$(".case_search .client_project").hide();
				},
				function(){
					$(".case_search .experimental_project").hide();
					$(".case_search .client_project").hide();
				}
			)
			
			$(".case_search .select2 li").live('click',function(){
				$(".case_search .select2 li").removeClass("cur");
				var id = $(this).attr("data");
				var value = $(this).html();
				$("#case .image_"+id).trigger('click');
				$(".case_search .select_result").html(value).trigger('click');
				$(this).addClass("cur");
			})
			
			$("#case #slides .slide_item > div").hover(
				function(){
					$(this).find(".hover-bg").fadeIn();
					$(this).siblings().find(".hover-bg").hide();
				},
				function(){
					$(this).find(".hover-bg").hide();
				}
			)
			
			$(".hover-bg").click(function(){
				$(this).prev().trigger("click");
				$(this).parent().find(".hover-bg").hide();
			})
			
			$("#case #slides .slide_item > div").click(function(){
				$("#case .case_detail_div").scrollTop(0);
			})
			
			$("#navigation > ul").click(function(){
				$("#case .case_pop").fadeOut();
                $("#case .case_pop_content").fadeOut();
				$('#case #slides_images .slides_container').html("");
			})
			
/*			$(".case_pop_content .case_video .slide_item img").live("click",function(){
				alert(1);
				$(".case_pop_content .video_next").trigger('click');
			})*/
        }) 
    </script>
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="case">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                            		<div class="title pop_close_div">
                                    	<div class="case_search">
											<div class="clearfix">
                                            	<span class="black font18 fontItalic"><?=$case_10;?> :</span>
                                                <span class="select_result"></span>
                                            </div>
                                            <div class="select1 hide">
                                            	<ul>
                                                	<li class="li_client"><?=$case_8;?></li>
                                                    <li class="li_experimental"><?=$case_9;?></li>
                                                </ul>
                                                <a href="javascript:;" class="up-icon"></a>
                                       			<a href="javascript:;" class="down-icon"></a>
                                            </div>
                                            <div class="select2 client_project hide">
                                            	<div class="select_2_1">
                                                    <ul>
                                                        <?php for($i = 0; $i < count($case); $i++):?>
                                                        <?php if($case[$i]['video']=="Client Project"):?>
                                                        <li data="<?php echo $case[$i]['id']; ?>"><?php echo $case[$i]['name']; ?></li>
                                                        <?php endif;?>
                                                        <?php endfor;?>
                                                    </ul>
                                                </div>
                                                <a href="javascript:;" class="up-icon"></a>
                                       			<a href="javascript:;" class="down-icon"></a>
                                            </div>
                                            <div class="select2 experimental_project hide">
                                            	<div class="select_2_2">
                                                    <ul>
                                                        <?php for($i = 0; $i < count($case); $i++):?>
                                                        <?php if($case[$i]['video']=="Experimental Project"):?>
                                                        <li data="<?php echo $case[$i]['id']; ?>"><?php echo $case[$i]['name']; ?></li>
                                                        <?php endif;?>
                                                        <?php endfor;?>
                                               	    </ul>
                                                </div>
                                                <a href="javascript:;" class="up-icon"></a>
                                       			<a href="javascript:;" class="down-icon"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font20 fontItalic gray case_contact_us pop_close_div"><?=$case_1;?></div>
                                	<div id="slides">
                                        <div class="slides_container">
                                            <?php for($i = 0;$i<ceil(count($case)/14);$i++):?>                                                
                                            <div class="slide_item">
                                                <?php for($j = $i * 14; $j < min(($i + 1)* 14,count($case)); $j ++):?>
                                                	<div style="position:relative; display:inline-block;">
                                                        <img class="<?php echo 'image_'.$case[$j]['id'];?>" alt="<?php echo $case[$j]['name'];?>" title="<?php echo $case[$j]['name'];?>" src="<?php echo ROOT_PATH.'upload/'.$case[$j]['image']; ?>" height="175" width="175"/>
                                                        <div class="hover-bg"><?php echo $case[$j]['name'];?></div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                            <?php endfor;?>
                                        </div>
                                        <a href="#" class="prev pop_close_div"><img src="<?php echo MEDIA_PATH; ?>images/17.gif" width="19" height="33" alt="Arrow Prev"></a>
                                        <a href="#" class="next pop_close_div"><img src="<?php echo MEDIA_PATH; ?>images/18.gif" width="19" height="33" alt="Arrow Next"></a>
                                        <style type="text/css">
                                        	.hover-bg{
												width:175px;
												height:100px;
												opacity:0.9;
												text-align:center;
												padding-top:75px;
												_filter: Alpha(Opacity=90);
												position:absolute;
												top:0;
												left:2px;
												z-index:999;
												display:none;
												color:#fff;
												font-size:14px;
												font-weight:bold;
												color: #fff;
												background: -ms-radial-gradient(50% 50%, closest-corner, #333333, #050a06, #000000);
												background: -webkit-gradient(radial, 50% 50%, 0, 80% 40%, 100, from(#333), to(#000));
												background: -webkit-radial-gradient(50% 50%, closest-corner, #333333, #050a06, #000000);
												background: -moz-radial-gradient(50% 50%, closest-corner, #333333, #050a06, #000000);
												cursor:pointer;
											}
                                        </style>
                                    </div>
                                    <div class="pop_close_div" style="width:100%;height:100px;margin-top:-50px;"></div>
                                    <div class="case_pop">
                                    </div>
                                    <div class="case_pop_content">
                                    	<div class="left" style="width:500px;">
                                            <div class="case_video" style="width:470px;height:300px;margin-top:10px;margin-bottom:5px; overflow:hidden;">
                                            	<div id="slides_images">
                                        			<div class="slides_container">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="font14 fontItalic white cases_page" style="text-align:right;width:470px;"><span class="video_prev cursor">previous</span> / <span class="video_next cursor">next page</span> ( <span class="video_cur_num">1</span> of <span class="video_totle_num">7</span> )</div>
                                        </div>
                                        <div class="left" style="width:330px;">
                                        	<div class="font14"><span class="white bottom_line lineHeight22">client: <span class="pop_client_name">Play Limited</span></span></div>
<!--                                            <img src="<?php echo MEDIA_PATH; ?>images/20.gif" class="mt5" /><br />
-->                                            <ul class="checkbox lineHeight30 white clearfix font14 mt20">
                                            	<li class="Audit"><?=$case_2;?></li>
                                                <li class="Identity"><?=$case_3;?></li>
                                                <li class="Experience"><?=$case_4;?></li>
                                                <li class="Strategic"><?=$case_5;?></li>
                                                <li class="Management"><?=$case_6;?></li>
                                                <li class="Retain"><?=$case_7;?></li>
                                            </ul>
                                            <div class="case_detail_div mt20"><div class="font16 white case_detail"></div></div>
                                        </div>
                                        <!--<span class="prev_case"></span>-->
                                        <!--<span class="next_case"></span>-->
                                        <span class="close_case"></span>
                                        <span class="up-icon"></span>
                                        <span class="down-icon"></span>
                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
   	
