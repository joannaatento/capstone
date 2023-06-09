<?php
// Initialize the session

session_start(); 
require_once '../../../connection.php';
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../adminlogin.php");
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
    <link id="theme-style" rel="stylesheet" href="assets/css/hideprint.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/tablecss.css">

</head> 

<body class="app"> 
	

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
			            <div class="app-utility-item app-notifications-dropdown dropdown">    
				            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
								<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
								</svg>
					            <span class="icon-badge">3</span>
					        </a><!--//dropdown-toggle-->
					        
					        <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
					            <div class="dropdown-menu-header p-3">
						            <h5 class="dropdown-menu-title mb-0">Notifications</h5>
						        </div><!--//dropdown-menu-title-->
						        <div class="dropdown-menu-content">

    <?php
    // Assuming you have already established a database connection
    $sql = "SELECT * FROM messageform";
    $result = mysqli_query($conection_db, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $sender_name = $row['sender_name'];
            $message = $row['message'];
            
// Add the notification to the dropdown menu
?>
<a class="dropdown-item" href="messageform.php?messageuser_id=<?php echo $row['messageuser_id']; ?>">
    <div class="notification-item">
        <div class="notification-content">
            <span class="notification-title"><?php echo $sender_name; ?></span>
		</div>
		<div class="notification-content">
            <span class="notification-body"><?php echo $message; ?></span>
        </div>
        <div class="notification-time"><?php echo date('Y-m-d H:i:s'); ?></div>
		

    </div>
</a>

<?php
        }
    } else {
        ?>
		<?php
    }
    ?>

						        </div><!--//dropdown-menu-content-->
						        
						        <div class="dropdown-menu-footer p-2 text-center">
							        <a href="notifications.html">View all</a>
						        </div>
															
							</div><!--//dropdown-menu-->					        
				        </div><!--//app-utility-item-->
						<div class="app-utility-item app-user-dropdown dropdown">
				            <img src="assets/images/user.png" alt="user profile">
				             <div class="app-utility-item app-user-dropdown dropdown">

                   <?php  if (isset($_SESSION['username'])) : ?>
                                    <p><?php echo $_SESSION['username']; ?></p>
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
                                 
		                         <span class="nav-link-text">Health Records</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  									<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
											</svg>
	                             </span><!--//submenu-arrow-->
					      				  </a><!--//nav-link-->
                  
					        			<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="studentrecords.php">Students</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="employeerecords.php">Employees</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->

					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="printform.php">
						        <span class="nav-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
								<path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
								<path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
								</svg>
						         </span>
		                         <span class="nav-link-text">Print Health Record Form</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->

						    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		   
			
                <div class="app-card app-card-accordion shadow-sm mb-4">
                <div class="container">
      <div class="image">
      <img class="dwcllogos" src="assets/images/dwcllogos.png">
      
      </div>
      
      
     
    </div>
				    <div class="app-card-body p-4 pt-0">
					    <div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">
						    
						    <div class="accordion-item">
							    <h6 class="accordion-header" id="faq1-heading-1">
								<form class="form-horizontal mt-4" action="functions/healthrecorddashboardf.php" method="POST">
                                <center><h4>STUDENT'S HEALTH PROFILE</h4></center>
                                <br>
                                <label>ID Number</label>
<input type="text" class="underline" name="idnumber" value=""required>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Full Name <span class="help"></span></label>
<input type="text" id="name" name="fullname" value="" class="underline" >

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Age</label>
<input type="text" name="age" value="" class="underline short" >
<br>
<label>Birthday</label>
<input type="text" name="birthday" value="" class="underline" >

<label>Contact</label>
<input type="text" name="contact" value="" class="underline">

<label>Gender</label>
<input type="text" name="gender" value="" class="underline short">
<br>
<label>Student or Employee?</label>
<input type="text" name="student_employee" value="" class="underline short">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Grade/Course & Year/Position</label>
<input type="text" name="gradecourse" value="" class="underline">
<br>
<label>Home Address</label>
<input type="text" name="address" value="" class="underline long">
<br>
<label>Father</label>
<input type="text" name="father" value="" class="underline">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact Number</label>
<input type="text" name="fcontact" value="" class="underline">
<br>
<label>Mother</label>
<input type="text" name="mother" value="" class="underline">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact Number</label>
<input type="text" name="mcontact" value="" class="underline">


<br><br>
<center><h4 class="app-card-title">Medical History</h4></center>
<br>
<table>
<label>Please tick box if you have/had any of the following illnesses:</label><br><br
  <tr>
    <td><input type="checkbox" name="polio" value="polio"> Polio</td>
    <td><input type="checkbox" name="tetanus" value="tetanus"> Tetanus</td>
    <td><input type="checkbox" name="chickenpox" value="chickenpox"> Chicken Pox</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="measles" value="measles"> Measles</td>
    <td><input type="checkbox" name="mumps" value="mumps"> Mumps</td>
    <td><input type="checkbox" name="asthma" value="asthma"> Asthma</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="tb" value="tb"> Pulmonary Tuberculosis</td>
    <td><input type="checkbox" name="hepatitis" value="hepatitis"> Hepatitis</td>
    <td><input type="checkbox" name="fainting" value="fainting"> Fainting Spells</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="seizure_epilepsy" value="seizure_epilepsy"> Seizure/Epilepsy</td>
    <td><input type="checkbox" name="bleeding" value="bleeding"> Bleeding Tendencies</td>
    <td><input type="checkbox" name="eyedisorder" value="eyedisorder"> Eye Disorder</td>
  </tr>
  <tr>
    <td colspan="3">
        <br>
      <label>Heart Ailment (please specify)</label>
      <input type="text" name="heart" value="" class="underline long">
      <br><label>Other illness (please specify)</label>
      <input type="text" name="illness" value="" class="underline long">
    </td>
  </tr>
                   </table>
                   <br>
                   <table>
                    
  <tr>
    <td>
      <label>Do you have any allergy to:</label><br>
      <label>1. Food (if YES please specify, if NO leave it blank)</label>
      <input type="text" name="allergyfood" value="" class="underline longs"><br>
      <label>2. Medicine (if YES please specify, if NO leave it blank)</label>
      <input type="text" name="allergymed" value="" class="underline longss">
    </td>
  </tr>
  <tr>
    <td>
        <br>
      <label>Would you allow your child to be given medicine (as needed) while here in the school?</label>
      <input type="text" name="yes or no" value="" class="underline short">
    </td>
  </tr>
  <tr>
    <td>
      <label>Is your child taking any medications at present? If YES, please list the name of the medicine/s:</label>
      <input type="text" name="medications" value="" class="underline long">
    </td>
                   </tr>
</table>

<br>

                                <label>Name of the person to be notified in case of emergency </label>
                                    <input type="text" name="nameperson" value="" class="underline">
                    <br>
                    <br>
                                    <label>Person contact number </label>
                               
                                    <input type="text" name="personcp" value="" class="underline">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Relationship:
                                </label>
                                    <input type="text" name="relationship" value="" class="underline">
                                </br> 
                                
                                <button id="print-button" onclick="window.print()">Print</button>
                                </form>

                             
</div><!--//accordion-item-->
							
                            </div><!--//col-->
                        </div><!--//row-->
                        <br><br>
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

