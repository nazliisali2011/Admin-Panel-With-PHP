<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/db.php';

$db=new DBConnection;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/general.php';

$General=new General;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/crud.php';

$CRUD=new CRUD;


if(@$_GET["sil"]=="ok"){
    $CRUD->DELETE("team",@$_GET["id"])?
    header("Location:team-siyahi.php?status=ok") : 
    header("Location:team-siyahi.php?status=no");
}
if(@$_GET["rdk"]=="ok"){
    $redakte=$CRUD->Select("team",0,"where id=".@$_GET["id"]);

}
