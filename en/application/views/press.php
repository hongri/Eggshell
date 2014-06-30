<script type="text/javascript">
var ddimagepanner={

  init:function($, $img, options){
    var s=options
    s.imagesize=[$img.width(), $img.height()]
    s.pos=(s.pos=="center")? [-(s.imagesize[0]/2-s.wrappersize[0]/2), -(s.imagesize[1]/2-s.wrappersize[1]/2)] : [0, 0] //initial coords of image
    s.pos=[Math.floor(s.pos[0]), Math.floor(s.pos[1])]
    $img.css({position:'absolute', left:s.pos[0], top:s.pos[1]})
    s.dragcheck={h: (s.wrappersize[0]>s.imagesize[0])? false:true, v:(s.wrappersize[1]>s.imagesize[1])? false:true}
    if (s.dragcheck.h==false && s.dragcheck.v==false) //if image shouldn't be pannable (container larger than image)
      s.$pancontainer.css({cursor:'auto'})
    else
      this.dragimage($, $img, s)
  },

  dragimage:function($, $img, s){
    $img.mousedown(function(e){
      var imgoffset=$img.offset()
      s.pos=[parseInt($img.css('left')), parseInt($img.css('top'))]
      var xypos=[e.clientX, e.clientY]
      $img.bind('mousemove.dragstart', function(e){
        var pos=s.pos
        var dx=e.clientX-xypos[0] //distance to move horizontally
        var dy=e.clientY-xypos[1] //vertically
        if (s.dragcheck.h==true) //allow dragging horizontally?
          var newx=(dx>0)? Math.min(0, s.pos[0]+dx) : Math.max(-s.imagesize[0]+s.wrappersize[0], s.pos[0]+dx) //Set horizonal bonds. dx>0 indicates drag right versus left
        if (s.dragcheck.v==true) //allow dragging vertically?
          var newy=(dy>0)? Math.min(0, s.pos[1]+dy) : Math.max(-s.imagesize[1]+s.wrappersize[1], s.pos[1]+dy) //Set vertical bonds. dy>0 indicates drag downwards versus up
        $img.css({left:(typeof newx!="undefined")? newx : s.pos[0], top:(typeof newy!="undefined")? newy : s.pos[1]})
        return false //cancel default drag action
      })
      return false //cancel default drag action
    })
    $(document).bind('mouseup', function(e){
      $img.unbind('mousemove.dragstart')
    })
  }

}


