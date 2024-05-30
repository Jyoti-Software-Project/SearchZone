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

    <title>Change Password</title>
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
                    <li>
                        <a href="delete.php"><i class="fa fa-fw fa-trash"></i> Delete Details</a>   
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
                            Change Password
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-lock"></i> Change Password
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="change_pwd.php" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="pwd" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <label>Reset Password</label>
                                <input class="form-control" type="password" name="c_pwd" placeholder="Enter New Password">
                            </div>
                            <button type="submit" class="btn btn-default" name="change">Change Password</button>
                            <br/><br/>
                        </form>
                        <?php echo $_SESSION['msg1']; unset($_SESSION['msg1']); ?>
                    </div>
                </div>                

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