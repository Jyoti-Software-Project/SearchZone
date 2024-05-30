<?php include_once("db.php"); ?>
<?php
        if(!empty($_SESSION['einfo']))
        {
            
        }
        else
        {
            header('location:index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laptop Panel</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
		div.md{
		background-color:#333333;
		color:#FFFFFF;
		font-size:18px;
		font-weight:bolder;
		border:2px dashed #990000;
		padding:8px;
		width:60%;
		height:auto;
		margin-left: 12%;
		}
		.txt{
		background-color:#FFF;
		color:#0000CC;
		padding:2px;
		border:1px ridge #990000;
		}
		.select{
		background-color:#FFF;
		color:#0000FF;
		font-weight:bold;
		padding:3px;
		border:1px solid #990000;
		}
		.bt{
		background-color:#990000;
		color:#FFFF00;
		font-size:24px;
		font-weight:bold;
		padding:2px;
		border:1px solid #00CC00;
		}
		tr{
			height: 40px;
		}
	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_home.php">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['einfo']['email']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="setting.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin_home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>	
                    </li>
					<li>
                        <a href="mobile_data.php"><i class="fa fa-fw fa-mobile"></i> Insert Mobile</a>	
                    </li>
                    <li>
                        <a href="laptop_data.php"><i class="fa fa-fw fa-laptop"></i> Insert Laptop</a> 
                    </li>
                    <li>
                        <a href="digital_camera_data.php"><i class="fa fa-fw fa-camera"></i> Insert Camera</a> 
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Insert Laptop Details
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-laptop"></i> Insert Laptop
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

        <div class="md" align="center">
		<p><font color="#990000"><b><?php echo $_SESSION['msg']; $_SESSION['msg']=""; ?></b></font></p>
		<form name="m" action="laptop_code.php" method="post" enctype="multipart/form-data">
		<table cellpadding="5" cellspacing="8">
		<tr>
			<td>Company Name</td>
			<td>
				<select name="company" class="select">
				<option>-select-</option>
				<option value="HP">HP</option>
				<option value="Dell">Dell</option>
				<option value="Acer">Acer</option>
                <option value="Lenovo">Lenovo</option>
				<option value="Samsung">Samsung</option>
				<option value="Sony_vaio">Sony_vaio</option>
                </select>
			</td>
		</tr>
		<tr>
			<td>Laptop Name</td>
			<td><input type="text" name="name" size="30" class="txt" /></td>
		</tr>
		<tr>
			<td>Model No</td>
			<td><input type="text" name="model_no" size="30" class="txt" /></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" size="30" class="txt" /></td>
		</tr>
        <tr>
			<td>Processor</td>
			<td><input type="text" name="processor" size="30" class="txt" /></td>
		</tr>
        <tr>
			<td>RAM</td>
			<td><input type="text" name="ram" size="30" class="txt" /></td>
		</tr>
        
        <tr>
			<td>Weight</td>
			<td><input type="text" name="weight" size="30" class="txt" /></td>
		</tr>
		<tr>
			<td>Battery</td>
			<td><input type="text" name="battery" size="30" class="txt" /></td>
		</tr>
        <tr>
			<td>Battary Backup</td>
			<td><input type="text" name="backup" size="30" class="txt" /></td>
		</tr>
        <tr>
			<td>Hard Disk</td>
			<td><input type="text" name="hdd" size="30" class="txt" /></td>
		</tr>
        	<td>Display</td>
			<td><input type="text" name="display" size="30" class="txt" /></td>
		</tr>		
		<tr>
			<td>Bluetooth</td>
			<td><input type="radio" name="bluetooth" value="Yes" />Yes &nbsp;&nbsp;<input type="radio" name="bluetooth" value="No" />No</td>
		</tr>
        <tr>
			<td>Wi-Fi</td>
			<td><input type="radio" name="wifi" value="Yes" />Yes &nbsp;&nbsp;<input type="radio" name="wifi" value="No" />No</td>
		</tr>
        <tr>
			<td>Camera</td>
			<td><input type="radio" name="camera" value="Yes" />Yes &nbsp;&nbsp;<input type="radio" name="camera" value="No" />No</td>
		</tr>
		
		
        

		<tr>
			<td>Image</td>
			
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="file" name="img" size="40" class="txt" /></td>
		</tr>
		<tr>
			<td>Extra Features</td>
			
		</tr>
		<tr>
			<td colspan="2"><textarea name="extra" cols="50" rows="6" class="txt"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="ok" value="Insert Laptop Data" class="bt" /></td>
		</tr>
		</table>
		</form>
		
		</div>

                    </div>
                                    

                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
