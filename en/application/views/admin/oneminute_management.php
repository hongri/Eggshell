			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							图片管理
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Picture
								</div>
								<div class="btn icon-5 disabled">
									Edit Picture
								</div>
								<div class="btn icon-2 disabled">
									Delete Picture
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="PICTURE_MANAGEMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Image</th>
										<th>Filed</th>
										<th>Description</th>
									</tr>
							    <?php foreach($picturelist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['images']; ?>" height="80" /></td>
										<td><?php echo $value['filed']; ?></td>
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
			<div id="addPicture" class="hide" title="增加Picture">   
			<form action="<?php echo ROOT_PATH;?>admin/picture_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
                        	<tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2" colspan="2">
                                	<select name="filed">
	                    				<option value="Cases">Cases</option>
	                    				<option value="Clients" selected="selected">Clients</option>
	                    			</select>
                                </td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">Case:380*185; Client：373*104</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addPicture').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editPicture" class="hide" title="编辑Picture">  
	        <form action="<?php echo ROOT_PATH;?>admin/picture_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="id" class="inputtxt input_id" /></td>

	                    	</tr>
                            <tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2" colspan="2">
                                	<select name="filed" class="select_picture">
	                    				<option value="Cases">Cases</option>
	                    				<option value="Clients" selected="selected">Clients</option>
	                    			</select>
                                </td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">Case:380*185; Client：373*104</span>               			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editPicture').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deletePicture" class="hide" title="删除Picture">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deletePicture').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
