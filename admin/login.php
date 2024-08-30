<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) {
    $adminuser = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "SELECT ID FROM tbladmin WHERE UserName='$adminuser' AND Password='$password'");
    $ret = mysqli_fetch_array($query);
    if($ret > 0) {
        $_SESSION['ewmsaid'] = $ret['ID'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Electronic Waste System | Login Page</title>
    <script type="application/x-javascript"> 
        addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); 
        }, false); 
        function hideURLbar() { 
            window.scrollTo(0,1); 
        } 
    </script>
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
    <!-- Additional CSS for animations and colors -->
    <style>
        body {
            background: linear-gradient(135deg, #6b7c93, #2e3a59);
            color: #fff;
            font-family: 'Roboto', sans-serif;
            overflow: hidden;
        }

        .log-w3 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
        }

        .w3layouts-main {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #ffcc00;
            margin-bottom: 20px;
            font-size: 24px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #333;
            color: #fff;
            font-size: 16px;
            transition: background 0.3s, border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            background: #444;
            border-color: #ffcc00;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            border: none;
            border-radius: 5px;
            background: #ffcc00;
            color: #333;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background: #e6b800;
            transform: scale(1.05);
        }

        a {
            color: #ffcc00;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #e6b800;
        }

        .mb-1 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Admin | Sign In Now</h2>
            <form action="#" method="post" name="login">
                <input type="text" class="ggg" name="username" placeholder="User Name" required="true">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="true">
                <a href="forgot-password.php">Forgot Password?</a>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
            <p class="mb-1">
                <i class="fa fa-home" aria-hidden="true"><a href="../index.php">Home Page</a></i>
            </p>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]>
        <script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script>
    <![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>
</html>
