
<?php
include "../../../../connection.php";

if(isset($_POST['submit_form_post'])){
	
	
	$sender_name = $_POST['sender_name'];
    $message = $_POST['message'];
  

	$sql = "INSERT INTO messageform VALUES ('','$sender_name','$message')";

if(mysqli_query($conection_db, $sql)){
    //echo '<script>window.alert("Inserted Successfully")</script>';
    echo "<script>window.history.go(-1);</script>";
}else{
    echo "Error: " . mysqli_error($conection_db);
}

}

?>