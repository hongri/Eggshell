			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Contact us
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<!-- <div class="btn icon-2">
									删除
								</div> -->
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
					<div class="mainContent" id="CONTACTUS">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<!--<th><input type="checkbox" id="check_all" /></th>-->
										<!--<th>ID</th>-->
										<th>Name</th>
										<th>Company</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Comments</th>
										<th>Time</th>
									</tr>
							   <?php foreach($contactus as $key => $value): ?>
									<tr>
										<!--<td><input type="checkbox" class="egg_checkbox" /></td>
										<td><span><?php echo $value['id']; ?></span>.</td>-->
										<td title="<?php echo $value['name']; ?>" alt="<?php echo $value['name']; ?>">
											<span><?php if(strlen($value['name'])>10) echo substr($value['name'],0,10).'...'; else echo $value['name']; ?></span>
										</td>
										<td title="<?php echo $value['company']; ?>" alt="<?php echo $value['company']; ?>">
											<span><?php if(strlen($value['company'])>20) echo substr($value['company'],0,20).'...'; else echo $value['company']; ?></span>
										</td>
										<td title="<?php echo $value['email']; ?>" alt="<?php echo $value['email']; ?>">
											<span><?php if(strlen($value['email'])>20) echo substr($value['email'],0,20).'...'; else echo $value['email']; ?></span>
										</td>
										<td title="<?php echo $value['phone']; ?>" alt="<?php echo $value['phone']; ?>">
											<span><?php if(strlen($value['phone'])>15) echo substr($value['phone'],0,15).'...'; else echo $value['phone']; ?></span>
										</td>
										<td title="<?php echo $value['comments']; ?>" alt="<?php echo $value['comments']; ?>">
											<span><?php if(strlen($value['comments'])>40) echo substr($value['comments'],0,40).'...'; else echo $value['comments']; ?></span>
										</td>
										<td><?php echo $value['time']; ?></td>
									</tr>
								<?php endforeach; ?>
								</table>
							</div>  
					    </div>
					</div>
				</div>
				<!-- <div class="draggle"> -->
				<!-- </div> -->
				<!-- <div id="detail"> -->
				<!-- 	<div class="title"> -->
				<!-- 		<div class="m_bg"> -->
				<!-- 			修改导航 -->
				<!-- 		</div> -->
				<!-- 		<div class="m_unselect"> -->
				<!-- 		</div> -->
				<!-- 		<div class="btn_hide"> -->
				<!-- 		</div> -->
				<!-- 	</div> -->
				<!-- 	<div class="detailContent"> -->
				<!-- 	</div> -->
				<!-- </div> -->
			</div>
