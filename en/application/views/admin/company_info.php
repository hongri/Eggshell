			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Company Infomation
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div style="width:500px; float:left;">
									'Result'指对应的id的Assessment的选择结果。
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
					<div class="mainContent" id="COMPANY_INFO">
						<div class="main_content">
							<div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<!--<th><input type="checkbox" id="check_all" /></th>-->
										<th>ID</th>
										<th>Name</th>
										<th>Company</th>
										<th>Email</th>
										<th>Result(鼠标hover可看到选择的结果)</th>
										<th>Time</th>
									</tr>
									<?php foreach($companylist as $key => $value): ?>
									<tr>
										<!--<td><input type="checkbox" class="egg_checkbox" /></td>-->
										<td><span class="list_id"></span>.</td>
										<td title="<?php echo $value['name']; ?>" alt="<?php echo $value['name']; ?>">
											<span><?php if(strlen($value['name'])>20) echo substr($value['name'],0,20).'...'; else echo $value['name']; ?></span>
										</td>
										<td title="<?php echo $value['company']; ?>" alt="<?php echo $value['company']; ?>">
											<span><?php if(strlen($value['company'])>30) echo substr($value['company'],0,30).'...'; else echo $value['company']; ?></span>
										</td>
										<td title="<?php echo $value['email']; ?>" alt="<?php echo $value['email']; ?>">
											<span><?php if(strlen($value['email'])>30) echo substr($value['email'],0,30).'...'; else echo $value['email']; ?></span>
										</td>
										<td title="<?php echo $value['result']; ?>" alt="<?php echo $value['result']; ?>"><?php echo $value['score']; ?> 分</td>
										<td><?php echo $value['time']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
							<style type="text/css">
							.cell_tb_list table td,.cell_tb_list table th{text-align: left; padding-left:20px;padding-right: 20px;}
							</style>
						</div>  
					</div>
				</div>
			</div>
		</div>
