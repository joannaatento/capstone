
<?php
include "../../../connection.php";

if(isset($_POST['submit_form_post'])){
	
	$idnumber = $_POST['idnumber'];
	$fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$student_employee = $_POST['student_employee'];
    $gradecourse = $_POST['gradecourse'];
    $address = $_POST['address'];
    $father = $_POST['father'];
    $fcontact = $_POST['fcontact'];
    $mother = $_POST['mother'];
    $mcontact = $_POST['mcontact'];
    $polio = isset($_POST['polio']) ? $_POST['polio'] : '';
    $tetanus = isset($_POST['tetanus']) ? $_POST['tetanus'] : '';
    $chickenpox = isset($_POST['chickenpox']) ? $_POST['chickenpox'] : '';
    $measles = isset($_POST['measles']) ? $_POST['measles'] : '';
    $mumps = isset($_POST['mumps']) ? $_POST['mumps'] : '';
    $asthma = isset($_POST['asthma']) ? $_POST['asthma'] : '';
    $tb = isset($_POST['tb']) ? $_POST['tb'] : '';
    $hepatitis = isset($_POST['hepatitis']) ? $_POST['hepatitis'] : '';
    $fainting = isset($_POST['fainting']) ? $_POST['fainting'] : '';
    $seizure_epilepsy = isset($_POST['seizure_epilepsy']) ? $_POST['seizure_epilepsy'] : '';
    $bleeding = isset($_POST['bleeding']) ? $_POST['bleeding'] : '';
    $eyedisorder = isset($_POST['eyedisorder']) ? $_POST['eyedisorder'] : '';
    $heart = $_POST['heart'];
    $illness = $_POST['illness'];
    $allergyfood = $_POST['allergyfood'];
    $allergymed = $_POST['allergymed'];
    $allow_not = $_POST['allow_not'];
    $medications = $_POST['medications'];
    $nameperson = $_POST['nameperson'];
    $personcp = $_POST['personcp'];
    $relationship = $_POST['relationship'];
    

	$sql = "INSERT INTO healthrecord VALUES ('','$idnumber','$fullname','$age','$birthday','$contact', '$gender','$student_employee',
    '$gradecourse','$address','$father','$fcontact','$mother','$mcontact','$polio','$tetanus','$chickenpox',
    '$measles','$mumps','$asthma','$tb','$hepatitis','$fainting','$seizure_epilepsy','$bleeding','$eyedisorder',
    '$heart','$illness','$allergyfood','$allergymed','$allow_not','$medications','$nameperson',
    '$personcp','$relationship')";

if(mysqli_query($conection_db, $sql)){
    //echo '<script>window.alert("Inserted Successfully")</script>';
    echo "<script>window.history.go(-1);</script>";
}else{
    echo "Error: " . mysqli_error($conection_db);
}

}

?>
