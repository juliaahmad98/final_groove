<?php

session_start();

if(!empty($_GET["log"]))
{
    session_destroy();
    $_SESSION[""]=NULL;
    header("Location:test_home.php");

}


if(!empty($_POST))

{
    // Using the "md5" function to call for -> Password Hashing
    include "connect.php";
    $username = sanitizeString($_POST["username"]);
    $password = md5(sanitizeString($_POST["password"]));
    $res = mysqli_query($conn,"select user_id,first_name,last_name from users where username='$username' and password='$password'");
    $num = mysqli_num_rows($res);

    if($num > 0)
    {
        $row = mysqli_fetch_array($res);
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["username"]  = $row["first_name"].' '.$row["last_name"];
        echo "<script>window.location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Login Failed')</script>";
    }
}
function sanitizeString($var)
{
  $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}
?>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <body>
        <section>
            <div class="form-box">
                <form action="login.php" method="post">
                    <h2>Let's Groove!</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input name="username" required>
                        <label for="">Username</label>


                    </div>


                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password" type="password" required>


                        <label for="">Password</label>
                    </div>


                    <div class="forget">
                        
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>
                        
                    </div>
                    <button>Log In</button>
                    <div class="register">
                        <p>Don't have an account <a href="register.php">Register</p>
                    </div>

                </form>


            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>


   
