			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							FAQ
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add FAQ
								</div>
								<div class="btn icon-5 disabled">
									Edit FAQ
								</div>
								<div class="btn icon-2 disabled">
									Delete FAQ
								</div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="FAQ">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Question</th>
										<th>Answer</th>
									</tr>
							   <?php foreach($faqlist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td><?php echo $value['question']; ?></td>
										<td title="<?php echo $value['answer']; ?>"  alt="<?php echo $value['answer']; ?>">
											<?php if(strlen($value['answer'])>50) echo substr($value['answer'],0,50).'...'; else echo $value['answer']; ?>
										</td>
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
			<div id="addFAQ" class="hide" title="增加FAQ">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Question:</td>
	                    		<td class="td2"><textarea class="textarea textarea_q"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Answer:</td>
	                    		<td class="td2"><textarea class="textarea textarea_a"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addFAQ').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="editFAQ" class="hide" title="编辑FAQ">                                                                                                                                                  
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2"><span class="span_id"></span></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Question:</td>
	                    		<td class="td2"><textarea class="textarea textarea_q"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Answer:</td>
	                    		<td class="td2"><textarea class="textarea textarea_a"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editFAQ').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
	        <div id="deleteFAQ" class="hide" title="删除FAQ">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteFAQ').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
