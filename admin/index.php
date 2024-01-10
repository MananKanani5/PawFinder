<?php
   include("connection.php");
   session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.php");
      } else {
         $error = "Your Username or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../images/logos/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <div id="main">
        <div class="login-bg">
        <div id = "frm" class="form">  
            <img src="../images/logos/PawFinder Logo_black_transparent.png" alt="logo" width="60%" style="margin-bottom:20px">
            <form action = "" method = "post">  
                    <input type = "text" id ="user" name  = "username" placeholder="Username" />  
                    <input type = "password" id ="pass" name  = "password" placeholder="Password"  />
                    <i class="ri-eye-line" id="togglePassword" style="z-index: 9999; position: absolute; right: 40px; bottom: 148px; cursor:url(../paw-link-31.svg),auto !important;"></i>
                    <input type =  "submit" id = "btn" value = "Login" class="btn-primary"  />  
                    <p style="color:#dd0000; text-align:center"><?php echo $error ?></p>
                </form>  
            <a href="../index.php" class="back-to-home"><p>Go to Home Page</p></a>
        </div>
        <img src="../images/login-bg-2.png" alt="cat-bg" class="login-bg-img">  
    </div>
    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#pass');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            $("#togglePassword").click(function(){
                $(".ri-eye-line").toggleClass("ri-eye-close-line");
            });

            $("#button-close").click(function(){
                $(".ri-eye-close-line").toggleClass("ri-eye-line");
            });
            // this.classList.toggle('ri-eye-close-line');
        });
    </script>

    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
    <script src="./scripts/script.js"></script>
</body>
</html>