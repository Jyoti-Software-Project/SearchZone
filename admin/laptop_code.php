<?php include_once("db.php"); ?>
<?php

		$company=$_POST['company'];
		$name=$_POST['name'];
		$model_no=$_POST['model_no'];
		$price=$_POST['price'];
		$processor=$_POST['processor'];
		$ram=$_POST['ram'];
		$hdd=$_POST['hdd'];
		$display=$_POST['display'];
		$weight=$_POST['weight'];
		$battery=$_POST['battery'];
		$backup=$_POST['backup'];	
		$bluetooth=$_POST['bluetooth'];
		$wifi=$_POST['wifi'];
		$camera=$_POST['camera'];
		$extra=$_POST['extra'];
		$dt=date('y-m-d');
		$img=$_FILES['img']['name'];
		$imgurl="laptop_img/".$img;
		
		
		if($_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/gif" || $_FILES['img']['type']=="image/png")
		{
			move_uploaded_file($_FILES['img']['tmp_name'],$imgurl);
		
		$sql="INSERT INTO `laptop`(`company`,`name`,`model_no`,`price`,`processor`,`ram`,`hdd`,`display`,`weight`,`battery`,`backup`,`bluetooth`,`wifi`,`camera`,`extra`,`dt`,`imgurl`) VALUES
		('$company','$name','$model_no','$price','$processor','$ram','$hdd','$display','$weight','$battery','$backup','$bluetooth','$wifi','$camera','$extra','$dt','$imgurl')";
		
		mysql_query($sql) or die(mysql_error());
		
		$_SESSION['msg']="Data Inserted Successfully....";
		header('location:laptop_data.php');
		exit;
		}
		else
		{
		$_SESSION['msg']="Please Select image Format File";
		header('location:laptop_data.php');
		exit;
		}




?>