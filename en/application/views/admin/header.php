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
	<link href="<?php echo MEDIA_PATH."admin/"; ?>css/dialog.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo MEDIA_PATH."admin/"; ?>css/common.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo MEDIA_PATH."admin/"; ?>css/frame.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo MEDIA_PATH."admin/"; ?>css/redactor.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/json2.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/dialog.min.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/SelectEx.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/common.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/frame.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/redactor.min.js"></script>
	<script type="text/javascript" src="<?php echo MEDIA_PATH."admin/"; ?>js/hongri.js"></script>
</head>
<body>
	<div id="content">
		<div id="contentNav">
			<div class="wrapper">
				<div class="nav-home blockLink">
				<a href="<?php echo ROOT_PATH;?>admin"></a>
				</div>
				<ul class="navs blockLink">
					<li class="items"><a href="<?php echo ROOT_PATH;?>admin" class="current">管理后台</a></li>
					<li class="items lastItem"></li>
				</ul>
                <div class="nav">
                    <ul>
                        <li>
                            <div class="item">
								<span class="t">欢迎您, <?php echo $username;?></span>
                            </div>
                            <div class="layer">
                                <div class="menu">
                                    <a href="<?php echo ROOT_PATH;?>admin/contactus">查看用户留言</a>
                                </div>
                                <div class="menu">
                                    <a href="<?php echo ROOT_PATH;?>admin/user_email">发送Newsletter</a>
                                </div>
                                <div class="menu">
                                    <a href="<?php echo ROOT_PATH;?>admin/company_info">查看调查结果</a>
                                </div>
                                <div class="menu">
                                    <a href="<?php echo ROOT_PATH;?>login/logout">退出</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
				<div class="kefu blockLink">
					<a href="<?php echo ROOT_PATH;?>" target="_blank">前台站点</a>
				</div>
			</div>
		</div>
		<div id="contentBody">
