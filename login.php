<?php
   session_start();
   $conn=mysqli_connect("localhost","root","","finalyear");

   if(isset($_POST['login']))
   {
      $username=$_POST['username'];
      $pass=$_POST['password'];

      $sql="select username, password from admin where username='$username' and password='$pass' ";
      $result=mysqli_query($conn,$sql);

      if($result)
      {
         $_SESSION['login']=$username;
         header('location:index.php');
      }
      else{
         header('location:login.php');
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>EMS : Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="js/semantic.min.css" />

</head>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                           <h1 style="font-size:30px; color:white;">Event Management System</h1>
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="" method="post">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Username</label>
                                    <input type="text" name="username" placeholder="Admin Username" required />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Admin Password" required />
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt" name="login">Login</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>