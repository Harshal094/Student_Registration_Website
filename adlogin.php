<?php

session_start();
if(isset($_SESSION['email']))
{
    header('location:adlogin.php');
}

include('config.php');
?>
<!DOCTYPE html>
<html>

  <head>
    <title>LOGIN PAGE</title>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      html {
        height: 100%
      }

      ::-moz-selection {
        background: #fe57a1;
        color: #fff;
        text-shadow: none;
      }

      ::selection {
        background: #fe57a1;
        color: #fff;
        text-shadow: none;
      }

      body {
    
        background: #456;
      }

      .login {
        background: #eceeee;
        border: 1px solid #42464b;
        border-radius: 6px;
        height: 270px;
        margin: 200px auto 0;
        width: 450px;
      }

      .login h1 {
        background-image: linear-gradient(top, #f1f3f3, #d4dae0);
        border-bottom: 1px solid #a6abaf;
        border-radius: 6px 6px 0 0;
        box-sizing: border-box;
        color: #727678;
        display: block;
        height: 43px;
        font: 600 14px/1 'Open Sans', sans-serif;
        padding-top: 14px;
        margin: 0;
        text-align: center;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2), 0 1px 0 #fff;
      }

      input[type="password"],
      input[type="text"] {
        background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
        border: 1px solid #a1a3a3;
        border-radius: 4px;
        box-shadow: 0 1px #fff;
        box-sizing: border-box;
        color: #696969;
        height: 39px;
        margin: 31px 0 0 29px;
        padding-left: 20px;
        transition: box-shadow 0.3s;
        font-size: 25px;
        width: 400px;
      }

      input[type="password"]:focus,
      input[type="text"]:focus {
        box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
        outline: 0;
      }


      input[type="submit"] {
        width: 150px;
        height: 35px;
        display: block;
        font-family: Arial, "Helvetica", sans-serif;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        text-shadow: 1px 1px 0px #37a69b;
        padding-top: 6px;
        margin: 29px 0 0 29px;
        position: relative;
        cursor: pointer;
        border: none;
        background-color: #37a69b;
        background-image: linear-gradient(top, #3db0a6, #3111);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
      }

      .shadow {
        background: #000;
        border-radius: 12px 12px 4px 4px;
        box-shadow: 0 0 20px 10px #000;
        height: 12px;
        margin: 30px auto;
        opacity: 0.2;
        width: 270px;
      }

      input[type="submit"]:active {
        top: 3px;
        box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
      }
    </style>
  </head>

  <body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
  
  </div>
</div>

    <form method="post">
    <div class="login">
      <input type="text" placeholder="Email" id="username" name="email">
      <input type="password" placeholder="Password" id="password" name="password">
      <input type="submit" value="Login" name="login">
    </div>
    <div class="shadow"></div>
  </form>
  </body>

</html>
<?php

if(isset($_POST['login']))
{
    extract($_POST);

    $email= mysqli_real_escape_string($connect,$_POST['email']);

    $password= mysqli_real_escape_string($connect,$_POST['password']);

    $log= mysqli_query($connect,"select * from admin where Email='$email' and password='$password'")
    or die(mysqli_error($connect));

    if(mysqli_num_rows($log)>0)
    {
        $fetch= mysqli_fetch_array($log);

        $_SESSION['id']=$fetch['id'];
        $_SESSION['email']=$fetch['Email'];
        $_SESSION['password']=$fetch['password'];

        echo "<script>";
        echo "alert('login successful....');";
        echo 'window.location.href="studregister.php";';
        echo "</script>";
        
    }
    else
    {
        echo "<script>";
        echo "alert('login failed....!!!');";
        echo "</script>";
    }
}

?>