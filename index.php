<?php 
include('smarty-3.1.30/libs/Smarty.class.php');
// include('controller/db.php');


$smarty = new Smarty;
$smarty->setTemplateDir('tpl');



$smarty->display('tpl/index.tpl')



?>