jQuery.fn.imgmover=function(options){
  var $=jQuery
  return this.each(function(){ //return jQuery obj
    if (this.tagName!="IMG")
      return true //skip to next matched element
    var $imgref=$(this)
    if (parseInt(this.style.width)>0 && parseInt(this.style.height)>0) //if image has explicit CSS width/height defined
      ddimagepanner.init($, $imgref, options)
    else if (this.complete){ //account for IE not firing image.onload
      ddimagepanner.init($, $imgref, options)
    }
    else{
      $imgref.bind('load', function(){
        ddimagepanner.init($, $imgref, options)
      })
    }
  })
}

    	$(document).ready(function(){
			press();
			calculateWhitespace();
			var dbl_flag = 0;
            $("#ri_slides .ri_item:not('.ri_item_open')").live('click',function(){
                $(this).css({'width':'485px','marginTop':'0'},300);
                $(this).addClass('ri_item_open').siblings().removeClass('ri_item_open');
                $(this).find('.press_description').show();
                $(this).find('.slide_item_image').css({'width':'473px'}).addClass('slide_item_hover').find('.big-image').show().prev().hide();
                $(this).siblings().css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).removeClass('slide_item_hover').find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
				dbl_flag = 0;
                $(this).siblings().find('.press_description').hide();
                $(this).find('.press_cover').hide();
                $(this).siblings().find('.press_cover').show();
                var index = $(this).index();
                if(index>3){
                    $('#ri_slides .ri_container').css({'marginLeft':-97*(index-2)},300);
                }
                $('.press_page .cur_page_change').html(($(this).index()+1)+" of");
            })
			$("#event_slides .event_item:not('.event_item_open')").live('click',function(){
                $(this).css({'width':'485px','marginTop':'0'},300);
                $(this).addClass('event_item_open').siblings().removeClass('event_item_open');
                $(this).find('.event_description').show();
                $(this).find('.slide_item_image').css({'width':'473px'}).addClass('slide_item_hover').find('.big-image').show().prev().hide();
                $(this).siblings().css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).removeClass('slide_item_hover').find('.big-image').hide().prev().show();
                $(this).siblings().find('.event_description').hide();
                $(this).find('.event_cover').hide();
                $(this).siblings().find('.event_cover').show();
                var index = $(this).index();
                if(index>3){
                    $('#event_slides .event_container').css({'marginLeft':-97*(index-2)},300);
                }
                $('.event_page .cur_page_change').html(($(this).index()+1)+" of");
            })
			
			$("#ri_slides .ri_item_open img").live('dblclick',function(event){
				if(dbl_flag==0)
				{
					$(this).width("1000px");
					$(this).height("600px");
					dbl_flag = 1;
				}
				else{
					$(this).width("473px");
					$(this).height("300px");
					dbl_flag = 0;
				}
				var $pancontainer=$('div.slide_item_hover');
                $pancontainer.each(function(){
                    var $this=$(this).css({position:'relative', overflow:'hidden', cursor:'move'})
                    var $img=$this.find('img:eq(1)') //image to pan
                    var options={$pancontainer:$this, pos:$this.attr('data-orient'), wrappersize:[$this.width(), $this.height()]}
                    $img.imgmover(options)
                })
				event.stopPropagation();
			})
            $("#ri_slides .ri_item:not('.ri_item_open')").live('mouseover',function(){
                $(this).addClass('ri_item_hover');
                $(this).stop().animate({'marginTop':'0'},300);
                $(this).find('.press_description').show();
                $('.press_page .cur_page_change').html(($(this).index()+1)+" of");
                $(this).find('.press_cover').hide();
                $(this).siblings().stop().animate({'marginTop':'25px'},300).find('.press_cover').show();
                $(this).siblings().find('.press_description').hide();
               // $('#ri_slides .ri_item_open').css({'width':'97px'}).find('.slide_item_image').css({'width':'85px'});
                //$(this).siblings().removeClass('ri_item_open');
            })
			
			$("#event_slides .event_item:not('.event_item_open')").live('mouseover',function(){
                $(this).addClass('event_item_hover');
                $(this).stop().animate({'marginTop':'0'},300);
                $(this).find('.event_description').show();
                $('.event_page .cur_page_change').html(($(this).index()+1)+" of");
                $(this).find('.event_cover').hide();
                $(this).siblings().stop().animate({'marginTop':'25px'},300).find('.event_cover').show();
                $(this).siblings().find('.event_description').hide();
               // $('#ri_slides .ri_item_open').css({'width':'97px'}).find('.slide_item_image').css({'width':'85px'});
                //$(this).siblings().removeClass('ri_item_open');
            })

            $("#ri_slides .ri_item_open").live('mouseover',function(){
                $(this).stop().animate({'marginTop':'0'},300);
                $(this).find('.press_description').show();
                $('.press_page .cur_page_change').html(($(this).index()+1)+" of");
                $(this).find('.press_cover').hide();
                $(this).siblings().stop().animate({'marginTop':'25px'},300).find('.press_cover').show();
                $(this).siblings().find('.press_description').hide();
               // $('#ri_slides .ri_item_open').css({'width':'97px'}).find('.slide_item_image').css({'width':'85px'});
                //$(this).siblings().removeClass('ri_item_open');
            })
			
			$("#event_slides .event_item_open").live('mouseover',function(){
                $(this).stop().animate({'marginTop':'0'},300);
                $(this).find('.event_description').show();
                $('.event_page .cur_page_change').html(($(this).index()+1)+" of");
                $(this).find('.event_cover').hide();
                $(this).siblings().stop().animate({'marginTop':'25px'},300).find('.event_cover').show();
                $(this).siblings().find('.event_description').hide();
               // $('#ri_slides .ri_item_open').css({'width':'97px'}).find('.slide_item_image').css({'width':'85px'});
                //$(this).siblings().removeClass('ri_item_open');
            })

            $('#ri_slides .next').click(function(){
                $('#ri_slides .ri_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                $('#ri_slides .ri_item_open').removeClass('ri_item_open');
                var cur_left = parseInt($("#ri_slides .ri_container").css('margin-left'));
                if(($('#ri_slides .ri_item').length-8+(cur_left/97))>0){
                    $('#ri_slides .ri_container').animate({'marginLeft':-97+cur_left},100);
                }
                else
                    return;
            })
            $('#ri_slides .prev').click(function(){
                $('#ri_slides .ri_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                $('#ri_slides .ri_item_open').removeClass('ri_item_open');
                var cur_left = parseInt($("#ri_slides .ri_container").css('margin-left'));
                if(cur_left<0){
                    $('#ri_slides .ri_container').animate({'marginLeft':97+cur_left},100);
                }
                else
                    return;
            })
			$('#event_slides .next').click(function(){
                $('#event_slides .event_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').hide().prev().show();
                $('#event_slides .event_item_open').removeClass('event_item_open');
                var cur_left = parseInt($("#event_slides .event_container").css('margin-left'));
                if(($('#event_slides .event_item').length-8+(cur_left/97))>0){
                    $('#event_slides .event_container').animate({'marginLeft':-97+cur_left},100);
                }
                else
                    return;
            })
            $('#event_slides .prev').click(function(){
                $('#event_slides .event_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').hide().prev().show();
                $('#event_slides .event_item_open').removeClass('ri_item_open');
                var cur_left = parseInt($("#event_slides .event_container").css('margin-left'));
                if(cur_left<0){
                    $('#event_slides .event_container').animate({'marginLeft':97+cur_left},100);
                }
                else
                    return;
            })
			
			$("#press .content_right").click(function(){
				 $("#ri_slides .ri_item").each(function(){
				 	$(this).find(".press_cover").hide();
					$(this).find(".press_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#ri_slides .ri_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                $('#ri_slides .ri_item_open').removeClass('ri_item_open');
				 $("#event_slides .event_item").each(function(){
				 	$(this).find(".event_cover").hide();
					$(this).find(".event_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#event_slides .event_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                 $('#event_slides .event_item_open').removeClass('event_item_open');
			})
			$("#press .bottom-click").click(function(){
				 $("#ri_slides .ri_item").each(function(){
				 	$(this).find(".press_cover").hide();
					$(this).find(".press_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#ri_slides .ri_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                $('#ri_slides .ri_item_open').removeClass('ri_item_open');
				 $("#event_slides .event_item").each(function(){
				 	$(this).find(".event_cover").hide();
					$(this).find(".event_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#event_slides .event_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                 $('#event_slides .event_item_open').removeClass('event_item_open');
			})
			$("#press .event_page").click(function(){
				 $("#event_slides .event_item").each(function(){
				 	$(this).find(".event_cover").hide();
					$(this).find(".event_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#event_slides .event_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                 $('#event_slides .event_item_open').removeClass('event_item_open');
			})
			$("#press .press_page").click(function(){
				 $("#ri_slides .ri_item").each(function(){
				 	$(this).find(".press_cover").hide();
					$(this).find(".press_description").hide();
					$(this).stop().animate({'marginTop':'25px'},300);
				 })
				 $('#ri_slides .ri_item_open').css({'width':'97px','marginTop':'25px'}).find('.slide_item_image').css({'width':'85px'}).find('.big-image').css({width:"473px",height:"300px",left:"0",top:"0"}).hide().prev().show();
                $('#ri_slides .ri_item_open').removeClass('ri_item_open');
			})
		})
</script>
    <div class="page_bg_left">
        <div id="content">
            <div class="wrapper_content">
                <div class="slider1">
                    <div class="slide-content">
                        <div id="press">
                            <div class="main_height">
                                <div class="content_center clearfix">
                                    <div class="content_left left font14 family_normal black lineHeight22">
                                        <div class="press_content">
                                            <div class="press_video press_item left">
                                                <div id="slides">
                                                <div class="slides_container">
                                                    <?php foreach ($press_video as $key => $value):?>
                                                    <div class="slide_item">
                                                        <div class="video-code" style="width:750px;height:375px;">
                                                        	<?php echo $value['video']; ?>
                                                        </div>
                                                        <div class="caption" style="bottom:0">
                                                            <p class="lineHeight22">
                                                                <?php echo $press_6; ?>: <?php echo $value['events']; ?>
                                                                <br />
                                                                <?php echo $press_7; ?>: <?php echo $value['date']; ?>
                                                                <br />
                                                                <?php echo $press_8; ?>: <?php echo $value['description']; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                            </div>
                                            </div>
                                            <div class="press_magazine press_item left hide">
                                                <div class="press_page font14 gray">
                                                    ( <span class="cur_page_change">total</span> <?php echo count($press_press); ?> )
                                                </div>
                                                <div id="ri_slides">
                                                    <div class="ri_container clearfix">
                                                        <?php foreach ($press_press as $key => $value):?>
                                                        <div class="ri_item">
                                                            <div class="slide_item_image" data-orient="center">
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" class="little-image" width="85" height="300" />
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" class="big-image" width="473" height="300" style="display:none;" title="double click to enlarge" />
                                                            </div>
                                                            <div class="press_description gray font14 hide mt10">
                                                                <?=$value['events']?>
                                                                <br />
                                                                <?=$value['date']?>
                                                            </div>
                                                            <div class="press_cover"></div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                    <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                                </div>
                                                <div class="bottom-click"></div>
                                                <style type="text/css">
                                                    #ri_slides{
                                                        width: 774px;
                                                        height:350px;
                                                        margin-left: 19px;
                                                        margin-top: 20px;
                                                        overflow: hidden;
                                                    }
													.bottom-click{
														height:110px;
													}
													#event_slides{
                                                        width: 774px;
                                                        height:350px;
                                                        margin-left: 19px;
                                                        margin-top: 20px;
                                                        overflow: hidden;
                                                    }
                                                    #ri_slides .ri_container{
                                                        width: 10000px;
                                                        margin-left: 0;

                                                    }
													#event_slides .event_container{
                                                        width: 10000px;
                                                        margin-left: 0;

                                                    }
                                                    #ri_slides .ri_item{
                                                        width: 97px;
                                                        float: left; 
                                                        overflow:hidden;
                                                        height: 350px;
                                                        cursor: pointer;
                                                        margin-top: 25px;
                                                        position: relative;
                                                    }
													#event_slides .event_item{
                                                        width: 97px;
                                                        float: left; 
                                                        overflow:hidden;
                                                        height: 350px;
                                                        cursor: pointer;
                                                        margin-top: 25px;
                                                        position: relative;
                                                    }
                                                    #ri_slides .next, #ri_slides .prev {
                                                        display: block;
                                                        height: 43px;
                                                        left: 40px;
                                                        position: absolute;
                                                        top: 280px;
                                                        width: 24px;
                                                        z-index: 101;
                                                    }
													#event_slides .next, #event_slides .prev {
                                                        display: block;
                                                        height: 43px;
                                                        left: 40px;
                                                        position: absolute;
                                                        top: 280px;
                                                        width: 24px;
                                                        z-index: 101;
                                                    }
                                                    #ri_slides .next {
                                                        left: 860px;
                                                    }
													#event_slides .next {
                                                        left: 860px;
                                                    }
                                                    .press_page{
                                                        padding-top: 40px;
                                                        text-align: right;
                                                        width: 780px;
                                                    }
													.event_page{
                                                        padding-top: 40px;
                                                        text-align: right;
                                                        width: 780px;
                                                    }
                                                    .slide_item_image{
                                                        box-shadow: 1px 1px 3px #292929;
                                                        margin-right: 12px;
                                                        overflow: hidden;
                                                        width: 85px;
                                                        height: 300px;
                                                        position: relative;
                                                    }
                                                    .press_cover{
                                                        position: absolute;
                                                        width: 85px;
                                                        display: none;
                                                        height: 300px;
                                                        background-color: #000;
                                                        opacity:0.5;
                                                        filter:alpha(opacity=50);
                                                        top: 0;
                                                    }
													.event_cover{
                                                        position: absolute;
                                                        width: 85px;
                                                        display: none;
                                                        height: 300px;
                                                        background-color: #000;
                                                        opacity:0.5;
                                                        filter:alpha(opacity=50);
                                                        top: 0;
                                                    }
                                                    .ri_item_open .press_cover{
                                                        width: 473px;
                                                    }
													.event_item_open .event_cover{
                                                        width: 473px;
                                                    }
                                                </style>
                                            </div>
                                            <div class="press_events press_item left hide">
                                             	<div class="event_page font14 gray">
                                                    ( <span class="cur_page_change">total</span> <?php echo count($press_events); ?> )
                                                </div>
                                                <div id="event_slides">
                                                    <div class="event_container clearfix">
                                                        <?php foreach ($press_events as $key => $value):?>
                                                        <div class="event_item">
                                                            <div class="slide_item_image" data-orient="center">
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" class="little-image" width="85" height="300" />
                                                                <img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" class="big-image" width="473" height="300" style="display:none;" />
                                                            </div>
                                                            <div class="event_description gray font14 hide mt10">
                                                                <?=$value['events']?>
                                                                <br />
                                                                <?=$value['date']?>, <?php echo $value['description']; ?>
                                                            </div>
                                                            <div class="event_cover"></div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/27.gif" width="19" height="33" alt="Arrow Prev"></a>
                                                    <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                                                </div>
                                                <div class="bottom-click"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content_right left font18 family_normal black lineHeight30">
                                        <div class="title">
                                        </div>
                                        <div class="quto gray">
                                            ____<br />
                                            <?php echo $press_5; ?><br />
                                        </div>
                                        <ul class="mt20 lineHeight40 press_nav_ul">
                                            <li class="current press_1"><?php echo $press_1; ?></li>
                                            <li class="press_2"><?php echo $press_2; ?></li>
                                            <li class="press_3"><?php echo $press_3; ?></li>
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
   
