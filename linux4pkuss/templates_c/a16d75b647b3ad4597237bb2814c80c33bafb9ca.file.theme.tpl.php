<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 01:22:54
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/article/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13065625065512eeee5847d8-37617129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a16d75b647b3ad4597237bb2814c80c33bafb9ca' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/article/theme.tpl',
      1 => 1427303864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13065625065512eeee5847d8-37617129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5512eeee5ee9c8_31919881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5512eeee5ee9c8_31919881')) {function content_5512eeee5ee9c8_31919881($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>相关文章</title>
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
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/DT_bootstrap.js"></script>
<script src="/bootstrap/bootstrap/js/table-managed.js"></script>
<script src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>
<script src="/bootstrap/bootstrap/js/form-components.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
		TableManaged.init();
		FormComponents.init();
	});
</script>
</head>
<body>
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
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
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>

					</div>
				</div>
				<div class="portlet box blue">
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
					<div class="portlet-body" id="newLink"></div>
				</div>
			
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
			</div>
			</div>
			<div class="span9">
			<div class="portlet box grey">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-cogs"></i>相关文章
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a> <a
							href="#portlet-config" data-toggle="modal" class="config"></a> <a
							href="javascript:;" class="reload"></a> <a href="javascript:;"
							class="remove"></a>
					</div>
				</div>
				<div class="portlet-body">
					
					<div class="row-fluid">
						<div class="span12">
							<table class="table table-striped table-bordered table-hover"
									id="sample_1">

									<thead>

										<tr>

											<th style="width: 8px;"><input type="checkbox"
												class="group-checkable" data-set="#sample_1 .checkboxes" /></th>

											<th>主题名称</th>
											<th class="hidden-480">主题编号</th>
											<th class="hidden-480">创建时间</th>
											<th class="hidden-480">创建人</th>
											<th colspan="3"><span class="label label-success">详细信息</span></th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td><a href="/controller/article/articleHandler.php?type=listTheme&themeId=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
"
												title="详情"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</a></td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['num'];?>
</td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['createdate'];?>
</td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['user_id'];?>
</td>
											<td><a
												href="/controller/article/articleHandler.php?type=listTheme&themeId=<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
"
												title="详情"><i class="icon-envelope-alt"></i></a> 
										</tr>
										<?php } ?>
									</tbody>

								</table>
		
						</div>
					</div>
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
