<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>SearchZone || Mobile</title>
  <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon" />

  <link href="moblie.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
	.search-sec{
	    padding: 2rem;
	}
	.search-slt{
	    display: block;
	    width: 100%;
	    font-size: 14px;
	    line-height: 1.5;
	    color: #55595c;
	    background-color: #fff;
	    background-image: none;
	    border: 1px solid #ccc;
	    height: calc(3rem + 2px) !important;
	    border-radius:0;
	}
	.wrn-btn{
	    width: 100%;
	    font-size: 16px;
	    font-weight: 400;
	    text-transform: capitalize;
	    height: calc(3rem + 2px) !important;
	    border-radius:0;
	}
    .col-lg-3{
    margin-bottom: 10px;
    margin-top: 10px;
}

  </style> 
</head>
<body>
<nav class="navbar navbar-inverse" style="height: 73px;">
<div class="container-fluid">
<div class="row">
  <div class="col-lg-4">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="font-size: 40px; padding-top: 25px; font-family: Cursive;">S e a r c h Z o n e</a>
    </div>
  </div>
<div class="col-lg-8">
<div class="navbar-right">
<section class="search-sec">
    <div class="container">
        <form action="" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                         <div class="col-lg-6 col-md-3 col-sm-6 p-0">
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="company">
                                <option value="nothing">Select Brand</option>
                                <option value="Apple">Apple</option>
                                <option value="Realme">Realme</option>
                                <option value="Redmi">Redmi</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn" name="ok">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
</div>
    </div>
  </div>
</nav>



<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">

    <?php
		
			if(isset($_POST['ok']))
			{
				$i=0;
				$company=$_POST['company'];
				if($company=="nothing")
				{
					echo "<script>alert('Please select any Brand !'); location.href='mobile.php';</script>";
				}
				else
				{
				$sr="SELECT * FROM `mobile` WHERE `company`='$company'";
				$r=mysql_query($sr);
				while($m_row=mysql_fetch_array($r))
				{
					
		?>
        <div class="col-lg-3">
            <div class="card"> <img src="<?php echo 'admin/'.$m_row['imgurl']; ?>" width="130" height="150" class="card-img-top">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1"><?php echo $m_row['name']; ?></small>
                        <h6><?php echo 'Rs. '.$m_row['price']; ?></h6>
                    </div>
                    
                    <div class="mx-3 mt-3 mb-2">
                    	<a href="mobile_details_view.php?id=<?php echo $m_row['id']; ?>">
                    		<button type="button" class="btn btn-danger btn-block"><small>View Details</small></button>
                    	</a>
                    </div>
                </div>
            </div>
        </div>
        <?php }	} } else { 
        	$sr="SELECT * FROM `mobile` ORDER BY `id` DESC";
				$r=mysql_query($sr);
				while($m_row=mysql_fetch_array($r))
				{
					
		?>
        <div class="col-lg-3">
            <div class="card"> <img src="<?php echo 'admin/'.$m_row['imgurl']; ?>" width="130" height="150" class="card-img-top">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1"><?php echo $m_row['name']; ?></small>
                        <h6><?php echo 'Rs. '.$m_row['price']; ?></h6>
                    </div>
                    
                    <div class="mx-3 mt-3 mb-2">
                    	<a href="mobile_details_view.php?id=<?php echo $m_row['id']; ?>">
                    		<button type="button" class="btn btn-danger btn-block"><small>View Details</small></button>
                    	</a>
                    </div>
                </div>
            </div>
        </div>
    	<?php } } ?>
        
    </div>
</div>
</body>
</html>