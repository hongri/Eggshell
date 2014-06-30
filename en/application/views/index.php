<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="utf-8" />
  <meta property="og:image" content="<?php echo MEDIA_PATH; ?>images/logo.png" />
  <meta property="og:description" content="Eggshell Creative is a strategic Branding and Advertising Consultancy established in Hong Kong,
2005. Equipped with experienced business strategy develop forces, research and multi-media
design forces, Eggshell brings you inspiring business solutions that add up over time." /> 
  <title>EGGSHELL CREATIVE CONSULTANCY</title>
  <link rel="stylesheet" href="<?php echo MEDIA_PATH; ?>css/base.css" />
  <link rel="stylesheet" href="<?php echo MEDIA_PATH; ?>css/facebook.css" />
  <link rel="stylesheet" href="<?php echo MEDIA_PATH; ?>css/common.css" />
  <link rel="image_src" type="image/jpeg" href="<?php echo MEDIA_PATH; ?>images/icon-facebook.gif" /> 
  <script src="<?php echo MEDIA_PATH; ?>js/jquery.js"></script>
  <script src="<?php echo MEDIA_PATH; ?>js/json2.js"></script>
  <script src="<?php echo MEDIA_PATH; ?>js/facebook.js"></script> 
  <script src="<?php echo MEDIA_PATH; ?>js/slides.min.jquery.js"></script> 
  <script src="<?php echo MEDIA_PATH; ?>js/common.js"></script>
  <script>
  	   $(document).ready(function(){
		   var oTitle = document.title;
		   var oSource = 'EGGSHELL CREATIVE CONSULTANCY';
		   var oUrl = '<?php echo ROOT_PATH; ?>';
		   var oApiarr = [
			  'http://v.t.sina.com.cn/share/share.php?appkey=2684493555&url=' + oUrl + '&title=' + oTitle + '&source=' + oSource,
			'http://pinterest.com/pin/create/button/?url=www.eggshell.com.hk%2Fen&media=http%3A%2F%2Fwww.eggshell.com.hk%2Fen%2Fmedia%2Fimages%2Ficon-facebook.gif&description=Eggshell%20Creative%20is%20a%20strategic%20Branding%20and%20Advertising%20Consultancy%20established%20in%20Hong%20Kong%2C%0A2005.%20Equipped%20with%20experienced%20business%20strategy%20develop%20forces%2C%20research%20and%20multi-media%0Adesign%20forces%2C%20Eggshell%20brings%20you%20inspiring%20business%20solutions%20that%20add%20up%20over%20time.',
			  'http://www.facebook.com/sharer.php?u='+encodeURIComponent(oUrl)+'&amp;t='+encodeURIComponent(oTitle),
		   ];
		   $("li.qq_li").click(function(){
		   		window.open(oApiarr[1]);	
		   })
		   $("li.sina_li").click(function(){
		   		window.open(oApiarr[0]);	
		   })
		   $("li.facebook_li").click(function(){
		   		window.open(oApiarr[2],'newWindow', 'width=800, height=400','center');	
		   })
	   	 $('#facebook').fbWall({id:'310961248673',accessToken:'<?php echo $home_20; ?>',showGuestEntries:true,showComments:true,max:20,timeConversion:24});
		   
		   $(".faq_ul li").toggle(
		   	  function(){
			  	$(this).find(".a_span").show()
				$(this).siblings().find(".a_span").hide();
			  },
			  function(){
			  	$(this).find(".a_span").hide();
			  }
		   )
	   })
  </script>  
