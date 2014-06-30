	<script type="text/javascript">
		calculateWhitespace();
		posibility_video();
        $(document).ready(function(){
            var video = JSON.parse('<?php echo addslashes(json_encode($video)); ?>');
            $(".posibility_video_ul li").each(function(index,element){
                $(this).click(function(){
                    $(".posibility_video").html(video[index].description);
                    $(".posibility_video_description").html(video[index].content);
                })
            })
        })
    </script>    
    <div class="page_bg_left">
    <div id="content">
    	<div class="wrapper_content">
            <div class="slider1">
                <div class="slide-content">
                    <div id="posibility_video" class="posibility">
                        <div class="main_height">
                        	<div class="content_center clearfix">
                                <div class="content_left left font18 family_normal black lineHeight30">
                                	<div class="clearfix">
                                    	<div class="left left1">
                                                	<div class="posibility_video">
                                                        <?php echo $video[0]['description'];?>
                                                    </div>
                                                    <div class="mt20 font16 posibility_video_description"><?php echo $video[0]['content'];?></div>
                                        </div>
                                        <div class="left left2">
                                        	<div class="posibility_video_ul">
                                                <ul>
                                                <?php foreach($video as $key => $value): ?>
                                                    <li class="<?php if($key==(count($video)-1)) echo 'last';?>"><img class="video_<?php echo $value['id'];?>" src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="130" height="80" style="border:1px solid #ccc; display:inline_block" /></li>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <span class="prev"></span>
                                            <span class="next"></span>
                                        </div>
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
                                        <li class="possibility_1"><?php echo $possibility_1; ?><br /></li>
                                        <li><?php echo $possibility_2; ?><br /></li>
                                        <li><?php echo $possibility_3; ?><br /></li>
                                        <li class="possibility_4 current"><?php echo $possibility_4; ?><br /></li>
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
