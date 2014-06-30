			<div id="sidebar">
				<div class="title">
					<div class="m_bg">
						Eggshell
					</div>
				</div>
				<div class="datacenter">
					<div class="m_bg">
						<div class="div-title">
							选择语言：
						</div>
						<div class="div-select">
							<select class="select" id="change_language">
								<option value='en' selected="selected">英语</option>
								<option value='ch'>中文简体</option>
								<option value='ch_hk'>中文繁体</option>
							</select>
						</div>
					</div>
					<script type="text/javascript">
						$(function () { 
							SelectEx.init(20, 40); 
							$('#change_language').change(function(){
								var s_value = $(this).val();
								if(s_value == 'ch_hk')
									window.location.href = 'http://www.eggshell.com.hk/ch_hk/admin';
								else if(s_value == 'ch')
									window.location.href = 'http://www.eggshell.com.hk/ch/admin';
								else
									window.location.href = 'http://www.eggshell.com.hk/en/admin';
							})
						});
					</script>
				</div>
				<div class="trees blockTextLink">
					<div class="tree tree-expand">
						<div class="name">
							Home
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/home_management" class="<?php if($page_name=='home') echo 'current'; ?>">Home首页</a></li>
						    <li class="node"><a href="<?=ROOT_PATH?>admin/nav_management" class="<?php if($page_name=='nav') echo 'current'; ?>">导航管理</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/footer_management" class="<?php if($page_name=='footer') echo 'current'; ?>">页脚管理</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							Contact Us
						</div>
						<ul class="nodes">
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/contactus_management" class="<?php if($page_name=='contactus') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/contactus" class="<?php if($page_name=='contact') echo 'current'; ?>">Contact Us</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/recruitment" class="<?php if($page_name=='recruitment') echo 'current'; ?>">Recruitment</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							FAQ
						</div>
						<ul class="nodes">
                            <li class="node"><a href="<?=ROOT_PATH?>admin/faq" class="<?php if($page_name=='faq') echo 'current'; ?>">FAQ管理</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							News
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/news" class="<?php if($page_name=='news') echo 'current'; ?>">News管理</a></li>
                            <li class="node"><a href="<?=ROOT_PATH?>admin/user_email" class="<?php if($page_name=='user_email') echo 'current'; ?>">User Email</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							Brand Assessment
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/brand_assessment" class="<?php if($page_name=='assessment') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/assessment_management" class="<?php if($page_name=='assessment_management') echo 'current'; ?>">Brand assessment管理</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/company_info" class="<?php if($page_name=='company_info') echo 'current'; ?>">Company info</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							Free Downloads
						</div>
						<ul class="nodes">
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/possibility_management" class="<?php if($page_name=='possibility') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/ecards_management" class="<?php if($page_name=='ecards') echo 'current'; ?>">Ecards</a></li>
							<!--
							<li class="node"><a href="<?=ROOT_PATH?>admin/downloads_management" class="<?php if($page_name=='download') echo 'current'; ?>">Downloads</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/products_management" class="<?php if($page_name=='products') echo 'current'; ?>">Experiment Products</a></li>
                            -->
						</ul>
					</div>
					
					<div class="tree">
						<div class="name">
							One Minute Tour
						</div>
						<ul class="nodes">
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/oneminute" class="<?php if($page_name=='oneminute') echo 'current'; ?>">公用元素</a></li>
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/picture_management" class="<?php if($page_name=='picture_management') echo 'current'; ?>">图片管理</a></li>
                            <li class="node"><a href="<?=ROOT_PATH?>admin/video_management" class="<?php if($page_name=='video') echo 'current'; ?>">Video</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							About Us
						</div>
						<ul class="nodes">
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/aboutus_management" class="<?php if($page_name=='aboutus') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/company_background_management" class="<?php if($page_name=='company_background') echo 'current'; ?>">Company Background</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/vision_management" class="<?php if($page_name=='vision') echo 'current'; ?>">Vision</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/social_posibility" class="<?php if($page_name=='social_posibility') echo 'current'; ?>">Social Responsiblity</a></li>
                            <li class="node"><a href="<?=ROOT_PATH?>admin/eggsheller_management" class="<?php if($page_name=='eggsheller') echo 'current'; ?>">Meet Eggshellers</a></li>
						</ul>
					</div>
					<div class="tree">
						<div class="name">
							How We Do
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/howwedo" class="<?php if($page_name=='howwedo') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/howwedo_management" class="<?php if($page_name=='howwedo_management') echo 'current'; ?>">How We Do管理</a></li>
						</ul>
					</div>
                    <div class="tree">
						<div class="name">
							Cases
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/cases" class="<?php if($page_name=='case') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/case_management" class="<?php if($page_name=='case_management') echo 'current'; ?>">Case管理</a></li>
						</ul>
					</div>
                    <div class="tree">
						<div class="name">
							Clients
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/client_management" class="<?php if($page_name=='client') echo 'current'; ?>">Clents管理</a></li>
						</ul>
					</div>
                    <div class="tree">
						<div class="name">
							EXPOSURE
						</div>
						<ul class="nodes">
                        	<li class="node"><a href="<?=ROOT_PATH?>admin/press" class="<?php if($page_name=='press') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/press_management" class="<?php if($page_name=='press_management') echo 'current'; ?>">EXPOSURE管理</a></li>
						</ul>
					</div>
                    <div class="tree">
						<div class="name">
							Brand Shop
						</div>
						<ul class="nodes">
							<li class="node"><a href="<?=ROOT_PATH?>admin/brand_shop" class="<?php if($page_name=='shop') echo 'current'; ?>">公用元素</a></li>
							<li class="node"><a href="<?=ROOT_PATH?>admin/shop_management" class="<?php if($page_name=='shop_management') echo 'current'; ?>">Brand shop管理</a></li>
						</ul>
					</div>
                    
                    
				</div>
			</div>
		</div>
	</div>
</body>
</html>
