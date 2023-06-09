<?php
// Initialize the session

session_start(); 
require_once '../../../connection.php';
 

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../loginuser.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Health Records</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    

    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   
    
<?php
 $sql = "SELECT * FROM healthrecord";
  $result = mysqli_query($conection_db, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = $result -> fetch_assoc()){
      $healthuser_id = $row['healthuser_id'];
      $idnumber = $row['idnumber'];
      $fullname = $row['fullname'];
      $age = $row['age'];
      $birthday = $row['birthday'];
      $contact = $row['contact'];
      $gender = $row['gender'];
      $student_employee = $row['student_employee'];
      $gradecourse = $row['gradecourse'];
      $address = $row['address'];
      $father = $row['father'];
      $fcontact = $row['fcontact'];
      $mother = $row['mother'];
      $mcontact = $row['mcontact'];
      $polio = $row['polio'];
      $tetanus = $row['tetanus'];
      $chickenpox = $row['chickenpox'];
      $measles = $row['measles'];
      $mumps = $row['mumps'];
      $asthma = $row['asthma'];
      $tb = $row['tb'];
      $hepatitis = $row['hepatitis'];
      $fainting = $row['fainting'];
      $seizure_epilepsy = $row['seizure_epilepsy'];
      $bleeding = $row['bleeding'];
      $eyedisorder = $row['eyedisorder'];
      $heart = $row['heart'];
      $illness = $row['illness'];
      $allergyfood = $row ['allergyfood'];
      $allergymed = $row ['allergymed'];
      $allow_not = $row ['allow_not'];
      $medications = $row ['medications'];
      $nameperson = $row ['nameperson'];
      $personcp = $row ['personcp'];
      $relationship = $row ['relationship'];
    }
  } else {

  }
?>


    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		          
		            
		            <div class="app-utilities col-auto">
			            
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <img src="assets/images/user.png" alt="user profile">
				             <div class="app-utility-item app-user-dropdown dropdown">

                   <?php  if (isset($_SESSION['email'])) : ?>
                                    <p><?php echo $_SESSION['email']; ?></p>
                                    <?php endif ?></a>
                   </div>
                   <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.html">Account</a></li>
								<li><a class="dropdown-item" href="settings.html">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="functions/logout.php">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		        <a class="app-logo" href="healthrecorddashboard.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img class="logo-icon me-2" src="assets/images/dwcl.png" alt="logo"></a>
	
		        </div><!--//app-branding-->  
		        
                </br>
                   </br>
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  								<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
	  								<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
								</svg>
						         </span>
                                 
		                         <span class="nav-link-text">Health Record</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  									<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
											</svg>
	                             </span><!--//submenu-arrow-->
					      				  </a><!--//nav-link-->
                  
					        			<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="healthrecorddashboard.php">Health Record Form</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="viewhealthrecord.php">View Health Record</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->

					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="messageform.php">
						        <span class="nav-icon">
						        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
            </svg>
						         </span>
		                         <span class="nav-link-text">Message</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->

						    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			<h1 class="app-page-title">Fill-up Health Record Form</h1>
                <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-4 pb-2  border-0">
				       <h4 class="app-card-title">Please fill-up honestly.</h4>
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4 pt-0">
					    <div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">
						    
						    <div class="accordion-item">
							    <h6 class="accordion-header" id="faq1-heading-1">

             
								<form class="form-horizontal mt-4" action="functions/editf.php" method="POST">


                                
                                <table>
  <tr>
    <td><span class="note" style="color: red;">*</span><label>ID Number</label></td>
    <td><input type="text" name="idnumber" value="<?php echo $idnumber; ?>" readonly placeholder="Enter Your ID Number" required></td>
  
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Full Name <span class="help"></span></label></td>
    <td><input type="text" id="name" name="fullname" value="<?php echo $fullname; ?>" readonly placeholder="Enter Your Full Name"></td>
  
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Age</label></td>
    <td><input type="text" name="age" value="<?php echo $age; ?>" readonly></td>
  
                   </table>
                   <br>
  <table>

                   <tr>

    <td><label>Birthday</label></td>
    <td><input type="date" name="birthday" value="<?php echo $birthday; ?>" readonly></td>
  
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact</label></td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>" readonly></td>
  
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Gender</label></td>
    <td>
      <select name="gender">
        <option value="<?php echo $gender; ?>" readonly>-- Select Gender --</option>
        <option name="gender" value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </td>
  </tr>
                   </table>
                   <br>
                   <table>
  <tr>
    <td><label>Are you....</label></td>
    <td>
      <select name="student_employee">
        <option value="">-- Select --</option>
        <option value="student" <?php if($student_employee == 'student') echo 'selected'; ?>>Student</option>
        <option value="employee" <?php if($student_employee== 'employee') echo 'selected'; ?>>Employee</option>
      </select>
    </td>
 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Grade/Course & Year/Position</label></td>
    <td><input type="text" name="gradecourse" value="<?php echo $gradecourse; ?>" readonly></td>
 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Home Address</label></td>
    <td><input type="text" name="address" value="<?php echo $address; ?>" readonly></td>
  </tr>
                   </table>
                   <br>
                   <table>
  <tr>
    <td><label>Father</label></td>
    <td><input type="text" name="father" value="<?php echo $father; ?>" readonly></td>
  
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact Number</label></td>
    <td><input type="text" name="fcontact" value="<?php echo $fcontact; ?>" readonly></td>
  </tr>
                   </table>
                   <br>
                   <table>
  <tr>
    <td><label>Mother</label></td>
    <td><input type="text" name="mother" value="<?php echo $mother; ?>" readonly></td>
 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact Number</label></td>
    <td><input type="text" name="mcontact" value="<?php echo $mcontact; ?>" readonly></td>
  </tr>
