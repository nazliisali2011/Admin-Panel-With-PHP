<?php
  $adminsiyahi=$CRUD->Select("admin",1);
     if(isset($_POST["admin_add"])){
        $olcu = $_FILES["sekil"]["size"];
        $tip = $_FILES["sekil"]["type"];
        $tmp = $_FILES["sekil"]["tmp_name"];
        $ad = $_FILES["sekil"]["name"];
        $tipler = ["image/png","image/jpeg","image/gif"];
        $yol = "../../sekil/admin/".$ad;
        if ($olcu > 0 && !in_array($tip,$tipler)) {
           header("Location:admin-add.php?status=no");       
           exit;
        }
    
        $column = '
        adsoyad=:ad,
        email=:email,
        sifre=:sifre,
        vezife=:vezife,
        sekil=:sekil
        ';
        $arr = [
            "ad"=>$_POST["ad"],
            "email" => $_POST["email"],
            "sifre" => md5($_POST["sifre"]),
            "vezife" => $_POST["vezife"],
            "sekil" =>substr($yol,6)
            

        ];
        if ($CRUD->INSERT("admin", $column,$arr)) {
            move_uploaded_file($tmp, $yol);
            header("Location:admin-add.php?status=ok");    
            print_r($arr);
            exit;
        } else {
           header("Location:admin-add.php?status=no");        
            exit;
        }

     }
  
?>