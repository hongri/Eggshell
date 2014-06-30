			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							How We Do Element
						</div>
					</div>
					<!-- <div class="quickbar"> -->
					<!-- 	<div class="btns"> -->
					<!-- 		<div class="btn-line clearfix"> -->
					<!-- 			<div class="btn icon-1"> -->
					<!-- 				创建 -->
					<!-- 			</div> -->
					<!-- 			<div class="btn icon-2"> -->
					<!-- 				删除 -->
					<!-- 			</div> -->
					<!-- 			<div class="btn icon-5"> -->
					<!-- 				修改 -->
					<!-- 			</div> -->
					<!-- 		</div> -->
					<!-- 	</div> -->
					<!-- </div> -->
					<div class="mainContent" id="HOWWEDO_MANAGEMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table style="table-layout:fixed;">
									<colgroup>
										<col width="10%" />
										<col width="60%" />
										<col width="10%" />
										<col width="20%" />
									</colgroup>
									<tr>
										<th>ID</th>
										<th>内容</th>
										<th>操作</th>
										<th>描述</th>
									</tr>
							   <?php foreach($howwedolist as $key => $value): ?>
									<tr>
									   <td><span><?php echo $value['id']; ?></span>. </td>
										<td title="<?php echo trim($value['value']); ?>" alt="<?php echo trim($value['value']); ?>"><?php echo trim($value['value']); ?></td>
										<td><span class="blue_btn edit_value">edit</span></td>
										<td><span class="gray"><?=$value['description']?></span></td>
									</tr>
								<?php endforeach; ?>
								</table>
								<style type="text/css">
								.cell_tb_list table td,.cell_tb_list table th{text-align: left; padding-left:40px;padding-right: 20px; overflow: hidden;}
								</style>
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
