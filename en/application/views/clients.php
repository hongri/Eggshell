    <script type="text/javascript">
    	$(document).ready(function(){
			clients();
		})
    </script>
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="clients">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                            		<div class="title"></div>
                                	<div id="slides">
                                        <div class="slides_container">
                                            <?php for($i = 0;$i<ceil(count($client)/27);$i++):?>                                                
                                            <div class="slide_item" style="text-align:center;">
                                                <?php for($j = $i * 27; $j < min(($i + 1)* 27,count($client)); $j ++):?>
                                                    <!--<a href="<?php echo $client[$j]['content'];?>" target="_blank">-->
                                                        <img src="<?php echo ROOT_PATH.'upload/'.$client[$j]['image']; ?>" title="<?php echo $client[$j]['description'];?>" alt="<?php echo $client[$j]['description'];?>" height="90"/>
                                                    <!--</a>-->
                                                <?php endfor; ?>
                                            </div>
                                            <?php endfor;?>
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
   
