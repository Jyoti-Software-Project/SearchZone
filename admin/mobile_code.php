<?php include_once("db.php"); ?>
<?php

		$company=$_POST['company'];
		$name=$_POST['name'];
		$model_no=$_POST['model_no'];
		$dimensions=$_POST['dimensions'];
		$sim=$_POST['sim'];
		$network=$_POST['network'];
		$weight=$_POST['weight'];
		$price=$_POST['price'];
		$color=$_POST['color'];
		$pcamera=$_POST['pcamera'];
		$scamera=$_POST['scamera'];
		$screen=$_POST['screen'];
		$processor=$_POST['processor'];
		$storage=$_POST['storage'];
		$bluetooth=$_POST['bluetooth'];
		$wifi=$_POST['wifi'];
		$hspot=$_POST['hspot'];
		$ver=$_POST['ver'];
		$touch_screen=$_POST['touch_screen'];
		$battary=$_POST['battary'];
		$audio=$_POST['audio'];
		$video=$_POST['video'];
		$extra=$_POST['extra'];
		$amazon=$_POST['amazon'];
		$flipkart=$_POST['flipkart'];
		$dt=date('y-m-d');
		$img=$_FILES['img']['name'];
		$imgurl="mobile_img/".$img;
		
		
		if($_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/gif" || $_FILES['img']['type']=="image/png")
		{
			move_uploaded_file($_FILES['img']['tmp_name'],$imgurl);
		
		$sql="INSERT INTO `mobile`(`company`, `name`, `model_no`, `dimensions`, `sim`, `network`, `weight`, `price`, `color`, `pcamera`, `scamera`, `screen`, `processor`, `storage`, `bluetooth`, `wifi`, `hspot`, `ver`, `touch_screen`, `battary`, `dt`, `audio`, `video`, `extra`, `amazon`, `flipkart`, `imgurl`) VALUES
		('$company', '$name', '$model_no', '$dimensions', '$sim', '$network', '$weight', '$price', '$color', '$pcamera', '$scamera', '$screen', '$processor', '$storage', '$bluetooth', '$wifi', '$hspot', '$ver', '$touch_screen', '$battary', '$dt', '$audio', '$video', '$extra', '$amazon', '$flipkart', '$imgurl')";
		
		mysql_query($sql) or die(mysql_error());
		
		$_SESSION['msg']="Data Inserted Successfully....";
		header('location:mobile_data.php');
		exit;
		}
		else
		{
		$_SESSION['msg']="Please Select image Format File";
		header('location:mobile_data.php');
		exit;
		}




?>