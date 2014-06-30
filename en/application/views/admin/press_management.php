			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Press Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Press
								</div>
								<div class="btn icon-5 disabled">
									Edit Press
								</div>
								<div class="btn icon-2 disabled">
									Delete Press
								</div>
								<div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="PRESS">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>Filed</th>
										<th>Image</th>
										<th>Little Image</th>
										<th>Events</th>
										<th>Description</th>
										<th>Date</th>
                                        <th>Video Code</th>
									</tr>
							    <?php foreach($presslist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><?php echo $value['filed']; ?></td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="120" height="60" /></td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" width="20" height="60" /></td>										
										<td title="<?php echo $value['events']; ?>"  alt="<?php echo $value['events']; ?>">
											<?php if(strlen($value['events'])>40) echo substr($value['events'],0,40).'...'; else echo $value['events']; ?>
										</td>
										<td title="<?php echo $value['description']; ?>"  alt="<?php echo $value['description']; ?>">
											<?php if(strlen($value['description'])>40) echo substr($value['description'],0,40).'...'; else echo $value['description']; ?>
										</td>
										<td><?php echo $value['date']; ?></td>
                                        <?php if($value['video']!==''): ?>
                                        <td title='<?php echo $value['video']; ?>'  alt='<?php echo $value['video']; ?>'>
											鼠标hover可以看到视频代码
										</td>
                                        <?php else: ?>
                                        <td title='<?php echo $value['video']; ?>'>木有视频</td>
                                        <?php endif;?>
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
			<div id="addPress" class="hide" title="增加Press">   
			<form action="<?php echo ROOT_PATH;?>admin/press_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	
	                    	<tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="filed">
	                    				<option value="Video">Video</option>
	                    				<option value="Press">Press</option>
	                    				<option value="Events">Events</option>
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
	                    			<span class="gray">建议上传 1000*600 像素的图片</span>                    			
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Little Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="image" class="input_photo" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 300*85 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Events:</td>
	                    		<td class="td2"><input type="text" name="events" class="inputtxt input_events" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Date:</td>
	                    		<td class="td2"><input type="text" name="date" class="inputtxt input_date" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3">
	                    			<span class="gray">格式：YYYY-MM-DD</span>
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
                            <tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="video" class="textarea textarea_video" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addPress').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editPress" class="hide" title="编辑Press">  
	        <form action="<?php echo ROOT_PATH;?>admin/press_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2"><input type="text" name="id" class="inputtxt input_id" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="filed" class="select_press">
	                    				<option value="Video">Video</option>
	                    				<option value="Press">Press</option>
	                    				<option value="Events">Events</option>
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
	                    			<span class="gray">建议上传 1000*600 像素的图片</span>                    			
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Little Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="image" class="input_photo" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 300*85 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Events:</td>
	                    		<td class="td2"><input type="text" name="events" class="inputtxt input_events" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Date:</td>
	                    		<td class="td2"><input type="text" name="date" class="inputtxt input_date" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3">
	                    			<span class="gray">格式：YYYY-MM-DD</span>
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Description:</td>
	                    		<td class="td2" colspan="2"><textarea name="description" class="textarea textarea_description" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
                            <tr>
	                    		<td class="td1">Video Code:</td>
	                    		<td class="td2" colspan="2"><textarea name="video" class="textarea textarea_video" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editPress').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deletePress" class="hide" title="删除Press">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deletePress').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
