<?php
  $port_list=$CRUD->Select("portfolio",1);
  if(isset($_POST["portfolio-add"]))
  {
      $column= "
         title=:title,
         description=:description,
         link=:link
      ";
      $arr=[
         "title"=>$_POST["title"],
         "description"=>$_POST["description"], 
         "link"=>$_POST["link"]

      ];
      $CRUD->Insert("portfolio",$arr,$column)?
      header("Location:portfolio-add.php?status=ok"):
      header("Location:portfolio-add.php?status=no");
  }
?>
