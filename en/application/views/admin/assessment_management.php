			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Brand Assessment Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Assessment
								</div>
								<div class="btn icon-5 disabled">
									Edit Assessment
								</div>
								<div class="btn icon-2 disabled">
									Delete Assessment
								</div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="ASSESSMENT_MANAGEMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Content</th>
										<th>Never Count</th>
										<th>Sometimes Count</th>
										<th>Always Count</th>
									</tr>
							   <?php foreach($assessmentlist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td title="<?php echo $value['content']; ?>"  alt="<?php echo $value['content']; ?>">
											<?php if(strlen($value['content'])>60) echo substr($value['content'],0,60).'...'; else echo $value['content']; ?>
										</td>
										<td><?php echo $value['never']; ?></td>
										<td><?php echo $value['sometimes']; ?></td>
										<td><?php echo $value['always']; ?></td>
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
			<div id="addAssessment" class="hide" title="增加Assessment">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2"><textarea class="textarea textarea_content"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addAssessment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="editAssessment" class="hide" title="编辑Assessment">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2"><span class="span_id"></span></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2"><textarea class="textarea textarea_content"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editAssessment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="deleteAssessment" class="hide" title="删除Assessment">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteAssessment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
