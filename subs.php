<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $em = $_POST["email"];

        $sql = "INSERT INTO subscriptionnow (emailaddress) VALUES ('$em')";
        $result = mysqli_query($conn, $sql);

        if($result == "TRUE")
        { ?>
            <script>
                alert("Subscribed Successfully");
                window.location.href='index.php';
            </script>
        <?php }
        else{
            echo "record not inserted";
        }
        
    }

?>