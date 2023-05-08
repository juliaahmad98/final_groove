<?php

    include("connect.php");
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    
    $res = mysqli_query($conn,"select * from users where email='$email'");
    $num = mysqli_num_rows($res);

    if($num >0)
    {
        echo "email already exists";
    }
    else
    {
       echo ""; 
    }

?>