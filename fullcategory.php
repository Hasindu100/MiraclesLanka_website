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
                <a href="allservices.php"><i class="fas fa-briefcase" id="icons"></i><span id="text">Services</span></a>
            </li>
                
            <li><a href="#login" data-toggle="modal" data-target="#exampleModalCenter-2"><i class="fas fa-user" id="icons"></i><span id="text">Register</span></a></li>
        </ul>
    </nav>

   

    <div class="container-fluid">
  
  <div class="row">
    <div class="col-md-3" style="background-color:lavender;">
       <div class="mobile-menu">
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-secondary" id="menubtn" data-toggle="modal" data-target="#exampleModalCenter">
           Select category  <i class="fa fa-bars"></i>
        </button>
       </div>
        <div class="menu1">
            <div class="side-menu">
                <h2>Select Category</h2>
                <ul>
                    <li>
                    <label for="btn-9" class="show1"><i class="fas fa-home"></i>House +</label>
                    <input type="checkbox" id="btn-9">
                        <ul>
                            <li><a href="services2.php?service_id=S0013">Architecs</a></li>
                            <li><a href="land.php">Lands</a></li>
                            <li><a href="#">House Rental</a></li>
                            <li><a href="#">House Painting</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-10" class="show1"><i class="fas fa-car"></i>Vehicales +</label>
                        <input type="checkbox" id="btn-10">
                            <ul>
                                <li><a href="vehicle.php">Selling Vehicle</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Drivers</a></li>
                                <li><a href="#">Auto Mechanic</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-11" class="show1"><i class="fas fa-laptop"></i>IT +</label>
                        <input type="checkbox" id="btn-11">
                            <ul>
                                <li><a href="services2.php?service_id=S001">Computer Repairs</a></li>
                                <li><a href="services2.php?service_id=S005">Design & Creative</a></li>
                                <li><a href="services2.php?service_id=S002">Phone Repairs</a></li>
                                <li><a href="services2.php?service_id=S003">Web design & software</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-12" class="show1"><i class="fas fa-cogs"></i>Technicians+</label>
                        <input type="checkbox" id="btn-12">
                            <ul>
                                <li><a href="services2.php?service_id=S006"|>AC Repairs</a></li>
                                <li><a href="services2.php?service_id=S007">CCTV</a></li>
                                <li><a href="#">Electricians</a></li>
                                <li><a href="#">Glass & Aluminium</a></li>
                                <li><a href="#">Iron Works</a></li>
                                <li><a href="#">Plumbing</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-13" class="show1"><i class="fas fa-users"></i>Professionals +</label>
                        <input type="checkbox" id="btn-13">
                            <ul>
                                <li><a href="services2.php?service_id=S008">Accountancy </a></li>
                                <li><a href="#">Legal advice </a></li>
                                <li><a href="services2.php?service_id=S0010">Security </a></li>
                                <li><a href="#">Tution </a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-14" class="show1"><i class="fab fa-buysellads"></i>Ads +</label>
                        <input type="checkbox" id="btn-14">
                            <ul>
                                <li><a href="services2.php?service_id=S0011">Digital ads </a></li>
                                <li><a href="services2.php?service_id=S0012">Facebook marketing </a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="col-md-6" style="background-color:lavenderblush;">
        
            <?php
                include 'config.php';
                $cat_id = $_GET["cat_id"];
                $query = $db->query("SELECT * FROM services WHERE cat_id='$cat_id'");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = 'uploads/'.$row["file_name"];
                        $title = $row["title"];
                        $de = $row["description"];
                        $s = substr($de, 0,60);
                        $output = '<div class="services">
                        <h3>'.$title.'</h3>
                        <img src="'.$imageURL.'" alt="">
                        <h5>Description</h5>
                        <p>'.$de.'</p>
                        <h5>More details</h5>
                        <i class="fas fa-phone-volume" style="font-size:24px;color:rgb(46, 43, 43)"></i>	0777370733, 0721821822</p>
                        <i class="far fa-envelope-open" style="font-size:24px;color:rgb(51, 47, 47)"></i>	mirakelslife@gmail.com</p>
                        </div>';
                        echo $output;
                    }
                };
            ?>
        
    </div>
    <div class="col-md-3" style="background-color:lavender;">
        <div class="ads">
            <img src="images/123793671_102352061691246_4749998429003912633_o.jpg">
        </div>
    </div>
  </div>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Select Category</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="side-menu2">
            <ul>
                    <li>
                    <label for="btn-15" class="show1"><i class="fas fa-home"></i>House+</label>
                    <input type="checkbox" id="btn-15">
                        <ul>
                            <li><a href="services2.php?service_id=S0013">Architecs</a></li>
                            <li><a href="land.php">Lands</a></li>
                            <li><a href="#">House Rental</a></li>
                            <li><a href="#">House Painting</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-16" class="show1"><i class="fas fa-car"></i>Vehicales+</label>
                        <input type="checkbox" id="btn-16">
                            <ul>
                                <li><a href="vehicle.php">Selling Vehicle</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Drivers</a></li>
                                <li><a href="#">Auto Mechanic</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-17" class="show1"><i class="fas fa-laptop"></i>IT+</label>
                        <input type="checkbox" id="btn-17">
                            <ul>
                                <li><a href="services2.php?service_id=S001">Computer Repairs</a></li>
                                <li><a href="services2.php?service_id=S005">Design & Creative</a></li>
                                <li><a href="services2.php?service_id=S002">Phone Repairs</a></li>
                                <li><a href="services2.php?service_id=S003">Web design & software</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-18" class="show1"><i class="fas fa-cogs"></i>Technicians+</label>
                        <input type="checkbox" id="btn-18">
                            <ul>
                                <li><a href="services2.php?service_id=S006"|>AC Repairs</a></li>
                                <li><a href="services2.php?service_id=S007">CCTV</a></li>
                                <li><a href="#">Electricians</a></li>
                                <li><a href="#">Glass & Aluminium</a></li>
                                <li><a href="#">Iron Works</a></li>
                                <li><a href="#">Plumbing</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-19" class="show1"><i class="fas fa-users"></i>Professionals+</label>
                        <input type="checkbox" id="btn-19">
                            <ul>
                                <li><a href="services2.php?service_id=S008">Accountancy </a></li>
                                <li><a href="#">Legal advice </a></li>
                                <li><a href="services2.php?service_id=S0010">Security </a></li>
                                <li><a href="#">Tution </a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-20" class="show1"><i class="fab fa-buysellads"></i>Ads +</label>
                        <input type="checkbox" id="btn-20">
                            <ul>
                                <li><a href="services2.php?service_id=S0011">Digital ads </a></li>
                                <li><a href="services2.php?service_id=S0012">Facebook marketing </a></li>
                            </ul>
                    </li>
                </ul>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Are You a Service Provider ?</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Register here for joining with us...</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href ="form.php"><button type="button" class="btn btn-danger">Register</button></a>
        </div>
      </div>
    </div>
  </div>


</body>
</html>