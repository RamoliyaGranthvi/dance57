<?php

    include 'config.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST["Name"];
        $pn = $_POST['PhoneNumber'];
        $email = $_POST["Email"];
        $msg = $_POST['Message'];

        $sql = "INSERT INTO register (fullname, phone, email, message) VALUES ('$name','$pn','$email','$msg')";
        $result = mysqli_query($conn, $sql);

        if($result == "TRUE")
        { ?>
            <script>
                alert("Your Record Send Successfully");
                window.location.href='index.php';
            </script>
        <?php }
        else{
            echo "record not inserted";
        }   
        
    }

?>
