<?php include_once("config.php"); ?>

<?php

        $get_id=$_GET['id'];
        
        $search="SELECT * FROM `laptop` WHERE `id`='$get_id'";
        $res=mysql_query($search);
        $row=mysql_fetch_array($res);


?>

<!DOCTYPE html>
<html>
<head>
    <link href="details_plugins/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="details_plugins/bootstrap.min.js"></script>
    <script src="details_plugins/jquery-1.11.1.min.js"></script>

    <title>Laptop Details View</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon" />

<style type="text/css">
    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
    li.active{border-bottom:3px solid silver;}

    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:20px;display:inline-flex;margin-bottom:0;margin-top:20px}
    .btn-success{width:100%;border-radius:0;}
    .btn-warning{width:100%;border-radius:0;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0;color:black}
    .title-attr{margin-top:0;margin-bottom:0;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}

    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;    
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;
            
        }            
        .section{width:104%;}
        .menu-items{padding-left:0;}
    }
</style>
</head>
    <body>

		<nav class="navbar navbar-inverse" style="height: 73px;">
		  <div class="container-fluid">
		  	<div class="row">
		  		<div class="col-lg-4">
		    		<div class="navbar-header">
		      			<a class="navbar-brand" href="laptop.php" style="font-size: 40px; padding-top: 25px; font-family: Cursive;">S e a r c h Z o n e</a>
		    		</div>
		    	</div>
			</div>
		  </div>
		</nav>

        <div class="container">
        	<div class="row">
               <div class="col-lg-4 item-photo">
                    <img style="max-width:100%;" src="<?php echo 'admin/'.$row['imgurl']; ?>" />
                </div>
                <div class="col-lg-6" style="border:0px solid gray">
                    <h3><?php echo $row['name']; ?></h3>                       

                    <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px;">Rs. <?php echo $row['price']; ?>/-</h3>
        
                              
                    <br/><br/><br/><br/>
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-warning"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Click to Buy From Flipkart</button>
                       
                    </div>  
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Click to Buy From Amazon</button>
                       
                    </div>    
                                                         
                </div>                              
        
                <div class="col-lg-12">
                    <ul class="menu-items">
                        <li class="active">Details of the product</li>
                        
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                            <table style="margin-left: 3.5%;">
                            <br>
                            <tr>
                                <td>Model No</td>
                                <td><?php echo $row['model_no']; ?></td>
                            </tr>
                            <tr>
                                <td>Processor</td>
                                <td><?php echo $row['processor']; ?></td>
                            </tr>
                            <tr>
                                <td>RAM</td>
                                <td><?php echo $row['ram']; ?></td>
                            </tr>
                            <td>Hard Disk</td>
                                <td><?php echo $row['hdd']; ?></td>
                            </tr>
                            <td>Display</td>
                                <td><?php echo $row['display']; ?></td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td><?php echo $row['weight']; ?></td>
                            </tr>
                            <tr>
                                <td>Battery</td>
                                <td><?php echo $row['battery']; ?></td>
                            </tr>
                            <tr>
                                <td>Battary Backup</td>
                                <td><?php echo $row['backup']; ?></td>
                            </tr>
                            <tr>
                                <td>Bluetooth</td>
                                <td><?php echo $row['bluetooth']; ?></td>
                            </tr>
                            <tr>
                                <td>Wi-Fi</td>
                                <td><?php echo $row['wifi']; ?></td>
                            </tr>
                            <tr>
                                <td>Camera</td>
                                <td><?php echo $row['camera']; ?></td>
                            </tr>
                            <tr>
                                <td>Extra Features</td>
                                <td><?php echo $row['extra']; ?></td>
                            </tr>
                            <tr>
                                <td width="15%">Publish Date</td>
                                <td><?php echo $row['dt']; ?></td>
                            </tr>
                            </table>
                         <br><br> 
                    </div>
                </div>	
            </div>
        </div>       
    </body>
</html>