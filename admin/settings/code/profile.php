<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/db.php';

$db=new DBConnection;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/general.php';

$General=new General;

require_once '/Applications/XAMPP/xamppfiles/htdocs/c2.4-backend/admin/settings/class/crud.php';

$CRUD=new CRUD;

if(isset($_POST["ksifre"])){
   $email=$_POST["email"];
   $sifre=md5($_POST["sifre"]);
   $where="where email=:email";
   $arr=["email"=>$email];
   $sfr=$CRUD->Select("admin",null,$where,$arr,"sifre")["sifre"]; 
   
   

   if($sifre==$sfr){
       echo 1;
   }
   else{
    echo 0;
}
}

