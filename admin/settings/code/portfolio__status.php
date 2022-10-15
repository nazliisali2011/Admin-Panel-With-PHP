<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/db.php';

$db=new DBConnection;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/general.php';

$General=new General;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/crud.php';

$CRUD=new CRUD;

if(isset($_POST["ks"])){
   $id=$_POST["id"];
   $where="where id=:id";
   $arr=["id"=>$id];
   $st=$CRUD->Select("portfolio",null,$where,$arr,"status")["status"]; 
   
   
   $col="status=:status";
   $array=[
       "status"=>$st==1 ? 0 : 1,
       "id"=>$id

   ];
   echo $CRUD->UPDATE("portfolio",$col,$where,$array);

}



