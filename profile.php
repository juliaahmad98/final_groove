<?php
session_start();

?>

  
<?php 


$userid = $_SESSION["user_id"];


include ("connect.php");
include ("header.php");


$res = mysqli_query($conn,"select username, first_name,last_name, address from users where user_id='$userid'");
$row = mysqli_fetch_array($res);
$username = $row["username"];
$first_name = $row["first_name"];
$last_name = $row["last_name"];
$location = $row["address"];
?>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="profile.css">
<body>
    <div class="container">
  		<div class="profile-box">
  			<img src="menu.png" class="menu-icon">
  			<img src="setting.png" class="setting-icon">
  			<img src="profile-pic.png" class="profile-icon">
        	
                <h2><?=$username?></h2>
                <p><?php echo $first_name.' '.$last_name; ?> | Based In <?=$location?></p>
               <div class="social-media">
               	<img src="instagram.png">
               	<img src="message.png">
               

            </div>
            <button type="button">Edit</button>
            <div class="profile-bottom">
            	<p>My Garden Of Groove</p>
            	<img src="arrow.png">

            </div>
                
        </div>
    </div>



</body>
<html>