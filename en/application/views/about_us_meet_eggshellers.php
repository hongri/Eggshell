   <script src="<?php echo MEDIA_PATH; ?>js/jquery.masonry.min.js"></script>
	<script type="text/javascript">
		meet_eggshellers();
		meet_eggshellers_strategic();
    </script>
    <div class="page_bg_left">
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="about_us" class="meet_eggshellers meet_eggshellers_strategic_1">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                                <div class="content_left left font18 family_normal black lineHeight22">
                                    <div class="mt20">
                                    	<div id="eggshellers_slides">
                                            <div class="eggshellers_container">
                                               	<div>
                                    				<div id="slides">
                                                        <div class="slides_container">
                                                            <div class="slide_item clearfix">
                                                                <div class="left left_1">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/31.gif" width="200" alt="Slide 1">
                                                                    <ul class="strategic_ul strong font16 black lineHeight30 mt15">
                                                                        <li class="current">Visit my <img src="<?php echo MEDIA_PATH; ?>images/32.gif" /> page</li>
                                                                        <li>See my interview</li>
                                                                        <li>contact me</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="left left_2">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/30.gif" /><br />
                                                                    <div class="fontItalic font20 black mt10">Founder & Creative Director</div>
                                                                    <div class="black font14 strong mt10">WORK</div>
                                                                    <div class="black font14 mt10">Waiting for document...</div>
                                                                </div>                                                        
                                                            </div>
                                                            <div class="slide_item clearfix">
                                                                <div class="left left_1">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/31.gif" width="200" alt="Slide 1">
                                                                    <ul class="strategic_ul strong font16 black lineHeight30 mt15">
                                                                        <li class="current">Visit my <img src="<?php echo MEDIA_PATH; ?>images/32.gif" /> page</li>
                                                                        <li>See my interview</li>
                                                                        <li>contact me</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="left left_2">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/30.gif" /><br />
                                                                    <div class="fontItalic font20 black mt10">Founder & Creative Director</div>
                                                                    <div class="black font14 strong mt10">WORK</div>
                                                                    <div class="black font14 mt10">Waiting for document...</div>
                                                                </div>                                                        
                                                            </div>
                                                            <div class="slide_item clearfix">
                                                                <div class="left left_1">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/31.gif" width="200" alt="Slide 1">
                                                                    <ul class="strategic_ul strong font16 black lineHeight30 mt15">
                                                                        <li class="current">Visit my <img src="<?php echo MEDIA_PATH; ?>images/32.gif" /> page</li>
                                                                        <li>See my interview</li>
                                                                        <li>contact me</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="left left_2">
                                                                    <img src="<?php echo MEDIA_PATH; ?>images/30.gif" /><br />
                                                                    <div class="fontItalic font20 black mt10">Founder & Creative Director</div>
                                                                    <div class="black font14 strong mt10">WORK</div>
                                                                    <div class="black font14 mt10">Waiting for document...</div>
                                                                </div>                                                        
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            	</div>
                                                <div>
                                                	<div class="left content_left_left">
                                                        <ul class="strong font16 lineHeight40">
                                                            <li class="cur">All</li>
                                                            <li>Night Owls</li>
                                                            <li>Musicians</li>
                                                            <li>Dancers</li>
                                                            <li>Pet owners</li>
                                                            <li>Pinterest</li>
                                                            <li>HK</li>
                                                            <li>PRC</li>
                                                            <li>Overseas</li>
                                                        </ul>
                                                    </div>
                                                    <div class="left content_left_right">
                                                        <script>
                                                          $(function(){
                                                            
                                                            $('#container').masonry({
                                                              itemSelector: '.box'
                                                            });
                                                            $("#container .box > img:not('.firstImg')").click(function(){
                                                                    $(this).hide();
                                                                    $(this).next().fadeIn();
                                                                    $(this).parent().siblings().find(".box_detail").hide();
                                                                    $(this).parent().siblings().find("img").fadeIn();
                                                                    //$(this).parent().siblings().css({width:"75px"});
                                                                    $('#container').masonry({
                                                                      itemSelector: '.box'
                                                                    });
                                                            })
                                                            $("#container .firstImg").click(function(){
                                                                $("#container .box > img:eq(1)").trigger('click');
                                                            })
                                                            $("#container .box_close").click(function(){
                                                                $(this).parent().hide();
                                                                $(this).parent().prev().fadeIn();
                                                                $('#container').masonry({
                                                                  itemSelector: '.box'
                                                                });
                                                            })
                                                        
                                                          });
                                                        </script>
                                                        <div id="container" class="clearfix">
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1.gif" class="firstImg" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/2.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/3.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/4.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/5.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/6.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/7.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/8.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/9.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/10.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/11.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/12.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
            
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/2.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/3.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/4.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/5.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/6.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/7.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/8.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/9.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/10.gif"/>
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/11.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/12.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/2.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/3.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/4.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/5.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/6.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/7.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="box col1">
                                                                <img src="<?php echo MEDIA_PATH; ?>images/eggshellers/8.gif" />
                                                                <div class="box_detail hide">
                                                                    <div class="box_detail_content clearfix">
                                                                        <div class="left" style="width:80px;"><img src="<?php echo MEDIA_PATH; ?>images/eggshellers/1_1.gif" /></div>
                                                                        <div class="left mt15" style="width:75px;height:105px;">
                                                                            <span class="white font16">JOE LEE</span><br />
                                                                            <span class="white font12 lineHeight18">Senior Designer</span>
                                                                        </div>
                                                                        <div class="font16 white" style="padding:0 5px;">" Good Design is obvious. Great design is transparent. "</div>
                                                                    </div>
                                                                    <span class="box_close"></span>
                                                                    <a class="visit_pinterest font12 fontItalic white" href="#">Visit my Pinterest Profile</a>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about_us_nav strong gray font16 lineHeight35">
                                    	<span>Company Background</span> 
                                        | 
                                        <span>Vision</span>
                                        | 
                                        <span>Social Responsibility</span>
                                        | 
                                        <span class="cur">Meet EggShellers</span>
                                    </div>
                                </div>
                                <div class="content_right left font18 family_normal black lineHeight30">
                                	<div class="title">
                                    </div>
                                    <div class="quto gray">
                                    	____<br />
                                        Things always seem to be impossible until<br /> 
                                        they are done. I never think about tommorrow,<br />
                                        because they have come soon enough.<br />
                                    </div>
                                    <ul class="lineHeight30">
                                    	<li>
                                        	Strategic Team
                                        	<ul>
                                            	<li class="current stragegic_team_1"><span>Creative & Branding Director</span></li>
                                                <li><span>Associate and Sales Director</span></li>
                                                <li><span>Account Manager</span></li>
                                                <li><span>Media Researcher</span></li>
                                            </ul>
                                        </li>
                                        <li class="center">All Eggshellers</li>
                                        <li>Advisors
                                        	<ul>
                                            	<li><span>Advisors 1</span></li>
                                                <li><span>Advisors 2</span></li>
                                            </ul>
                                        </li>
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
    
