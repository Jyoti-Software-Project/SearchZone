<?php include_once("config.php"); ?>

<?php
    if(isset($_POST['result']))
    {
      $search_item=$_POST['search_item'];
      
      if($search_item=="nothing")
      {
        $_SESSION['er']="PLEASE SELECT ANY PRODUCT FROM LIST MENU";
        header('location:index.php');
        exit;
      }
      else
      {
        switch($search_item)
        {
          case 1:
          {
            header('location:mobile.php');
            exit;
            break;
          }
          case 2:
          {
            header('location:laptop.php');
            exit;
            break;
          }
          case 3:
          {
            header('location:digital_camera.php');
            exit;
            break;
          }
          
        }
      }
    }
?>