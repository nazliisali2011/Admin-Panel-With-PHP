<?php  

session_start();
ob_start();
require_once 'admin/settings/db.php';

$db=new DBConnection;

require_once 'admin/settings/class/general.php';

$General=new General;

require_once 'admin/settings/class/crud.php';
$CRUD=new CRUD; 

$settings=$CRUD->Select("settings",1);
$blog=$CRUD->Select("blog",1);
$portfolio=$CRUD->Select("portfolio",1);
?>