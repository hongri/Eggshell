			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Eggsheller Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Eggsheller
								</div>
								<div class="btn icon-5 disabled">
									Edit Eggsheller
								</div>
								<div class="btn icon-2 disabled">
									Delete Eggsheller
								</div>
                                <div class="paginator"><?php echo $this->pagination->create_links(); ?></div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="EGGSHELLER">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>Name</th>
										<th>Little Image</th>
										<th>Image</th>
										<th>Pinterest</th>
										<th>Position</th>
										<th>Filed</th>
										<th>Strength</th>
										<th>Experience</th>
										<th>Detail</th>
									</tr>
							    <?php foreach($eggshellerlist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><?php echo $value['name']; ?></td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['photo']; ?>" width="60" height="60" /></td>										
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="60" height="87" /></td>										
										<td title="<?php echo $value['pinterest']; ?>"  alt="<?php echo $value['pinterest']; ?>">
											<?php if(strlen($value['pinterest'])>20) echo substr($value['pinterest'],0,20).'...'; else echo $value['pinterest']; ?>
										</td>
										<td title="<?php echo $value['email']; ?>"  alt="<?php echo $value['email']; ?>">
											<?php if(strlen($value['email'])>20) echo substr($value['email'],0,20).'...'; else echo $value['email']; ?>
										</td>
										<td><?php echo $value['filed']; ?></td>
										<td title="<?php echo $value['content']; ?>"  alt="<?php echo $value['content']; ?>">
											<?php if(strlen($value['content'])>40) echo substr($value['content'],0,20).'...'; else echo $value['content']; ?>
										</td>
										<td title='<?php echo $value['interview']; ?>'  alt='<?php echo $value['interview']; ?>'>
											<?php if(strlen($value['interview'])>20) echo substr($value['interview'],0,20).'...'; else echo $value['interview']; ?>
										</td>
										<td><a href="<?php echo ROOT_PATH;?>admin/eggsheller_detail/<?php echo $value['id']; ?>" class="blue_btn">编辑详细</a></td>
									</tr>
								<?php endforeach; ?>
								</table>
								<style type="text/css">
								.cell_tb_list table td,.cell_tb_list table th{text-align: left; padding-left:10px;padding-right: 10px;}
								</style>
							</div>  
					    </div>
					</div>
				</div>
			</div>
			<div id="addEggsheller" class="hide" title="增加Eggsheller">   
			<form action="<?php echo ROOT_PATH;?>admin/eggsheller_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table style="width:550px;">
	                    	
	                    	<tr>
	                    		<td class="td1">Name:</td>
	                    		<td class="td2"><input type="text" name="name" class="inputtxt input_name" style="width:200px;padding:5px;" /><td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="filed">
	                    				<option value="Strategic">Strategic</option>
	                    				<option value="Advisors">Advisors</option>
	                    				<option value="Designer">Designer</option>
	                    			</select>
	                    		</td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Little Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_photo" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 75*75 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="image" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 260*180 像素的图片</span>                    			
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Pinterest:</td>
	                    		<td class="td2"><input type="text" name="pinterest" class="inputtxt input_pinterest" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Position:</td>
	                    		<td class="td2"><input type="text" name="email" class="inputtxt input_email" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Strength<br />/Category</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Experience<br/>/Motto</td>
	                    		<td class="td2" colspan="2"><textarea name="interview" class="textarea textarea_interview" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addEggsheller').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editEggsheller" class="hide" title="编辑Eggsheller">  
	        <form action="<?php echo ROOT_PATH;?>admin/eggsheller_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table style="width:550px;">
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2"><input type="text" name="id" class="inputtxt input_id" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Name:</td>
	                    		<td class="td2"><input type="text" name="name" class="inputtxt input_name" style="width:200px;padding:5px;" /><td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Filed:</td>
	                    		<td class="td2">
	                    			<select name="filed" class="select_eggsheller">
	                    				<option value="Strategic">Strategic</option>
	                    				<option value="Advisors">Advisors</option>
	                    				<option value="Designer">Designer</option>
	                    			</select>
	                    		</td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Little Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_photo" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 75*75 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	

	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="image" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 260*180 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	
	                    	<tr>
	                    		<td class="td1">Pinterest:</td>
	                    		<td class="td2"><input type="text" name="pinterest" class="inputtxt input_pinterest" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>   	                        
	                    	<tr>
	                    		<td class="td1">Position:</td>
	                    		<td class="td2"><input type="text" name="email" class="inputtxt input_email" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3"></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Strength<br />/Category</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Experience<br/>/Motto</td>
	                    		<td class="td2" colspan="2"><textarea name="interview" class="textarea textarea_interview" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editEggsheller').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteEggsheller" class="hide" title="删除Eggsheller">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteEggsheller').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
