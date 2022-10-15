<?php
      $teamsiyahi=$CRUD->Select("team",1);

     if(isset($_POST["Team_add"])){
        $olcu = $_FILES["sekil"]["size"];
        $tip = $_FILES["sekil"]["type"];
        $tmp = $_FILES["sekil"]["tmp_name"];
        $ad = $_FILES["sekil"]["name"];
        $tipler = ["image/png","image/jpeg","image/gif"];
        $yol = "../../sekil/team/".$ad;
        if ($olcu > 0 && !in_array($tip,$tipler)) {
           header("Location:team-add.php?status=no");       
           exit;
        }
    
        $column = '
        Ad=:ad,
        metn=:metn,
        sekil=:sekil
        ';
        $arr = [
            "ad" => $_POST["ad"],
            "metn" => $_POST["metn"],
            "sekil" =>substr($yol,6)
            

        ];
        if ($CRUD->INSERT("team", $column,$arr)) {
            move_uploaded_file($tmp, $yol);
            header("Location:team-add.php?status=ok");    
            print_r($arr);
            exit;
        } else {
           header("Location:team-add.php?status=no");        
            exit;
        }

     }
     if(isset($_POST["team_redakte"])){
      
        $olcu=$_FILES["sekil"]["size"];
        $tip=$_FILES["sekil"]["type"];
        $ad=$_FILES["sekil"]["name"];
        $tmp=$_FILES["sekil"]["tmp_name"];
        $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
        $ksekil=$_POST["ksekil"];
        $id=$_POST["id"];
        $yol="../../sekil/team/".$ad;
        
        if($olcu>0 && !in_array($tip,$tipler) )
        {
           header("Location:team-siyahi.php?status=no");
           exit;
        }
         $column="
         Ad=:ad,
         metn=:metn,
         sekil=:sekil
         where id={$id}
         ";
  
         $arr=[
            "ad"=>$_POST["ad"],
            "metn"=>$_POST["metn"],
            "sekil"=>$olcu>0 ? substr($yol,6) : $ksekil
         ];
  
   
        if( $CRUD->UPDATE("team",$column,null,$arr)){
        
           $olcu>0 ? unlink("../../".$ksekil) : "";
           move_uploaded_file($tmp,$yol);
           header("Location:team-siyahi.php?status=ok");
           exit;
        }
  
        else{
           header("Location:team-siyahi.php?status=no");
           exit;
        }
  
  
       
       }
  
?>