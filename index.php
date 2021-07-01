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
            <div class="col-md-6" >
                <div class="container-1">
                   <h1>ANY JOB </br> ANY TIME </br> ANY WHERE</h1>
                   <P>New way to find people to do your jobs. If you are one of those thousands
                     of people who struggle to find people to do Jobs or struggle to find jobs, this is for you</P>
                     <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter-2">Register with us</button>
               </div>
            </div>
            <div class="col-md-6" >
            <div class="slide">
                <div class="slideshow cycle-slideshow" data-cycle-timeout="4000">
                        
                        <img src = "images/124256236_104620754797710_4400351746337063551_n.jpg">
                        
                    </div>
            </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <h3 id="service-head">OUR SERVICES</h3>
            <div class="col-md-4" style="display: flex;justify-content: space-around;">
                <a href="land.php">
                    <div class="container-2">
                        <i class="fas fa-home"></i>
                        <h5>House</h5>
                    </div>
               </a>
               <a href="vehicle.php">
                <div class="container-2">
                        <i class="fas fa-car"></i>
                        <h5>Vehicle</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="display: flex;justify-content: space-around;">
                <a href="fullcategory.php?cat_id=C003">
                    <div class="container-2">
                        <i class="fas fa-cogs"></i>
                        <h5>Technitions</h5>
                    </div>
                </a>
                <a href="fullcategory.php?cat_id=C004">
                    <div class="container-2">
                        <i class="fas fa-users"></i>
                        <h5>Professional</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="display: flex;justify-content: space-around;">
                <a href="fullcategory.php?cat_id=C005">
                    <div class="container-2">
                        <i class="fas fa-laptop"></i>
                        <h5>IT</h5>
                    </div>
                </a>
                <a href="fullcategory.php?cat_id=C006">
                    <div class="container-2">
                        <i class="fab fa-buysellads"></i>
                        <h5>Ads</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="display: flex;justify-content: space-around;padding:0">
                    <div class="about-us">
                        <h3 style="border-bottom:3px solid green">ABOUT US</h3>
                        <P>Sri Lanka’s premier Construction , Industrial and Engineering market place. 
                            Surplus.lk is the ultimate platform to dispose of trade surplus materials , 
                            buy rent or sell building materials , building products , tools and equipment , 
                            Industrial machinery and find professional services. Bringing buyers and sellers 
                            together with a simple click of a button, Surplus.lk offers you a unique service 
                            that is absolutely free of charge... 
                           </P>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" >
                    <div class="contact-us">
                        <h3>WANT MORE INFORMATION</h3>
                        <h3 style="color:#0f8b32">SEND US A MESSAGE</h3>
                        <form class="contact-form" action="contactform.php" method="post">
                            <input type="text" name="name" placeholder="full name">
                            <input type="email" name="mail" placeholder="your e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
                            <input type="text" name="subject" placeholder="subject">
                            <textarea name="message" cols="20" rows="5" placeholder="Message"></textarea>
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="col-md-6" style="display: flex;justify-content: space-around;">
                <div class="contact-us">
                        <h3>FIND US</h3>
                        <div class="mapouter"><div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.124401743543!2d79.96010131873584!3d6.979941318710275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257d38dbbed4b%3A0x4c539120af76ccc5!2sKanaththa%20Junction%20Bus%20Stop!5e0!3m2!1sen!2slk!4v1609491368673!5m2!1sen!2slk" width="300" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div><style>.mapouter{text-align:left;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="text-align: center;">
                    <div class="logo">
                        <img src ="images/123880284_102022315057554_6400407058210913611_o copy.png">
                        <h3 id="text">Mirakels Life International</h3>
                    </div>
                </div>
                <div class="col-md-3" >
                    <h3>Menu</h3>
                    <p>Home</p>
                    <p>Department</p>
                    <p>Services</p>
                    <p>Register</p>
                </div>
                <div class="col-md-3" >
                    <h3>Info</h3>
                    <p>Terms & conditions</p>
                    <p>Privacy policy</p>
                </div>
                <div class="col-md-3" >
                    <h3>Contact us</h3>
                    <i class='fas fa-map-marker-alt' style='font-size:24px;color:red'></i>	300/1/E, Makola South, Makola, Sri Lanka</p>
		            <i class='fas fa-phone-volume' style='font-size:24px;color:gray'></i>	0777370733, 0721821822</p>
		            <i class='far fa-envelope-open' style='font-size:24px;color:gray'></i>	mirakelslife@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    
<div class="footer">
        © 2020 Copyright: Mirakels Life International
    </div> 
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle"></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="side-menu2">
                <h2>Select Category</h2>
                <ul>
                    <li>
                    <label for="btn-15" class="show1"><i class="fas fa-home"></i>House+</label>
                    <input type="checkbox" id="btn-15">
                        <ul>
                            <li><a href="#">Architecs</a></li>
                            <li><a href="#">Lands</a></li>
                            <li><a href="#">House Rental</a></li>
                            <li><a href="#">House Painting</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-16" class="show1"><i class="fas fa-car"></i>Vehicales+</label>
                        <input type="checkbox" id="btn-16">
                            <ul>
                                <li><a href="#"|>Transport</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Drivers</a></li>
                                <li><a href="#">Auto Mechanic</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-17" class="show1"><i class="fas fa-laptop"></i>IT+</label>
                        <input type="checkbox" id="btn-17">
                            <ul>
                                <li><a href="#"|>Computer Repairs</a></li>
                                <li><a href="#">Design & Creative</a></li>
                                <li><a href="#">Phone Repairs</a></li>
                                <li><a href="#">Web design & software</a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-18" class="show1"><i class="fas fa-cogs"></i>Technicians+</label>
                        <input type="checkbox" id="btn-18">
                            <ul>
                                <li><a href="#"|>AC Repairs</a></li>
                                <li><a href="#">CCTV</a></li>
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
                                <li><a href="#">Accountancy </a></li>
                                <li><a href="#">Legal advice </a></li>
                                <li><a href="#">Security </a></li>
                                <li><a href="#">Tution </a></li>
                            </ul>
                    </li>
                    <li>
                        <label for="btn-20" class="show1"><i class="fab fa-buysellads"></i>Ads +</label>
                        <input type="checkbox" id="btn-20">
                            <ul>
                                <li><a href="#">Digital ads </a></li>
                                <li><a href="#">Facebook marketing </a></li>
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