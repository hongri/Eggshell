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
								<div class="btn icon-7">
									查看所有Email
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
					<div class="mainContent" id="USEREMAIL">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<!--<th><input type="checkbox" id="check_all" /></th>-->
										<th>ID</th>
										<th>Email</th>
										<th>Time</th>
									</tr>
							   <?php foreach($useremaillist as $key => $value): ?>
									<tr>
										<!--<td><input type="checkbox" class="egg_checkbox" /></td>-->
										<td><span class="list_id"></span>.</td>
										<td title="<?php echo $value['email']; ?>" alt="<?php echo $value['email']; ?>">
											<span><?php if(strlen($value['email'])>30) echo substr($value['email'],0,30).'...'; else echo $value['email']; ?></span>
										</td>
										<td><?php echo $value['time']; ?></td>
									</tr>
								<?php endforeach; ?>
								</table>
							</div>  
					    </div>
					</div>
				</div>
				<div class="draggle">
				</div>
				<div id="detail">
					<div class="title">
						<div class="m_bg">
							查看所有Email
						</div>
						<div class="m_unselect">
						</div>
						<div class="btn_hide">
						</div>
					</div>
					<div class="detailContent">
						<div class="detail_content" style="padding:20px;">
 								<?php foreach($allEmail as $key => $value): ?>
									<?php echo $value['email'].';'; ?>
								<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
