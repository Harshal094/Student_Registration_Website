<?php   
    session_start();
    session_destroy();
    echo "<script>";
        echo "window.alert('LOG-OUT SUCCEFULLYYY......!!');";
        echo 'window.location.href= "index.html";';
        echo "</script>";

?>