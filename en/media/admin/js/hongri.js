jQuery(function($){
	$(document).ready(function(){
        common();

		/* 应用管理页面加载的js */
		if(document.getElementById("NAV_MANAGEMENT")!==null){
			value_management('nav');
		}
		if(document.getElementById("BRAND_SHOP")!==null){
			value_management('shop');
		}
		if(document.getElementById("BRAND_ASSESSMENT")!==null){
			value_management('assessment');
		}
		else if(document.getElementById("HOME_MANAGEMENT")!==null){
			value_management('home');
		}
		else if(document.getElementById("ABOUTUS_MANAGEMENT")!==null){
			value_management('aboutus');
		}
		else if(document.getElementById("HOWWEDO_MANAGEMENT")!==null){
			value_management('howwedo');
		}	
		else if(document.getElementById("PRESS_MANAGEMENT")!==null){
			value_management('press');
		}	
		else if(document.getElementById("POSSIBILITY_MANAGEMENT")!==null){
			value_management('possibility');
		}
		else if(document.getElementById("CONTACTUS_MANAGEMENT")!==null){
			value_management('contactus');
		}	
		else if(document.getElementById("CASES")!==null){
			value_management('cases');
		}
		else if(document.getElementById("ONEMINUTE")!==null){
			value_management_2('oneminute');
		}
		else if(document.getElementById("CONTACTUS")!==null){
			cellTableList();
		}
		else if(document.getElementById("RECRUITMENT")!==null){
			cellTableList();
			recruitment();
		}
		else if(document.getElementById("FAQ")!==null){
			cellTableList();
			faq();
		}	
		else if(document.getElementById("NEWS")!==null){
			cellTableList();
			news();
		}
		else if(document.getElementById("USEREMAIL")!==null){
			user_email();
		}
		else if(document.getElementById("ASSESSMENT_MANAGEMENT")!==null){
			cellTableList();
			assessment();
		}
		else if(document.getElementById("BRAND_SHOP_MANAGEMENT")!==null){
			cellTableList();
			brand_shop();
		}
		else if(document.getElementById("ECARDS")!==null){
			cellTableList();
			ecards();
		}
		else if(document.getElementById("VIDEO")!==null){
			cellTableList();
			video();
		}	
		else if(document.getElementById("CLIENT")!==null){
			cellTableList();
			client();
		}
		else if(document.getElementById("PICTURE_MANAGEMENT")!==null){
			cellTableList();
			picture_management();
		}
		else if(document.getElementById("SOCIAL_POSIBILITY")!==null){
			cellTableList();
			social();
		}
		else if(document.getElementById("PRESS")!==null){
			cellTableList();
			press();
		}
		else if(document.getElementById("CASE_MANAGEMENT")!==null){
			cellTableList();
			cases();
		}
		else if(document.getElementById("CASE_PICTURE")!==null){
			cellTableList();
			cases_picture();
		}
		else if(document.getElementById("HOWWEDO")!==null){
			cellTableList();
			howwedo();
		}
		else if(document.getElementById("EGGSHELLER")!==null){
			cellTableList();
			eggsheller();
		}						
		else if(document.getElementById("COMPANY_INFO")!==null){
			$(".list_id").each(function(index,element){
				$(this).html(index+1);
			})
		}					
		else{
			return;
		}
        
	    
	});
})

