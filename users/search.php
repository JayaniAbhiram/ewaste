<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['ewsuid']) == 0) {
  header('location:logout.php');
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electronic Waste System | Search Listed Product Details</title>

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../admin/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="../admin/css/style.css" rel='stylesheet' type='text/css'>
    <link href="../admin/css/style-responsive.css" rel="stylesheet">

    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../admin/css/font.css" type="text/css">
    <link href="../admin/css/font-awesome.css" rel="stylesheet">

    <!-- Additional CSS for animations and colors -->
    <style>
        body {
            background: linear-gradient(135deg, #6b7c93, #2e3a59);
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .table-agile-info {
            margin: 20px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease-out;
        }

        .panel-default {
            background: rgba(0, 0, 0, 0.8);
            border: 1px solid #444;
        }

        .panel-heading {
            background: #333;
            color: #ffcc00;
            border-bottom: 1px solid #444;
        }

        .table th, .table td {
            text-align: center;
        }

        .table-bordered {
            border: 1px solid #444;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #444;
        }

        .btn-primary {
            background: #ffcc00;
            border: none;
            color: #333;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background: #e6b800;
            transform: scale(1.05);
        }

        .form-control {
            background: #333;
            border: 1px solid #444;
            color: #fff;
            transition: background 0.3s, border-color 0.3s;
        }

        .form-control:focus {
            background: #444;
            border-color: #ffcc00;
            outline: none;
        }

        .form-group label {
            color: #fff;
        }
    </style>

    <script src="../admin/js/jquery2.0.3.min.js"></script>
    <script src="../admin/js/bootstrap.js"></script>
    <script src="../admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../admin/js/scripts.js"></script>
    <script src="../admin/js/jquery.slimscroll.js"></script>
    <script src="../admin/js/jquery.nicescroll.js"></script>
    <script src="../admin/js/jquery.scrollTo.js"></script>

    <script type="text/javascript">
        function searchFormValidation() {
            // Custom form validation logic if needed
        }
    </script>
</head>
<body>
<section id="container">
    <!--header start-->
    <?php include_once('includes/header.php'); ?>
    <!--header end-->
    <!--sidebar start-->
    <?php include_once('includes/sidebar.php'); ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <form class="cmxform form-horizontal" method="post" action="" name="search" onsubmit="return searchFormValidation()">
                        <div class="form-group">
                            <label for="searchdata" class="control-label col-lg-6">Search by Request Number / User Name / User Mobile No:</label>
                            <div class="col-lg-6">
                                <input type="text" name="searchdata" id="searchdata" class="form-control" value="" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <p style="text-align: center;">
                                    <button class="btn btn-primary" type="submit" name="search">Search</button>
                                </p>
                            </div>
                        </div>
                    </form>

                    <?php
                    if(isset($_POST['search'])) {
                        $sdata = $_POST['searchdata'];
                    ?>
                        <div class="panel-heading">
                            Result against "<?php echo htmlspecialchars($sdata, ENT_QUOTES, 'UTF-8'); ?>" keyword
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Product Id</th>
                                    <th>Product Category</th>
                                    <th>Register By</th>
                                    <th>Product Items</th>
                                    <th>Request Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $uid = $_SESSION['ewsuid'];
                            $ret = mysqli_query($con, "SELECT tblproduct.ID as pid, tblproduct.ProductId, tblproduct.Status, tblproduct.ContactPerson, tblproduct.CPMobNumber, tblproduct.CreationDate, tblproduct.ProductName, tblcategory.CategoryName, tbluser.FullName, tbluser.MobileNumber FROM tblproduct JOIN tbluser ON tblproduct.UserID=tbluser.ID JOIN tblcategory ON tblproduct.CategoryID=tblcategory.ID WHERE tblproduct.UserID='$uid' AND (tblproduct.ProductId LIKE '%$sdata%' OR tbluser.FullName LIKE '%$sdata%' OR tbluser.MobileNumber LIKE '%$sdata%')");
                            $cnt = 1;
                            $count = mysqli_num_rows($ret);
                            if ($count > 0) {
                                while ($row = mysqli_fetch_array($ret)) {
                            ?>
                                    <tr>
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo htmlspecialchars($row['ProductId'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($row['CategoryName'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($row['FullName'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($row['ProductName'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($row['CreationDate'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo ($row['Status'] == "") ? "Not Confirmed Yet" : htmlspecialchars($row['Status'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><a href="product-details.php?pid=<?php echo $row['pid']; ?>&productid=<?php echo $row['ProductId']; ?>" class="btn btn-primary">View</a></td>
                                    </tr>
                            <?php 
                                    $cnt++;
                                }
                            } else {
                            ?>
                                <tr>
                                    <td colspan="8" style="color:red">No Record Found</td>
                                </tr>
                            <?php 
                            }
                            ?>
                        </table>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- footer -->
        <?php include_once('includes/footer.php'); ?>  
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
</body>
</html>

<?php } ?>
