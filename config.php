<?php

$connect = mysqli_connect("localhost","root","","stud_form")
or die(mysqli_error($connect));

if($connect)
{
    echo "DataBase Has Connected Successfully............!";
}
else{
    echo "ERRRORR................!!!!!!!!!!!!!!";
}

?>