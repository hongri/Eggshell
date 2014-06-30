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
								<div class="btn icon-1">
									Add Position
								</div>
								<div class="btn icon-5 disabled">
									Edit Position
								</div>
								<div class="btn icon-2 disabled">
									Delete Position
								</div>
							</div>
						</div>
					</div>
					<div class="mainContent" id="RECRUITMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>Position Name</th>
										<th>Position Type</th>
										<th>Position Description</th>
									</tr>
							   <?php foreach($recruitmentlist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><?php echo $value['name']; ?></td>
										<td><?php echo $value['type']; ?></td>
										<td><?php echo $value['content']; ?></td>
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
			<div id="addRecruitment" class="hide" title="增加招聘信息">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Position Name:</td>
	                    		<td class="td2"><input type="text" class="inputtxt input_name" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Position Type:</td>
	                    		<td class="td2"><input type="text" class="inputtxt input_type" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Position Description:</td>
	                    		<td class="td2"><textarea class="textarea textarea_content"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1"></td>
	                    		<td class="td2 gray">* Position Description 请用 '&lt;br&gt;' 分隔;</td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addRecruitment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="editRecruitment" class="hide" title="编辑招聘信息">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">Position ID:</td>
	                    		<td class="td2"><span class="span_id"></span></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Position Name:</td>
	                    		<td class="td2"><input type="text" class="inputtxt input_name" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Position Type:</td>
	                    		<td class="td2"><input type="text" class="inputtxt input_type" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Position Description:</td>
	                    		<td class="td2"><textarea class="textarea textarea_content"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1"></td>
	                    		<td class="td2 gray">* Position Description 请用 '&lt;br&gt;' 分隔;</td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editRecruitment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="deleteRecruitment" class="hide" title="删除招聘信息">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteRecruitment').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