function picture_management(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addPicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editPicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deletePicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addPicture").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editPicture .input_id').val(selector.find('td:eq(1) span').html().trim());
		var filed = selector.find('td:eq(4)').html().trim();
		$('#editPicture .select_picture').val(filed);
		$('#editPicture .textarea_description').html(selector.find('td:eq(5)').attr('title').trim());
		$("#editPicture").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deletePicture .delete_num').html(delete_num);	
		$("#deletePicture").dialog('open');
	})
	$('#deletePicture .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/picture_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function social(){
	$("#addSocial").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editSocial").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteSocial").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addSocial").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editSocial .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editSocial .input_date').val(selector.find('td:eq(4)').html().trim());
		$('#editSocial .textarea_description').html(selector.find('td:eq(3)').attr('title').trim());
		$("#editSocial").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteSocial .delete_num').html(delete_num);	
		$("#deleteSocial").dialog('open');
	})
	$('#deleteSocial .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/social_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function eggsheller(){
	$("#addEggsheller").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editEggsheller").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteEggsheller").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addEggsheller").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editEggsheller .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editEggsheller .input_name').val(selector.find('td:eq(2)').html().trim());
		$('#editEggsheller .input_pinterest').val(selector.find('td:eq(5)').attr('title').trim());
		$('#editEggsheller .input_email').val(selector.find('td:eq(6)').attr('title').trim());
		$('#editEggsheller .textarea_content').val(selector.find('td:eq(8)').attr('title').trim());
		$('#editEggsheller .textarea_interview').val(selector.find('td:eq(9)').attr('title').trim());
		var filed = selector.find('td:eq(7)').html().trim();
		$('#editEggsheller .select_eggsheller').val(filed);
		$("#editEggsheller").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteEggsheller .delete_num').html(delete_num);	
		$("#deleteEggsheller").dialog('open');
	})
	$('#deleteEggsheller .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/eggsheller_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}


function howwedo(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addHowwedo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editHowwedo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteHowwedo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addHowwedo").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editHowwedo .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editHowwedo .input_description').val(selector.find('td:eq(6)').html().trim());
		var filed = selector.find('td:eq(3)').html().trim();
		$('#editHowwedo .select_filed').val(filed);
		$('#editHowwedo .textarea_video').html(selector.find('td:eq(5)').attr('title').trim());
		$("#editHowwedo").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteHowwedo .delete_num').html(delete_num);	
		$("#deleteHowwedo").dialog('open');
	})
	$('#deleteHowwedo .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/howwedo_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function cases_picture(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addCasePicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editCasePicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteCasePicture").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addCasePicture").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editCasePicture .input_id').val(selector.find('td:eq(1) span').html().trim());
		$("#editCasePicture").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteCasePicture .delete_num').html(delete_num);	
		$("#deleteCasePicture").dialog('open');
	})
	$('#deleteCasePicture .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/case_picture_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function cases(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addCase").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editCase").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteCase").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addCase").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editCase .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editCase .input_name').val(selector.find('td:eq(3)').html().trim());
		var arr = selector.find('td:eq(6)').html().trim().split(',');
		$('#editCase input[type=checkbox]').removeAttr('checked');	
		for(var i=0;i<arr.length;i++){
			$('#editCase .'+arr[i]).attr('checked','checked');
		}
		var filed = selector.find('td:eq(5)').html().trim();
		$('#editCase .select_case').val(filed);
		$('#editCase .textarea_detail').html(selector.find('td:eq(7)').attr('title').trim());
		$("#editCase").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteCase .delete_num').html(delete_num);	
		$("#deleteCase").dialog('open');
	})
	$('#deleteCase .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/case_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function press(){
	$("#addPress").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editPress").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deletePress").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addPress").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editPress .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editPress .input_date').val(selector.find('td:eq(7)').html().trim());
		$('#editPress .input_events').val(selector.find('td:eq(5)').attr('title').trim());
		var filed = selector.find('td:eq(2)').html().trim();
		$('#editPress .select_press').val(filed);
		$('#editPress .textarea_description').html(selector.find('td:eq(6)').attr('title').trim());
		$('#editPress .textarea_video').html(selector.find('td:eq(8)').attr('title').trim());
		$("#editPress").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deletePress .delete_num').html(delete_num);	
		$("#deletePress").dialog('open');
	})
	$('#deletePress .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/press_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function client(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addClient").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editClient").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteClient").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addClient").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editClient .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editClient .textarea_content').html(selector.find('td:eq(4)').attr('title').trim());
		$('#editClient .textarea_description').html(selector.find('td:eq(5)').attr('title').trim());
		$("#editClient").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteClient .delete_num').html(delete_num);	
		$("#deleteClient").dialog('open');
	})
	$('#deleteClient .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/client_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function video(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addVideo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editVideo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteVideo").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addVideo").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editVideo .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editVideo .textarea_content').html(selector.find('td:eq(5)').html().trim());
		$('#editVideo .textarea_description').html(selector.find('td:eq(4)').attr('title').trim());
		$("#editVideo").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteVideo .delete_num').html(delete_num);	
		$("#deleteVideo").dialog('open');
	})
	$('#deleteVideo .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/video_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}


function ecards(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addEcards").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editEcards").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteEcards").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addEcards").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editEcards .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editEcards .textarea_content').html(selector.find('td:eq(4)').html().trim());
		$('#editEcards .input_filed').val(selector.find('td:eq(5)').html().trim());
		$('#editEcards .input_href').val(selector.find('td:eq(6)').html().trim());
		$("#editEcards").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteEcards .delete_num').html(delete_num);	
		$("#deleteEcards").dialog('open');
	})
	$('#deleteEcards .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/ecards_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function brand_shop(){
	$("#addShop").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editShop").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteShop").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addShop").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		$('#editShop .input_id').val(selector.find('td:eq(1) span').html().trim());
		$('#editShop .input_title').val(selector.find('td:eq(3)').html().trim());
		$('#editShop .input_subtitle').val(selector.find('td:eq(4)').html().trim());
		$('#editShop .input_style').val(selector.find('td:eq(6)').html().trim());
		$('#editShop .input_photos').val(selector.find('td:eq(7)').html().trim());
		$('#editShop .input_buy').val(selector.find('td:eq(8)').html().trim());
		$('#editShop .textarea_content').html(selector.find('td:eq(5)').attr('title').trim());
		$("#editShop").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteShop .delete_num').html(delete_num);	
		$("#deleteShop").dialog('open');
	})
	$('#deleteShop .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/shop_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function assessment(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addAssessment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editAssessment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteAssessment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addAssessment").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		var id = $('#editAssessment .span_id').html(selector.find('td:eq(2) span').html().trim());
		var content = $('#editAssessment .textarea_content').html(selector.find('td:eq(3)').attr('title').trim());
		$("#editAssessment").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteAssessment .delete_num').html(delete_num);	
		$("#deleteAssessment").dialog('open');
	})
	$('#addAssessment .submit_btn').live('click',function(){
		var content = $('#addAssessment .textarea_content').val().trim();	
		var json = JSON.stringify({"content":content});	
		if(content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/assessment_insert',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空');
		}
	})
	$('#editAssessment .submit_btn').live('click',function(){
		var id = $('#editAssessment .span_id').html().trim();
		var content = $('#editAssessment .textarea_content').val().trim();	
		var json = JSON.stringify({"id":id,"content":content});	
		if(content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/assessment_update',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空！');
		}
	})
	$('#deleteAssessment .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/assessment_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function user_email(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#detail .btn_hide").trigger('click');
	$('.icon-7').live('click',function(){
		$("#detail .btn_hide").trigger('click');
	})
}

