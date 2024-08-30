<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ewmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_GET['del']))
{
  $rid=$_GET['del'];
  $query=mysqli_query($con,"delete from tblcategory  where ID='$rid'");
  echo "
    <div id='popup' class='popup'>
        <div class='popup-content'>
            <div class='popup-header'>
                <span class='close'>&times;</span>
                
            </div>
            <div class='popup-body'>
                <p>Data Deleted</p>
            </div>
            <div class='popup-footer'>
                <button id='popup-ok' class='popup-button'>OK</button>
            </div>
        </div>
    </div>
    <script>
        // Show the popup with bounce animation
        var popup = document.getElementById('popup');
        var popupContent = document.querySelector('.popup-content');
        var popupOk = document.getElementById('popup-ok');
    
        popup.style.display = 'block';
        setTimeout(function() {
            popupContent.classList.add('bounce-in');
        }, 10); // Small delay to ensure the popup is visible before animation starts
    
        // Close the popup when the 'x' is clicked
        document.querySelector('.close').onclick = function() {
            closePopup();
        };
    
        // Close the popup when the OK button is clicked
        popupOk.onclick = function() {
            closePopup();
        };
    
        // Function to close the popup
        function closePopup() {
            popupContent.classList.remove('bounce-in');
            popupContent.classList.add('fade-out');
            setTimeout(function() {
                popup.style.display = 'none';
                // Redirect to the desired page after hiding the popup (if needed)
                // window.location.href = 'desired-page.php';
            }, 800); // Match the duration of the fade-out animation
        }
    
        // Close the popup automatically after 3 seconds
        setTimeout(closePopup, 3000);
    </script>
    <style>
        /* Popup container */
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

        /* Popup content */
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

        /* Bounce-in animation */
        .bounce-in {
            transform: scale(1);
            opacity: 1;
            animation: bounceIn 1s ease-out;
        }

        /* Fade-out animation */
        .fade-out {
            animation: fadeOut 0.8s ease-out;
            transform: scale(0.5);
            opacity: 0;
        }

        /* Popup header */
        .popup-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .popup-header h2 {
            margin: 0;
            color: #444;
        }

        /* Popup body */
        .popup-body {
            margin: 20px 0;
        }

        /* Popup footer */
        .popup-footer {
            margin-top: 20px;
        }

        /* Popup button */
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

        /* Close button */
        .close {
            font-size: 24px;
            font-weight: bold;
            color: #888;
            cursor: pointer;
        }

        .close:hover {
            color: #444;
        }

        /* Animations */
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

}

?>



<!DOCTYPE html>
<head>
<title>Electronic Waste System|| Manage Category </title>
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
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Manage Category
    </div>
    <div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th data-breakpoints="xs">S.NO</th>
            <th>Category Name</th>
            <th>Creation Date</th>
            <th data-breakpoints="xs">Action</th>
           
           
          </tr>
        </thead>
        <?php
$ret=mysqli_query($con,"select * from  tblcategory");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
        <tbody>
          <tr data-expanded="true">
            <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['CategoryName'];?></td>
                  <td><?php  echo $row['CreationDate'];?></td>
                  <td><a href="edit-category.php?editid=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a> 
                    <a href="manage-category.php?del=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
 </tbody>
            </table>
            
            
          
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		 <?php include_once('includes/footer.php');?>  
  <!-- / footer -->
</section>

<!--main content end-->
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