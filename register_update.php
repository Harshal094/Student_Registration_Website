<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATION FORM</title>
        
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="studregi.css" rel="stylesheet";
        
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>JQuery Validation Engine</title>
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

    <body style=" background-color: rgba(97, 145, 173, 0.842);">
    
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

    <?php
    include('config.php');
    if($_GET['stud_id'])
    {
        $view1= mysqli_query($connect,"select * from register where id='".$_GET['stud_id']."'") or die(mysqli_error($connect));

        $row= mysqli_fetch_array($view1);
    }
?>

        <center>
            <h2 style="font-family: cursive;"> STUDENT REGISTRATION FORM</h2>
        </center>
       
          
            <form name="myform" id="myform" class="form" method="POST" onsubmit=" return validateForm()">
                <div>
                    
                <p>Name - 
                <input type="text" class="validate[required,custom[onlyLetterSp]] text-input" name="name" value="<?php echo $row['name'];?>" placeholder="Enter Your Name "></p>

                <p>Phone No - 
                <input type="Phone" class="validate[required,custom[phone]] text-input" name="no" pattern="[6789][0-9]{9}" placeholder="Enter Your Phone No " value="<?php echo $row['phone'];?>"></p>

                <p>Email - 
                <input type="Email" class="validate[required,custom[email]]"  name="eml" placeholder="Enter Your Email "value="<?php echo $row['email'];?>" ></p>

                <p>Addresss - 
                <textarea name="add"class="validate[required] text-input"  placeholder="Enter Your Address"><?php echo $row['addr'];?></textarea></p>

                <p>Select Your City - 
                <select class="validate[required]" name="city">
                    <option value="">--select your City---</option>

                    <option value="Sakri" <?php if($row['city']=='Sakri'){echo "selected";}?>>Sakri</option>

                    <option value="Dhule" <?php if($row['city']=='Dhule'){echo "selected";}?>>Dhule</option>

                    <option value="Nashik" <?php if($row['city']=='Nashik'){echo "selected";}?>>Nashik</option>

                    <option value="Mumbai" <?php if($row['city']=='Mumbai'){echo "selected";}?>>Mumbai</option>

                    <option value="Pune" <?php if($row['city']=='Pune'){echo "selected";}?>>Pune</option>

                    <option value="Aurangabad" <?php if($row['city']=='Aurangabad'){echo "selected";}?>>Aurangabad</option>

                    <option value="Jalgaon" <?php if($row['city']=='Jalgaon'){echo "selected";}?>>Jalgaon</option>

                </select></p>

                <p>Select Your Gender - 

                <label><input type="radio" class="validate[required] radio" name="gen" value="Male"<?php if($row['gender']=='Male'){?> checked="checked"<?php }?>>Male</label>

                <label><input type="radio" class="validate[required] radio" name="gen" value="Female" <?php if($row['gender']=='Female'){?> checked="checked"<?php }?>>Female</label>



                <p>Enter Your College Name -
                    <input type="text" class="validate[required,custom[onlyLetterSp]] text-input" name="clg" value="<?php echo $row['clg'];?>">
                </p>

                  <p>Enter Your user ID -
                <input type="text"class="validate[required,custom[onlyLetterNumber]]"   name="uid" placeholder="user ID" value="<?php echo $row['userid'];?>"></p>

                <p>Enter Your PassWord - 
                <input type="password" class="validate[required] text-input" name="pass" placeholder="Enter Your Password" value="<?php echo $row['pass'];?>"></p>

                <p>Photo - 
                <input type="file"  name="img"></p>
                <?php ($row['photo']=="")?>
                <img src="img/<?php echo $row['photo']; ?>" height="150" width="150">

            </div>
                <center>
                    <input type="submit" name="submit" value="Update">
                    <a href="register_view.php"> <input type="button" value="VIEW TABLE"> </a>
                </center>
            </form> 
    </body>
</html>

<?php
    include('config.php');
    if(isset($_POST['submit']))
    {
        extract($_POST);
        $photo= $row['photo'];
    
    
    $update = mysqli_query($connect,"update register
    set
    name='".$name."',
    phone='".$no."',
    email='".$eml."',
    addr='".$add."',
    city='".$city."',
    gender='".$gen."',
    clg='".$clg."',
    userid='".$uid."',
    pass='".$pass."',
    photo='".$img."'
    where id='".$_GET['stud_id']."'") 
    or die(mysqli_error($connect));

    if($update)
    {
        echo "<script>;";
        echo "window.alert('Data update Successfulllyyy.......!!!');";
        echo 'window.location.href="register_view.php";';
        echo "</script>";
    }
    else
    {
        echo "<script>;";
        echo "window.alert('Data Errrorr............!!!!!!!!!!!!');";
        echo 'window.location.href="register_update.php";';
        echo "</script>";
    }

}
?>


