<!DOCTYPE html>
<html>
    <head>
    <title>
            Registration Form
        </title>
        
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700');

body{
  font-family: 'Nunito', sans-serif;
}

.a{color: #E7484F}
.b{color: #F68B1D}
.c{color: #FCED00}
.d{color: #009E4F}
.e{color: #00AAC3}
.f{color:  #732982}


.container{
  margin-top: 150px;
}

.text-center {
  text-align: center;
}

.rainbow{
  background-color: #343A40;
  border-radius: 4px;  
  color: #fff;
  cursor: pointer;
  padding: 8px 16px;
  
}

.rainbow-1:hover{
   background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
   animation:slidebg 5s linear infinite;
}

.rainbow-2:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet, red);
  animation:slidebg 2s linear infinite;
}

.rainbow-3:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, red);
  animation:slidebg 2s linear infinite;
}

.rainbow-4:hover{
   background-image:     linear-gradient(
      to right, 
      #E7484F,
      #F68B1D, 
      #FCED00,
      #009E4F,
      #00AAC3,
      #732982
    );
  animation:slidebg 2s linear infinite;
}


.rainbow-5:hover{
   background-image:     linear-gradient(
      to right, 
      #E7484F,
      #E7484F 16.65%,
      #F68B1D 16.65%,
      #F68B1D 33.3%,
      #FCED00 33.3%,
      #FCED00 49.95%,
      #009E4F 49.95%,
      #009E4F 66.6%,
      #00AAC3 66.6%,
      #00AAC3 83.25%,
      #732982 83.25%,
      #732982 100%,
      #E7484F 100%
     
     
     
    );
  animation:slidebg 2s linear infinite;
}


@keyframes slidebg {
  to {
    background-position:20vw;
  }
}

.follow{
  margin-top: 40px;
}

.follow a{
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}


    </style>

        
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="jQuery-Validation-Engine-3.1.0/css/validationEngine.jquery.css" type="text/css"/>

	<link rel="stylesheet" href="jQuery-Validation-Engine-3.1.0/css/template.css" type="text/css"/>

	<script src="jQuery-Validation-Engine-3.1.0/js/jquery-3.4.1.min.js" type="text/javascript">
	</script>

	<script src="jQuery-Validation-Engine-3.1.0/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">

	</script>
	<script src="jQuery-Validation-Engine-3.1.0/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#myform").validationEngine();
		});
	</script>

    
        
    </head>

    <body>
      
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="register_view.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Registration Table</a>
    <a href="change_pass.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change PassWord</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LogOut</a>
  </div>
</div>

        <div class="container">

            <form class="well form-horizontal" method="post" name="myform" id="myform" class="form" method="POST" onsubmit=" return validateForm()">
        <fieldset>
        
        <!-- Form Name -->
        <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
        
        <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input class="form-control" name="name" placeholder="Enter Your Name "  type="text">
            </div>
          </div>
        </div>
        
        <!-- Text input-->

               
            <div class="form-group">
                <label class="col-md-4 control-label">Contact No.</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input class="form-control" type="Phone" class="validate[required,custom[phone]] text-input" name="no" pattern="[6789][0-9]{9}" placeholder="Enter Your Phone No " >
                  </div>
                </div>
              </div>
              
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control"  type="Email" class="validate[required,custom[email]]"  name="eml" placeholder="Enter Your Email ">
                  </div>
                </div>
              </div>
              
              
          
        <div class="form-group">
          <label class="col-md-4 control-label" >Address</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="add" placeholder="Enter Your Address" class="form-control"  type="text">
            </div>
          </div>
        </div>
        
          <div class="form-group"> 
          <label class="col-md-4 control-label">Select Your City - </label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select class="form-control selectpicker" class="validate[required]" name="city">
              <option value="">--select your City---</option>
              <option value="Sakri">Sakri</option>
              <option value="Dhule">Dhule</option>
              <option value="Nashik">Nashik</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Pune">Pune</option>
              <option value="Aurangabad">Aurangabad</option>
              <option value="Jalgaon">Jalgaon</option>
            </select>
          </div>
        </div>
        </div>
          
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Gender - </label> 
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> &nbsp&nbsp&nbsp
            <label><input type="radio" class="validate[required] radio" name="gen" value="Male">Male</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <label><input type="radio" class="validate[required] radio" name="gen" value="Female">Female</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Enter Your College Name</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
            <input class="form-control"  type="text" class="validate[required,custom[onlyLetterSp]] text-input" name="clg" placeholder="Enter Your College Name ">
              </div>
            </div>
          </div>


        
        <div class="form-group">
          <label class="col-md-4 control-label">Enter Your user ID </label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input class="form-control" type="text"class="validate[required,custom[onlyLetterNumber]]"   name="id" placeholder="user ID">
            </div>
          </div>
        </div>
        
        <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label" >Enter Your PassWord</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input class="form-control" type="password" class="validate[required] text-input" name="pass" placeholder="Enter Your Password">
            </div>
          </div>
        </div>
        
        <!-- Text input-->
        
        <div class="form-group">
          <label class="col-md-4 control-label" >Confirm Password</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="pass" placeholder="Confirm Password" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" >Upload Your Photo</label> 
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
            <input type="file" class="validate[required] text-input"  name="img"></p>
              </div>
            </div>
          </div>

        
        
        <!-- Text input-->
    
        <!-- Button -->
     
            <div class="container text-center">
           

            <input type="submit" name="submit"  class="rainbow rainbow-1"  value="SUBMIT">
            <input type="reset" name="submit"  class="rainbow rainbow-1"  value="RESET">

                    
    

        </fieldset>
        </form>
        </div>
            </div><!-- /.container -->
    </body>
</html>

<?php

include('config.php');
if(isset($_POST['submit']))
{
    extract($_POST);

    echo $asd = "insert into register(name, phone, email, addr, city, gender, clg, userid, pass, photo) value ('$name','$no','$eml','$add','$city','$gen','$clg','$id','$pass','$img')";

    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));

    if($asd)
    {
        echo "<script>";
        echo "window.alert('DATA INSERT SUCCESSFULLYY.....!!');";
        echo 'window.location.href= "studregister.php";';
        echo "</script>";
    }
    else
    {
        echo "<script>;";
        echo "window.alert('DATA ERRROR...!!!!');";
        echo "</script>";
    }
}
?>
