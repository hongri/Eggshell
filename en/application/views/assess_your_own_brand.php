    <script type="text/javascript">
		access();
		$(document).ready(function(){
			$("#backToHome").live('click',function(){
				$("#goto_home").trigger("click");	
			})
		})
    </script>
    <div class="egg_bg3">
    	<div id="backToHome"></div>
    	<div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="assess_your_own_brand">
                        <div class="main_height">
                        	<div id="slides">
                                <div class="slides_container">
                                    <div class="slide_item slide_item1 clearfix">
                        				<div class="content_center">
                                            <div class="fontItalic font24 black"><?php echo $assessment_1; ?></div>
                                            <div class="fontItalic font16 family_normal mt15">
                                                <?php echo $assessment_2; ?><br />
                                                <?php echo $assessment_3; ?>
                                            </div>
                                            <div class="font16 mt15">
                                                <?php echo $assessment_4; ?>
                                            </div>
                                            <table class="form_question font16 mt15 lineHeight30">
                                                <tr>
                                                    <td class="td1">
                                                    </td>
                                                    <td class="td2">
                                                        <?php echo $assessment_5; ?>
                                                    </td>
                                                    <td class="td3">
                                                        <?php echo $assessment_6; ?>
                                                    </td>
                                                    <td class="td4">
                                                        <?php echo $assessment_7; ?>
                                                    </td>
                                                </tr>
                                                <?php for($i = 0;$i< 5;$i++):?>
                                                <tr class="has_input">
                                                    <td class="td1">
                                                        <div style='width:550px;'><span class="hide list_id"><?=$assessment[$i]['id']?></span><?php echo ($i+1).': '.$assessment[$i]['content']; ?></div>
                                                    </td>
                                                    <td class="td2">
                                                        <input type="radio" name="brand_input<?php echo $i+1;?>" score="0" class="never" />
                                                    </td>
                                                    <td class="td3">
                                                        <input type="radio" name="brand_input<?php echo $i+1;?>" score="1" class="sometimes" />
                                                    </td>
                                                    <td class="td4">
                                                        <input type="radio" name="brand_input<?php echo $i+1;?>" score="3" class="always" />
                                                    </td>
                                                </tr>
                                                <?php endfor; ?>                                                
                                            </table>
                                            <div class="goNext"></div>
                                        </div>
                            		</div>
                                  <div class="slide_item slide_item2 clearfix">
                                    <div class="content_center">
                                      <div class="fontItalic font24 black">
                                        <?php echo $assessment_1; ?>
                                      </div>
                                      <div class="fontItalic font16 family_normal mt15">
                                        <?php echo $assessment_2; ?>
                                        <br />
                                        <?php echo $assessment_3; ?>
                                      </div>
                                      <div class="font16 mt15">
                                        <?php echo $assessment_4; ?>
                                      </div>
                                      <table class="form_question font16 mt15 lineHeight30">
                                        <tr>
                                          <td class="td1">
                                          </td>
                                          <td class="td2">
                                            <?php echo $assessment_5; ?>
                                          </td>
                                          <td class="td3">
                                            <?php echo $assessment_6; ?>
                                          </td>
                                          <td class="td4">
                                            <?php echo $assessment_7; ?>
                                          </td>
                                        </tr>
                                        <?php for($i = 5;$i< 10;$i++):?>
                                        <tr class="has_input">
                                          <td class="td1">
                                            <div style='width:550px;'>
                                              <span class="hide list_id">
                                                <?=$assessment[$i]['id']?>
                                              </span>
                                              <?php echo ($i+1).': '.$assessment[$i]['content']; ?>
                                            </div>
                                          </td>
                                          <td class="td2">
                                            <input type="radio" name="brand_input<?php echo $i+1;?>" score="0" class="never" />
                                          </td>
                                          <td class="td3">
                                            <input type="radio" name="brand_input<?php echo $i+1;?>" score="1" class="sometimes" />
                                          </td>
                                          <td class="td4">
                                            <input type="radio" name="brand_input<?php echo $i+1;?>" score="3" class="always" />
                                          </td>
                                        </tr>
                                        <?php endfor; ?>
                                      </table>
                                      <div class="goNext"></div>
                                    </div>
                                  </div>
                                    <div class="slide_item slide_item3 clearfix">
                        				<div class="content_center">
                                            <div class="fontItalic font24 black"><?php echo $assessment_1; ?></div>
                                            <div class="fontItalic font18 family_normal mt30">
                                                <?php echo $assessment_8; ?><br />
                                                <?php echo $assessment_9; ?>
                                            </div>
                                            <div class="font18 mt30">
                                                <?php echo $assessment_10; ?>
                                            </div>
                                            <p class="font18 family_normal mt40"><?php echo $assessment_11; ?>:</p>
                                            <p class="mt10"><input type="text" class="grayinput input_name" /></p>
                                            <p class="font18 mt20 family_normal"><?php echo $assessment_12  ; ?>:</p>
                                            <p class="mt10"><input type="text" class="grayinput input_company" /></p>
                                            <p class="font18 mt20 family_normal"><?php echo $assessment_13; ?>:</p>
                                            <p class="mt10 clearfix">
                                            	<input type="text" class="grayinput input_left input_email" />
                                            	<span class="get_score"><?php echo $assessment_14; ?></span>
                                            </p>
                                        </div>
                            		</div>
                                </div>
                                <a href="#" class="next" style="display:none;"><img src="<?php echo MEDIA_PATH; ?>images/26.gif" width="19" height="33" alt="Arrow Next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
   	</div>  
   
