<?php
// Version
define('VERSION', '3.0.3.2');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}

//VirtualQMOD
require_once('../vqmod/vqmod.php');
VQMod::bootup();

// VQMODDED Startup
require_once(VQMod::modCheck(DIR_SYSTEM . 'startup.php'));

// BEGIN NitroPack
if (is_file(DIR_SYSTEM . 'library/nitropackio/hook/index_admin.php')) {
    require_once(DIR_SYSTEM . 'library/nitropackio/hook/index_admin.php');
}
// END NitroPack

start('admin');