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
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fas fa-search"></i>
			        </div><!--//col-->
		            
		            
		            <div class="app-utilities col-auto">
			            
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user.png" alt="user profile"></a>
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
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>
	
		        </div><!--//app-branding-->  
		        
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
								<form class="form-horizontal mt-4" action="functions/healthrecorddashboardf.php" method="POST">

								<span class="note" style="color: red;">*</span><label>ID Number</label>
									<input type="text" name="idnumber" value="" placeholder="Enter Your ID Number" required>

									&nbsp;&nbsp;&nbsp;&nbsp;
<label>Full Name <span class="help"></span></label>
<input type="text" id="name" name="fullname" value="" placeholder="Enter Your Full Name">

&nbsp;&nbsp;&nbsp;&nbsp;<label>Age</label>
<input type="text" name="age" value="">
</br><br>
<div class="form-group">
<label>Birthday</label>
<input type="date" name="birthday" value="">

&nbsp;&nbsp;&nbsp;&nbsp;<label>Contact</label>
<input type="text" name="contact" value="">

&nbsp;&nbsp;&nbsp;&nbsp;
<label>Gender</label>
    <select name="gender">
    <option value="" >-- Select Gender --</option>
    <option name="gender" value="male"> Male</option>
        <option value="female"> Female</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
<label>Are you....</label>
    <select name="student_employee">
    <option value=""> -- Select --</option>
        <option value="student"> Student </option>
        <option value="employee"> Employee </option>
</select>
</div>
<br>
<div class="form-group">
<label>Grade/Course and Year/Position</label>
<input type="text" name="gradecourse" value="">
</div>
<br>
<div class="form-group">
<label>Home Address</label>
<input type="text" name="address" value="">
</div>
<br>
<div class="form-group">
<label>Father</label>
<input type="text" name="father" value="">
&nbsp;&nbsp;&nbsp;<label>Contact Number</label>
<input type="text" name="fcontact" value="">
</div>
<br>
<div class="form-group">
<label>Mother</label>
<input type="text" name="mother" value="">
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; <label>Contact Number</label>
<input type="text" name="mcontact" value="">
</div>
<br>
<br>
<h4 class="app-card-title">Medical History</h4>
<input type="checkbox" name="polio" value="polio"> Polio
                                
                              
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="tetanus" value="tetanus"> Tetanus
                                
                             
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chickenpox" value="chickenpox"> Chicken Pox
                                <br>
                                    <input type="checkbox" name="measles" value="measles"> Measles
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;  <input type="checkbox" name="mumps" value="mumps"> Mumps
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="asthma" value="asthma"> Asthma
                                <br>
                                    <input type="checkbox" name="tb" value="tb"> Pulmonary Tuberculosis
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" name="hepatitis" value="hepatitis"> Hepatitis
                               
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="fainting" value="fainting"> Fainting Spells
                               <br>
                                    <input type="checkbox" name="seizure_epilepsy" value="seizure_epilepsy"> Seizure/Epilepsy
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="bleeding" value="bleeding"> Bleeding Tendencies
                               
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="eyedisorder" value="eyedisorder"> Eye Disorder
                                <br>

                                <label>Heart Ailment (please specify)</label>
                                    <input type="text" name="heart" value="">
                                &nbsp;&nbsp;&nbsp;<label>Other illness (please specify)</label>
                                    <input type="text" name="illness" value="">
                            
                                    <br><br>
                                    <label>Do you have any allergy to: <br><br>
                                        1. Food (if YES please specify, if NO leave it blank) <input type="text" name="allergyfood" value=""><br><br>
                                        2. Medicine (if YES please specify, if NO leave it blank) <input type="text" name="allergymed" value="">
                                    </label>


                                    <div class="form-group">
                                    <label>Would you allow your child to be given medicine (as needed) while here in the school?</label>
                                <div>
                                <select name="allow_not">
                                <option value="" >-- Select --</option>
                                <option type="radio" name="allow_not" value="yes"> Yes </option>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<option type="radio" name="allow_not" value="no"> No </option>
</select>
                                <br><br>

                                <div class="form-group">
                                <label>Is your child taking any medications at present? If YES, please list the name of the medicine/s:
                                </label>
                                    <input type="text" name="medications" value=""></div>


                                    
<br><br>

<div class="form-group">
                                <label>Name of the person to be notified in case of emergency:
                                </label>
                                    <input type="text" name="nameperson" value=""></div>
                                    <div class="form-group">
                                    <label>Person contact number
                                </label>
                                    <input type="text" name="personcp" value="">
                                  &nbsp;&nbsp; &nbsp;  <label>Relationship:
                                </label>
                                    <input type="text" name="relationship" value="">
                                </div>

								<input type="submit" name="submit_form_post" value="Submit">
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

