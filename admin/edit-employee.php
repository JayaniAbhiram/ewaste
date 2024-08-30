<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ewmsaid'] == 0)) {
    header('location:logout.php');
  } else {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contactnum = $_POST['contactnum'];
      $address = $_POST['address'];
      $status = $_POST['status'];
      $eid = $_GET['editid'];
      $query = mysqli_query($con, "update tblemployee set Name ='$name', Email ='$email', ContactNumber = '$contactnum', Address = '$address', Status='$status' where ID=$eid");
      
      if ($query) {
        echo "
        <div id='popup' class='popup'>
            <div class='popup-content'>
                <div class='popup-header'>
                    <span class='close'>&times;</span>
                </div>
                <div class='popup-body'>
                    <p>Employee info has been updated.</p>
                </div>
                <div class='popup-footer'>
                    <button id='popup-ok' class='popup-button'>OK</button>
                </div>
            </div>
        </div>
        <script>
            var popup = document.getElementById('popup');
            var popupContent = document.querySelector('.popup-content');
            var popupOk = document.getElementById('popup-ok');
  
            popup.style.display = 'block';
            setTimeout(function() {
                popupContent.classList.add('bounce-in');
            }, 10);
  
            document.querySelector('.close').onclick = function() {
                closePopup();
            };
  
            popupOk.onclick = function() {
                closePopup();
            };
  
            function closePopup() {
                popupContent.classList.remove('bounce-in');
                popupContent.classList.add('fade-out');
                setTimeout(function() {
                    popup.style.display = 'none';
                    window.location.href = 'manage-employee.php';
                }, 800);
            }
  
            setTimeout(closePopup, 3000);
        </script>
        <style>
            .popup {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6);
                animation: fadeIn 1s;
            }
  
            .popup-content {
                position: relative;
                margin: 10% auto;
                padding: 20px;
                width: 50%;
                max-width: 600px;
                background-color: #fff;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.4);
                transform: scale(0.5);
                opacity: 0;
                transition: all 0.8s ease;
            }
  
            .bounce-in {
                transform: scale(1);
                opacity: 1;
                animation: bounceIn 1s ease-out;
            }
  
            .fade-out {
                animation: fadeOut 0.8s ease-out;
                transform: scale(0.5);
                opacity: 0;
            }
  
            .popup-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
  
            .popup-body {
                margin: 20px 0;
            }
  
            .popup-footer {
                margin-top: 20px;
            }
  
            .popup-button {
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
  
            .popup-button:hover {
                background-color: #45a049;
            }
  
            .close {
                font-size: 24px;
                font-weight: bold;
                color: #888;
                cursor: pointer;
            }
  
            .close:hover {
                color: #444;
            }
  
            @keyframes bounceIn {
                0% { transform: scale(1.3); opacity: 0; }
                50% { transform: scale(0.9); opacity: 1; }
                100% { transform: scale(1); opacity: 1; }
            }
  
            @keyframes fadeOut {
                0% { opacity: 1; }
                100% { opacity: 0; }
            }
  
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        </style>
        ";
      } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
      }
    }
  
  
  ?>

<!DOCTYPE html>
<head>
<title>Electronic Waste System|| Update Employee  </title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include_once('includes/header.php');?>
<!--header end-->
<!--sidebar start-->
<?php include_once('includes/sidebar.php');?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
          
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Employee
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                 
   
                                <form class="cmxform form-horizontal " method="post" action="">
                                    <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblemployee where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                    
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Employee ID</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="empid" name="empid" type="text" readonly="true" value="<?php  echo $row['EmployeeID'];?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="name" name="name" type="text" required="true" value="<?php  echo $row['Name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="email" name="email" type="email" required="true" value="<?php  echo $row['Email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Contact Number</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="contactnum" name="contactnum" type="text" required="true" value="<?php  echo $row['ContactNumber'];?>" maxlength="10" pattern="[0-9]+">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                          
                                            <textarea class=" form-control" required="true" rows="4" cols="4" name="address"><?php  echo $row['Address'];?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Status</label>

                                        <div class="col-lg-6" style="padding-top: 10px;">
                                            <?php if($row['Status']=='Active'){?>
                                            <input  id="status" name="status" type="radio" required="true" value="Active" checked>Active
                                             <input id="status" name="status" type="radio" required="true" value="Inactive">Inactive
                                             <?php } else { ?>
                                                <input  id="status" name="status" type="radio" required="true" value="Active">Active
                                             <input id="status" name="status" type="radio" required="true" value="Inactive" checked>Inactive
                                         <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                          <p style="text-align: center;"> <button class="btn btn-primary" type="submit" name="submit">Update</button></p>
                                           
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>

</section>
 <!-- footer -->
		  <?php include_once('includes/footer.php');?>    
  <!-- / footer -->
</section>

</section>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php }  ?>