function news(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addNews").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editNews").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteNews").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addNews").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		var id = $('#editNews .span_id').html(selector.find('td:eq(1) span').html().trim());
		var news = $('#editNews .textarea_news').html(selector.find('td:eq(3)').html().trim());
		var content = $('#editNews .textarea_content').html(selector.find('td:eq(4)').attr('title').trim());
		$("#editNews").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteNews .delete_num').html(delete_num);	
		$("#deleteNews").dialog('open');
	})
	$('#addNews .submit_btn').live('click',function(){
		var news = $('#addNews .textarea_news').val().trim();
		var content = $('#addNews .textarea_content').val().trim();	
		var json = JSON.stringify({"news":news,"content":content});	
		if(news!==''&&content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/news_insert',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空');
		}
	})
	$('#editNews .submit_btn').live('click',function(){
		var id = $('#editNews .span_id').html().trim();
		var news = $('#editNews .textarea_news').val().trim();
		var content = $('#editNews .textarea_content').val().trim();	
		var json = JSON.stringify({"id":id,"news":news,"content":content});	
		if(news!==''&&content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/news_update',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空！');
		}
	})
	$('#deleteNews .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/news_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function faq(){
	$(".list_id").each(function(index,element){
		$(this).html(index+1);
	})
	$("#addFAQ").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editFAQ").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteFAQ").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addFAQ").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		var id = $('#editFAQ .span_id').html(selector.find('td:eq(1) span').html().trim());
		var question = $('#editFAQ .textarea_q').html(selector.find('td:eq(3)').html().trim());
		var answer = $('#editFAQ .textarea_a').html(selector.find('td:eq(4)').attr('title').trim());
		$("#editFAQ").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteFAQ .delete_num').html(delete_num);	
		$("#deleteFAQ").dialog('open');
	})
	$('#addFAQ .submit_btn').live('click',function(){
		var question = $('#addFAQ .textarea_q').val().trim();
		var answer = $('#addFAQ .textarea_a').val().trim();	
		var json = JSON.stringify({"question":question,"answer":answer});	
		if(question!==''&&answer!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/faq_insert',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空');
		}
	})
	$('#editFAQ .submit_btn').live('click',function(){
		var id = $('#editFAQ .span_id').html().trim();
		var question = $('#editFAQ .textarea_q').val().trim();
		var answer = $('#editFAQ .textarea_a').val().trim();	
		var json = JSON.stringify({"id":id,"question":question,"answer":answer});	
		if(question!==''&&answer!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/faq_update',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空！');
		}
	})
	$('#deleteFAQ .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/faq_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function recruitment(){
	$("#addRecruitment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#editRecruitment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$("#deleteRecruitment").dialog({
		autoOpen: false,
		width: 600,
		modal: true
	});
	$('.icon-1').live('click',function(){
		$("#addRecruitment").dialog('open');
	})
	$('.icon-5:not(.disabled)').live('click',function(){
		var selector = $('.cell_tb_list tr.cur');
		var id = $('#editRecruitment .span_id').html(selector.find('td:eq(1) span').html().trim());
		var name = $('#editRecruitment .input_name').val(selector.find('td:eq(2)').html().trim());
		var type = $('#editRecruitment .input_type').val(selector.find('td:eq(3)').html().trim());
		var content = $('#editRecruitment .textarea_content').html(selector.find('td:eq(4)').html().trim());
		$("#editRecruitment").dialog('open');
	})
	$('.icon-2:not(.disabled)').live('click',function(){
		var delete_num = $('.cell_tb_list tr.cur:not(.table_header)').length;
		$('#deleteRecruitment .delete_num').html(delete_num);	
		$("#deleteRecruitment").dialog('open');
	})
	$('#addRecruitment .submit_btn').live('click',function(){
		var name = $('#addRecruitment .input_name').val().trim();
		var type = $('#addRecruitment .input_type').val().trim();
		var content = $('#addRecruitment .textarea_content').val().trim();	
		var json = JSON.stringify({"name":name,"type":type,"content":content});	
		if(name!==''&&type!==''&&content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/recruitment_insert',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空');
		}
	})
	$('#editRecruitment .submit_btn').live('click',function(){
		var id = $('#editRecruitment .span_id').html().trim();
		var name = $('#editRecruitment .input_name').val().trim();
		var type = $('#editRecruitment .input_type').val().trim();
		var content = $('#editRecruitment .textarea_content').val().trim();	
		var json = JSON.stringify({"id":id,"name":name,"type":type,"content":content});	
		if(name!==''&&type!==''&&content!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/recruitment_update',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('输入内容不能为空！');
		}
	})
	$('#deleteRecruitment .submit_btn').live('click',function(){
		var str='';
		$('.cell_tb_list tr.cur:not(.table_header)').each(function(){
			str = str+' '+$(this).find('td:eq(1) span').html().trim();
		})	
		var json = JSON.stringify({"id":str.trim()});
		if(str!=='')
		{	
			$.ajax({
					type:'POST',
					url:'/en/admin/recruitment_delete',
					data:json,
					dataType:'json',
					contentType:'application/json; charset=UTF-8',
					success:function(data){
						location.href = location.href;			
					}
			})
		}
		else{
			alert('请选择删除的的内容！');
		}
		
	})
}

