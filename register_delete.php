<?php
    include('config.php');
    if(isset($_GET['stud_id']))
    {
        $delete = mysqli_query($connect, "delete from register 
        where id='".$_GET['stud_id']."'");

        if ($delete)
        {
            echo "<script>;";
            echo "alert('Record Deleted.....!!!');";
            echo 'window.location.href="register_view.php";';
            echo "</script>;";
        }
        else
        {
            echo "<script>;";
            echo "alert('Record Errrorrr....!!!');";
            echo 'window.location.href="register_view.php";';
            echo "</script>;";
            
        }
    }
    
    ?>
