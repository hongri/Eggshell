			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Video Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Video
								</div>
								<div class="btn icon-5 disabled">
									Edit Video
								</div>
								<div class="btn icon-2 disabled">
									Delete Video
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="VIDEO">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>ID</th>
										<th class="hide">Image</th>
										<th class="hide">Video Code</th>
										<th>Video Code</th>
									</tr>
							    <?php foreach($videolist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><span class="list_id"></span>.</td>
										<td class="hide"><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="130" height="80" /></td>
										<td class="hide" title='<?php echo $value['description']; ?>'  alt='<?php echo $value['description']; ?>'>
											鼠标hover可以看到视频代码
										</td>
										<td title='<?php echo $value['description']; ?>'  alt='<?php echo $value['description']; ?>'>鼠标hover可以看到视频代码</td>								
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
			<div id="addVideo" class="hide" title="增加Video">   
			<form action="<?php echo ROOT_PATH;?>admin/video_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传 130*80 像素的图片</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr class="hide">
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addVideo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editVideo" class="hide" title="编辑Video">  
	        <form action="<?php echo ROOT_PATH;?>admin/video_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="id" class="inputtxt input_id" /></td>

	                    	</tr>
	                    	<tr class="hide">
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">
	                    			<span class="gray">建议上传 130*80 像素的图片</span>                 			
	                    		</td>
	                    	</tr>	                        
	                    	<tr class="hide">
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editVideo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteVideo" class="hide" title="删除Video">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteVideo').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
