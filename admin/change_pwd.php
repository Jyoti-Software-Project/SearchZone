<?php
include('db.php');

if(isset($_POST['change']))
{
	$pwd=$_POST['pwd'];
	$c_pwd=$_POST['c_pwd'];
	$email=$_SESSION['einfo']['email'];

	if ($_SESSION['einfo']['pwd']==$pwd) {
		$sql = "UPDATE `employee` SET `pwd`='$c_pwd' WHERE `email`='$email'";
		if(mysql_query( $sql)) {
			$_SESSION['einfo']['pwd']=$c_pwd;
			$_SESSION['msg1']="<div align='center' style = 'color:blue;' >Password Changed Succesfully.</div>";
			header('location:setting.php');
		} else{
			$_SESSION['msg1']="<div align='center' style = 'color:red;' >No Such User Is There.</div>";
			header('location:setting.php');
		}		
	} else{
		$_SESSION['msg1']="<div align='center' style = 'color:red;' >Worng Password</div>";
		header('location:setting.php');
	}	
} else{
	header('location:setting.php');
}

?>