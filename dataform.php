<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
<form action="landupload.php" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
	<label for="exampleFormControlFile1">Enter Land Id</label>
	<input class="form-control" type="text" placeholder="land_id" name="land_id"><br/>
	<label for="exampleFormControlFile1">Enter Place</label>
	<input class="form-control" type="text" placeholder="place" name="place"><br/>
	<label for="exampleFormControlFile1">Enter Price</label>
	<input class="form-control" type="text" placeholder="price" name="price"><br/>
	<label for="exampleFormControlFile1">Enter Description</label>
	<input class="form-control" type="text" placeholder="description" name="description"><br/>
    <input type="submit" name="submit" value="UPLOAD">
</form>

</body>
</html>