</head>
<body>
	<div id="content_slides">
        <div class="slides_container">
            <div class="index_item index_item11"></div>
            <div class="index_item index_item12"></div>
            <div class="index_item index_item13"></div>
            <div class="index_item index_item14"></div>
            <div class="index_item index_item21"></div>
            <div class="index_item index_item31"></div>
            <div class="index_item index_item41"></div>
            <div class="index_item index_item51"></div>
            <div class="index_item index_item61"></div>
            <div class="index_item index_item71"></div>
            <div class="index_item index_item81"></div>
        </div>
    </div>
    <!-- arrow begin -->
    <div class="arrow">
        <div class="container_24" style="width:1420px;">
          <div id="arrow">
            <img src="<?php echo MEDIA_PATH; ?>images/arrow.png" alt="Arrow" />
          </div>
        </div>
    </div>
    <!-- arrow end -->
    <!-- nav begin -->
    <div class="navigation" id="navigation">
     	<ul>
          <li id="goto_home" class="home jFlowControl jFlowActive nav_item nav_slider"><?php echo strtoupper($nav_1); ?></li>
          <li id="goto_aboutus" class="what jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_2); ?></li>
          <li id="goto_howwework" class="portofolio jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_3); ?></li>
          <li id="goto_case" class="clients jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_4); ?></li>
          <li id="goto_client" class="clients jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_5); ?></li>
          <li class="span_line"></li>
          <li id="goto_press" class="clients jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_6); ?></li>
          <li id="goto_posibilities" class="clients jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_7); ?></li>
          <li id="goto_contactus" class="clients jFlowControl nav_item nav_slider"><?php echo strtoupper($nav_8); ?></li>
          
          <li id="goto_sitemap" class="right jFlowControl nav_item nav_slider"><a href="#sitemap"><?php echo strtoupper($nav_10); ?></a></li>
          <li class="right jFlowControl language" id="come_soon"><span class="unselected ch lan_select">简</span> / <span class="unselected ch-hk lan_select">繁</span> / <span class="selected lan_select">ENG</span></li>
          <li class="span_line" style="float:right;"></li>
          <!--<li class="right follow_us jFlowControl">
            <span class="follow_bg"></span>
          </li>-->
          <script type="text/javascript">
             $(document).ready(function(){
                $(".language .lan_select:eq(1)").click(function(){
                   window.location.href='http://www.eggshell.com.hk/ch_hk';
                })
                /*
                $(".language .lan_select:eq(0)").click(function(){
                   window.location.href='http://www.eggshell.com.hk/ch';
                })
				        $(".language .lan_select:eq(2)").click(function(){
                   window.location.href='http://www.eggshell.com.hk/en';
                })
                */
             })
          </script>
        </ul>
        <div id="lineOfInteraction">
        	<span><?php echo strtolower($nav_9); ?></span>
        </div>
    </div>
    <!-- nav end -->
    <!-- bottom begin -->
    <div class="interaction">
        <div class="container_24" id="errata-imprint">
			<div class="facebook_team">
            	 <div id="facebook-stream">
                      <a href="http://www.facebook.com/Eggsheller" target="_blank"><img src="<?php echo MEDIA_PATH; ?>images/8.gif" style="margin-left:30px;" /></a>
                      <div class="facebook-wrapper">
                          <div id="facebook"></div>
                          <div class="up_down">
                          	  <a class="btn_up" href="javascript:;"></a>
                              <a class="btn_down" href="javascript:;"></a>
                          </div>
                      </div>
                 </div>
                 <div id="consultant-stream">
                      <a href="http://weibo.com/2231401694/xhzQ6huGu" target="_blank"><img src="<?php echo MEDIA_PATH; ?>images/9.gif" style="margin-left:30px;" /></a>
                      <div class="facebook-wrapper">
                          <div id="consultant_team">
                          	  <iframe width="100%" height="600" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=zh_tw&width=0&height=600&fansRow=1&ptype=1&speed=100&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=1&uid=2231401694&verifier=b3a5339e&dpc=1"></iframe>
                          </div>
