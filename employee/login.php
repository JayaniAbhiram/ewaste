<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) {
    $empid = $_POST['empid'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "SELECT ID, EmployeeID FROM tblemployee WHERE EmployeeID='$empid' AND Password='$password'");
    $ret = mysqli_fetch_array($query);
    if($ret > 0) {
        $_SESSION['ewseid'] = $ret['ID'];
        $_SESSION['empid'] = $ret['EmployeeID'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Electronic Waste System | Employee Login</title>

    <script type="application/x-javascript">
        addEventListener("load", function () {
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

        input[type="text"],
        input[type="password"] {
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

        input[type="text"]:focus,
        input[type="password"]:focus {
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

        hr {
            border: 0;
            height: 2px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
        }
    </style>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Employee | Sign In Now</h2>
            <form action="#" method="post" name="login">
                <input type="text" class="ggg" name="empid" placeholder="Employee ID" required="true">
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

    <script src="../admin/js/bootstrap.js"></script>
    <script src="../admin/js/jquery2.0.3.min.js"></script>
</body>

</html>
