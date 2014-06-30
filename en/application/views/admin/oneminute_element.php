			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							One Minute Tour Element
						</div>
					</div>
					<div class="mainContent" id="ONEMINUTE">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table>
									<tr>
										<th>ID</th>
										<th>内容</th>
										<th>操作</th>
										<th>描述</th>
									</tr>
							   <?php foreach($oneminutelist as $key => $value): ?>
									<tr>
									   <td><span><?php echo $value['id']; ?></span>. </td>
										<td><div style="width:600px;overflow: auto;"><?php echo $value['value']; ?></div></td>
										<td><span class="blue_btn edit_value">edit</span></td>
										<td><span class="gray"><?=$value['description']?></span></td>
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
