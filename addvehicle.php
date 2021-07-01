<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>
<body>
    <form action="vehicleupload.php" method="post" enctype="multipart/form-data">
        Select Image Files to Upload:
        <input type="file" name="files[]" multiple ></br>
        <label for="exampleFormControlFile1">Enter Vehicle_ID</label>
        <input class="form-control" type="text" placeholder="Vehicle Id" name="id"><br/>
        <label for="exampleFormControlFile1">Enter Title</label>
        <input class="form-control" type="text" placeholder="Title" name="title"><br/>
        <label for="exampleFormControlFile1">Enter Price</label>
        <input class="form-control" type="text" placeholder="Price" name="price"><br/>
        <label for="exampleFormControlFile1">Enter Location</label>
        <input class="form-control" type="text" placeholder="Location" name="location"><br/>
        <label for="exampleFormControlFile1">Enter Brand</label>
        <input class="form-control" type="text" placeholder="Brand" name="brand"><br/>
        <label for="exampleFormControlFile1">Enter Model</label>
        <input class="form-control" type="text" placeholder="Model" name="model"><br/>
        <label for="exampleFormControlFile1">Enter Edition</label>
        <input class="form-control" type="text" placeholder="Edition" name="edition"><br/>
        <label for="exampleFormControlFile1">Enter Year</label>
        <input class="form-control" type="text" placeholder="Year" name="year"><br/>
        <label for="exampleFormControlFile1">Select Transmission</label>
        <select class="form-control" name="transmission" id="category">
            <option>Auto</option>
            <option>Manual</option>
            <option>Triptronic</option>
        </select><br/>
        <label for="exampleFormControlFile1">Select Fuel Type</label>
        <select class="form-control" name="fuel">
            <option>Diesel</option>
            <option>Petrol</option>
            <option>Electric</option>
        </select><br/>
        <label for="exampleFormControlFile1">Enter Engine Capacity</label>
        <input class="form-control" type="text" placeholder="Engine Capacity" name="capacity"><br/>
        <label for="exampleFormControlFile1">Enter Description</label>
        <input class="form-control" type="text" placeholder="Description" name="description"><br/>
        <input type="submit" name="submit" value="UPLOAD">
    </form>



</body>
</html>