function common(){
	$('.tree').each(function(index,element){
		if($(this).find('a.current').length>0){
			$(this).addClass('tree-expand').siblings().removeClass('tree-expand');
		}
	})
}
function exampleClickToEdit()
{
	$('#redactor').redactor({ focus: true });	
}
		 
function exampleClickToSave(name)
{
	// save content if you need
	var html = $('#redactor').getCode();	
	var json = JSON.stringify({id:name,value:html});
	// destroy editor
	//$('#redactor').destroyEditor();	
	$.ajax({
			type:'POST',
			url:'/en/admin/'+name+'_post',
			data:json,
			dataType:'json',
			contentType:'application/json; charset=UTF-8',
			success:function(data){
				location.href = location.href;			
			}
	})
}

function eggshellerClickToSave()
{
	// save content if you need
	var html = $('#redactor').getCode();
	var id = location.href.split('/').pop();
	var json = JSON.stringify({'id':id,'detail':html});
	// destroy editor
	//$('#redactor').destroyEditor();	
	$.ajax({
			type:'POST',
			url:'/en/admin/eggsheller_post',
			data:json,
			dataType:'json',
			contentType:'application/json; charset=UTF-8',
			success:function(data){
				location.href = location.href;			
			}
	})
}

function value_management(url){
	$('.edit_value').live('click',function(){
		$(this).addClass('submit_value').removeClass('edit_value').html('submit');
		var selector = $(this).parent().prev();
		selector.html('<textarea class="value_input textarea">'+selector.html()+'</textarea>')
	})
	$('.submit_value').live('click',function(){
		var id = $(this).parent().prev().prev().find('span').html();
		var value = $(this).parent().prev().find('textarea').val();
		var json = JSON.stringify({id:id,value:value});
		$.ajax({
			type:'POST',
			url:'/en/admin/'+url+'_post',
			data:json,
			dataType:'json',
			success:function(data){
				location.href = location.href;			
			}
		})
	})
}

