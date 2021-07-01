<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>
<body>
    <form action="serviceupload.php" method="post" enctype="multipart/form-data">
        Select Image Files to Upload:
        <input type="file" name="files[]" multiple >
        <label for="exampleFormControlFile1">Enter Service Id</label>
        <input class="form-control" type="text" placeholder="Sevice Id" name="id"><br/>
        <label for="exampleFormControlFile1">Enter Service Name</label>
        <input class="form-control" type="text" placeholder="Service Name" name="name"><br/>
        <label for="exampleFormControlFile1">Enter Description</label>
        <input class="form-control" type="text" placeholder="Description" name="description"><br/>
        <label for="exampleFormControlFile1">Select Catogery</label>
        <select class="form-control" name="category" id="category">
            <option>House</option>
            <option>Vehicle</option>
            <option>Technicians</option>
            <option>Professionals</option>
            <option>ICT</option>
            <option>Ads</option>
        </select><br/>
        <input type="submit" name="submit" value="UPLOAD">
    </form>



</body>
</html>