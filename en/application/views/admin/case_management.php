			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Case Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Case
								</div>
								<div class="btn icon-5 disabled">
									Edit Case
								</div>
								<div class="btn icon-2 disabled">
									Delete Case
								</div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="CASE_MANAGEMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Name</th>
										<th>Image</th>
										<th>Filed</th>
										<th>type</th>
                                        <th>detail(鼠标hover可看到全部)</th>
                                        <th>操作</th>
									</tr>
							    <?php foreach($caselist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td><?php echo $value['name']; ?></td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="60" height="60" /></td>
										<td>
											<?php echo $value['video']; ?>
										</td>
										<td><?php echo $value['type']; ?></td>
                                        <td title="<?php echo $value['detail']; ?>"  alt="<?php echo $value['detail']; ?>">
											<?php if(strlen($value['detail'])>40) echo substr($value['detail'],0,40).'...'; else echo $value['detail']; ?>
										</td>
                                        <td><a href="<?php echo ROOT_PATH;?>admin/case_management/<?php echo $value['id']; ?>">管理图片</a></td>
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
			<div id="addCase" class="hide" title="增加Case">   
			<form action="<?php echo ROOT_PATH;?>admin/case_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Name:</td>
	                    		<td class="td2"><input type="text" name="name" class="inputtxt input_name" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
                            <tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="video">
	                    				<option value="Client Project">Client Project</option>
	                    				<option value="Experimental Project">Experimental Project</option>
	                    			</select>
	                    		</td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传 175*175 像素的图片</span>                 			
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Type:</td>
	                    		<td class="td2" colspan="2">
	                    			<label><input type="checkbox" name="type[]" value="Audit" /> Audit</label>
	                    			<label><input type="checkbox" name="type[]" value="Identity" /> Identity</label>
	                    			<label><input type="checkbox" name="type[]" value="Experience" /> Experience</label>
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1"></td>
	                    		<td class="td2" colspan="2">
	                    			<label><input type="checkbox" name="type[]" value="Strategic" /> Strategic</label>
	                    			<label><input type="checkbox" name="type[]" value="Management" /> Management</label>
	                    			<label><input type="checkbox" name="type[]" value="Retain" /> Retain</label>
	                    		</td>
	                    	</tr>	                        
                            <tr>
	                    		<td class="td1">detail:</td>
	                    		<td class="td2" colspan="2"><textarea name="detail" class="textarea textarea_detail" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addCase').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editCase" class="hide" title="编辑Case">  
	        <form action="<?php echo ROOT_PATH;?>admin/case_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="id" class="inputtxt input_id" /></td>

	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Name:</td>
	                    		<td class="td2"><input type="text" name="name" class="inputtxt input_name" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
                            <tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="video" class="select_case">
	                    				<option value="Client Project">Client Project</option>
	                    				<option value="Experimental Project">Experimental Project</option>
	                    			</select>
	                    		</td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传 175*175 像素的图片</span>                 			
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Type:</td>
	                    		<td class="td2" colspan="2">
	                    			<label><input type="checkbox" name="type[]" value="Audit" class="Audit" /> Audit</label>
	                    			<label><input type="checkbox" name="type[]" value="Identity" class="Identity" /> Identity</label>
	                    			<label><input type="checkbox" name="type[]" value="Experience" class="Experience" /> Experience</label>
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1"></td>
	                    		<td class="td2" colspan="2">
	                    			<label><input type="checkbox" name="type[]" value="Strategic" class="Strategic" /> Strategic</label>
	                    			<label><input type="checkbox" name="type[]" value="Management" class="Management" /> Management</label>
	                    			<label><input type="checkbox" name="type[]" value="Retain" class="Retain"/> Retain</label>
	                    		</td>
	                    	</tr>
                            <tr>
	                    		<td class="td1">detail:</td>
	                    		<td class="td2" colspan="2"><textarea name="detail" class="textarea textarea_detail" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editCase').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteCase" class="hide" title="删除Case">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteCase').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
