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
    <link id="theme-style" rel="stylesheet" href="assets/css/tablecss.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">



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
		        <a class="app-logo" href="adminrecords.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
									<li class="submenu-item"><a class="submenu-link" href="healthrecorddashboard.php">Students</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="employeerecords.php">Employees</a></li>
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
			<h1 class="app-page-title">Students Health Records</h1>
                <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-4 pb-2  border-0">
                

					&nbsp;&nbsp;&nbsp;<div class="app-search-box col">
			<form class="app-search-form">
				<input type="text" placeholder="Search..." name="query" id="searchQuery" class="form-control search-input">
				<button type="button" class="btn search-btn btn-primary" onclick="searchRecords()"><i class="fas fa-search"></i></button>
			</form>
			</div>

<div class="app-card-body p-4 pt-0">
  <div id="healthRecordTable">
    <table>
      <thead>
        <tr>
          <th>Student ID Number</th>
          <th>Student Name</th>
          <th>Age</th>
          <th>Contact</th>
          <th>Name of Person to Contact</th>
          <th>Contact Number</th>
          <th>Relationship</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="healthRecordTableBody">
        <?php

          $sql = "SELECT * FROM healthrecord WHERE student_employee = 'student'";
	   	  $result = mysqli_query($conection_db, $sql);


 		while($row = $result->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $row['idnumber']; ?></td>
          <td><?php echo $row['fullname']; ?></td>
          <td><?php echo $row['age']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['nameperson']; ?></td>
          <td><?php echo $row['personcp']; ?></td>
          <td><?php echo $row['relationship']; ?></td>
        <td>

        <center><a href="viewrecordstudents.php?idnumber=<?php echo $row['idnumber']; ?>">
  		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
    	<path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
  		</svg></a></center>

     
        </td>
      </tr>
      
    <?php } ?>
  </tbody>
</table>
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

 
	<script>
  function searchRecords() {
    let input, table, tr, td, i, txtValue, found;
    input = document.getElementById("searchQuery");
    filter = input.value.toUpperCase();
    table = document.getElementById("healthRecordTable");
    tr = table.getElementsByTagName("tr");
    found = false;
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          found = true;
        } else {
          tr[i].style.display = "none";
        }
      }
    }
    if (!found) {
      table.innerHTML += "<tr><td colspan='3' style='text-align:center;'>No record found</td></tr>";
    }
  }
</script>

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html> 

