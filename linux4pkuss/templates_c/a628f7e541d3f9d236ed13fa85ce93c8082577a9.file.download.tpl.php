<?php /* Smarty version Smarty-3.1.19, created on 2015-03-29 07:12:45
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/panel/download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1616900469548492b3caa964-96331768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a628f7e541d3f9d236ed13fa85ce93c8082577a9' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/panel/download.tpl',
      1 => 1427627420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616900469548492b3caa964-96331768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548492b3cddfa9_79639198',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548492b3cddfa9_79639198')) {function content_548492b3cddfa9_79639198($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>资源下载</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>
<!-- Bootstrap -->
<link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="/bootstrap/bootstrap/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style-responsive.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" />
<script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/excanvas.min.js"></script>
<script src="/bootstrap/bootstrap/js/respond.min.js"></script>
<script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.gritter.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.pulsate.min.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.bootpag.min.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<script src="/bootstrap/bootstrap/js/ui-general.js"></script>
<script src="/bootstrap/bootstrap/javascript/index.js"></script>

<script>
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
	});
</script>
</head>
<body>
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<!--
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>热门下载
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					
					<div class="portlet-body" id="newDown">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
					
				</div>-->
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新文章
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newArticle">
					</div>
				</div>
				<div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新资源
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newResource">
					</div>
				</div>

			</div>
			<div class="span6">
			</div>


			<div class="span3">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>课程通知
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newCourse">
					</div>
				</div>
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>友情链接
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newLink">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
