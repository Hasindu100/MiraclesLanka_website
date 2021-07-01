<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'config.php'; 
     
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif','pdf','jxr');
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName;
            
            $id = $_POST["id"];
			$title = $_POST["title"];
            $price = $_POST["price"];
            $location = $_POST["location"];
            $brand = $_POST["brand"];
            $model = $_POST["model"];
            $edition = $_POST["edition"];
            $year = $_POST["year"];
            $transmission = $_POST["transmission"];
            $fuel = $_POST["fuel"];
            $capacity = $_POST["capacity"];
            $description = $_POST["description"];


            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$id."','".$fileName."', NOW()),";
					//$insertValuesSQL .= "('".$fileName."','".$item_id."', NOW()),"; 					
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
            
            $insert = $db->query("INSERT into vehicle (vehicle_id, title, price, location, brand, model, edition, transmission, fuel, capacity, description, file_name, uploaded_on) VALUES ('".$id."','".$title."','".$price."','".$location."','".$brand."','".$model."','".$edition."','".$transmission."','".$fuel."','".$capacity."','".$description."','".$fileName."', NOW())");
            
            $insert2 = $db->query("INSERT INTO images (cat_id, file_name, uploaded_on) VALUES $insertValuesSQL");
            
			if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    }
    echo $title;
    echo $price;
    echo $location;
    echo $brand;
    echo $model;
    echo $edition;
    echo $year;
    echo $transmission;
    echo $fuel;
    echo $capacity;
    echo $description;
     echo $statusMsg;
} 
?>

<?php
// Include the database configuration file
include_once 'config.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY img_id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 