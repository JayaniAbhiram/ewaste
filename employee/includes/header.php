<?php
//error_reporting(0);
?>
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo" style="font-size:20px;">
E-waste Mangement System
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
              <!-- inbox dropdown start-->
                <?php
   $eid=$_SESSION['ewseid'];     
     $empid=$_SESSION['empid'];
$ret1=mysqli_query($con,"Select tblproduct.ID as pid,tblproduct.*,tbluser.FullName from  tblproduct join tbluser  on tbluser.ID=tblproduct.UserID where tblproduct.AssignTo='$empid' and tblproduct.Status='Assigned'");
$num=mysqli_num_rows($ret1);

?>  


        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php echo $num;?></span>
            </a>
 

            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You received <?php echo $num;?> New Request</p>
                </li>
<?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
?>
    
                <li>
<span class="subject">
<span class="from"><a class="dropdown-item" href="product-details.php?pid=<?php echo $result['pid'];?>&&productid=<?php echo $result['ProductId'];?>">New Request Received from <?php echo $result['FullName'];?> (<?php echo $result['ProductId'];?>)</a></span>
</span>
                </li>
<?php } }  else {?>
  <li>  No New Request Received</li>
        <?php } ?>

                <li>
                    <a href="all-assigned-request.php">See all Request</a>
                </li>
            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"style="border-radius:2px;">
                <?php
$eid=$_SESSION['ewseid'];
$ret=mysqli_query($con,"select Name from  tblemployee where ID='$eid'");
$row=mysqli_fetch_array($ret);
$name=$row['Name'];

?>
                <img alt="" src="images/2.png">
                <span class="username" style="font-size:20px;">Welcome Back: <?php echo $name; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="emp-profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="change-password.php"><i class="fa fa-cog"></i> Change Password</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end--> 
</div>
</header>