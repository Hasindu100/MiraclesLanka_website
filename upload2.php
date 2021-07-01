<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'config.php'; 
     
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
   
			
			$full_name = $_POST["full_name"];
			$email = $_POST["email"];
            $password = $_POST["password"];
            $tp_num = $_POST["tp_num"];
            $address = $_POST["address"];
            $catagory = $_POST["catagory"];
            $business_name = $_POST["business_name"];
            $reg_num = $_POST["reg_num"];
			
             
            $insert = $db->query("INSERT into employee (email, name, address, mobileNo, serviceCategory, businessName, registrationNo) VALUES ('".$email."','".$full_name."','".$address."','".$tp_num."','".$catagory."', '".$business_name."', '".$reg_num."')");
        
			//$insert = $db->query("INSERT INTO item (item_id, name, cat_id, quantity, uploaded_on) VALUES $item_id,$caption,$catagory,$quantity,NOW()");
           // $insert = $db->query("INSERT INTO images (file_name, item_id, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
  
     
    // Display status message 
   
            header("Location:index.php?Message=" . urldecode($statusMsg));
} 
?>
