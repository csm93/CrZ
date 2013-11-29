<?php
//
// PHASE: BOOTSTRAP
//
define('CRZ_INSTALL_PATH', dirname(__FILE__));
define('CRZ_SITE_PATH', CRZ_INSTALL_PATH . '/site');

require(CRZ_INSTALL_PATH.'/src/CrZC/bootstrap.php');

$crz = CrZC::Instance();



//
// PHASE: FRONTCONTROLLER ROUTE
//
$crz->FrontControllerRoute();




//
// PHASE: THEME ENGINE RENDER
//
$crz->ThemeEngineRender();