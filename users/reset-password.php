<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit'])) {
    $contactno = $_SESSION['contactno'];
    $email = $_SESSION['email'];
    $password = md5($_POST['newpassword']);

    $query = mysqli_query($con, "UPDATE tbluser SET Password='$password' WHERE Email='$email' AND MobileNumber='$contactno'");
    if($query) {
        echo "<script>alert('Password successfully changed');</script>";
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Electronic Waste System | Reset Password</title>

<script type="application/x-javascript"> 
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
    }, false); 
    function hideURLbar(){ 
        window.scrollTo(0, 1); 
    } 
</script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../admin/css/bootstrap.min.css">

<!-- Custom CSS -->
<link href="../admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="../admin/css/style-responsive.css" rel="stylesheet"/>

<!-- Font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="../admin/css/font.css" type="text/css"/>
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

<script src="../admin/js/jquery2.0.3.min.js"></script>
<script src="../admin/js/bootstrap.js"></script>
<script src="../admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../admin/js/scripts.js"></script>
<script src="../admin/js/jquery.slimscroll.js"></script>
<script src="../admin/js/jquery.nicescroll.js"></script>
<script src="../admin/js/jquery.scrollTo.js"></script>

<script type="text/javascript">
function checkpass() {
    if (document.changepassword.newpassword.value != document.changepassword.confirmpassword.value) {
        alert('New Password and Confirm Password fields do not match');
        document.changepassword.confirmpassword.focus();
        return false;
    }
    return true;
}
</script>

</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>User | Recover Password</h2>
        <form action="" method="post" name="changepassword" onsubmit="return checkpass();">
            <input class="ggg" type="password" required="true" name="newpassword" placeholder="New Password">
            <input class="ggg" type="password" name="confirmpassword" required="true" placeholder="Confirm Your Password">
            <div class="clearfix"></div>
            <input type="submit" value="Reset" name="submit">
        </form>
        <p><a href="login.php">Sign In</a></p>
        <p class="mb-1">
            <i class="fa fa-home" aria-hidden="true"></i><a href="../index.php">Home Page</a>
        </p>
    </div>
</div>
</body>
</html>
