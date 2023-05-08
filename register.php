<?php
session_start();



if(!empty($_POST))
{
    include("connect.php");
    
    $username = sanitizeString($_POST["username"]);
    $password = md5(sanitizeString($_POST["password"]));
    $firstname = sanitizeString($_POST["first_name"]);
    $lastname = sanitizeString($_POST["last_name"]);
    $email = sanitizeString($_POST["email"]);
    $address = sanitizeString($_POST["address"]);


    $res = mysqli_query($conn,"insert into users(username,password,first_name,last_name,email,address) 
    values('$username','$password','$firstname','$lastname','$email','$address')");
    $userid = mysqli_insert_id($conn);
    $_SESSION["userid"] =  $userid;
    $_SESSION["username"] = $firstname.' '.$lastname;
    echo "<script>window.location.href='index.php';</script>";
}

function sanitizeString($var)
{
  $var = stripslashes($var);
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}


?>
<style>
        .passwordInput{
           
            text-align :center;
        }

        .displayBadge{
         
            display: none; 
            text-align :center;
        }
    </style>
    
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>


<section data-bs-version="5.1" class="form5 cid-tmJ4z4T7uE" id="form5-1v" style="padding:100px;">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="display-5 text-primary text-uppercase fw-bold text-center">
                <strong>Register to Groove with us!</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="register.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="m6Zx9gVE0W1K6iGatbgT0F0zU9alnDOMslHoeThINqGg2wGYRuRT/g43uwARwP+E2ri39F8wT8UxvrG14cx3Y15/bqjtusr2e+SBgpGnLE9Ym3b4gci4GKpZwW4FCepo">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! Try Again!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="username" onkeyup="checkusername(this.value)"  placeholder="User Name" data-form-field="username" class="form-control" required value="" id="name-form7-19">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name" id="error" style="color:red">
                           
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control" required value="" id="password-form7-19">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="password">
                            <span id="StrengthDisp" class="badge displayBadge">Weak</span>
                          </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="first_name"  placeholder="First Name" data-form-field="firstname" class="form-control" required value="" id="firstname-form7-19">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="last_name" placeholder="Last Name" data-form-field="lastname" class="form-control" required value="" id="lastname-form7-19">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" onkeyup="checkemail(this.value)"  placeholder="Email Address" data-form-field="email" class="form-control" required value="" id="email-form7-19">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name" id="error2" style="color:red">
                           
                           </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="address"  placeholder="Location" data-form-field="address" class="form-control" required value="" id="address-form7-19">
                        </div>
        
                        <div  style="float:right">
                            <button type="submit" class="btn btn-primary ">Register</button>
                </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>

<script>
  
    // timeout before a callback is called

    let timeout;

    // traversing the DOM and getting the input and span using their IDs

    let password = document.getElementById('password-form7-19')
    let strengthBadge = document.getElementById('StrengthDisp')

    // The strong and weak password Regex pattern checker

    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
    let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')
    
    function StrengthChecker(PasswordParameter){
        // We then change the badge's color and text based on the password strength

        if(strongPassword.test(PasswordParameter)) {
            strengthBadge.style.backgroundColor = "green"
            strengthBadge.textContent = 'Strong Password'
            $("#reg").attr("disabled", false);
        } else if(mediumPassword.test(PasswordParameter)){
            strengthBadge.style.backgroundColor = 'blue'
            strengthBadge.textContent = 'Medium Password'
            $("#reg").attr("disabled", false);
        } else{
            strengthBadge.style.backgroundColor = 'red'
            strengthBadge.textContent = 'Weak Password...'
            $("#reg").attr("disabled", true);
        }
    }

    // input event listener -> user types to the  password input 

    password.addEventListener("input", () => {

        //The badge is hidden by default, so we show it

        strengthBadge.style.display= 'block'
        clearTimeout(timeout);

        //Call the StrengChecker function as a callback then pass the typed password to it

        timeout = setTimeout(() => StrengthChecker(password.value), 500);

        //Incase a user clears the text, the badge is hidden again

        if(password.value.length !== 0){
            strengthBadge.style.display != 'block'
        } else{
            strengthBadge.style.display = 'none'
        }
    });

function checkusername (val)
{
  

    $.ajax({
                    url:'checkusername.php',
                    method:'POST',
                    data:{
                        username:val,
                        
                    },
                   success:function(data){
                      $("#error").html(data);
                      if(data != "")
                        $("#reg").attr("disabled", true);
                      else
                      $("#reg").attr("disabled", false);
                   }
                });
}


function checkemail (val)
{
  

    $.ajax({
                    url:'checkemail.php',
                    method:'POST',
                    data:{
                        email:val,
                        
                    },
                   success:function(data){
                      $("#error2").html(data);
                      if(data != "")
                        $("#reg").attr("disabled", true);
                      else
                      $("#reg").attr("disabled", false);
                   }
                });
}
</script>