</table>

<br><br>
<h4 class="app-card-title">Medical History</h4>
<table>
  <tr>
    <td><input type="checkbox" name="polio" value="polio" <?php if($polio == 'polio') echo 'checked'; ?> readonly> Polio</td>
    <td><input type="checkbox" name="tetanus" value="tetanus" <?php if($tetanus == 'tetanus') echo 'checked'; ?> readonly> Tetanus</td>
    <td><input type="checkbox" name="chickenpox" value="chickenpox" <?php if($chickenpox == 'chikenpox') echo 'checked'; ?> readonly> Chicken Pox</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="measles" value="measles" <?php if($measles == 'measles') echo 'checked'; ?> readonly> Measles</td>
    <td><input type="checkbox" name="mumps" value="mumps" <?php if($mumps == 'mumps') echo 'checked'; ?> readonly> Mumps</td>
    <td><input type="checkbox" name="asthma" value="asthma"> Asthma</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="tb" value="tb" <?php if($tb == 'tb') echo 'checked'; ?> readonly> Pulmonary Tuberculosis</td>
    <td><input type="checkbox" name="hepatitis" value="hepatitis" <?php if($hepatitis == 'hepatitis') echo 'checked'; ?> readonly> Hepatitis</td>
    <td><input type="checkbox" name="fainting" value="fainting" <?php if($fainting == 'fainting') echo 'checked'; ?> readonly> Fainting Spells</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="seizure_epilepsy" value="seizure_epilepsy" <?php if($seizure_epilepsy == 'seizure_epilepsy') echo 'checked'; ?> readonly> Seizure/Epilepsy</td>
    <td><input type="checkbox" name="bleeding" value="bleeding" <?php if($bleeding == 'bleeding') echo 'checked'; ?> readonly> Bleeding Tendencies</td>
    <td><input type="checkbox" name="eyedisorder" value="eyedisorder" <?php if($eyedisorder == 'eyedisorder') echo 'checked'; ?> readonly > Eye Disorder</td>
  </tr>
  <tr>
    <td colspan="3">
      <label>Heart Ailment (please specify)</label>
      <input type="text" name="heart" value="<?php echo $heart; ?>" readonly>
      <label>Other illness (please specify)</label>
      <input type="text" name="illness" value="<?php echo $illness; ?>" readonly>
    </td>
  </tr>
                   </table>
                   <br>
                   <table>
                    
  <tr>
    <td>
      <label>Do you have any allergy to:</label><br><br>
      <label>1. Food (if YES please specify, if NO leave it blank)</label>
      <input type="text" name="allergyfood" value="<?php echo $allergyfood; ?>" readonly><br><br>
      <label>2. Medicine (if YES please specify, if NO leave it blank)</label>
      <input type="text" name="allergymed" value="<?php echo $allergymed; ?>" readonly>
    </td>
  </tr>
  <tr>
    <td>
      <label>Would you allow your child to be given medicine (as needed) while here in the school?</label>
      <select name="allow_not">
        <option value="">-- Select --</option>
        <option type="radio" name="allow_not" value="yes" <?php if($allow_not == 'yes') echo 'selected'; ?> readonly> Yes </option>
        <option type="radio" name="allow_not" value="no" <?php if($allow_not == 'no') echo 'selected'; ?> readonly> No </option>
      </select>
    </td>
  </tr>
  <tr>
    <td>
      <label>Is your child taking any medications at present? If YES, please list the name of the medicine/s:</label>
      <input type="text" name="medications" value="<?php echo $medications; ?>" readonly>
    </td>
  </tr>
</table>

<div class="form-group">
                                <label>Name of the person to be notified in case of emergency:
                                </label>
                                    <input type="text" name="nameperson" value="<?php echo $nameperson; ?>" readonly></div>
                                    <div class="form-group">
                                    <label>Person contact number
                                </label>
                                    <input type="text" name="personcp" value="<?php echo $personcp; ?>" readonly>
                                  &nbsp;&nbsp; &nbsp;  <label>Relationship:
                                </label>
                                    <input type="text" name="relationship" value="<?php echo $relationship; ?>" readonly>
                                </div>

								<input type="submit" name="edit_form" value="Update">
</form>
				</div><!--//accordion-item-->
							
				    </div><!--//col-->
			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

