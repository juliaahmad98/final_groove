<?php

    include("connect.php");
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    
    $res = mysqli_query($conn,"select * from users where username='$username'");
    $num = mysqli_num_rows($res);

    if($num >0)
    {
        echo "username already exists";
    }
    else
    {
       echo ""; 
    }

?>

