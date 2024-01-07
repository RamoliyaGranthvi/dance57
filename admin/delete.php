<?php

    include 'config.php';
    if($_GET['id'])
    {
        $uid = $_GET['id'];
        $sql = "DELETE FROM admissionform WHERE id=$uid";
        $result= mysqli_query($conn, $sql);
        if($result == TRUE)
        {
            header('location:dashboard.php');
        }
    }

?>