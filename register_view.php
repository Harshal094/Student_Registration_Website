<!DOCTYPE html>
<html>
    <head>
        <title>REGISTER VIEW</title>
        
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
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #105469;
  font-family: 'Open Sans', sans-serif;
}
table {
  background: #012B39;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
  
}
th {
  border-bottom: 1px solid #364043;
  color: #E2B842;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
td {
  color: #fff;
  font-weight: 400;
  padding: 0.85em 1em;
}

tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #014055;
}

        </style>
    </head>
    <body>
      
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="studregister.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registration Table</a>
    <a href="change_pass.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change PassWord</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LogOut</a>
  </div>
</div>

        <?php
        include('config.php');

        $view= mysqli_query($connect,"select * from register order by id desc") 
        or die(mysqli_error($connect));
        $total_records=mysqli_num_rows($view);
        echo $total_records;

        ?>
        
                <table class="container">
                    <thead>
                        <tr>
                        <th><h3>ID</h3></th>
                            <th><h3>Name</h3></th>
                            <th><h3>Phone</h3></th>
                            <th><h3>Email</h3></th>
                            <th><h3>Address</h3></th>
                            <th><h3>City</h3></th>
                            <th><h3>Gender</h3></th>
                            <th><h3>College</h3></th>
                            <th><h3>User ID</h3></th>
                            <th><h3>PassWord</h3></th>
                            <th><h3>Image</h3></th>
                            <th><h3>Action</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    
                        $counter=0;
                        while ($row= mysqli_fetch_array($view))
                        {
                            extract($row);
                        ?>
                        
                        <tr>
                            <td><?php echo ++$counter; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['addr']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['clg']; ?></td>
                            <td><?php echo $row['userid']; ?></td>
                            <td><?php echo $row['pass']; ?></td>
                            <td><img src="img/<?php echo $row['photo']; ?>" height="150" width="150"> </td>
                            
                            <td><a href="register_update.php?stud_id=<?php echo $id; ?>" ><i class="glyphicon glyphicon-edit "  title="Update Entry"> </i></a>

                            <a href="register_delete.php?stud_id=<?php echo $id; ?>" 
                            ><i class="glyphicon glyphicon-trash " title="Delete Entry"> </i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
          </table>
        
    </body>
</html>