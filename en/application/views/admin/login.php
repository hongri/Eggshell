<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>Eggshell 控制台</title>
	<meta name="keywords" content="Eggshell" />
	<meta name="description" content="Eggshell" />
	<link href="<?php echo MEDIA_PATH."admin/"; ?>css/base.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/jquery.js"></script>
<script>
$(document).ready(function(){
	var width = ($(window).height()-300)/2-50;
	if(width < 0) width = 50;
	$(".login_div").css({"margin-top":width});
   $("#ptname").val("");
	$("#ptpwd").val("");
	$("#ptname").focus(function(){
       $("#btn_user_login").next().hide(); 
   })
	$("#ptpwd").focus(function(){
       $("#btn_user_login").next().hide(); 
   })
})
</script>
<style type="text/css">
	body{
		background-color:#eee;
	}
    .red{
		color:#F16951;
      font-family:'tahoma';C
      font-size:14px;
	}
	.login_div{width:560px;height:350px;margin:0 auto; border-radius:3px; 
	/*box-shadow:1px 1px 4px #292929;*/
		background-image: url("<?php echo MEDIA_PATH."admin/"; ?>images/main/top.jpg");
		box-shadow:2px 2px 3px #292929;
	}
	#login_frame {
		font: 14px/1.5 tahoma,arial,"微软雅黑",sans-serif;
		height: 210px;
		padding:20px 90px;
		width: 378px;
		border:1px solid #3a7dc8;
		border-top-width:0;
		background-color:#fff;
	}
	.inputtxt {
		background-image: url("<?php echo MEDIA_PATH."admin/"; ?>images/main/textbox.gif");
		border-width: 0;
		height: 14px;
		line-height: 14px;
		padding: 13px 12px;
		width: 207px;
		font-size:14px;
	}
	#login_frame table{
		vertical-align:middle;
		line-height:40px;
	}	
	#login_frame table td{
		padding:15px 5px;
	}	
	input.btn_user_login{
		background: url("<?php echo MEDIA_PATH."admin/"; ?>images/main/btn_log.gif") no-repeat scroll 0 0 transparent;
		display: inline-block;
		height: 30px;
		margin: 0;
		padding: 0;
		width: 80px;
		border:none;
		cursor:pointer;
	}
	.top {
		height: 100px;
	}
	</style>
</head>
<body>
	<div class="login_div">
		<div class="top">
		</div>
		<div id="login_frame"> 
		<form method="post" action="<?php echo ROOT_PATH;?>login">               
				<table>
					 <tr>
						<td><label id="ptname_label" class="ptname_label" for="ptname">管理员：</label></td>
						  <td><input id="ptname" class="ptname inputtxt" type="text" name="ptname"></td>
					 </tr>
					 <tr>
						<td><label id="ptpwd_label" class="ptname_label" for="ptpwd">密 码：</label></td>
						  <td><input id="ptpwd" class="ptpwd inputtxt" type="password" name="ptpwd"></td>
					 </tr>
					 <tr>
						<td></td>
						<td><input type="submit" value=""  class="btn_user_login" id="btn_user_login" /> &nbsp;&nbsp;&nbsp;&nbsp;
							<?php if($error=="true"): ?>
								<span class="red">用户名或密码错误！</span>
					      <?php endif; ?>	
						</td>
					 </tr>
				</table>     
			</form>
		</div>
	</div>
</body>
</html>
