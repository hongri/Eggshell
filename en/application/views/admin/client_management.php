			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Client Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Client
								</div>
								<div class="btn icon-5 disabled">
									Edit Client
								</div>
								<div class="btn icon-2 disabled">
									Delete Client
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="CLIENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Image</th>
										<th>Url</th>
										<th>Description</th>
									</tr>
							    <?php foreach($clientlist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" height="80" /></td>
										<td title="<?php echo $value['content']; ?>"  alt="<?php echo $value['content']; ?>">
											<?php if(strlen($value['content'])>60) echo substr($value['content'],0,60).'...'; else echo $value['content']; ?>
										</td>
										<td title="<?php echo $value['description']; ?>"  alt="<?php echo $value['description']; ?>">
											<?php if(strlen($value['description'])>60) echo substr($value['description'],0,60).'...'; else echo $value['description']; ?>
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
			<div id="addClient" class="hide" title="增加Client">   
			<form action="<?php echo ROOT_PATH;?>admin/client_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传高度120像素的图片</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Url:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addClient').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editClient" class="hide" title="编辑Client">  
	        <form action="<?php echo ROOT_PATH;?>admin/client_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="id" class="inputtxt input_id" /></td>

	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传高度120像素的图片</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Url:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editClient').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteClient" class="hide" title="删除Client">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteClient').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