<!--                          <div class="up_down">
                          	  <a class="btn_up" href="javascript:;"></a>
                              <a class="btn_down" href="javascript:;"></a>
                          </div>-->
                      </div>
                 </div>
            </div>
            <div class="contactus_recruitment hide">
                <div id="contact_us" class="left">
                    <div class="contact_us">
                        <div class="title"></div>
                        <div class="font24 white family_bold fontItalic mt30 textShadowBlack"><?php echo $contactus_1; ?></div>
                        <table class="mt10 white font18 strong fontItalic">
                        	<tr>
                            	<td>
                                	<?php echo $contactus_2; ?><br />
                                    <input type="text" class="contact_name" />
                                </td>
                                <td>
                                	<?php echo $contactus_3; ?><br />
                                    <input type="text" class="contact_company" />
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<?php echo $contactus_4; ?><br />
                                    <input type="text" class="contact_email" />
                                </td>
                                <td>
                                	<?php echo $contactus_5; ?><br />
                                    <input type="text" class="contact_phone" />
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="2">
                                	<?php echo $contactus_6; ?><br />
                                    <textarea class="contact_comments"></textarea>
                                </td>
                            </tr>
                            <!-- <tr>
                            	<td>
                                	Validation code<br />
                                    <input type="text" />
                                </td>
                                <td>
                                	
                                </td>
                            </tr> -->
                            <tr class="center">
                            	<td class="td1">
                                	<span class="contact_submit"><?php echo $contactus_7; ?></span>
                                </td>
                                <td class="td2">
                                	<span class="contact_cancel"><?php echo $contactus_8; ?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="contact_us_2" class="left">
                	 <div class="mt10 white font18 strong">
                     	 <p class="mt30"><?php echo $contactus_15; ?></p>
                     	 <p class="mt30"><?php echo $contactus_9; ?><br /><?php echo $contactus_10; ?></p>
                         <p class="mt30"><?php echo $contactus_11; ?></p>
                         <p class="mt30">
                             <a class="icon_email" href="mailto:<?php echo $contactus_12; ?>"><?php echo $contactus_12; ?></a><br />
                             <a href="http://www.facebook.com/Eggsheller" target="_blank" class="icon_facebook"><?php echo $contactus_13; ?></a><br />
                             <a href="http://pinterest.com/eggsheller" target="_blank" class="icon_pintrest">Pinterest <?php echo $contactus_13; ?></a><br />
                             <a href="http://www.youtube.com/user/Eggshellshowreel" target="_blank" class="icon_youtube">Youtube <?php echo $contactus_13; ?></a>
                         </p>
                     </div>
                </div>
                <div id="recruitment" class="left">
                    <div class="recruitment">
                        <div class="title"></div>
                        <div class="recruitment_content mt20">
                        	<div class="recruitment_wrapper">
                            	<div class="recruitment_table">
                                    <table class="white font18">
                                        <?php foreach($recruitmentlist as $key => $value): ?>
                                        <tr>
                                            <th><?php if($key<9) echo '0'.($key+1); else echo $key; ?></th>
                                            <th><?php echo $value['name']; ?></th>
                                        </tr>
                                        <tr class="line_bottom">
                                            <td><?php echo $value['type']; ?></td>
                                            <td><div style="width:315px;"><?php echo $value['content']; ?></div></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <span class="recruitment_up"></span>
                            <span class="recruitment_down"></span>
                        </div>

                        <div class="mt20 white font20 lineHeight30 marginLeft20 family_bold fontItalic"><?php echo $contactus_14; ?></div>
                    </div>
                </div>
            </div>
            <div class="bottom_contact clearfix" id="sitemap">
            	<div class="bottom_contact_content">
                    <div class="left left_contact">
                        <table class="sitemap_table">
                        	<tr class="sitemap">
                                <th colspan="8"><?php echo $home_18; ?></th>
                            </tr>
                            <tr>
                                <th><?php echo ucwords(strtolower($nav_1)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_2)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_3)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_4)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_5)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_6)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_7)); ?></th>
                                <th><?php echo ucwords(strtolower($nav_8)); ?></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div>
                                        <span class="aboutus_1">
                                            <?php echo ucwords(strtolower($aboutus_1)); ?>
                                        </span>
                                        <br />
                                        <span class="aboutus_2">
                                            <?php echo ucwords(strtolower($aboutus_2)); ?>
                                        </span>
                                        <br />
                                        <span class="aboutus_3">
                                            <?php echo ucwords(strtolower($aboutus_3)); ?>
                                        </span>
                                        <br />
                                        <span class="aboutus_6">
                                            <?php echo ucwords(strtolower($aboutus_6)); ?>
                                        </span>
                                        <br />
                                        <span class="aboutus_7">
                                            <?php echo ucwords(strtolower($aboutus_7)); ?>
                                        </span>
                                        <br />
                                        <span class="aboutus_8">
                                            <?php echo ucwords(strtolower($aboutus_8)); ?>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="howwedo_1">
                                            <?php echo ucwords(strtolower($howwedo_1)); ?>
                                        </span>
                                        <br />
                                        <span class="howwedo_2">
                                            <?php echo ucwords(strtolower($howwedo_2)); ?>
                                        </span>
                                        <br />
                                        <span class="howwedo_3">
                                            <?php echo ucwords(strtolower($howwedo_3)); ?>
                                        </span>
                                        <br />
                                        <span class="howwedo_4">
                                            <?php echo ucwords(strtolower($howwedo_4)); ?>
                                        </span>
                                        <br />
                                        <span class="howwedo_5">
                                            <?php echo ucwords(strtolower($howwedo_5)); ?>
                                        </span>
                                        <br />
                                        <span class="howwedo_6">
                                            <?php echo ucwords(strtolower($howwedo_6)); ?>
                                        </span>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div>
                                        <span class="press_1">
                                            <?php echo ucwords(strtolower($press_1)); ?>
                                        </span>
                                        <br />
                                        <span class="press_2">
                                            <?php echo ucwords(strtolower($press_2)); ?>
                                        </span>
                                        <br />
                                        <span class="press_3">
                                            <?php echo ucwords(strtolower($press_3)); ?>
                                        </span>
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="left disclaimer_copy lineHeight18 mt5">
                         <?php echo $footer_text;?>
                    </div>
                    <div class="copyright">
                        <?php echo $home_17; ?>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- bottom end -->
  						<div id="survey">
                            <ul class="ul1">
                            	<li id="client_tips">
                                	<span class="client_login"></span>
                                    <div class="client_content">
                                    	<ul class="client_ul gray client_login_list" style="font-size:14px;">
                                        	<li><a href="https://eggshellcreative.basecamphq.com/login" target="_blank"><?php echo $home_6; ?></a></li>
                                    		<li><a href="https://eggshell.freshbooks.com/" target="_blank"><?php echo $home_7; ?></a></li>
                                            <li><a href="http://www.eggshell.com.hk/ajaxplorer/" target="_blank"><?php echo $home_8; ?></a></li>
                                    		<li><a href="http://www.sojump.com/jq/1198267.aspx" target="_blank"><?php echo $home_9; ?></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="share_tips">
                                	<span><?php echo $home_10; ?></span>
                                    <div class="share_content">
                                    	<ul class="share_ul">
                                        	<li class="facebook_li"></li>
                                            <li class="qq_li"></li>
                                            <li class="sina_li"></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="faq_tips">
                                	<span><?php echo $home_11; ?></span>
                                    <div class="faq_content font16 lineHeight30 family_normal fontnormal">
                                    	<div class="faq_ul">
                                            <ul>
                                                <?php foreach ($faq as $key => $value): ?>
                                                  <li>
												  	<p class="q_span font16"><?php echo 'Q'.($key+1).': '.$value['question']?></p>
                                                  	<p class="a_span font14 lineHeight16 hide" style="font-weight:normal;"><?php echo 'A'.($key+1).': '.$value['answer']?></p>
                                                  </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <span class="prev"></span>
                                        <span class="next"></span>
                                    </div>
                                </li>
                                <li id="newsletter">
                                	<span><?php echo $home_12; ?></span>
                                    <div class="newsletter_content font16 lineHeight30 family_normal fontnormal">
                                        <div class="font20 family_bold"><?php echo $home_13; ?></div> 
                                        <div class="font16"><?php echo $home_14; ?></div>
                                        <div class="font16">
                                        	<ul class="email_ul mt10 clearfix">
                                                <li class="input_li"><input type="text" /></li>
                                                <li class="submit_li"></li>
                                            </ul>
                                        </div>  
                                        <div class="font20 mt10 family_bold"><?php echo $home_15; ?></div> 
                                        <ul class="newsletter_ul font16">
                                        	  <?php foreach ($newsletter as $key => $value): ?>
                                                  <li class="cursor"><?php echo substr($value['time'],0,10).' '.$value['news']?></li>
                                                <?php endforeach; ?>
                                        </ul>
                                        <span class="close"></span>
                                        <span class="more"><?php echo $home_16; ?> >></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="browser">
                            <div class="browser_popup">
                                <img src="<?php echo MEDIA_PATH; ?>images/68.gif" />
                                <a href="javascript:;">&nbsp;</a>
                            </div>
                            <div class="browser_popcover"></div>
                        </div>
                        <style type="text/css">
                        	.browser_popup{
								position:fixed;
								_position:absolute;
								width:900px;
								height:340px;
								background-color:#fff;
								z-index:999;
								/* 阴影部分  */
								-webkit-box-shadow:0 15px 20px rgba(0, 0, 0, 0.3);
								-moz-box-shadow:0 15px 20px rgba(0, 0, 0, 0.3);
								box-shadow:0 15px 20px rgba(0, 0, 0, 0.3);
							}
							.browser_popup a{
								display:block;
								position:absolute;
								bottom:12px;
								right:20px;
								width:200px;
								height:50px;
							}
							.browser_popup img{
								margin-top:30px;
								margin-left:30px;
							}
							.browser_popcover{
								position:fixed;
								_position:absolute;
								z-index:998;
								left:0;
								top:0;
								background-color:#000;
								opacity:0.2;
								filter:alpha(opacity=20);
							}
							.browser{
								display:none;
							}
                        </style>
                        <script type="text/javascript">
                        	$(document).ready(function(){
								var s_width = screen.width;
								var isIE = !!window.ActiveXObject;  
								var isIE6 = isIE && !window.XMLHttpRequest;  
								var isIE8 = isIE && !!document.documentMode;  
								var isIE7 = isIE && !isIE6 && !isIE8;  
								if(s_width<1440||isIE6||isIE7){
									$(".browser").show();
								}
								browser_popup();
								$(window).resize(function(){
									browser_popup();
								})
								$(".browser").click(function(){
									$(this).fadeOut();
								})
							})
							function browser_popup(){
								var b_width = ($(window).width()-900)/2;
								var b_height = ($(window).height()-440)/2;
								$(".browser_popup").css({'top':b_height,'left':b_width});
								$(".browser_popcover").css({'height':$(window).height(),'width':$(window).width()});	
							}
      </script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46095531-1', 'eggshell.com.hk');
        ga('send', 'pageview');

      </script>
</body>
</html>
      
