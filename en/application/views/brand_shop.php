	<script type="text/javascript">
		brand_shop();
		$(document).ready(function(){
			$("#brand_shop .brand_list li.item").click(function(){
				var index = $(this).index();
				$("#brand_shop .brand_slide1").hide();
				$("#brand_shop .brand_slide2").show();
				$("#brand_shop .brand_slide2 .pagination li:eq("+index+") a").trigger("click");
			})
			$("#goto_posibilities").click(function(){
				$("#brand_shop .brand_slide1").fadeIn();
				$("#brand_shop .brand_slide2").hide();
			})
		})
    </script>
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="brand_shop">
                        <div class="main_height">
                        	<div class="content_center brand_slide1 clearfix">
                                	<div id="slides" class="mt10">
                                        <div class="slides_container">
                                            <div class="slide_item clearfix">
                                            	<img src="<?php echo MEDIA_PATH; ?>images/brand_shop.jpg" />
                                                <div class="strong font16 mt20 lineHeight26" style="position:absolute;top:170px;left:218px;">
                                                  <?php echo $shop_1; ?>
                                                  <br />
                                                  <?php echo $shop_2; ?>
                                                </div>
                                                <ul class="brand_list">
                                                	<?php foreach($brandshop as $key => $value):?>
                                                	<li class="item<?=($key+1);?> item">
                                                    	<span class="family_bold font18"><?=$value['title']?></span>
                                                        <br />
                                                        <span class="font14"><?=$value['subtitle']?></span> 
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <style type="text/css">
												#brand_shop .brand_list li{
													position:absolute;
													width:90px;
													cursor:pointer;
													text-align:center;
													line-height:20px;
													height:70px;
												}
												#brand_shop .brand_list li.item1{
													bottom:130px;;
													right:120px;
												}
												#brand_shop .brand_list li.item3{
													bottom:130px;
													right:260px;
												}
												#brand_shop .brand_list li.item5{
													bottom:130px;;
													right:400px;
												}
												#brand_shop .brand_list li.item7{
													bottom:130px;
													right:545px;
												}
												#brand_shop .brand_list li.item9{
													bottom:130px;
													right:690px;
												}
												#brand_shop .brand_list li.item11{
													bottom:130px;
													right:830px;
												}
												#brand_shop .brand_list li.item2{
													bottom:230px;
													right:125px;
												}
												#brand_shop .brand_list li.item4{
													bottom:230px;
													right:265px;
												}
												#brand_shop .brand_list li.item6{
													bottom:230px;
													right:403px;
												}
												#brand_shop .brand_list li.item8{
													bottom:230px;
													right:540px;
												}
												#brand_shop .brand_list li.item10{
													bottom:230px;
													right:680px;
												}
												#brand_shop .brand_list li.item12{
													bottom:230px;
													right:820px;
												}
												</style>
                                            </div>
                                            <div class="slide_item clearfix">
                                            	<img src="<?php echo MEDIA_PATH; ?>images/brand_shop.jpg" />
                                            </div>
                                        </div>
                                    </div>
                             </div>
                        	<div class="content_center brand_slide2 hide clearfix">
                            		<div class="black font30 mt30" style="margin-left:100px;">
                                  <img src="<?php echo MEDIA_PATH; ?>images/62.gif" />
                                </div>
                                    <div class="gray fontItalic font20 mt20 lineHeight26" style="margin-left:100px;"><?php echo $shop_1; ?><br /><?php echo $shop_2; ?></div>
                                	<div id="slides" class="mt10">
                                        <div class="slides_container">
                                            <?php foreach($brandshop as $key => $value): ?>
                                            <div class="slide_item clearfix">
                                            	<div class="left left_1">
                                               		<img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="900" height="400" alt="Slide 1">
                                                </div>
                                                <div class="left left_2 mt15">
                                               		<div class="font20"><span class="fontItalic"><?php echo $value['title']; ?></span> / <strong><?php echo $value['subtitle']; ?></strong></div>
                                                    <div class="left_2_content mt20">
                                                    	<div class="black lineHeight26 bottom_line_gray font20"><?php echo $value['content']; ?></div>
                                                        <table class="font20 lineHeight26 gray">
                                                        	<tr>
                                                            	<td class="fontItalic"><?php echo $shop_3; ?>: </td>
                                                                <td><?php echo $value['style']; ?></td>
                                                            </tr>
                                                            <tr>
                                                            	<td class="fontItalic"><?php echo $shop_4; ?>: </td>
                                                                <td><?php echo $value['photos']; ?></td>
                                                            </tr>
                                                            <tr>
                                                            	<td class="fontItalic"><?php echo $shop_5; ?>: </td>
                                                                <td><?php echo $value['buy']; ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        </div>
                                        <a href="#" class="prev"><img src="<?php echo MEDIA_PATH; ?>images/17.gif" width="19" height="33" alt="Arrow Prev"></a>
                                        <a href="#" class="next"><img src="<?php echo MEDIA_PATH; ?>images/18.gif" width="19" height="33" alt="Arrow Next"></a>
                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
