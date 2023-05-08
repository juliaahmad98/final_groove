
<?php

include ("header.php");

if(!empty($_POST))

{
    include("connect.php");
    
    $trackname = sanitizeString($_POST["track_name"]);
    $artist = sanitizeString($_POST["artist_id"]);
    $duration = sanitizeString($_POST["duration"]);
    $year = sanitizeString($_POST["year"]);
    $label = sanitizeString($_POST["label_id"]);
    $genre = sanitizeString($_POST["genre_id"]);
    $bpm = sanitizeString($_POST["bpm"]);



   

    $res = mysqli_query($conn,"insert into track(track_name,artist_id,duration, year, label_id, genre_id, bpm) 
    values('$trackname','$artist','$duration','$year','$label','$genre', '$bpm')");
}


function sanitizeString($var)
{
  $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}


?>

            <form action="track.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name">
                    
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="track_name" placeholder="Track Name" class="form-control" required value="" id="">
                        </div>

                        <div class="col-auto">
        
           <select name="artist_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>

<?php

    $res = mysqli_query($conn,"select artist_id, concat(first_name,' ' ,last_name) as 'name' from artist");
    while($row = mysqli_fetch_array($res))
    {

?>
    <option value="<?=$row['artist_id']?>"><?=$row['name']?></option>

<?php

    }


?>

</select>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="duration" placeholder="Duration" class="form-control" required value="" id="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="year" placeholder="Year" class="form-control" required value="" id="">
                        </div>

                        <div class="col-auto">
        
           <select name="label_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>

<?php

    $res = mysqli_query($conn,"select label_id, name from record_label");
    while($row = mysqli_fetch_array($res))
    {

?>
    <option value="<?=$row['label_id']?>"><?=$row['name']?></option>

<?php

    }


?>

</select>
        </div>
        <div class="col-auto">
        
            <select name="genre_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>

<?php

    $res = mysqli_query($conn,"select genre_id, genre_type from genre");
    while($row = mysqli_fetch_array($res))
    {

?>
    <option value="<?=$row['genre_id']?>"><?=$row['genre_type']?></option>

<?php

    }


?>

</select>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="bpm" placeholder="BPM" class="form-control" required value="" id="">
                        </div>
        
                        <div  style="float:right">
                            <button type="submit" class="btn btn-primary ">Save</button>
                </div>
                    </div>


                </form>






<?php

    include ("footer.php");


?>



