
<?php

include ("header.php");

?>



 <script src="js/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

<div class="chart-top">
        
<h2>Garden of Groove</h2>

<?php
include("connect.php");
$res = mysqli_query($conn,"select track_id,image,track_name,duration,year,concat(first_name,' ',last_name) as 'artist' from track inner join artist on track.artist_id =artist.artist_id ");
while($row = mysqli_fetch_array($res))
{
?>
  <div class="list">
          <div class="item">
            <img src="<?=$row["image"]?>"/>
            <div class="play">
              <span class="fa fa-play"></span>
          </div>
            <div class="like" onclick="like(<?=$row['track_id']?>)">
                <span id="l1" class= "fa fa-heart"></span>
            </div>
            <h4><?=$row["track_name"]?></h4>
            <h4><?=$row["artist"]?></h4>
            <p><?=$row["duration"]?> | <?=$row["year"]?></p>
  </div>

<?php
}
?>




<script>

    function like (val)
{
  

    $.ajax({
                    url:'like.php',
                    method:'POST',
                    data:{
                        like:val,
                        
                    },
                   success:function(data){
                    $("#l1").html(data);
                   }
                });
}



</script>
<?php 
include ("footer.php");

?>
