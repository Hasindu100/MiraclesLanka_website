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
<body>
<div class="register-form">
    <h2>Register with us</h2>
<form action="upload2.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
	<label for="exampleFormControlFile1">Enter Full Name</label>
	<input class="form-control" type="text" placeholder="Full Name" name="full_name" id="fullname" required><br/>
    <label for="exampleFormControlFile1">Enter E-mail</label>
    <input class="form-control" type="text" placeholder="E-mail" name="email" id="email" required><br/>
    <label for="exampleFormControlFile1">Enter Password</label>
	<input class="form-control" type="password" placeholder="Password" name="password" id="password" required><br/>
	<label for="exampleFormControlFile1">Enter Mobile Number</label>
    <input class="form-control" type="text" placeholder="Mobile Number" name="tp_num" id="mobile" required><br/>
    <label for="exampleFormControlFile1">Enter Address</label>
    <input class="form-control" type="text" placeholder="Address" name="address" id="address" required><br/>
    <label for="exampleFormControlFile1">Select Catogery</label>
	<select class="form-control" name="catagory" id="category" required>
		<option>Instructor</option>
		<option>Broker</option>
		<option>Employee</option>
		<option>Service Provider</option>
	</select><br/>
    <label for="exampleFormControlFile1">Enter Business Name(Optional)</label>
    <input class="form-control" type="text" placeholder="Business Name" name="business_name" id="bname"><br/>
    <label for="exampleFormControlFile1">Enter Registration Number(Optional)</label>
	<input class="form-control" type="text" placeholder="Registration Number" name="reg_num" id="regnum"><br/>
    
    <button onclick="goBack()" class="btn btn-secondary">Go Back</button>
    <button type="submit" class="btn btn-success" id="reg-btn" name="submit">Register</button>
  </div>
</form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
  function goBack() {
    window.history.back();
  }
</script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
