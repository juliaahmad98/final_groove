<?php
// upload.php 
include ('connect.php');
require_once ('header.php');


if(!empty($_POST)) {



$trackname = $_POST["trackname"];
$artist = $_POST["artist"];
$genre = $_POST["genre"];
$label = $_POST["label"];
$bpm = $_POST["bpm"];
$duration = $_POST["duration"];
$year = $_POST["year"];


$image=$_FILES['image']['name']; 
$imageArr=explode('.',$image); //first index is file name and second index is file type
$rand=rand(10000,99999);
$newImageName=$imageArr[0].$rand.'.'.$imageArr[1];
$uploadPath="uploads/".$newImageName;
$isUploaded=move_uploaded_file($_FILES["image"]["tmp_name"],$uploadPath);
$image=$uploadPath;

mysqli_query($conn,"insert into track (track_name,artist_id,duration,year,label_id,genre_id,bpm,image) values('$trackname','$artist','$duration','$year','$label','$genre','$bpm','$image')");
header("Location:index.php");
}
?>
<link rel="stylesheet" type="text/css" href="upload.css">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">


<section id="upload_container"> 
    <div class="form-box">
    <form method='post' action='uploads.php' enctype='multipart/form-data'> 
        <table cellspacing="20" cellpadding="20">
            <tr>
                   
                        <h2>Create Your Groove Garden!</h2> </div>
                        
                     <div class="inputbox">  
                    <td><input type='text' name="trackname" id="trackname"  placeholder="Track Name" required></td>
            </tr>
      
            <tr>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="artist">
                            <option selected>Artist</option>

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
                </td>
            </tr>               
            <tr>
                <td>                   
                <select class="form-select" aria-label="Default select example" name="genre">
                    <option selected>Genre</option>

                    <?php

                        $res = mysqli_query($conn,"select genre_id, genre_type from genre");
                        while($row = mysqli_fetch_array($res))
                        {

                    ?>
                        <option value="<?=$row['genre_id']?>"><?=$row['genre_type']?></option>

                    <?php

                        }


                    ?>


                </td>
            </tr>


            <tr>
                <td>                   
                <select class="form-select" aria-label="Default select example" name="label">
                    <option selected>Record Label</option>

                    <?php

                        $res = mysqli_query($conn,"select label_id, name from record_label");
                        while($row = mysqli_fetch_array($res))
                        {

                    ?>
                        <option value="<?=$row['label_id']?>"><?=$row['name']?></option>

                    <?php

                        }


                    ?>


                </td>
            </tr>
            <tr>
                <td><input type='number' name="bpm" id="bpm" placeholder="BPM" required></td>
            </tr>
            <tr>
                <td><input type='number' name="year" id="year" placeholder="YEAR" required></td>
            </tr>
            <tr>
                <td>
                    <input type='text' name="duration" id="duration" required placeholder="Duration" required>
                </td>
            </tr>
            <tr>
                <td>
                    <br><h2>Cover Art</h2></br><p>Upload the track's cover art:</p><br><input type='file' name='image' id='file' size='10' >
                </td>
            </tr>
            <tr>
                <td>
                    <input type='submit' value='Upload'>
                </td>
            </tr>
    </table>    
</div>
</form> 
</section>


</body>
</html>