function value_management_2(url){
	$('.edit_value').live('click',function(){
		$(this).addClass('submit_value').removeClass('edit_value').html('submit');
		var selector = $(this).parent().prev().find("div");
		selector.html('<textarea class="value_input textarea">'+selector.html()+'</textarea>')
	})
	$('.submit_value').live('click',function(){
		var id = $(this).parent().prev().prev().find('span').html();
		var value = $(this).parent().prev().find('textarea').val();
		var json = JSON.stringify({id:id,value:value});
		$.ajax({
			type:'POST',
			url:'/en/admin/'+url+'_post',
			data:json,
			dataType:'json',
			success:function(data){
				location.href = location.href;			
			}
		})
	})
}
	
/* 申请第三步js */
function apply_three(){ 
				// Dialog
				$('#payTips').dialog({
					autoOpen: false,
					width: 480,
					modal: true
				});
				// Dialog Link
				$('.apply_addMoney').click(function(){
					$('#payTips').dialog('open');
					return false;
				});
}

/* 错误弹出窗口 */
function popUpTips(){
	//错误时弹出的tips
	$(".cell_tb_list .is_failed").parent().addClass("is_error");
	$(".cell_tb_list .is_error").hover(
		function(){
			$(".pop_tips").removeClass("hide");
			$(".pop_tips .error").removeClass("hide");
			var pageY = $(this).offset().top+40;
			var pageX = $(this).offset().left;
			$(".pop_tips").css({"top":pageY,"left":pageX});
		},
		function(){
			$(".pop_tips").addClass("hide");
		}
	);
	//mouseover tips上面tips并不消失
	$(".pop_tips").hover(
		function(){
			$(this).removeClass("hide");
		},
		function(){
			$(this).addClass("hide");
		}
	)
} 

/* 应用管理dialog弹出窗口 */
function manageDialog(){
				// Dialog init
				$('#closeVideo').dialog({
					autoOpen: false,
					width: 600,
					modal: true
				});
				$('#reloadVideo').dialog({
					autoOpen: false,
					width: 600,
					modal: true
				});
				$("#deleteVideo").dialog({
					autoOpen: false,
					width: 600,
					modal: true
				});

				// Dialog Link
				$(".icon-13:not(.disabled)").live('click',function(){
					var host_name = [];
					$('.cell_tb_list tr.cur').each(function(index, element){
						host_name[index]= '"'+$(this).find('.td3 div span.blue').html()+'"';
					})
					$("#closeVideo .dialog_host_count").html(host_name.length);
					$('#closeVideo .dialog_host_name').html(host_name.join("，"));
					$('#closeVideo').dialog('open');
					return false;
				});
				$(".icon-4:not(.disabled)").live('click',function(){
					var host_name = [];
					$('.cell_tb_list tr.cur').each(function(index, element){
						host_name[index]= '"'+$(this).find('.td3 div span.blue').html()+'"';
					})
					$("#reloadVideo .dialog_host_count").html(host_name.length);
					$('#reloadVideo .dialog_host_name').html(host_name.join("，"));
					$('#reloadVideo').dialog('open');
					return false;
				});
				$('.icon-2:not(.disabled)').live('click',function(){
					var host_name = [];
					$('.cell_tb_list tr.cur').each(function(index, element){
						host_name[index]= '"'+$(this).find('.td3 div span.blue').html()+'"';
					})
					$("#deleteVideo .dialog_host_count").html(host_name.length);
					$('#deleteVideo .dialog_host_name').html(host_name.join("，"));
					$('#deleteVideo').dialog('open');
					return false;
				});
} 

//删除框架底部滚动条bug
frameSettings.mainResize = function(){
	if($(".mainContent").width()>800){
		$(".mainContent").css("overflow-x","hidden");
	}
	else{
		$(".mainContent").css("overflow-x","visible");
	}
	if($(".detailContent").width()>800){
		$(".detailContent").css("overflow-x","hidden");
	}
	else{
		$(".detailContent").css("overflow-x","visible");
	}
}
	
