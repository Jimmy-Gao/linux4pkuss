<?php /* Smarty version Smarty-3.1.19, created on 2015-03-28 22:59:12
         compiled from "/var/www/linux4pkuss/linux4pkuss/templates/admin/theme/themeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753286975540fd2b7ba3ed9-91221232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdc6c7f39b81774cb2378852dd4651242da83e8' => 
    array (
      0 => '/var/www/linux4pkuss/linux4pkuss/templates/admin/theme/themeList.tpl',
      1 => 1427554705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753286975540fd2b7ba3ed9-91221232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540fd2b7be20c8_30105158',
  'variables' => 
  array (
    'topThemes' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540fd2b7be20c8_30105158')) {function content_540fd2b7be20c8_30105158($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>主题管理</title>
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
<link rel="stylesheet" href="/bootstrap/bootstrap/css/DT_bootstrap.css" />
<link rel="stylesheet" href="/bootstrap/bootstrap/css/select2.css" />
<link href="/bootstrap/bootstrap/css/bootstrap-modal.css"
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
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>

<script type="text/javascript"
	src="/bootstrap/bootstrap/js/DT_bootstrap.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="/bootstrap/bootstrap/js/table-managed.js"></script>
<script src="/bootstrap/bootstrap/js/select2.min.js"></script>

<script src="/bootstrap/bootstrap/js/jquery.dataTables.js"></script>
<script src="/bootstrap/bootstrap/js/form-components.js"></script>
<script src="/bootstrap/bootstrap/javascript/public-openModalDialog.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		TableManaged.init();
		FormComponents.init();
	});
	
</script>


</head>


<body class="page-header-fixed">
	<header> <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->

			<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<ul class="breadcrumb" style="background-color: white">
							<li><i class="icon-home"></i> <a href="/index.php">主页</a> <i
								class="icon-angle-right"></i></li>
							<li><a href="#">个人信息</a> <i class="icon-angle-right"></i></li>
							<li><a href="#">我的设置</a></li>

						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid profile">

					<div class="span12">
						<div class="portlet box light-grey">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-user"></i>项目主题信息
								</div>

								<div class="actions">
									<a href="#" role="button" class="btn blue"
										data-toggle="modal" onClick="themeCreate()"><i class="icon-pencil"></i> 添加</a>

									<div class="btn-group">

										<a class="btn green" href="#" data-toggle="dropdown"> <i
											class="icon-cogs"></i> 工具 <i class="icon-angle-down"></i>

										</a>

										<ul class="dropdown-menu pull-right">


											<li><a href="#"><i class="icon-print"></i> 打印</a></li>

											<li><a href="#"><i class="icon-pencil"></i> 编辑</a></li>

											<li><a href="#"><i class="icon-ban-circle"></i>
													导出EXCEL</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="portlet-body ">


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
											<th colspan="3"><span class="label label-success">主题操作</span></th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topThemes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['num'];?>
</td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['createdate'];?>
</td>
											<td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['theme']->value['user_id'];?>
</td>
											<td><a
												href="/controller/theme/themeHandler.php?type=query&num=<?php echo $_smarty_tpl->tpl_vars['theme']->value['num'];?>
"
												title="详情"><i class="icon-envelope-alt"></i></a> &nbsp;<a
												href="/controller/theme/themeHandler.php?type=edit&num=<?php echo $_smarty_tpl->tpl_vars['theme']->value['num'];?>
"
												title="编辑"><i class=icon-edit></i></a> &nbsp;<a
												href="/controller/theme/themeHandler.php?type=delete&num=<?php echo $_smarty_tpl->tpl_vars['theme']->value['num'];?>
"
												title="删除"><i class="icon-trash"></i></a></td>

										</tr>
										<?php } ?>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
	<!-- END FOOTER -->
</html><?php }} ?>
