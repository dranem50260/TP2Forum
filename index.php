<?php

require_once('config/config.php');
require_once('lib/core.php');      // For some core functions like render

$module = isset($_REQUEST['module'])?safe($_REQUEST['module']):$config['default_module'];

$action = isset($_REQUEST['action'])?safe($_REQUEST['action']):$config['default_action'];

$controller_file = 'controllers/'.ucfirst($module).'Controller.php';

if(!file_exists($controller_file)){
     trigger_error('Invalid Controller');
     exit;
}

require_once($controller_file);

$function = strtolower($module).'_controller_'.$action;

if(!function_exists($function)){
     trigger_error('Invalid Controller Action');
     exit;
}

/*echo ("Dans index.php : " . $function . "<br>");
print_r($_REQUEST);
echo "<br>";*/

call_user_func($function, $_REQUEST);

?> 
