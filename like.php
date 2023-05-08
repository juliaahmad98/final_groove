<?php 

session_start();

include("connect.php");
$user = $_SESSION['user_id'];

$track = sanitizeString($_POST["like"]);


   	$res = mysqli_query($conn,"select * from likes where user_id='$user' AND track_id='$track'");
    $num = mysqli_num_rows($res);
    $res= mysqli_query($conn, "insert into likes (user_id, track_id)");

    if($num >0)
    {
        echo "<script>alert('Track already liked')</script>";
    }
    else
    {
       $res = mysqli_query($conn,"insert into likes(user_id,track_id) 
    	values('$user','$track')");
		$res = mysqli_query($conn, "select * from likes WHERE user_id=".$user." AND track_id=".$track);
		$row = mysqli_fetch_array($res);
	echo $row[0];
 
    }






function sanitizeString($var)
{
  $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}


?>

