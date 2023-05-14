<?php session_start();  ?>

<!DOCTYPE html>
<html>
    <head>
      <title>CHANGE PASSWORD </title>
      
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }
 .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
  }
#signupLogo {
  max-height: 100px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
.formTitle{
  font-weight: 600;
  margin-top: 20px;
  color: #2F2D3B;
  text-align: center;
}
.inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
input:disabled {
  cursor: not-allowed;
  border: solid 1px #eee;
}
.buttonWrapper {
  margin-top: 40px;
}
  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
.submitButton:disabled,
button[disabled] {
  border: 1px solid #cccccc;
  background-color: #cccccc;
  color: #666666;
}

#loader {
  position: absolute;
  z-index: 1;
  margin: -2px 0 0 10px;
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 4px solid #666666;
  width: 14px;
  height: 14px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
        </style>

    </head>
    <body>

    
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="register_view.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Registration Table</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LogOut</a>
  </div>
</div>

        <div class="mainDiv">
            <div class="cardStyle">
              <form action="" method="post" name="signupForm" id="signupForm">
                
                <img src="" id="signupLogo"/>
                
                <h2 class="formTitle">
                  Change Password
                </h2>
                    <div class="inputDiv">
                <label class="inputLabel" for="password">Email</label>
                <input type="text" name="email" required>
              </div>

              <div class="inputDiv">
                <label class="inputLabel" for="password">Old Password</label>
                <input type="password" id="password" name="old_password" required>
              </div>

              <div class="inputDiv">
                <label class="inputLabel" for="password">New Password</label>
                <input type="password" id="password" name="new_password" required>
              </div>
                
              <div class="inputDiv">
                <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirm_Password">
              </div>
              
              <div class="buttonWrapper">
                <button type="submit" id="submitButton" name="submit" class="submitButton pure-button pure-button-primary">
                  <span>Continue</span>
                  <span id="loader"></span>
                </button>
              </div>
                
            </form>
            </div>
          </div>
    </body>
</html>


<?php

include('config.php');

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $opd=$_POST['old_password'];
    $npd=$_POST['new_password'];
    $cpd=$_POST['confirm_Password'];

    $query= mysqli_query($connect,"select Email,password from admin where Email='".$email."' and password='".$opd."'");
    $num= mysqli_fetch_array($query);

    if($num>0)
    {
        $con = mysqli_query($connect,"update admin set password='$npd' where Email='".$email."'");
        
        echo "<script>";
        echo "window.alert('PASSSWORD CHANGED SUCCEFULLYYY......!!');";
        echo 'window.location.href= "index.html";';
        echo "</script>";
    }
    else{
        echo "<script>;";
        echo "window.alert('PASSWORDD DOES NOT MATCHED...!!!!!');";
        echo "</script>";

    }


    
}



?>



