<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/ThemeService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();
$num = $_GET ['num'] . trim ();
function checkPriv() {
	$user = $_SESSION ['user'];
	if (1 != $user ['role_id']) {
		header ( "location:/index.php?msg=auth_failure&id=".$user ['role_id'] );
		return;
	}
}

if ('list' == $type) {
	checkPriv();
	$themeService = new ThemeService ();
	$topThemes = $themeService->themeList ( 0 );
	$smarty->assign ( 'topThemes', $topThemes );
	$smarty->display ( 'admin/theme/themeList.tpl' );
} elseif ('listPage'==$type){
	$projectId=$_GET['projectId'].trim();
	$themeService = new ThemeService ();
	$themes = $themeService->themeListByProject($projectId);
	$smarty->assign ( 'themes', $themes );
	$smarty->display ( 'article/theme.tpl' );
	
}else if ('add' == $type) {
	checkPriv();
	$themeService = new ThemeService ();
	$isSuccess = $themeService->createTheme ( $_POST, $user );
	if ($isSuccess) {
		header ( "location:themeHandler.php?type=list&msg=success" );
	} else {
		header ( "location:themeHandler.php?type=list&msg=failure" );
	}
} else if ('delete' == $type) {
	checkPriv();
	$themeService = new ThemeService ();
	$isSuccess = $themeService->deleteTheme ( $num );
	if ($isSuccess) {
		header ( "location:themeHandler.php?type=list&msg=success" );
	} else {
		header ( "location:themeHandler.php?type=list&msg=failure" );
	}
} else if ('query' == $type) {
	checkPriv();
	$themeService = new ThemeService ();
	$theme = $themeService->findTheme ( $num );
	$smarty->assign ( 'theme', $theme );
	$smarty->display ( 'admin/theme/themeDetail.tpl' );
} else if ('edit' == $type) {
	checkPriv();
	header ( "location:themeHandler.php?type=list&msg=success" );
} else if ('theme_list' == $type) {
	$themeService = new ThemeService ();
	$allThemes = $themeService->getThemeByProject ($_POST['project_id']);
	echo json_encode ( $allThemes );
}