/* cell_tb_list的相关效果 */
function cellTableList(){
	$('input[type="checkbox"]').attr("checked",false);
	
	//cell_tb_list table鼠标放上去颜色的变化
	$(".cell_tb_list tr:not(.if_no_app)").mouseover(function(){
		$(this).addClass("hover").removeClass("hoverout");
	});
	$(".cell_tb_list tr:not(.if_no_app)").mouseout(function(){
		$(this).addClass("hoverout").removeClass("hover");
	});
	
	//cell_tb_list table checkbox的选中
	var input = $(".cell_tb_list .has_checkbox").find(".egg_checkbox");
	input.each(function(index,element){
		if($(input[index]).attr("checked")){
			$(this).parent().parent().addClass("cur");
		}	
		else{
			$(this).parent().parent().removeClass("cur");
		}
		appManageBtn();
	});
	
	//点击checkbox
	$(".has_checkbox .egg_checkbox").live("click",function(event){
		if($(this).attr("checked")){
			$(this).parent().parent().addClass("cur");
		}
		else{
			$(this).parent().parent().removeClass("cur");
			$("#check_all").attr("checked",false);
		}
		appManageBtn();
		event.stopPropagation();
	});
	
	//点击table一列的时候
	$(".cell_tb_list .has_checkbox tr:not(.if_no_app,.table_header)").live("click",function(){
		if($(this).find(".egg_checkbox").attr("checked")){
			if($(this).find('.cur').length==1){
				$(this).removeClass("cur");
				$(this).find(".egg_checkbox").attr("checked",false);
			}
			else{
				$(this).addClass("cur");
				$(this).find(".egg_checkbox").attr("checked",true);
				$("#check_all").attr("checked",false);
			}
			$(this).siblings().removeClass("cur").find(".egg_checkbox").attr("checked",false);
		}
		else{
			$(this).addClass("cur");
			$(this).find(".egg_checkbox").attr("checked",true);
			$(this).siblings().removeClass("cur").find(".egg_checkbox").attr("checked",false);
		}
		appManageBtn();
	});
	
	//全选
	$("#check_all").click(function(e){
        if($(this).attr("checked")){
            $('input[type="checkbox"]').attr("checked",true).parent().parent().addClass('cur');
        }
		else{
            $('input[type="checkbox"]').attr("checked",false).parent().parent().removeClass('cur');;
        }
		appManageBtn();
        e.stopPropagation();
    });
} 

function appManageBtn(){
	var index = $('.cell_tb_list tr.cur').length;
	if(index > 1){
		$('.icon-2').removeClass('disabled');
		$('.icon-5').addClass('disabled');
	}
	else if(index == 1){
		$('.icon-2').removeClass('disabled');
		$('.icon-5').removeClass('disabled');
	}
	else{
		$('.icon-2').addClass('disabled');
		$('.icon-5').addClass('disabled');
	}
}

//js validation
function name_validation(that){
	var value = $(that).val();
	if( value.length > 20 || value == ''){
		$(that).parent().next().find(".error").show();
	}
	else 
		$(that).parent().next().find(".error").hide();
}
function url_validation(that){
	var value = $(that).val();	
	
	var re = /^https?:\/\/[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]+/; 
	if(!re.test(value)){
		$(that).parent().next().find(".error").show();
	}
	else 
		$(that).parent().next().find(".error").hide();
}
function testPassword(val) {
	  var x;
	  return ((function() {
		var _i, _len, _ref, _results;
		_ref = [/\d/, /[a-zA-Z]/, /[^a-zA-Z0-9]/];
		_results = [];
		for (_i = 0, _len = _ref.length; _i < _len; _i++) {
		  x = _ref[_i];
		  if (x.test(val)) {
			_results.push(x);
		  }
		}
		return _results;
	  })()).length >= 2;
	};
function pwd_validation(that){
	var value = $(that).val();	
/*	var strRegex1 = "^[0-9a-zA-Z]{8,20}$";
	var strRegex2 = "^[0-9]{8,20}$";
	var strRegex3 = "^[a-zA-Z]{8,20}$";
	
	var re1 = new RegExp(strRegex1); 
	var re2 = new RegExp(strRegex2); 
	var re3 = new RegExp(strRegex3); */
	if(!testPassword(value)){
		$(that).parent().next().find(".error").show();
	}
	else 
		$(that).parent().next().find(".error").hide();
}	
function pwd_sure_validation(that){
	var value1 = $(that).val();	
	var value2 = $(that).parent().parent().prev().find("input").val();
	if( value1 !== value2 ){
		$(that).parent().next().find(".error").show();
	}
	else 
		$(that).parent().next().find(".error").hide();
}			

