<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/db.php';

$db=new DBConnection;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/general.php';

$General=new General;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/crud.php';

$CRUD=new CRUD;

if(isset($_POST["pks"])){
    $arr=[];
    $data=$CRUD->Select("portfolio",1,null,null,"sira");
    for($i=0;$i<count($data);$i++){
        array_push($arr,$data[$i]["sira"]);
    }
    $data=json_encode($arr);
    print_r($data);
}

if(@$_GET["sil"]=="ok"){
    $CRUD->DELETE("portfolio",@$_GET["id"])?
    header("Location:portfolio-siyahi.php?status=ok") : 
    header("Location:portfolio-siyahi.php?status=no");
}
if(@$_GET["rdk"]=="ok"){
    $redakte=$CRUD->Select("portfolio",0,"where id=".@$_GET["id"]);

}


