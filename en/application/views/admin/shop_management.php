			<div class="content">
				<div id="main">
					<div class="title">
						<div class="m_bg">
							Brand Shop Management
						</div>
					</div>
					<div class="quickbar">
						<div class="btns">
							<div class="btn-line clearfix">
								<div class="btn icon-1">
									Add Brand Shop
								</div>
								<div class="btn icon-5 disabled">
									Edit Brand Shop
								</div>
								<div class="btn icon-2 disabled">
									Delete Brand Shop
								</div>
							</div>
						</div>
					</div>
				<div class="mainContent" id="BRAND_SHOP_MANAGEMENT">
                   <div class="main_content">
                    	 <div class="cell_tb_list">
								<table class="has_checkbox">
									<tr class='table_header'>
										<th><input type="checkbox" id="check_all" /></th>
										<th class="hide">ID</th>
										<th>Image</th>
										<th>Title</th>
										<th>Sub Title</th>
										<th>Content</th>
										<th>Style</th>
										<th>Photos</th>
										<th>Buy</th>
									</tr>
							    <?php foreach($brandshoplist as $key => $value): ?>
									<tr>
										<td><input type="checkbox" class="egg_checkbox" /></td>
										<td class="hide"><span><?php echo $value['id']; ?></span>.</td>
										<td><img src="<?php echo ROOT_PATH.'upload/'.$value['image']; ?>" width="180" height="80" /></td>
										<td><?php echo $value['title']; ?></td>
										<td><?php echo $value['subtitle']; ?></td>
										<td title="<?php echo $value['content']; ?>"  alt="<?php echo $value['content']; ?>">
											<?php if(strlen($value['content'])>40) echo substr($value['content'],0,40).'...'; else echo $value['content']; ?>
										</td>
										<td><?php echo $value['style']; ?></td>
										<td><?php echo $value['photos']; ?></td>
										<td><?php echo $value['buy']; ?></td>
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
			<div id="addShop" class="hide" title="增加Shop">   
			<form action="<?php echo ROOT_PATH;?>admin/shop_insert" method="post" enctype="multipart/form-data">                                                                                                                                               
         		<div class="dialog_content" style="padding:20px 40px;">
            		<div>
	                    <table>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 900*400 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Title:</td>
	                    		<td class="td2"><input type="text" name="title" class="inputtxt input_title" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3" rowspan='2'></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Subtitle:</td>
	                    		<td class="td2"><input type="text" name="subtitle" class="inputtxt input_subtitle" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Style:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="style" class="inputtxt input_style" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Photos:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="photos" class="inputtxt input_photos" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Buy:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="buy" class="inputtxt input_buy" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#addShop').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="editShop" class="hide" title="编辑Shop">  
	        <form action="<?php echo ROOT_PATH;?>admin/shop_update" method="post" enctype="multipart/form-data">                                                                                                                                                                                                                                                                                              
         		<div class="dialog_content">
            		<div>
	                    <table>
	                    	<tr class="hide">
	                    		<td class="td1">ID:</td>
	                    		<td class="td2"><input type="text" name="id" class="inputtxt input_id" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Image:</td>
	                    		<td class="td2">
	                    			<input type="file" name="photo" class="input_image" />                 			
	                    		</td>
	                    		<td class="td3">	
	                    			<span class="gray">建议上传 900*400 像素的图片</span>                    			
	                    		</td>
	                    	</tr>	                        
	                    	<tr>
	                    		<td class="td1">Title:</td>
	                    		<td class="td2"><input type="text" name="title" class="inputtxt input_title" style="width:200px;padding:5px;" /></td>
	                    		<td class="td3" rowspan='2'></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Subtitle:</td>
	                    		<td class="td2"><input type="text" name="subtitle" class="inputtxt input_subtitle" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Content:</td>
	                    		<td class="td2" colspan="2"><textarea name="content" class="textarea textarea_content" style="width:400px; padding:5px;"></textarea></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Style:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="style" class="inputtxt input_style" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Photos:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="photos" class="inputtxt input_photos" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    	<tr>
	                    		<td class="td1">Buy:</td>
	                    		<td class="td2" colspan="2"><input type="text" name="buy" class="inputtxt input_buy" style="width:200px;padding:5px;" /></td>
	                    	</tr>
	                    </table>
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#editShop').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <input type="submit" name="submit" value="上传图片" class="submit_btn submit_btn_dialog" style="text-indent:-999em;float:right;" />
	            </div>
	        </form>
	        </div>
	        <div id="deleteShop" class="hide" title="删除Shop">                                                                                                                                                  
         		<div class="dialog_content">
            		<div class="dialog_attention">
	                    当前选中 <span class="delete_num"></span> 条信息，
	                    <br />
	               		是否立即删除？
	                </div>
            	</div>
	            <div class="dialog_btn">
	                <a onclick="$('#deleteShop').dialog('close');" class="dialog_cancel submit_btn_dialog"></a>
	                <a onclick="javascript:;" class="submit_btn submit_btn_dialog"></a>
	            </div>
	        </div>
