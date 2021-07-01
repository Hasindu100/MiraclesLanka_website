<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
	<nav>
        <div class="logo"><img src ="images/123880284_102022315057554_6400407058210913611_o copy.png"><span id="text">Mirakels Life International</span></div>
        <ul>
            <li><a href="index.php"><i class="fas fa-home" id="icons"></i><span id="text">Home</span></a></li>
            <li>
                
                <a href="#features"><i class="fas fa-building" id="icons"></i><span id="text">Departments</span></a>
                
                <ul>
                    <li><a href="#Land">Pages</a></li>
                    <li><a href="#cctv">Eliments</a></li>
                    <li><a href="#cctv">icons</a></li>
                </ul>
            </li>
                
            <li>
                
                <a href="#job"><i class="fas fa-briefcase" id="icons"></i><span id="text">Services</span></a>
                
                <ul>
                    <li><a href="#Land">Web Design</a></li>
                    <li><a href="#cctv">App Design</a></li>
                    <li><a href="#cctv">More</a></li>
                </ul>
            </li>
                
            <li><a href="#login" data-toggle="modal" data-target="#exampleModalCenter-2"><i class="fas fa-user" id="icons"></i><span id="text">Login</span></a></li>
        </ul>
    </nav>

<?php
	include 'config.php';
	$land_id = $_GET["land_id"];
	
	$sql = "select * from land where land_id = '$land_id'";
	$result = mysqli_query($db, $sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$imageURL = 'uploads/'.$row["file_name"];
			$output = 
			'<div class="row" style="margin:10px;border:2px solid #ccc">
				<div class="col-md-6" style="padding:50px">
				<h2 style="color:DodgerBlue">'.$row["place"].' <b style="font-size:20px;color:black">Land for Sale</b></h2>
				<h2 style="color:green">RS. '.$row["price"].' <b style="font-size:20px;color:gray">Per perch</b></h2>
				<img src="'.$imageURL.'" style="float:center" width="620" height="420">
				<hr style="border:2px solid green"></hr>
				<h2 style="color:DodgerBlue">Property Details</h2>
				<p>'.$row["description"].'</p>
				<hr style="border:2px solid green"></hr>
				<h5 style="font-size:20px;color:#ccc">More details</h5>
                <i class="fas fa-phone-volume" style="font-size:24px;color:rgb(46, 43, 43)"></i>	0777370733, 0721821822</p>
                <i class="far fa-envelope-open" style="font-size:24px;color:rgb(51, 47, 47)"></i>	mirakelslife@gmail.com</p>

				
				
				</div>
				<div class="col-md-6" style="padding:50px">
					<h2 style="color:DodgerBlue">Location</h2>
					<div class="mapouter">
						<div class="gmap_canvas">
							'.$row["loc_link"].'"
						</div>
						<style>.mapouter{text-align:left;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
					</div>
				</div>
			</div>';
				echo $output;
		}
	}
?>

</body>
</html>