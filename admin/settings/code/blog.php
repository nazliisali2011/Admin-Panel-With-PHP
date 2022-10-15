<?php
      $siyahi=$CRUD->Select("Blogkateqoriya",1);
      $blogsiyahi=$CRUD->Select("blog",1);
      if(isset($_POST["blog_kat"])){
         $col = "
             name=:x,
             sira=:sira
         ";
         $arr = [
             "x"=>$_POST["ad"],
             "sira"=>$_POST["sira"]
         ];
         $CRUD->INSERT("Blogkateqoriya",$col,$arr) ? 
          header("Location:blog-kat.php?status=ok"): 
          header("Location:blog-kat.php?status=no");
     }
     if(isset($_POST["redakte"])){
        $col = "
        name=:x
        ";
        $whr="where id=:id";
        $arr = [
            "x"=>$_POST["ad"],
            "id"=>$_POST["id"]
        ];
        $CRUD->UPDATE("portfolio_kat",$col,$whr,$arr) ? 
        header("Location:blog-kat-siyahi.php?status=ok"): 
        header("Location:blog-kat-siyahi.php?status=no");

     }
     if(isset($_POST["blog_add"])){
        $olcu = $_FILES["sekil"]["size"];
        $tip = $_FILES["sekil"]["type"];
        $tmp = $_FILES["sekil"]["tmp_name"];
        $ad = $_FILES["sekil"]["name"];
        $tipler = ["image/png","image/jpeg","image/gif"];
        $yol = "../../sekil/blog/".$ad;
        if ($olcu > 0 && !in_array($tip,$tipler)) {
           header("Location:blog-add.php?status=no");       
           exit;
        }
    
        $column = '
        kat_id=:kId,
        ad=:ad,
        link=:link,
        metn=:metn,
        sekil=:sekil
        ';
        $arr = [
            "kId"=>$_POST["kId"],
            "ad" => $_POST["ad"],
            "link" => $_POST["link"],
            "metn" => $_POST["metn"],
            "sekil" =>substr($yol,6)
            

        ];
        if ($CRUD->INSERT("blog", $column,$arr)) {
            move_uploaded_file($tmp, $yol);
            header("Location:blog-add.php?status=ok");    
            print_r($arr);
            exit;
        } else {
           header("Location:blog-add.php?status=no");        
            exit;
        }

     }
     if(isset($_POST["blog_redakte"])){
      
        $olcu=$_FILES["sekil"]["size"];
        $tip=$_FILES["sekil"]["type"];
        $ad=$_FILES["sekil"]["name"];
        $tmp=$_FILES["sekil"]["tmp_name"];
        $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
        $ksekil=$_POST["ksekil"];
        $id=$_POST["id"];
        $yol="../../sekil/blog/".$ad;
        
        if($olcu>0 && !in_array($tip,$tipler) )
        {
           header("Location:blog-siyahi.php?status=no");
           exit;
        }
         $column="
         ad=:ad,
         link=:link,
         sekil=:sekil
         where id={$id}
         ";
  
         $arr=[
            "ad"=>$_POST["ad"],
            "link"=>$_POST["link"],
            "sekil"=>$olcu>0 ? substr($yol,6) : $ksekil
         ];
  
   
        if( $CRUD->UPDATE("blog",$column,null,$arr)){
        
           $olcu>0 ? unlink("../../".$ksekil) : "";
           move_uploaded_file($tmp,$yol);
           header("Location:blog-siyahi.php?status=ok");
           exit;
        }
  
        else{
           header("Location:blog-siyahi.php?status=no");
           exit;
        }
  
  
       
       }
  
?>