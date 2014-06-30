			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							How We Do Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add How We Do
								</div>
								<div class="btn icon-5 disabled">
									Edit How We Do
								</div>
								<div class="btn icon-2 disabled">
									Delete How We Do
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="HOWWEDO">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th>Filed</th>
										<th>Image</th>
										<th>Video Code</th>
										<th>Description</th>
									</tr>
							    <?php foreach($howwedolist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td><?php echo $value['filed']; ?></td>	
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="130" height="80" /></td>
										<td title='<?php echo $value['video']; ?>'  alt='<?php echo $value['video']; ?>'>
											<?php if($value['video']==''): ?>
                                            	只有图片，没有视频
                                            <?php endif;?>
                                            <?php if($value['video']!=''): ?>
                                            	鼠标hover可以看到视频代码
                                            <?php endif;?>
										</td>
										<td class="gray"><?php echo $value['description']; ?></td>								
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
			<div id="addHowwedo" class="hide" title="增加How We Do">   
			<form action="<?php echo ROOT_PATH;?>admin/Howwedo_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2" colspan="2">
	                    			<select name="filed" class="select_filed">
	                    				<option value="Audit">Brand Audit</option>
	                    				<option value="Strategic">Brand Strategy</option>
	                    				<option value="Identity">Brand Identity</option>
	                    				<option value="Management">Brand Management</option>
	                    				<option value="Experience">Brand Experience</option>
	                    				<option value="Retain">Brand Retaining</option>
	                    			</select>
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">如果只有图片，Video Code请为空</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="video" class="textarea textarea_video" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="description" class="inputtxt input_description" /></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addHowwedo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editHowwedo" class="hide" title="编辑How We Do">  
	        <form action="<?php echo ROOT_PATH;?>admin/Howwedo_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="id" class="inputtxt input_id" /></td>

	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2" colspan="2">
	                    			<select name="filed"  class="select_filed">
	                    				<option value="Audit">Brand Audit</option>
	                    				<option value="Strategic">Brand Strategy</option>
	                    				<option value="Identity">Brand Identity</option>
	                    				<option value="Management">Brand Management</option>
	                    				<option value="Experience">Brand Experience</option>
	                    				<option value="Retain">Brand Retaining</option>
	                    			</select>
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">如果只有图片，Video Code请为空</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="video" class="textarea textarea_video" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="description" class="inputtxt input_description" /></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editHowwedo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteHowwedo" class="hide" title="删除How We Do">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteHowwedo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
