<?php
include_once("db.php");
?>

<?php
if(isset($_POST['login']))
	
	{
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		
			$data=mysql_query("select * from `employee` where `email`='$email' and `pwd`='$password'");
				
				if(mysql_num_rows($data))
					{
						$row=mysql_fetch_array($data);
						$_SESSION['einfo']=$row;
						header('location: admin_home.php');
						exit;
					}
				else{
						echo "Login Error";
					
					}
				}
	?>
