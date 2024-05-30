<?php include_once("db.php"); ?>
<?php

		$company=$_POST['company'];
		$name=$_POST['name'];
		$model_no=$_POST['model_no'];
		$model_name=$_POST['model_name'];
		$price=$_POST['price'];
		$weight=$_POST['weight'];
		$dimensions=$_POST['dimensions'];
		$color=$_POST['color'];
		$pixel=$_POST['pixel'];
		$soket=$_POST['soket'];
		$wifi=$_POST['wifi'];
		$screen_touch=$_POST['screen_touch'];
		$display=$_POST['display'];
		$battary=$_POST['battary'];
		$stype=$_POST['stype'];
		$ssize=$_POST['ssize'];
		$format=$_POST['format'];
		$video_op=$_POST['video_op'];
		$extra=$_POST['extra'];
		$amazon=$_POST['amazon'];
		$flipkart=$_POST['flipkart'];
		$dt=date('y-m-d');
		$img=$_FILES['img']['name'];
		$imgurl="digitalcamera_img/".$img;
		
		
		if($_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/gif" || $_FILES['img']['type']=="image/png")
		{
			move_uploaded_file($_FILES['img']['tmp_name'],$imgurl);
		
		$sql="INSERT INTO `digital_camera`(`company`, `name`, `model_no`, `model_name`, `price`, `weight`, `dimensions`, `color`, `pixel`, `soket`, `wifi`, `screen_touch`, `display`, `battary`, `stype`, `ssize`, `format`, `video_op`, `extra`, `amazon`, `flipkart`, `imgurl`, `dt`) VALUES
		('$company', '$name', '$model_no', '$model_name', '$price', '$weight', '$dimensions', '$color', '$pixel', '$soket', '$wifi', '$screen_touch', '$display', '$battary', '$stype', '$ssize', '$format', '$video_op', '$extra', '$amazon', '$flipkart', '$imgurl', '$dt')";
		
		mysql_query($sql) or die(mysql_error());
		
		$_SESSION['msg']="Data Inserted Successfully....";
		header('location:digital_camera_data.php');
		exit;
		}
		else
		{
		$_SESSION['msg']="Please Select image Format File";
		header('location:digital_camera_data.php');
		exit;
		}

?>