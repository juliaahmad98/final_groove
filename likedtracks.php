<?php 

include ("connect.php");
include ("header.php");



// get current user's ID
$user_id = 24;
$sql = "SELECT track.track_id FROM likes INNER JOIN track ON likes.track_id = track.track_id WHERE likes.user_id = $user_id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo "<div>".$row['title']."</div>";
}


mysqli_close($conn);
?>


