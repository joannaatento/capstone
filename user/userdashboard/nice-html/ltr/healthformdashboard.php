
<?php
// Initialize the session

session_start(); 
require_once '../../../../connection.php';
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../loginuser.php");
    exit;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Health Record Form</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
 
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">

  <link href="../../dist/css/style.min.css" rel="stylesheet">
 
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
   
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                   
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                        
                            <b class="logo-icon">
                              
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                              
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                     
                            <span class="logo-text">
                             
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                             
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>

                    
                </div>
  
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                   
                    <ul class="navbar-nav float-start me-auto">
                       
                       
                    </ul>
                    <ul class="navbar-nav float-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../../functions/logout.php"><i class="ti-user me-1 ms-1"></i>
                                    Logout</a>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
      
        <aside class="left-sidebar" data-sidebarbg="skin5">

            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="healthformdashboard.php"
                                aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Health Record Form</span>
                            </a>
                        </li>
                       
                     
                    </ul>
                </nav>

            </div>
            
        </aside>
       
        <div class="page-wrapper">
        
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Fill out the Health Record Form</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Health Record Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Health Record</h4>
                            <h5 class="card-subtitle"> Please fill-up the form honestly </h5>
                            <form class="form-horizontal mt-4" action="../../functions/userdashboardf.php" method="POST">
                                <div class="form-group">
                                <span class="note" style="color: red;">*</span><label>ID Number</label>


                                <input type="text" name="idnumber" value="" placeholder="Enter Your ID Number" required>

&nbsp;&nbsp;&nbsp;&nbsp;
<label>Full Name <span class="help"></span></label>
<input type="text" id="name" name="fullname" value="" placeholder="Enter Your Full Name">

&nbsp;&nbsp;&nbsp;&nbsp;<label>Age</label>
<input type="text" name="age" value="">

<div class="form-group">
<label>Birthday</label>
<input type="date" name="birthday" value="">

<label>Contact</label>
<input type="text" name="contact" value="">

</div>

<div class="form-group">
    <label>Gender</label>
    <div>
    <input type="radio" name="gender" value="male"> Male
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="female"> Female
    </div>
</div>

<div class="form-group">
    <label>Are you....</label>
    <div>
        <input type="radio" name="student_employee" value="student"> Student
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="student_employee" value="employee"> Employee
    </div>
</div>
<div class="form-group">
<label>If you are a student
Grade/Course & Year</label>
<input type="text" name="gradecourse" value="">
<br> <span class="note"  style="color: red;">Leave blank if you are an employee.</span>
</div>
<div class="form-group">
<label>Home Address</label>
<input type="text" name="address" value="">
</div>
<div class="form-group">
<label>Father</label>
<input type="text" name="father" value="">
&nbsp;&nbsp;&nbsp;<label>Contact Number</label>
<input type="text" name="fcontact" value="">
</div>

<div class="form-group">
<label>Mother</label>
<input type="text" name="mother" value="">
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; <label>Contact Number</label>
<input type="text" name="mcontact" value="">
</div>
<br>


<h5 class="card-subtitle"> Please tick the button if you have any of the following illnesses: </h5>
                            <div class = "form-group">
                                
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
                                <input type="radio" name="allow_not" value="yes"> Yes
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="allow_not" value="no"> No
<br><br>
                                <div class="form-group">
                                <label>Is your child taking any medications at present? If YES, please list the name of the medicine/s:
                                </label>
                                    <input type="text" name="medications" value=""></div>

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
                            </div>
                            </div>
                                    
                            <input type="submit" name="submit_form_post" value="Submit">
              
                                </form>
</div>

            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>

        </div>

    </div>
   
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
</body>

</html>