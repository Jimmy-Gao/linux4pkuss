<?php
use \service\TeacherManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/TeacherManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$teacherManage=new TeacherManageService();
//在theme_tb表增加教师信息后，需要修改下面这句参数，改为教师信息id号
$result=$teacherManage->GetTeacherInfo(1);

if($result!=null)
{
	$smarty->assign('Title',$result[0]['title']);
	$smarty->assign('Content',$result[0]['content']);
}
$smarty->display('../templates/SystemManage/TeacherShow.tpl');