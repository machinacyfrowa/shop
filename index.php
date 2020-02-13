<?php 
require_once('smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('view');
$smarty->setCompileDir('view/compiled');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('config');

require_once('class/Controller.class.php');
$controller = new Controller();
$controller->view();
  
?>